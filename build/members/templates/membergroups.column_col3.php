<div id="profile">
    
    <?
    // display my groups, if there are any
    if (!empty($my_groups)) :
    ?>
    <div id="profile_groups" class="clearfix box">
        <?php // display my groups, if there are any
            $purifier = MOD_htmlpure::getAdvancedHtmlPurifier();
            echo "<h3>{$words->getInLang('ProfileGroups', $profile_language_code)}</h3>";
            $this->pager->render(); 
            foreach ($this->pager->getActiveSubset($my_groups) as $group)  : ?>
                <div class="groupbox clearfix">
                    <a href="groups/<?=$group->id ?>">
                        <img class="framed float_left"  width="50px" height="50px" alt="Group" src="<?= ((strlen($group->Picture) > 0) ? "groups/thumbimg/{$group->getPKValue()}" : 'images/icons/group.png' ) ;?>"/>
                    </a>
                    <div class="groupinfo">
                    <h4><a href="groups/<?= $group->id ?>"><?=htmlspecialchars($group->Name, ENT_QUOTES)?></a></h4>
                    <p>
                        <?= $purifier->purify($words->mTrad($member->getGroupMembership($group)->Comment));?>
                    </p>
                    </div>  <!-- groupinfo -->
                </div> <!-- groupbox clearfix -->
            <?php endforeach; ?>
        <? $this->pager->render(); ?>
    </div> <!-- profile_groups -->
    <?php endif ; ?>
    
</div> <!-- profile -->
