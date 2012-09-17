<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectPosition');
?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><a
		class="pointer"
		onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->position_id; ?>', '<?php echo $this->escape(addslashes($item->position_name)); ?>');"
	><?php echo $this->escape($item->position_name); ?> </a>
	</td>
	<td><?php echo $item->game_name; ?>
	</td>
	<td><?php echo JHTML::image($item->image,JText::_('COM_JCLAN_POSITION_IMAGE_ALT'));	?>
	</td>

</tr>
<?php endforeach; ?>