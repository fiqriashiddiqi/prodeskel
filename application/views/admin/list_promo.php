<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Data Table</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:Eventvoid(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table List Promo</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">List Promo</h4>
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
                                                <th>Type</th>
                                                <th>Outlet</th>
                                                <th>Created Date</th>
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
                                                <input type="hidden" id="id_tbl_tan_promo" name="id_tbl_tan_promo" class="form-control" placeholder="Tipe Kamera" required>
                                                <input type="text" id="nama_promo" name="nama_promo" class="form-control" placeholder="Title" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>
                                                 <textarea id="deskripsi_promo" name="deskripsi_promo" class="form-control" rows="4"></textarea>
                                                
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>Image</td>
                                            <td>
                                                <!-- <input type="hidden" name="gambar" id="gambar"> -->
                                                <input type="file" id="gambar" name="gambar" class="form-control">
                                                <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                <img class="img-thumbnail" id="prev_gambar" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Term_Condition</td>
                                            <td>
                                                 <textarea id="elm1" name="tnc_promo"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Promo Type</td>
                                            <td>
                                                 <select class="form-control" id="jenis_promo" name="jenis_promo">
                                                        <option>Select</option>
                                                        <option value="information">Information</option>
                                                        <option value="conditional">Conditional promos</option>
                                                        
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td>
                                                <input type="text" class="form-control" id="promo_date" name="promo_date" placeholder="Every Day, 10 am - 2 pm">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Start Date</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="tanggal_upload">
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
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker1" name="tanggal_expired">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Highlight</td>
                                            <td>
                                                <select class="form-control" id="highlight" name="highlight">
                                                    <option>Select</option>
                                                    <option value="true">True</option>
                                                    <option value="false">False</option>
                                                    
                                                </select>
                                            </td>
                                        </tr> -->
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
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success" onclick="tinyMCE.triggerSave(true,true);">Simpan</button>
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
                                    <input type="hidden" id="id_tbl_tan_promo" name="id_tbl_tan_promo" class="form-control" placeholder="Tipe Kamera" required>
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
                            "ajax": {
                                "url" : "<?php echo URL_API;?>/api/v1/list-all-promo",
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
                    function showModalEdit(id_tbl_tan_promo){
                        $("#notif_edit").html('');

                        console.log();
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/promo-details/'+id_tbl_tan_promo ,
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-Type": "application/json"
                                      },
                            method : 'GET',
        
                            success : function(response){
                                console.log(response);
                                // console.log(id_tbl_tan_event);
                                if(response.statusCode == 200){
                                    promo = response.result;
                                    console.log(promo[0]);   
                                    $("#id_tbl_tan_promo").val(id_tbl_tan_promo),
                                    $("#id_master_outlets").val(promo[0].id_master_outlets),
                                    $("#nama_promo").val(promo[0].nama_promo),
                                    $("#deskripsi_promo").val(promo[0].deskripsi_promo),
                                    $("#promo_date").val(promo[0].promo_date),
                                    // $("#elm1").setContent(promo[0].tnc_promo),
                                    tinymce.get("elm1").setContent(promo[0].tnc_promo),
                                    // $("#elm1").setContent(promo[0].tnc_promo),
                                    $("#jenis_promo").val(promo[0].jenis_promo),
                                    // $("#edit_tanggal_promo").val(promo[0].tanggal_promo),
                                    $("#datepicker").val(promo[0].tanggal_upload),
                                    $("#datepicker1").val(promo[0].tanggal_expired),
                                    // $("#gambar").val(promo[0].gambar),
                                    $("#prev_gambar").attr("src","<?php echo URL_API;?>"+promo[0].gambar)
                                    
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
                        // console.log($("#edit_id_master_outlets").val());
                        // const input = document.querySelector("input[type=file]");    
                        var gambar = document.getElementById('edit_gambar');
                        var hidden = document.getElementById('gambar');
                        var file_gambar = null;
                        
                        var formData = new FormData(this);
                        var data_promo = {
                            "id_tbl_tan_promo": $("#id_tbl_tan_promo").val(),
                            "id_master_outlets": $("#id_master_outlets").val(),
                            "nama_promo": $("#title").val(),
                            "deskripsi_promo": $("#desc").val(),
                            "jenis_promo": $("#type_promo").val(),
                            "tnc_promo": tinyMCE.get('elm1').getContent(),
                            "tanggal_upload": $("#datepicker").val(),
                            "tanggal_expired": $("#datepicker1").val(),
                            // "gambar": $("edit_gambar").val()
                        };

                        var where = {
                            "id_tbl_tan_promo" : $("#id_tbl_tan_promo").val()
                        }

                        var data = {
                            "user" : data_promo,
                            "where" : where
                        };

                        $.ajax({
                            url : '<?php echo URL_API; ?>/api/v1/updates-promo/'+$("#id_tbl_tan_promo").val(),
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>"
                                      },
                            type: 'POST',
                            data: formData,
                            dataType : 'json',
                            success : function(response){
                                console.log(response);
                                // console.log(data);
                                if(response.statusCode == 200){
                                    // window.location.replace('<?php echo site_url('admin/list_promo'); ?>');
                                    // createAlert("notif_edit","success",response.message);
                                    // console.log($("#datepicker").val());
                                    alert("Sukses");
                                    window.location.reload(true);
                                }else{
                                    // createAlert("notif_edit","danger",response.message);
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
                        url : '<?php echo URL_API;?>/api/v1/delete-promo/'+$("#id_tbl_tan_promo").val(),
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
                                createAlert("notif_delete","success","Success Delete Promo!");
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


                function showModalDelete(id_tbl_tan_promo){
                    $('#modal_delete').modal('show');
                    $("#id_tbl_tan_promo").val(id_tbl_tan_promo);
                }

                function createAlert(target,severity,message){
                    console.log(target +' - ' + severity + ' - ' + message);
                    $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
                }
                </script>

               