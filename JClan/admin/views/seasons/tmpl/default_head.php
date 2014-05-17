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
	<th width="5"><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_SEASON_ID'); ?>
	</th>
	<th width="5"><?php echo JText::_('COM_JCLAN_JCLAN_HEADING_SEASON_NAME'); ?>
	</th>
</tr>
