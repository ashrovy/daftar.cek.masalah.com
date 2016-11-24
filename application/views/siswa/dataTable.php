	

	<!-- [OPEN] JQUERY TABLE -->
		<style type="text/css" title="currentStyle">
			@import url("<?php echo base_url() . 'media/css/demo_page.css'; ?>");
			@import url("<?php echo base_url() . 'media/css/demo_table.css'; ?>");			
		</style>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'media/js/jquery.js';?>"></script>
		<script type="text/javascript" language="javascript" src="<?php echo base_url() . 'media/js/jquery.dataTables.js';?>"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable( {
					"sPaginationType": "full_numbers"
				} );
			} );
		</script>	
	<!-- [END]JQUERY TABLE -->

	<div class="templatemo_fwc fwc_box">
	<div id="container">
	<div id="demo">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">	
	<thead>
		<tr>
			<th align="Left">Nis</th>
			<th align="Left">Nama Lengkap</th>
			<th align="Left">Panggilan</th>
			<th align="Left">Kelas</th>
			<th align="Left">Jenis Kelamin</th>
			<th align="Left">Analisis</th>
			<th align="Left">Edit</th>
			<th align="Left">Grafik</th>
			<th align="Left">Hapus</th>
		</tr>
	</thead>
	<tbody>
	<?php if($query):foreach($query as $post):?>	
		<tr>
			<td class="left"><?php echo $post->nis; ?></td>
			<td class="left"><?php echo preg_replace('/(.)[^\s]+\s?/', '${1}.', strtoupper($post->fnama_siswa)) . ' '; 
			echo $post->nama_siswa; ?></td>
			<td class="left"><?php echo $post->pnama_siswa; ?></td>
			<td class="left"><?php echo $post->nama_kelas; ?></td>
			<td class="left"><?php 
			$sex = $post->sex;
			if ($sex == 'L') { echo "Laki-Laki";} else { echo "Perempuan"; }

			?></td>
			<td class="center"><?php echo anchor('siswa/dcmSiswa/'.$post->nis,'Analisis',array('class' => 'Lihat Analisis')).' '; ?></td>
			<td class="center"><?php echo anchor('siswa/edit/'.$post->nis,'Edit',array('class' => 'edit')).' '; ?></td>
			<td class="center"><?php echo anchor('siswa/dcmChart/'.$post->nis,' Grafik',array('class' => 'Lihat Grafik', ' ')).' '; ?>
			<td class="center"><?php echo anchor('siswa/delete/'.$post->nis,'Hapus',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin akan menghapus data ini?')"));?></td>
		</tr>
	<?php endforeach; endif; ?>
	</tbody>
	</table>
	</div>
	</div>
	</div>

	