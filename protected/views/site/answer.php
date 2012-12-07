<div>
	<div>等待您来回答</div>
	<div>
		<table>
			<?php foreach ($answer as $onw){?>
			<?php if(count($onw->answer)==0){?>
			<tr>
				<td><?php echo CHtml::value($onw, 'title')?></td>
				<td><?php echo date("Y/m/d",$onw->createdat)?></td>
				<td>我也要回答</td>
			</tr>
			<?php }?>
			<?php }?>
		</table>
	</div>
</div>