<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><?php echo JHtml::_('grid.id', $i, $item->match_id); ?>
	</td>
	<td><?php echo $item->match_id; ?>
	</td>
	<td><?php echo $item->match_date; ?>
	</td>
	<td><?php echo $item->home_team_name; ?>
	</td>
	<td><?php echo $item->home_team_lineup; ?>
	</td>
	<td><?php echo $item->home_score; ?>
	</td>
	<td><?php echo $item->visitor_team_name; ?>
	</td>
	<td><?php echo $item->visitor_team_lineup; ?>
	</td>
	<td><?php echo $item->visitor_score; ?>
	</td>
	<td><?php echo $item->game_name; ?>
	</td>
	<td><?php echo $item->map_name; ?>
	</td>
	<td><?php echo $item->played; ?>
	</td>
	<td><?php echo $item->season_name; ?>
	</td>
</tr>


<?php endforeach; ?>