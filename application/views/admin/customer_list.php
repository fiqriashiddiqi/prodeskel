<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Customers List</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table Customer</li>
                                    </ol>

                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">List User</h4>
                                        
                                        <div id="test"></div>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Phone Number</th>
                                                <th>Tier</th>
                                                <th>Earned Points</th>
                                                <th>Used Points</th>
                                                <th>Last Login</th>
                                                <th>Action</th>
                                                
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

                <!-- MODAL EDIT -->
                <div class="modal" role="dialog" id="modal_edit">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content modal-lg">
                            <div class="modal-header">
                                <h3 class="modal-title">Edit Data</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_edit" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div id="notif_edit"></div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END MODAL EDIT -->

                <!-- MODAL DELETE -->
                <div class="modal" role="dialog" id="modal_delete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Confirmation</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_delete" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div id="notif_delete"></div>
                                    Are you sure delete data ? <br>
                                    <input type="hidden" id="id_master_customer" name="id_master_customer" class="form-control" placeholder="Tipe Kamera" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END MODAL DELETE -->

                <!-- MODAL SWITCH -->
                <div class="modal" role="dialog" id="modal_switch">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Confirmation</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_switch" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div id="notif_switch"></div>
                                    Are you sure ? <br>
                                    <input type="hidden" id="id_master_customer" name="id_master_customer" class="form-control" placeholder="Tipe Kamera" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Ya</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- END MODAL SWITCH -->

                <script type="text/javascript">
                    $(document).ready(function(){
                        // loadMasterJabatan();
                        $('#datatable').DataTable();
                        //Buttons examples
                        

                        var table = $('#datatable-buttons').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": {
                                "url" : "<?php echo URL_API;?>/api/v1/list-all-customer",
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
                            // "lengthChange": false,
                            "lengthMenu":[[10, 25, 50, 1000000], [10, 25, 50, "All"]],
                            "buttons": ['copy', 'excel', 'csv', 'pdf', 'colvis'],
                            
                            "initComplete": function(settings, json) {
                                table.buttons().container()
                                    .appendTo( $('#datatable-buttons_wrapper .col-md-6:eq(0)' ) );
                            }
                        });
                    });

                    $("form#form_delete").submit(function(e) {
                        e.preventDefault();    
                        

                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/delete-customer/'+$("#id_master_customer").val(),
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
                                    createAlert("notif_delete","success","Success Delete Customer!");
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


                function showModalDelete(id_master_customer){
                    $('#modal_delete').modal('show');
                    $("#id_master_customer").val(id_master_customer);
                }

                function switchCustomer(id){
                    // console.log(id);
                    var konfirmasi = confirm("Are you sure?");
                    if(konfirmasi){

                        
                        var nilai =  '';
                        if ($("#switch1_"+id).is(':checked')) {
                            nilai =  'true';
                        } else {
                            nilai =  'false';
                        };
                        
                         $("#switch1_"+id).on('change', function() {
                            if ($("#switch1_"+id).is(':checked')) {
                                nilai =  'true';
                            } else {
                                nilai =  'false';
                            }
                            console.log(nilai);
                        });
                        var objData = {
                            // id_master_customer : id,
                            is_active : nilai
                        }
                        // console.log(objData);
                        
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/switch-customer/'+id,
                            beforeSend: function(req) {
                                req.setRequestHeader("Authorization", "Bearer <?php echo $this->session->userdata('sess_token');?>");
                                req.setRequestHeader("ax_users_id", "<?php echo $this->session->userdata('sess_id');?>");
                                req.setRequestHeader("Content-type", "application/json");
                            },
                            type: 'POST',

                            data: JSON.stringify(objData),
                            dataType : 'json',
                            
                            success : function(response){
                                console.log(response);
                                
                                if(response.statusCode == 200){
                                    // window.location.reload(true);
                                    createAlert("notif_switch","success","Success!");
                                }else{
                                    createAlert("notif_switch","danger","Error!");
                                }
                                
                            },
                            error : function(response){
                                createAlert("notif_delete","danger","Terjadi kendala saat terhubung ke server");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    }
                        
                }

                function createAlert(target,severity,message){
                    console.log(target +' - ' + severity + ' - ' + message);
                    $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
                }
                </script>