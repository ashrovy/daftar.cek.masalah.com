	

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
			<th>ID Kelas</th>
			<th>Nama Kelas</th>		
			<th>Analisis</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
	<?php if($query):foreach($query as $post):?>	
		<tr>
			<td class="center"><?php echo $post->ID_kelas; ?></td>
			<td class="center"><?php echo $post->nama_kelas; ?></td>		
			<td class="center"><?php echo anchor('kelas/dcmKelas/'.$post->ID_kelas,'Lihat Analisis',array('class' => 'Lihat Analisis')).' '; ?></td>
			<td class="center"><?php echo anchor('kelas/edit/'.$post->ID_kelas,'Edit',array('class' => 'edit')).' '; ?></td>
			<td class="center"><?php echo anchor('kelas/delete/'.$post->ID_kelas,'Hapus',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin akan menghapus data ini?')"));?></td>
		</tr>
	<?php endforeach; endif; ?>
	</tbody>
	</table>
	</div>
	</div>
	</div>

	