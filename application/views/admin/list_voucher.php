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
                                        <li class="breadcrumb-item active">Table Voucher List</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Vouchers List</h4>
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
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Outlets</th>
                                                <th>Voucher Type</th>
                                                <th>Value</th>
                                                <th>Points</th>
                                                <th>Start Date</th>
                                                <th>Expired Date</th>
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
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Title</td>
                                            <td>
                                                <input type="hidden" id="id_tbl_voucher" name="id_tbl_voucher" class="form-control" placeholder="Tipe Kamera" required>
                                                <input type="hidden" id="type_redeem" name="type_redeem" class="form-control" placeholder="Tipe Kamera">
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>
                                                
                                                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4"></textarea>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Term_Condition</td>
                                            <td>
                                                <textarea id="elm1" name="tnc"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Image</td>
                                            <td>
                                                 <input type="file" class="filestyle" name="image" data-buttonname="btn-secondary">
                                                 <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                 <img class="img-thumbnail" id="prev_gambar" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product Value in IDR</td>
                                            <td>
                                                <input type="number" class="form-control" id="price" name="price">
                                                <label for="example-text-input" class="col-sm-8 col-form-label" style="color: red;">*generating points</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Type Voucher</td>
                                            <td>
                                                <select class="form-control" id="jenis_voucher" name="jenis_voucher">
                                                    <option>Select</option>
                                                    <option value="free_item">Free Item</option>
                                                    <option value="diskon">Discount %</option>
                                                    <option value="potongan_harga">Disc Amount</option>
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Start Date</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker" name="start_date">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>End Date</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker1" name="end_date">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Outlet</td>
                                            <td>
                                                <select class="form-control" id="id_master_outlets" name="id_master_outlets">
                                                    <option>Select</option>
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success" onclick="tinyMCE.triggerSave(true,true);">Save</button>
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
                                    Are you sure delete this data? <br>
                                    <input type="hidden" id="id_tbl_voucher" name="id_tbl_voucher" class="form-control" placeholder="Tipe Kamera" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END MODAL EDIT -->
                <script type="text/javascript">
                    $(document).ready(function(){
                        loadMasterOutlet();
                        loadMasterOutletSearch();

                        var table = $('#datatable').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "searching":false,
                            "ajax": {
                                // "url" : "http://localhost:3000/api/v1/list-all-events",
                                "url" : "<?php echo URL_API;?>/api/v1/list-all-voucher",
                                // "url" : "http://192.168.0.15:8090/api/v1/master-guru-karyawan-datatable ",
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

               