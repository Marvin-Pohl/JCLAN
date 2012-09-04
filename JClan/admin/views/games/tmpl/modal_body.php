<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectGame');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><a
		class="pointer"
		onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->game_id; ?>', '<?php echo $this->escape(addslashes($item->game_name)); ?>');"
	><?php echo $this->escape($item->game_name); ?> </a>
	</td>

	<td><?php echo JHTML::image($item->image,JText::_('COM_JCLAN_GAME_IMAGE_ALT'));	?>
	</td>
	<td><?php echo JHTML::link($item->homepage); ?>
	</td>
</tr>
<?php endforeach; ?>