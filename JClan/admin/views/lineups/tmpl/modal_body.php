<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectLineup');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><a
		class="pointer"
		onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->lineup_id; ?>', '<?php echo $this->escape(addslashes($item->lineup_name)); ?>');"
	><?php echo $this->escape($item->lineup_name); ?> </a>
	</td>

	<td><?php echo $item->team_name; ?>
	</td>
	<td><?php echo $item->game_name; ?>
	</td>
</tr>
<?php endforeach; ?>