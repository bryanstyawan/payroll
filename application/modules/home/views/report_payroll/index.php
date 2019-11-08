<script type="text/javascript" src="<?php echo base_url();?>assets_home/material/js/jquery-3.2.1.min.js"></script>
<section id="contact" style="background-image:url('<?php echo base_url();?>assets_home/material/img/');">
    <div class="rgba-black-strong py-5">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="h1 text-white pt-5 pb-3 text-center">Laporan Payroll</h2>
            </div>

            <div id="filter_section" class="card mb-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="name">Bulan</label>                                                                          
                                    <div class="md-form">
                                        <select id="f_instansi_jaksa" class="browser-default custom-select js-example-basic-single">
                                            <option>- - - Pilih Salah Satu - - -</option>
                                            <?php
                                                for ($i=1; $i <= count($this->Globalrules->data_bulan()); $i++) { 
                                                    # code...
                                                    if ($i == date('m')) {
                                                        # code...
                                            ?>
                                                    <option value="<?=$i;?>" selected><?=$this->Globalrules->data_bulan()[$i]['nama'];?></option>											
                                            <?php														
                                                    }
                                                    else
                                                    {
                                            ?>
                                                    <option value="<?=$i;?>"><?=$this->Globalrules->data_bulan()[$i]['nama'];?></option>											
                                            <?php
                                                    }
                                                }
                                            ?>                                                                                        
                                        </select> 
                                    </div>
                                </div>                                

                                <div class="col-md-6">
                                    <label for="name">Tahun</label>                                                                          
                                    <div class="md-form">
                                        <select id="f_permohonan" class="browser-default custom-select js-example-basic-single">
                                            <option>- - - Pilih Salah Satu - - -</option>
                                            <?php
                                                $now=date('Y');
                                                $past=$now-5;
                                                for ($a=$past;$a<=$now+5;$a++)
                                                {
                                                    if ($a == $now) {
                                                        # code...
                                                        echo "<option value='$a' selected>$a</option>";														
                                                    }
                                                    else
                                                    {
                                                        echo "<option value='$a'>$a</option>";
                                                    }
                                                }
                                            ?>
                                        </select> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="center-on-small-only mb-4">
                                <button class="btn btn-indigo ml-0" id="btn-filter-month-year" type="submit"><i class="fa fa-paper-plane-o mr-2"></i> Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="progress md-progress" style="height: 20px">
                <div class="progress-bar" role="progressbar" style="width: 0%; height: 20px" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
            
            <div id="filter_section" class="card mb-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">               
                                <table id="example" class="display col-md-12" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIP</th>
                                            <th>Divisi</th>
                                            <th>Unit</th>
                                            <th>Jabatan</th>                                                                                        
                                            <th>Tanggal Mulai Kerja</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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