<?php
/*

Copyright (c) 2007 BeVolunteer

This file is part of BW Rox.

BW Rox is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

BW Rox is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, see <http://www.gnu.org/licenses/> or 
write to the Free Software Foundation, Inc., 59 Temple Place - Suite 330, 
Boston, MA  02111-1307, USA.

*/
chdir("..") ;
require_once "lib/init.php";
require_once "layout/error.php";
require_once "layout/adminpanel.php";

function LoadingData($source = "FromFile") {

	$filename = "lib/config.php";

	$TData = array ();
	if ($source === "FromBase") {
		$str = "select syskey as SYSHCvol_key,value as SYSHCvol_value,comment as SYSHCvol_comment from hcvol_config";
		$qry = sql_query($str);
		while ($rr = mysql_fetch_object($qry)) {
			array_push($TData, $rr);
		}
	} // end of FronBase

	if ($source === "FromFile") {
		if (!($ff = fopen($filename, "r"))) {
			echo "failed to open ", $filename;
			exit (0);
		}
		$ss = fgets($ff); // skip <?php

		while (!feof($ff)) {
			$ss = fgets($ff);
			if ($ss == "?>")
				continue;
			if (ltrim(rtrim($ss)) == "")
				continue; // no
			//		echo "<font color=green>",$ss,"</font><br>\n";
			if (isset($struct))
				unset($struct);
			$struct->SYSHCvol_key = "";
			$struct->SYSHCvol_value = "";
			$struct->SYSHCvol_comment = "";

			$tt = explode("=", $ss);

			//		case the line is just a comment line
			if (strpos($ss, "//") === 0) {
				$struct->SYSHCvol_comment = substr($ss, 2);
			} else {
				if (isset ($tt[0])) {
					$struct->SYSHCvol_key = $tt[0];
				}
				if (isset ($tt[1]))
					$val = $tt[1];

				if (isset ($val)) {
					$tt = explode("//", $val);
					if (isset ($tt[0]))
						$struct->SYSHCvol_value = $tt[0];
					if (isset ($tt[1]))
						$struct->SYSHCvol_comment = $tt[1];
				}
			}
			array_push($TData, $struct);

		} // end of while not feof
	} // end of loading data from file

	return ($TData);
} // end of loading data

$RightLevel = HasRight('Pannel'); // Check the rights
if ($RightLevel < 1) {
	echo "For this you need the <b>Pannel</b> rights<br>";
	exit (0);
}

$action = GetParam("action");
$PannelScope = RightScope('Pannel');

$Message = "";
switch ($action) {
	case "DiffDB" :
		if (!HasRight('Pannel', $action)) { // Check the rights
			echo "For this you need the scope <b>" . $action . "</b> within <b>Pannel</b> rights<br>";
			exit (0);
		}
		break;
	case "SaveToDB" :
		if (!HasRight('Pannel', $action)) { // Check the rights
			echo "For this you need the scope <b>" . $action . "</b> within <b>Pannel</b> rights<br>";
			exit (0);
		}
		$ii = 0;
		$str = "truncate hcvol_config";
		sql_query($str);

		$str = "insert into hcvol_config(comment) values(concat('generated by " . $this->_session->get("Username") . " using AdminPannel ',now()))";
		while ((GetStrParam("SYSHCvol_key_" . $ii) != "") or (GetStrParam("SYSHCvol_value_" . $ii) != "") or (GetStrParam("SYSHCvol_comment_" . $ii) != "")) {
			$str = "insert into hcvol_config(syskey,value,comment) values('" . GetStrParam("SYSHCvol_key_" . $ii) . "','" . GetStrParam("SYSHCvol_value_" . $ii) . "','" . GetStrParam("SYSHCvol_comment_" . $ii) . "')";
			sql_query($str);
			$ii++;
		}

		$Message = "Storing content in Database";
		LogStr("Saving file to base", "AdminPannel");
		DisplayPannel(LoadingData("FromBase"), $Message); // call the layout
		exit (0);
		break;
	case "LoadFromDB" :
		if (!HasRight('Pannel', $action)) { // Check the rights
			echo "For this you need the scope <b>" . $action . "</b> within <b>Pannel</b> rights<br>";
			exit (0);
		}
		$Message = "Loading content in Database";
		LogStr("Loading file from base", "AdminPannel");
		DisplayPannel(LoadingData("FromBase"), $Message); // call the layout
		break;

	case "LoadFromFile" :
		if (!HasRight('Pannel', $action)) { // Check the rights
			echo "For this you need the scope <b>" . $action . "</b> within <b>Pannel</b> rights<br>";
			exit (0);
		}
		$Message = "Loading content from file";
		LogStr("Loading file from base", "AdminPannel");
		DisplayPannel(LoadingData("FromFile"), $Message); // call the layout
		exit (0);
		break;

	case "Generate" :
		if (!HasRight('Pannel', $action)) { // Check the rights
			echo "For this you need the scope <b>" . $action . "</b> within <b>Pannel</b> rights<br>";
			exit (0);
		}
		break;
}
?>