<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

function SteamID2CommunityID($steamid)
{
	try {
		$parts = explode(':', str_replace('STEAM_', '' ,$steamid));

		return bcadd(bcadd('76561197960265728', $parts['1']), bcmul($parts['2'], '2'));
	} catch (Exception $e) {
		return '';
	}

}

?>
<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
	<td><?php echo JHtml::_('grid.id', $i, $item->player_id); ?>
	</td>
	<td><?php echo $item->player_id; ?>
	</td>

	<td><?php echo $item->nickname; ?>
	</td>
	<td><a target="_blank"
		href="http://steamcommunity.com/profiles/<?php echo SteamID2CommunityID($item->steam_id); ?>/"><?php echo $item->steam_id;?>
	</a>
	</td>
	<td><?php echo $item->team_name; ?>
	</td>
</tr>
<?php endforeach; ?>