	

	<!-- [OPEN] JQUERY TABLE -->
		<style type="text/css" title="currentStyle">
			@import url("<?php echo base_url() . 'media/css/demo_page.css'; ?>");
			@import url("<?php echo base_url() . 'media/css/demo_table.css'; ?>");	
			@import url("<?php echo base_url() . 'css/alert/bootstrap.css'; ?>"); 
			@import url("<?php echo base_url() . 'css/alert/bootstrap-theme.css'; ?>"); 		
		</style>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'media/js/jquery.js';?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'media/js/jquery.dataTables.js';?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'js/alert/bootstrap.js';?>"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable( {
					"sPaginationType": "full_numbers"
				} );
			} );
		</script>	
	<!-- [END]JQUERY TABLE -->
	<? echo $this->session->flashdata('message');?>
	<div class="templatemo_fwc fwc_box">
	<div id="container">
	<div id="demo">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">	
	<thead>
		<tr>
		<th>ID Tahun Ajaran</th>		
		<th>Tahun Ajaran</th>
		<th>Edit</th>
		<th>Hapus</th>
		<th>Pilih Tahun Ajaran</th>
		<th>Status</th>
		</tr>
	</thead>
	<tbody>
	<?php if($query):foreach($query as $post):?>	
		<tr>
		<td class="center"><?php echo $post->ID_tahun_ajaran; ?></td>		
		<td class="center"><?php echo $post->nama_tahun_ajaran; ?></td>
		<td class="center"><?php echo anchor('tahun_ajaran/edit/'.$post->ID_tahun_ajaran,'Edit',array('class' => 'edit')).' '; ?></td>
		<td class="center"><?php echo anchor('tahun_ajaran/delete/'.$post->ID_tahun_ajaran,'Hapus',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin akan menghapus data ini?')"));?></td>
		<td class="center"><?php 
		if($post->status == 1)
		{		
			echo $link_status = anchor('tahun_ajaran/nonaktif/' . $post->ID_tahun_ajaran,'non aktifkan',array('class'=>'aktif','onclick'=>"return confirm('Anda yakin akan ubah status?')"));		
		}
		else
		{
			echo $link_status = anchor('tahun_ajaran/aktif/' . $post->ID_tahun_ajaran,'aktifkan',array('class'=>'nonaktif','onclick'=>"return confirm('Anda yakin akan ubah status?')"));
		}
		?></td>
		<td class="center"><?php //echo "test";
		/* */
		//$sts = $post->status;
		if($post->status == 1)
		{
			echo $status = '<font color="green"><strong>Aktif</strong></font>';
		}
		else
		{
			echo $status = '<font color="red">Tidak aktif</font>';
		}
		/* */
		?></td>
		</tr>
	<?php endforeach; endif; ?>
	</tbody>
	</table>
	</div>
	</div>
	</div>

	