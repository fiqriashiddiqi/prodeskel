<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">User Management</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table User Management</li>
                                    </ol>

                                </div>
                                <div class="col-sm-6">
                                
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="<?php echo site_url('admin/add_user');?>" class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light">
                                                Add User
                                            </a>
                                            
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

                                        <h4 class="mt-0 header-title">User List</h4>
                                        

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Access</th>
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
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Username</td>
                                            <td>
                                                <input type="hidden" id="id_oauth_users" name="id_oauth_users" class="form-control" placeholder="Tipe Kamera" required>
                                               
                                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Access</td>
                                            <td>
                                                <select id="role" name="role" class="form-control" required>
                                                    <option value="1">HO - Manager</option>
                                                    <option value="2">Manager</option>
                                                    <option value="3">Content Management (GD & Content Writer)</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                <select id="is_status" name="is_status" class="form-control" required>
                                                    <option value="1">ACTIVATED</option>
                                                    <option value="2">DEACTIVATED</option>
                                                </select>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save</button>
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
                                    <input type="hidden" id="id_oauth_users" name="id_oauth_users" class="form-control" placeholder="Tipe Kamera" required>
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

                        $('#datatable').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": {
                                // "url" : "http://localhost:3000/api/v1/list-all-events",
                                "url" : "<?php echo URL_API;?>/api/v1/list-all-admin",
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

                
                function showModalEdit(id_oauth_users){
                    $("#notif_edit").html('');

                    console.log();
                    $.ajax({
                        url : '<?php echo URL_API;?>/api/v1/list-admin-details/'+id_oauth_users ,
                        headers: {
                                    "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                    "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                    "Content-Type": "application/json"
                                  },
                        method : 'GET',
    
                        success : function(response){
                            console.log(response);
                            // console.log(id_oauth_users);
                            if(response.statusCode == 200){
                                user = response.result[0];   
                                $("#id_oauth_users").val(id_oauth_users),
                                $("#username").val(user.username),
                                $("#email").val(user.email),
                                $("#password").val(user.password),
                                $("#role").val(user.role),
                                $("#is_status").val(user.is_status)                    
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
                    var data_user = {
                        // "id_oauth_users": $("#id_oauth_users").val(),
                        "username": $("#username").val(),
                        "email": $("#email").val(),
                        "password": $("#password").val(),
                        "role": $("#role").val(),
                        // "is_admin": 1,
                        "is_status": $("#is_status").val()
                        
                    };

                    var where = {
                        "id_oauth_users" : $("#id_oauth_users").val()
                    }

                    var objData = {
                        "user" : data_user,
                        "where" : where
                    };

                    $.ajax({
                        url : '<?php echo URL_API;?>/api/v1/update-admin/'+$("#id_oauth_users").val(),
                        headers: {
                                    "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                    "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                    "Content-Type": "application/json"
                                },
                        type: 'POST',
                        data: JSON.stringify(data_user),
                        dataType : 'json',
                        success : function(response){
                            console.log(response);
                            if(response.statusCode == 200){
                                window.location.reload(true);
                                createAlert("notif_edit","success","Success Update Admin!");
                            }else{
                                createAlert("notif_edit","danger","Error Update!");
                            }
                            
                        },
                        error : function(response){
                            createAlert("notif_edit","danger","Terjadi kendala saat terhubung ke server");
                        },
                        cache: false,
                        contentType: false,
                        processData: false
                    });
                });

                $("form#form_delete").submit(function(e) {
                    e.preventDefault();    
                    

                    $.ajax({
                        url : '<?php echo URL_API;?>/api/v1/delete-admin/'+$("#id_oauth_users").val(),
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
                                createAlert("notif_delete","success","Success Delete Admin!");
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


                function showModalDelete(id_oauth_users){
                    $('#modal_delete').modal('show');
                    $("#id_oauth_users").val(id_oauth_users);
                }

                function switchAdmin(id){
                    // console.log(id);
                    var konfirmasi = confirm("Are you sure?");
                    if(konfirmasi){

                        
                        var nilai =  0;
                        if ($("#switch1_"+id).is(':checked')) {
                            nilai =  1;
                        } else {
                            nilai =  0;
                        };
                        
                         $("#switch1_"+id).on('change', function() {
                            if ($("#switch1_"+id).is(':checked')) {
                                nilai =  1;
                            } else {
                                nilai =  0;
                            }
                            console.log(nilai);
                        });
                        var objData = {
                            // id_master_customer : id,
                            is_status : nilai
                        }
                        // console.log(objData);
                        
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/switch-admin/'+id,
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