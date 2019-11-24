<script type="text/javascript" src="<?php echo base_url();?>assets_home/material/js/jquery-3.2.1.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<section id="contact" style="background-color: #fff;">
    <div class="py-5">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="h1 text-black pt-5 pb-3 text-center">Input <?=$nik;?> Periode <?=$period;?></h2>
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
											<input type="number" id="f_gaji_pokok" class="form-control input-data text-white" value="<?=$list[0]->gaji_pokok;?>">
											<label class="text-white" for="f_gaji_pokok">Gaji Pokok</label>
										</div>

										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_turned_in</i>
											<input type="number" id="f_tunjangan_jabatan" class="form-control input-data text-white" value="<?=$list[0]->tunjangan_jabatan;?>">
											<label class="text-white" for="f_tunjangan_jabatan">Tunjangan Jabatan</label>
										</div>							

										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_turned_in</i>
											<input type="number" id="f_tunjangan_kehadiran" class="form-control input-data text-white" value="<?=$list[0]->tunjangan_kehadiran;?>">
											<label class="text-white" for="f_tunjangan_kehadiran">Tunjangan Kehadiran</label>
										</div>														

										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_turned_in</i>
											<input type="number" id="f_upah_lembur" class="form-control input-data text-white" value="<?=$list[0]->upah_lembur;?>">
											<label class="text-white" for="f_upah_lembur">Upah Lembur</label>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="number" id="f_potongan_keterlambatan_absensi" class="form-control input-data text-white" value="<?=$list[0]->potongan_keterlambatan_absensi;?>">
											<label class="text-white" for="f_potongan_keterlambatan_absensi">Potongan Keterlambatan Absensi</label>
										</div>
										
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="number" id="f_potongan_iuran_bpjs_kesehatan" class="form-control input-data text-white" value="<?=$list[0]->potongan_iuran_bpjs_kesehatan;?>">
											<label class="text-white" for="f_potongan_iuran_bpjs_kesehatan">Potongan Iuran BPJS Kesehatan</label>
										</div>
										
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="number" id="f_potongan_iuran_bpjs_tk" class="form-control input-data text-white" value="<?=$list[0]->potongan_iuran_bpjs_tk;?>">
											<label class="text-white" for="f_potongan_iuran_bpjs_tk">Potongan Iuran BPJS Tenaga Kerja</label>
										</div>
										
										<div class="md-form">
											<i class="material-icons prefix text-white">assignment_late</i>
											<input type="number" id="f_potongan_pph21" class="form-control input-data text-white" value="<?=$list[0]->potongan_pph21;?>">
											<label class="text-white" for="f_potongan_pph21">Potongan PPH21</label>
										</div>
									</div>									
								</div>
								

								
								<div class="md-form">
									<i class="material-icons prefix text-white">assignment_late</i>
									<input type="number" id="f_total_potongan" class="form-control text-white" value="<?=$list[0]->total_potongan;?>" disabled="disabled">
									<label class="text-white" for="f_total_potongan">Total Potongan</label>
								</div>
								
								<div class="md-form">
									<i class="material-icons prefix text-white">beenhere</i>
									<input type="number" id="f_slip_gaji" class="form-control text-white" value="<?=$list[0]->slip_gaji;?>" disabled="disabled">
									<label class="text-white" for="f_slip_gaji">Total Gaji</label>
								</div>								

							</form>
                            <div class="col l12">
                                <button class="btn btn-indigo ml-0 right" id="btn-save" type="submit"><i class="fa fa-paper-plane-o mr-2"></i> Simpan</button>
                            </div>
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

	$(".input-data").change(function() {
		var f_gaji_pokok          = $("#f_gaji_pokok").val();
		var f_tunjangan_jabatan   = $("#f_tunjangan_jabatan").val();
		var f_tunjangan_kehadiran = $("#f_tunjangan_kehadiran").val();
		var f_upah_lembur         = $("#f_upah_lembur").val();

		var f_potongan_keterlambatan_absensi = $("#f_potongan_keterlambatan_absensi").val();
		var f_potongan_iuran_bpjs_kesehatan  = $("#f_potongan_iuran_bpjs_kesehatan").val();
		var f_potongan_iuran_bpjs_tk         = $("#f_potongan_iuran_bpjs_tk").val();
		var f_potongan_pph21                 = $("#f_potongan_pph21").val();

		f_plus  = parseInt(f_gaji_pokok) + parseInt(f_tunjangan_jabatan) + parseInt(f_tunjangan_kehadiran) + parseInt(f_upah_lembur);
		f_minus =  parseInt(f_potongan_keterlambatan_absensi) + parseInt(f_potongan_iuran_bpjs_kesehatan) + parseInt(f_potongan_iuran_bpjs_tk) + parseInt(f_potongan_pph21);

		f_total = f_plus - f_minus;

		$("#f_total_potongan").val(f_minus)
		$("#f_slip_gaji").val(f_total)
	})

	$("#btn-save").click(function() {
		var data_sender = {
			'f_gaji_pokok'                     : $("#f_gaji_pokok").val(),
			'f_tunjangan_jabatan'              : $("#f_tunjangan_jabatan").val(),
			'f_tunjangan_kehadiran'            : $("#f_tunjangan_kehadiran").val(),
			'f_upah_lembur'                    : $("#f_upah_lembur").val(),
			'f_potongan_keterlambatan_absensi' : $("#f_potongan_keterlambatan_absensi").val(),
			'f_potongan_iuran_bpjs_kesehatan'  : $("#f_potongan_iuran_bpjs_kesehatan").val(),
			'f_potongan_iuran_bpjs_tk'         : $("#f_potongan_iuran_bpjs_tk").val(),
			'f_potongan_pph21'                 : $("#f_potongan_pph21").val(),
			'f_total_potongan'         		   : $("#f_total_potongan").val(),
			'f_slip_gaji'                      : $("#f_slip_gaji").val(),
			'f_nik'							   : '<?=$nik;?>',
			'f_period'						   : '<?=$period;?>'			
		}			
		$.ajax({
			url :"<?php echo site_url();?>home/store_slip_gaji/",
			type:"post",
			data:{data_sender:data_sender},				
			beforeSend:function(){
				$(".progress").show();
				// $('#example').dataTable().fnDestroy();
				// $("#example tbody tr").remove();					
			},
			success:function(msg){
				var obj = jQuery.parseJSON (msg);
				ajax_status(obj);
			},
			error:function(jqXHR,exception)
			{
				ajax_catch(jqXHR,exception);					
			}
		})				
	})

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