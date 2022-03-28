<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Data Table</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table History Keeping Bottle</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">History Keeping Bottle</h4>
<!--                                         
                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">Outlets</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="test" name="">
                                                <option>Select</option>
                                            </select>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-sm-1 col-form-label">Outlets</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" id="id_master_outletss" name="">
                                                <option>Select</option>
                                            </select>
                                            </div>
                                        </div>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Keeping Bottle Code</th>
                                                <th>Customer Name</th>
                                                <th>Outlets</th>
                                                <th>Bottle Merk</th>
                                                <th>UOM</th>
                                                <th>Keeping Bottle Date</th>
                                                <th>Expired Date</th>
                                                
                                                
                                            </tr>
                                            </thead>


                                            <tbody>
                                            
                                            
                                            
                                            </tbody>
                                            
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- container-fluid -->

                </div>

              
                <script type="text/javascript">
                    $(document).ready(function(){
                        loadMasterOutlet();
                        loadMasterOutletSearch();

                        var table = $('#datatable-buttons').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "serching":false,
                            "ajax": {
                                "url" : "<?php echo URL_API;?>/api/v1/list-keeping-bottle",
                                "type" : "POST",
                                
                                "headers" : 
                                {
                                    "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                    "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>"
                                },
                                "ColumnDefs":[{
                                    "targets":[ 0 ],
                                    "orderable": false,
                                }]
                            },
                            "lengthMenu":[[10, 25, 50, 1000000], [10, 25, 50, "All"]],
                            "buttons": ['copy', 'excel', 'csv', 'pdf', 'colvis'],
                            
                            "initComplete": function(settings, json) {
                                table.buttons().container()
                                    .appendTo( $('#datatable-buttons_wrapper .col-md-6:eq(0)' ) );
                            }
                            
                        });

                        $('#id_master_outletss').on( 'change', function () {
                            table.search( this.value ).draw();
                        } );
                    });
                    
                    function loadMasterOutlet(){
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/outlet-list' ,
                            headers: {
                                        "Authorization": "Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id": "<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-Type": "application/json"
                                      },
                            method : 'GET',

                            success : function(response){
                                console.log(response);
                                if(response.statusCode == 200){
                                    let items = response.result;
                                    $.each(items,function(i,item){
                                        $("#id_master_outlets").append($('<option>',{
                                            value : item.id_master_outlets,text : item.nama_outlets
                                        }));
                                    }) ;

                                }else{
                                    createAlert("notif_edit","warning",response.statusDescription);
                                }
                            },
                            error : function(response){
                                createAlert("notif_edit","warning","Terjadi kendala saat terhubung ke server");
                            },
                        });
                    }

                    function loadMasterOutletSearch(){
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/outlet-list' ,
                            headers: {
                                        "Authorization": "Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id": "<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-Type": "application/json"
                                      },
                            method : 'GET',

                            success : function(response){
                                console.log(response);
                                if(response.statusCode == 200){
                                    let items = response.result;
                                    $.each(items,function(i,item){
                                        $("#id_master_outletss").append($('<option>',{
                                            value : item.nama_outlets,text : item.nama_outlets
                                        }));
                                    }) ;

                                }else{
                                    createAlert("notif_edit","warning",response.statusDescription);
                                }
                            },
                            error : function(response){
                                createAlert("notif_edit","warning","Terjadi kendala saat terhubung ke server");
                            },
                        });
                    }
                    function showModalEdit(id_tbl_voucher){
                        $("#notif_edit").html('');

                        console.log();
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/voucher-details/'+id_tbl_voucher ,
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-Type": "application/json"
                                      },
                            method : 'GET',
        
                            success : function(response){
                                console.log(response);
                                // console.log(id_tbl_voucher);
                                if(response.statusCode == 200){
                                    voucher = response.result;
                                    console.log(voucher[0]);   
                                    $("#id_tbl_voucher").val(id_tbl_voucher),
                                    $("#id_master_outlets").val(voucher[0].id_master_outlets),
                                    $("#title").val(voucher[0].title),
                                    $("#deskripsi").val(voucher[0].deskripsi),
                                    tinymce.get("elm1").setContent(voucher[0].tnc),
                                    $("#jenis_voucher").val(voucher[0].jenis_voucher),
                                    $("#type_redeem").val("POINT"),
                                    $("#price").val(voucher[0].price),
                                    $("#datepicker").val(voucher[0].start_date),
                                    $("#datepicker1").val(voucher[0].end_date),
                                    // $("#gambar").val(voucher[0].gambar),
                                    $("#prev_gambar").attr("src","<?php echo URL_API;?>"+voucher[0].image)
                                    
                                }else{
                                    createAlert("notif_edit","warning",response.statusDescription);
                                }
                            },
                            error : function(response){
                                createAlert("notif_edit","warning","Terjadi kendala saat terhubung ke server");
                            },
                        });
                        $("#modal_edit").modal('show');
                    }

                    $("form#form_edit").submit(function(e) {
                        e.preventDefault();
                        var formData = new FormData(this);

                        $.ajax({
                            url : '<?php echo URL_API; ?>/api/v1/update-voucher/'+$("#id_tbl_voucher").val(),
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>"
                                      },
                            type: 'POST',
                            data: formData,
                            dataType : 'json',
                            success : function(response){
                                console.log(response);
                                if(response.statusCode == 200){
                                    createAlert("notif_edit","success","Success Edit Voucher");
                                    window.location.reload(true);
                                    alert("Success Edit Voucher");
                                }else{
                                    createAlert("notif_edit","danger",response.message);
                                    alert("Error");
                                }
                                
                            },
                            error : function(response){
                                alert("Terjadi kendala ke server");
                                // createAlert("notif_edit","danger","Terjadi kendala saat terhubung ke server");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    });

                    $("form#form_delete").submit(function(e) {
                    e.preventDefault();    
                    

                    $.ajax({
                        url : '<?php echo URL_API;?>/api/v1/delete-voucher/'+$("#id_tbl_voucher").val(),
                        headers: {
                                    "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                    "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                    "Content-Type": "application/json"
                                },
                        type: 'POST',
                        // data: JSON.stringify(data_user),
                        // dataType : 'json',
                        success : function(response){
                            console.log(response);
                            if(response.statusCode == 200){
                                window.location.reload(true);
                                createAlert("notif_delete","success","Success Delete Voucher!");
                            }else{
                                createAlert("notif_delete","danger","Error Delete!");
                            }
                            
                        },
                        error : function(response){
                            createAlert("notif_delete","danger","Terjadi kendala saat terhubung ke server");
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                });


                function showModalDelete(id_tbl_voucher){
                    $('#modal_delete').modal('show');
                    $("#id_tbl_voucher").val(id_tbl_voucher);
                }

                function createAlert(target,severity,message){
                    console.log(target +' - ' + severity + ' - ' + message);
                    $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
                }
                
                </script>

               