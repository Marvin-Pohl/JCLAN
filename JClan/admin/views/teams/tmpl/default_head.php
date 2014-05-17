<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
		<th width="20">
                <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
        </th>
        <th width="5">
                <?php echo JText::_('COM_JCLAN_JCLAN_HEADING_TEAM_ID'); ?>
        </th>
        <th width="5">
                <?php echo JText::_('COM_JCLAN_JCLAN_HEADING_TEAM_TAG'); ?>
        </th>
            
        <th width="5">
                <?php echo JText::_('COM_JCLAN_JCLAN_HEADING_TEAM_NAME'); ?>
        </th>
                           
        <th>
                <?php echo JText::_('COM_JCLAN_JCLAN_HEADING_TEAM_ENTRY_DATE'); ?>
        </th>
        <th>
                <?php echo JText::_('COM_JCLAN_JCLAN_HEADING_TEAM_WEBSITE'); ?>
        </th>
</tr>