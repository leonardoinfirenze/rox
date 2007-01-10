<?php
include "lib/dbaccess.php" ;
require_once "lib/FunctionsLogin.php" ;
require_once "layout/error.php" ;
include "layout/mymessages.php" ;


// test if is logged, if not logged and forward to the current page
  MustLog() ; // need to be log


// Find parameters
  $action=GetParam("action","") ;
	if ($action=="") {  // if no action selected we must choose one to select a tab
		if ($_SESSION['NbNotRead']>0) {
		  $action="NotRead" ;
		}
		else {
	    $action="Received" ; // but we go to Received message if no pending not read
		}
	}
	

	
	$TMess=array() ;
		
  switch($action) {
	  case "del" : // todo
		  break ;
	  case "marknospam" : // todo
		  $rm=LoadRow("select messages.*,Username from messages,members where messages.IdSender=members.id and messages.id=".GetParam("IdMess")) ;
			if ($rm->id) {
			  $tt=explode(",",$rm->SpamInfo) ;
				$SpamInfo="NotSpam" ;
				for ($ii=0;$ii<count($tt);$ii++) {
				  if ($tt[$ii]=="NotSpam") continue ;
					if ($SpamInfo!="") $SpamInfo.="," ;
					$SpamInfo.=$SpamInfo.$tt[$ii] ; 
				}
			  $str="update messages set SpamInfo='".$SpamInfo."' where id=".$rm->id." and messages.IdReceiver=".$_SESSION["IdMember"]." " ;
				sql_query($str) ;
			  LogStr("Remove spam mark a message for ".$rm->Username." MesId=#".$rm->id,"Remove Mark Spam") ;
			}
			break ;
		  
	  case "markspam" :
		  $rm=LoadRow("select messages.*,Username from messages,members where messages.IdSender=members.id and messages.id=".GetParam("IdMess")) ;
			if ($rm->id) {
			  $tt=explode(",",$rm->SpamInfo) ;
				$SpamInfo="" ;
				for ($ii=0;$ii<count($tt);$ii++) {
				  if ($tt[$ii]=="NotSpam") continue ;
					if ($SpamInfo!="") $SpamInfo.="," ;
					$SpamInfo.=$SpamInfo.$tt[$ii] ; 
				}
			  $str="update messages set SpamInfo='".$SpamInfo."' where id=".$rm->id." and messages.IdReceiver=".$_SESSION["IdMember"]." " ;
				sql_query($str) ;
			  LogStr("Mark as spam a message for ".$rm->Username." MesId=#".$rm->id,"Mark Spam") ;
			}
			break ;
	  case "reply" :
		  echo "not yet ready" ;
			exit(0) ;
	  case "" : // if empty we will consider member want Received Messages
	  case "Received" :
		  $Title=ww("MessagesThatIHaveReceived") ;
			$FromTo="MessageFrom" ;
			$str="select messages.id as IdMess,SpamInfo,Username,Message,messages.created from messages,members where messages.IdReceiver=".$_SESSION["IdMember"]." and members.id=messages.IdSender and messages.Status='Sent' and messages.SpamInfo='NotSpam' order by created desc" ;
//			echo "str=$str<br>" ;
	    $qry=sql_query($str) ;
	    while ($rWhile=mysql_fetch_object($qry)) {
	      array_push($TMess,$rWhile) ;
	    }
			break ;
	  case "Sent" :
		  $Title=ww("MessagesThatIHaveSent") ;
			$FromTo="MessageTo" ;
			$str="select messages.id as IdMess,SpamInfo,Username,Message,messages.created from messages,members where messages.IdSender=".$_SESSION["IdMember"]." and members.id=messages.IdReceiver and messages.Status!='Draft'" ;
//			echo "str=$str<br>" ;
	    $qry=sql_query($str) ;
	    while ($rWhile=mysql_fetch_object($qry)) {
	      array_push($TMess,$rWhile) ;
	    }
	
			break ;
	  case "Spam" :
		  $Title=ww("MessagesInSpamFolder") ;
			$FromTo="MessageTo" ;
			$str="select messages.id as IdMess,SpamInfo,Username,WhenFirstRead,Message,messages.created from messages,members where messages.IdReceiver=".$_SESSION["IdMember"]." and members.id=messages.IdSender and messages.SpamInfo!='NotSpam'" ;
//			echo "str=$str<br>" ;
	    $qry=sql_query($str) ;
	    while ($rWhile=mysql_fetch_object($qry)) {
	      array_push($TMess,$rWhile) ;
	    }
	
			break ;
	  case "NotRead" :
		  $Title=ww("MessagesThatIHaveNotRead") ;
			$FromTo="MessageFrom" ;
			$str="select messages.id as IdMess,SpamInfo,Username,WhenFirstRead,Message,messages.created from messages,members where messages.IdReceiver=".$_SESSION["IdMember"]." and members.id=messages.IdSender and messages.Status='Sent' and WhenFirstRead='0000-00-00 00:00:00' order by created desc" ;
//			echo "str=$str<br>" ;
	    $qry=sql_query($str) ;
	    while ($rWhile=mysql_fetch_object($qry)) {
	      array_push($TMess,$rWhile) ;
	    }
			break ;
	  case "Draft" :
		  $Title=ww("MessagesDraft") ;
			$FromTo="MessageTo" ;
			$str="select messages.id as IdMess,SpamInfo,Username,Message,messages.created from messages,members where messages.IdSender=".$_SESSION["IdMember"]." and members.id=messages.IdReceiver and messages.Status='Draft' order by created desc" ;
//			echo "str=$str<br>" ;
	    $qry=sql_query($str) ;
	    while ($rWhile=mysql_fetch_object($qry)) {
	      array_push($TMess,$rWhile) ;
	    }
			break ;
	  case "ShowMessage" :
		  $Title=ww("ShowNotReadMessage",GetParam("IdMess")) ;
			$FromTo="MessageFrom" ;
			$str="select messages.id as IdMess,Username,SpamInfo,Message,messages.created from messages,members where messages.IdReceiver=".$_SESSION["IdMember"]." and members.id=messages.IdSender and messages.Status='Sent' and messages.id=".GetParam("IdMess") ;
	    $qry=sql_query($str) ;
	    $rWhile=mysql_fetch_object($qry) ;
	    array_push($TMess,$rWhile) ;
		  $Title=ww("ShowNotReadMessage",LinkWithUsername($rWhile->Username)) ;
			$str="update messages set WhenFirstRead=now() where id=".GetParam("IdMess") ;
//			echo "str=$str<br>" ;
	    $qry=sql_query($str) ;
			LogStr("Has read message #".GetParam("IdMess"),"readmessage") ;
			EvaluateMyEvents() ; // in order to keep update Not read message counter
      DisplayMyMessages($TMess,$Title,"Received",$FromTo) ;
			exit(0) ;
			break ;
	  case "logout" :
		  Logout("Main.php") ;
			exit(0) ;
	}
	
  DisplayMyMessages($TMess,$Title,$action,$FromTo) ;

?>
