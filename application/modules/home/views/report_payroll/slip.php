<script type="text/javascript" src="<?php echo base_url();?>assets_home/material/js/jquery-3.2.1.min.js"></script>
<section id="contact" style="background-image:url('<?php echo base_url();?>assets_home/material/img/');">
    <div class="rgba-black-strong py-5">
        <div class="container">
            <div class="wow fadeIn">
                <h2 class="h1 text-white pt-5 pb-3 text-center">Slip Gaji <?=$nik;?> Periode <?=$period;?></h2>
            </div>            
            <div id="filter_section" class="card mb-12 wow fadeInUp" data-wow-delay=".4s">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-md-12">
                            
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