<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectSeason');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><a
		class="pointer"
		onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->season_id; ?>', '<?php echo $this->escape(addslashes($item->season_name)); ?>');"
	><?php echo $this->escape($item->season_name); ?> </a>
	</td>
</tr>
<?php endforeach; ?>