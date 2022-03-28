<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Outlets Branch Management</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table Outlets Branch Management</li>
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
                                                <th>Contact</th>
                                                <th>Open Hours</th>
                                                <th>Address</th>
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
                                            <td>Master Outlets</td>
                                            <td>
                                                <input type="hidden" id="id_outlets" name="id_outlets" class="form-control" placeholder="Tipe Kamera" required>
                                                <!-- <input type="hidden" id="id_master_outlets" name="id_master_outlets" class="form-control" placeholder="Tipe Kamera" required> -->
                                                <select class="form-control" id="id_master_outlets" name="id_master_outlets">
                                                        <option>Select</option>
                                                        
                                                    </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Outlets Name</td>
                                            <td>
                                                
                                                <input type="text" id="outlets_cabang" name="outlets_cabang" class="form-control" placeholder="Outlets Name" required>
                                                                                                    
                                                <!-- <input type="text" id="id_jabatan" name="id_jabatan" class="form-control" placeholder="Username" required> -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Contact Outlet</td>
                                            <td>
                                                <input type="number" id="msisdn_outlets" name="msisdn_outlets" class="form-control" placeholder="085221777777" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Open Hours</td>
                                            <td>
                                                <input type="text" id="jam_buka_tutup" name="jam_buka_tutup" class="form-control" placeholder="7 AM - 11 PM" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>
                                                <textarea id="deskripsi_outlets" name="deskripsi_outlets" class="form-control" rows="4" placeholder="Description" required></textarea> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <textarea id="alamat" name="alamat" class="form-control" rows="4" placeholder="Address" required></textarea> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Link Weeloy</td>
                                            <td>
                                                <input type="text" id="link_weeloy" name="link_weeloy" class="form-control" placeholder="7 AM - 11 PM" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Link Website</td>
                                            <td>
                                                <input type="text" id="link_website" name="link_website" class="form-control" placeholder="7 AM - 11 PM" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Link Instagram</td>
                                            <td>
                                                <input type="text" id="link_instagram" name="link_instagram" class="form-control" placeholder="7 AM - 11 PM" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Latitude</td>
                                            <td>
                                                <input type="text" id="latitude" name="latitude" class="form-control" placeholder="-6.241556999328565" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Longitude</td>
                                            <td>
                                                <input type="text" id="longitude" name="longitude" class="form-control" placeholder="106.80457674196644" required>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Gallery 1</td>
                                            <td>
                                                <input type="file" id="gallery_1" name="gallery_1" class="form-control" placeholder="">
                                                <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                <img class="img-thumbnail" id="prev_gallery_1" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gallery 2</td>
                                            <td>
                                                <input type="file" id="gallery_2" name="gallery_2" class="form-control" placeholder="">
                                                <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                <img class="img-thumbnail" id="prev_gallery_2" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        
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
                                <h3 class="modal-title">Confirmation</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_delete" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div id="notif_delete"></div>
                                    Are you sure delete this data? <br>
                                    <input type="hidden" id="id_outlets" name="id_outlets" class="form-control" placeholder="Tipe Kamera" required>
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
                        // loadMasterJabatan();
                        loadMasterOutlet();

                        $('#datatable').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": {
                                "url" : "<?php echo URL_API;?>/api/v1/list-all-outlets-cabang",
                                
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

                    function showModalEdit(id_outlets){
                    $("#notif_edit").html('');

                    console.log();
                    $.ajax({
                        url : '<?php echo URL_API;?>/api/v1/list-cabang-outlets/'+id_outlets ,
                        headers: {
                                    "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                    "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                    "Content-Type": "application/json"
                                  },
                        method : 'GET',
    
                        success : function(response){
                            console.log(response);
                            console.log(id_outlets);
                            // console.log(response.result[id_outlets-1]);
                            if(response.statusCode == 200){
                                i = id_outlets;
                                user = response.result;
                                gallery = user.gallery;
                                console.log(user);   
                                $("#id_outlets").val(id_outlets),
                                $("#id_master_outlets").val(user.id_master_outlets),
                                $("#outlets_cabang").val(user.outlets_cabang),
                                $("#msisdn_outlets").val(user.msisdn_outlets),
                                $("#jam_buka_tutup").val(user.jam_buka_tutup),
                                $("#alamat").val(user.alamat),
                                $("#deskripsi_outlets").val(user.deskripsi_outlets),
                                $("#latitude").val(user.latitude),
                                $("#longitude").val(user.longitude),
                                $("#link_weeloy").val(user.link_weeloy),
                                $("#link_website").val(user.link_website),
                                $("#link_instagram").val(user.link_instagram),
                                
                                $("#prev_gallery_1").attr("src","<?php echo URL_API;?>"+gallery[0].gambar),
                                $("#prev_gallery_2").attr("src","<?php echo URL_API;?>"+gallery[1].gambar)
                                
                                

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
                    console.log(formData);
                    $.ajax({
                        url : '<?php echo URL_API; ?>/api/v1/update-outlets-cabang/'+$("#id_outlets").val(),
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
                                window.location.reload(true);
                                // createAlert("notif_edit","success",response.message);
                                alert("Success!");
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
                        url : '<?php echo URL_API;?>/api/v1/delete-outlets/'+$("#id_outlets").val(),
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
                                createAlert("notif_delete","success","Success Delete Outlet Branch!");
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


                function showModalDelete(id_outlets){
                    $('#modal_delete').modal('show');
                    $("#id_outlets").val(id_outlets);
                }

                function createAlert(target,severity,message){
                    console.log(target +' - ' + severity + ' - ' + message);
                    $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
                }

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
                </script>