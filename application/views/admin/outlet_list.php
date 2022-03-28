<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Outlets Master Management</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table Outlets Master Management</li>
                                    </ol>

                                </div>
                                <div class="col-sm-6">
                                
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                           <!--  <a href="<?php echo site_url('admin/add_outlet');?>" class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light">
                                                Add Outlet
                                            </a> -->
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Outlets List</h4>
                                        

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Outlet Name</th>
                                                <!-- <th>Contact</th>
                                                <th>Open Hours</th>
                                                <th>Address</th> -->
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
                                            <td>Outlets Name</td>
                                            <td>
                                                <input type="hidden" id="id_master_outlets" name="id_master_outlets" class="form-control" placeholder="Tipe Kamera" required>
                                                <input type="text" id="nama_outlets" name="nama_outlets" class="form-control" placeholder="Outlets Name" required>
                                                                                                    
                                                <!-- <input type="text" id="edit_id_jabatan" name="edit_id_jabatan" class="form-control" placeholder="Username" required> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Logo Outlet</td>
                                            <td>
                                                <input type="file" id="icon_outlets" name="icon_outlets" class="form-control" placeholder="">
                                                <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                <img class="img-thumbnail" id="prev_icon" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bg Header</td>
                                            <td>
                                                <input type="file" id="bg_header" name="bg_header" class="form-control" placeholder="Alamat">
                                                <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                <img class="img-thumbnail" id="prev_bg_header" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Logo Outlet Black</td>
                                            <td>
                                                <input type="file" id="icon_outlets_black" name="icon_outlets_black" class="form-control" placeholder="">
                                                <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                <img class="img-thumbnail" id="prev_icon_black" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Gallery 1</td>
                                            <td>
                                                <input type="file" id="edit_gallery_1" name="edit_gallery_1" class="form-control" placeholder="" required>
                                                <img class="img-thumbnail" id="prev_gallery_1" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gallery 2</td>
                                            <td>
                                                <input type="file" id="edit_gallery_2" name="edit_gallery_2" class="form-control" placeholder="" required>
                                                <img class="img-thumbnail" id="prev_gallery_2" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr> -->
                                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
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
                                <h3 class="modal-title">Konfirmasi</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_delete" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div id="notif_delete"></div>
                                    Hapus data ? <br>
                                    <input type="hidden" id="delete_id_master_outlets" name="delete_id_master_outlets" class="form-control" placeholder="Tipe Kamera" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END MODAL EDIT -->

                <script type="text/javascript">
                    $(document).ready(function(){
                        // loadMasterJabatan();

                        $('#datatable').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": {
                                "url" : "<?php echo URL_API;?>/api/v1/list-all-outlets",
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
                    });

                    function showModalEdit(id_master_outlets){
                    $("#notif_edit").html('');

                    console.log();
                    $.ajax({
                        url : '<?php echo URL_API;?>/api/v1/list-outlets-master/'+id_master_outlets ,
                        headers: {
                                    "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                    "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                    "Content-Type": "application/json"
                                  },
                        method : 'GET',
    
                        success : function(response){
                            console.log(response);
                            console.log(id_master_outlets);
                            // console.log(response.result[id_master_outlets-1]);
                            if(response.statusCode == 200){
                                i = id_master_outlets;
                                user = response.result;
                                gallery = user.gallery;
                                console.log(user);   
                                $("#id_master_outlets").val(id_master_outlets),
                                $("#nama_outlets").val(user[0].nama_outlets),
                                
                                // $("#edit_tgl_lahir").val(user.tanggal_lahir),
                                $("#prev_bg_header").attr("src","<?php echo URL_API;?>"+user[0].bg_header),
                                $("#prev_icon").attr("src","<?php echo URL_API;?>"+user[0].icon_outlets),
                                $("#prev_icon_black").attr("src","<?php echo URL_API;?>"+user[0].icon_outlets_black)
                                
                                

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
                        url : '<?php echo URL_API; ?>/api/v1/update-outlets/'+$("#id_master_outlets").val(),
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
                                // window.location.reload(true);
                                // createAlert("notif_edit","success",response.message);
                                alert("Sukses");
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
                        url : '<?php echo site_url("api/user_delete/"); ?>' ,
                        type: 'POST',
                        data: JSON.stringify(data),
                        dataType : 'json',
                        success : function(response){
                            console.log(response);
                            if(response.severity == "success"){
                                window.location.reload(true);
                                createAlert("notif_delete",response.severity,response.message);
                            }else{
                                createAlert("notif_delete",response.severity,response.message);
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


                function showModalDelete(id_master_outlets){
                    $('#modal_delete').modal('show');
                    $("#delete_id_master_outlets").val(id_master_outlets);
                }

                function createAlert(target,severity,message){
                    console.log(target +' - ' + severity + ' - ' + message);
                    $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
                }
                </script>