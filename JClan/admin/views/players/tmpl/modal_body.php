<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$function = JRequest::getCmd('function', 'jSelectplayer');
?>
<?php foreach($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2; ?>">
                <td>
                        <a class="pointer" onclick="if (window.parent) window.parent.<?php echo $this->escape($function);?>('<?php echo $item->player_id; ?>', '<?php echo $this->escape(addslashes($item->nickname)); ?>');"><?php echo $this->escape($item->nickname); ?></a>
                </td>
                
                <td>
                        <?php echo $item->team_name; ?>
                </td>
                <td>
                        <?php echo $item->steam_id; ?>
                </td>
        </tr>
<?php endforeach; ?>