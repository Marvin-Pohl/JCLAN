<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
	<th width="20"><input
		type="checkbox"
		name="toggle"
		value=""
		onclick="checkAll(<?php echo count($this->items); ?>);"
	/>
	</th>
	<th><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_PLAYER_LINEUP_ID'); ?>
	</th>
	<th><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_LINEUP_PLAYER_NAME'); ?>
	</th>
	<th><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_POSITION_NAME'); ?>
	</th>
	<th><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_LINEUP_NAME'); ?>
	</th>
	<th><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_TEAM_NAME'); ?>
	</th>

</tr>
