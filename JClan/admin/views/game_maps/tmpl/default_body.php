<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><?php echo JHtml::_('grid.id', $i, $item->game_map_id); ?>
	</td>
	<td><?php echo $item->game_map_id; ?>
	</td>
	<td><?php echo $item->game_name; ?>
	</td>
	<td><?php echo $item->map_name; ?>
	</td>
	<td><?php echo JHTML::image($item->image,JText::_('COM_JCLAN_GAME_MAP_IMAGE_ALT'));	?>
	</td>
	<td><?php echo $item->game_mode_name; ?></td>
</tr>
<?php endforeach; ?>