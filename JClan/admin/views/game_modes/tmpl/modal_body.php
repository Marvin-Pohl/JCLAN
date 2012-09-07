<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectGame_mode');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><a
		class="pointer"
		onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->game_mode_id; ?>', '<?php echo $this->escape(addslashes($item->game_mode_name)); ?>');"
	><?php echo $this->escape($item->game_mode_name); ?> </a>
	</td>
	<td><?php echo $item->game_mode_short_name; ?></td>
</tr>
<?php endforeach; ?>