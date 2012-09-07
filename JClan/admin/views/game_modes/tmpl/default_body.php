<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><?php echo JHtml::_('grid.id', $i, $item->game_mode_id); ?>
	</td>
	<td><?php echo $item->game_mode_id; ?>
	</td>
	<td><?php echo $item->game_mode_name; ?>
	</td>
	<td><?php echo $item->game_mode_short_name; ?>
	</td>
</tr>
<?php endforeach; ?>