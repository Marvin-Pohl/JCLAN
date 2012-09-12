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
	<th width="5"><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_LINEUP_ID'); ?>
	</th>
	<th width="5"><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_LINEUP_NAME_TAG'); ?>
	</th>

	<th width="5"><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_TEAM_NAME'); ?>
	</th>

	<th width="5"><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_GAME_NAME'); ?>
	</th>
</tr>
