<script type="text/javascript" src="<?php echo base_url();?>assets_home/material/js/jquery-3.2.1.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<section id="contact" style="background-color: #fff;">
    <div class="py-5">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="h1 text-black pt-5 pb-3 text-center">Slip Gaji <?=$nik;?> Periode <?=$period;?></h2>
			</div>            
		
			<div class="row">

			<div class="col-lg-4">
					<div class="card card-form mt-2 mb-4">
						<!--Card content-->
						<div class="card-body rounded-top pink darken-4">
							<!-- Form -->
							<div class="pb-3 px-2">

								<div class="md-form">								
									<i class="material-icons prefix text-white">person</i>
									<input type="text" id="materialPegawaiNama" class="form-control text-white" value="<?=$list[0]->pegawai_nama;?>" disabled="disabled">
									<label class="text-white" for="materialPegawaiNama">Nama Pegawai</label>
								</div>

								<div class="md-form">
									<i class="material-icons prefix text-white">perm_identity</i>
									<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=$list[0]->pegawai_nip;?>" disabled="disabled">
									<label class="text-white" for="materialPegawaiNip">NIP</label>
								</div>							

							</div>

						</div>
					</div>				
				</div>

				<div class="col-lg-8">
					<div class="card card-form mt-2 mb-4">
						<!--Card content-->
						<div class="card-body rounded-top pink darken-4">
							<!-- Form -->
							<form class="pb-3 px-2">

								<div class="md-form">
									<i class="material-icons prefix text-white">people</i>
									<input type="text" id="materialDivisi" class="form-control text-white" value="<?=$list[0]->str_1;?>" disabled="disabled">
									<label class="text-white" for="materialDivisi">Divisi</label>
								</div>

								<div class="md-form">
									<i class="material-icons prefix text-white">people</i>
									<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=$list[0]->str_2;?>" disabled="disabled">
									<label class="text-white" for="materialPegawaiNip">Unit</label>
								</div>							

								<div class="md-form">
									<i class="material-icons prefix text-white">people</i>
									<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=$list[0]->str_3;?>" disabled="disabled">
									<label class="text-white" for="materialPegawaiNip">Jabatan</label>
								</div>														

							</form>

						</div>
					</div>				
				</div>
				
				<div class="col-lg-12">
					<div class="card card-form mt-2 mb-4">
						<!--Card content-->
						<div class="card-body rounded-top pink darken-4">
							<!-- Form -->
							<form class="pb-3 px-2">
								<div class="row">
								<div class="col-lg-6">
										<div class="md-form">
										<i class="material-icons prefix text-white">assignment_turned_in</i>
											<input type="text" id="materialDivisi" class="form-control text-white" value="<?=number_format($list[0]->gaji_pokok);?>" disabled="disabled">
											<label class="text-white" for="materialDivisi">Gaji Pokok</label>
										</div>

										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_turned_in</i>
											<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->tunjangan_jabatan);?>" disabled="disabled">
											<label class="text-white" for="materialPegawaiNip">Tunjangan Jabatan</label>
										</div>							

										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_turned_in</i>
											<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->tunjangan_kehadiran);?>" disabled="disabled">
											<label class="text-white" for="materialPegawaiNip">Tunjangan Kehadiran</label>
										</div>														

										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_turned_in</i>
											<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->upah_lembur);?>" disabled="disabled">
											<label class="text-white" for="materialPegawaiNip">Upah Lembur</label>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->potongan_keterlambatan_absensi);?>" disabled="disabled">
											<label class="text-white" for="materialPegawaiNip">Potongan Keterlambatan Absensi</label>
										</div>
										
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->potongan_iuran_bpjs_kesehatan);?>" disabled="disabled">
											<label class="text-white" for="materialPegawaiNip">Potongan Iuran BPJS Kesehatan</label>
										</div>
										
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->potongan_iuran_bpjs_tk);?>" disabled="disabled">
											<label class="text-white" for="materialPegawaiNip">Potongan Iuran BPJS Tenaga Kerja</label>
										</div>
										
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->potongan_pph21);?>" disabled="disabled">
											<label class="text-white" for="materialPegawaiNip">Potongan PPH21</label>
										</div>
									</div>									
								</div>
								

								
								<div class="md-form">
									<i class="material-icons prefix text-white">assignment_late</i>
									<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->total_potongan);?>" disabled="disabled">
									<label class="text-white" for="materialPegawaiNip">Total Potongan</label>
								</div>
								
								<div class="md-form">
									<i class="material-icons prefix text-white">beenhere</i>
									<input type="text" id="materialPegawaiNip" class="form-control text-white" value="<?=number_format($list[0]->slip_gaji);?>" disabled="disabled">
									<label class="text-white" for="materialPegawaiNip">Total Gaji</label>
								</div>								

							</form>

						</div>
					</div>				
				</div>				

			</div>			

        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });

    $("#btn-filter-month-year").click(function() {
			var data_sender = {
				'value1' : $("#fl_bulan").val(),
				'value2' : $("#fl_tahun").val()				
			}			
			$.ajax({
				url :"<?php echo site_url();?>home/filter_data_payroll/",
				type:"post",
				data:{data_sender:data_sender},				
				beforeSend:function(){
					$(".progress").show();
					$('#example').dataTable().fnDestroy();
					$("#example tbody tr").remove();					
				},
				success:function(msg){					
					$("#example tbody").html(msg);
					$('#example').DataTable( {
						dom: 'Bfrtip',
						buttons: [
							'excel', 'pdf', 'print'
						]
					} );			
					$(".progress").hide();									
				},
				error:function(jqXHR,exception)
				{
					ajax_catch(jqXHR,exception);					
				}
			})			
		})    
});
</script>