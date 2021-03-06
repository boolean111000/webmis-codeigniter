<table class="action">
	<tr>
		<td class="title"><?php echo $Menus['Ctitle']; ?></td>
		<td>
			<ul class="action_ct">
				<?php echo $Menus['actionHtml']; ?>
			</ul>
		</td>
	</tr>
</table>
<div class="line">&nbsp;</div>
<!-- Content -->
<table class="table_list">
	<tr class="title" id="menus_table">
		<td width="20"><a href="#" id="checkboxY"></a><a href="#" id="checkboxN"></a></td>
		<td width="40">ID</td>
		<td width="40">FID</td>
		<td><?php echo $this->lang->line('sys_menu_title');?></td>
		<td><?php echo $this->lang->line('sys_menu_name');?></td>
		<td><?php echo $this->lang->line('sys_menu_cname');?></td>
		<td width="50"><?php echo $this->lang->line('sys_menu_perm');?></td>
		<td><?php echo $this->lang->line('sys_menu_icon');?></td>
		<td width="120"><?php echo $this->lang->line('sys_menu_ctime');?></td>
		<td width="30"><?php echo $this->lang->line('sys_menu_sort');?></td>
		<td><?php echo $this->lang->line('sys_menu_remark');?></td>
	</tr>
	<tbody id="listBG">
	<?php foreach($list as $val){?>
	<tr>
		<td><input type="checkbox" value="<?php echo $val->id;?>" /></td>
		<td><?php echo $val->id;?></td>
		<td><?php echo keyHH($val->fid, @$key['fid']);?></td>
		<td><?php echo $this->lang->line($val->title);?></td>
		<td><?php echo keyHH($val->title, @$key['title']);?></td>
		<td><?php echo keyHH($val->url, @$key['url']);?></td>
		<td><?php echo keyHH($val->perm, @$key['perm']);?></td>
		<td><?php echo keyHH($val->ico, @$key['ico']);?></td>
		<td><?php echo keyHH($val->ctime, @$key['ctime']);?></td>
		<td><?php echo $val->sort;?></td>
		<td class="tleft"><?php echo keyHH($val->remark, @$key['remark']);?></td>
	</tr>
	<?php } ?>
	</tbody>
</table>
<div class="page"><div class="pagelist"><?php echo $page.'<span>'.$total.'</span>'; ?></div></div>
<!-- Content End -->