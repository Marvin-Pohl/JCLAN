<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><?php echo JHtml::_('grid.id', $i, $item->player_lineup_id); ?>
	</td>
	<td><?php echo $item->player_lineup_id; ?>
	</td>
	<td><?php echo $item->nickname; ?>
	</td>
	<td><?php echo $item->position_name; ?>
	</td>
	<td><?php echo $item->lineup_name; ?>
	</td>
	<td><?php echo $item->team_name; ?>
	</td>
</tr>
<?php endforeach; ?>