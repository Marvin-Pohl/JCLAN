<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectTeam');
?>
<?php foreach($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2; ?>">
                <td>
                        <a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->team_name; ?>', '<?php echo $this->escape(addslashes($item->team_name)); ?>');"><?php echo $this->escape($item->team_name); ?></a>
                </td>
                
                <td>
                        <?php echo $item->entry_date; ?>
                </td>
                <td>
                        <?php echo $item->homepage; ?>
                </td>
        </tr>
<?php endforeach; ?>