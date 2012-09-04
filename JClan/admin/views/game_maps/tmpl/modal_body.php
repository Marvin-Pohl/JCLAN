<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectGame_Map');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><a
		class="pointer"
		onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->game_map_id; ?>', '<?php echo $this->escape(addslashes($item->map_name)); ?>');"
	><?php echo $this->escape($item->map_name); ?> </a>
	</td>
	<td><?php echo $item->game_name; ?></td>
	<td><?php echo JHTML::image($item->image,JText::_('COM_JCLAN_GAME_MAP_IMAGE_ALT'));	?>
	</td>
	<td><?php echo $item->game_mode_name; ?></td>
</tr>
<?php endforeach; ?>