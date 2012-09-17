<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
$document =& JFactory::getDocument();
$document->addStyleSheet("/components/com_jclan/css/matches.css",'text/css');
foreach($this->items as $i => $item): ?>
<?php 
if ($item->home_score == $item->visitor_score || !$item->played )
{

	$item->home_score_appendix = 'tie';
	$item->visitor_score_appendix = 'tie';
	$item->home_score = "-";
	$item->visitor_score = "-";
}
elseif ($item->home_score < $item->visitor_score)
{
	$item->home_score_appendix = 'loser';
	$item->visitor_score_appendix = 'winner';
	$item->home_score = (int)$item->home_score;
	$item->visitor_score = (int)$item->visitor_score;
}

else
{

	$item->home_score_appendix = 'winner';
	$item->visitor_score_appendix = 'loser';
	$item->home_score = (int)$item->home_score;
	$item->visitor_score = (int)$item->visitor_score;
}?>
<div
	class="match"
>

	<div class="block">
		<div class="team third">
			<?php echo $item->home_team_name; ?>
		</div>
		<div class="team third">
			<?php echo JTEXT::_('COM_JCLAN_VS'); ?>
		</div>
		<div class="team third">
			<?php echo $item->visitor_team_name; ?>
		</div>
	</div>
	<!-- SCORE -->
	<div class="block">
		<div class="third">&nbsp;</div>
		<div class="score_main third">
			<span class="score <?php echo $item->home_score_appendix;?>"><?php echo $item->home_score;?>
			</span><span class="score">:</span><span
				class="score <?php echo $item->visitor_score_appendix;?>"
			><?php echo $item->visitor_score;?> </span>
		</div>
		<div class="third">&nbsp;</div>
	</div>
	<!-- End Score -->
	<!-- Map -->
	<div>
		<div class="third">&nbsp;</div>
		<div class="third">
			<div>
				<?php 
				$attrs = array('class' => 'center');
				echo JHTML::image($item->map_image,JText::_('COM_JCLAN_GAME_MAP_IMAGE_ALT'),$attrs); ?>
			</div>
			<div class="map_name">
				<?php echo JTEXT::_('COM_JCLAN_VIEW_MATCHES_MAP_DESC'). ' '. $item->map_name;?>
			</div>
		</div>
		<div class="third">&nbsp;</div>
	</div>
	<!-- End Map -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- <tr class="row<?php echo $i % 2; ?>">


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
-->

<?php endforeach; ?>