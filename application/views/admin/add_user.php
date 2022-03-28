<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Add User</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Add User</li>
                                    </ol>

                                </div>
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         <form id="form_input" enctype="multipart/form-data">
                                             
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id_web_role" name="id_web_role">
                                                    <input class="form-control" type="email" id="email" name="email" required>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="username" name="username" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" id="password" name="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Access Group</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" id="role" name="role" required>
                                                        
                                                        <option value="1">HO - Manager</option>
                                                        <option value="2">Manager</option>
                                                        <option value="3">Content Management (GD & Content Writer)</option>
                                                        <option value="4">Corporate Bar</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                                                    
                                           

                                            
                                            <button type="submit" class="btn btn-success">Save</button>
                                         </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    

                    </div>
                    <!-- container-fluid -->

                </div>

<script type="text/javascript">
   $(document).ready(function() {
        $("form#form_input").submit(function(e) {
            
            var konfirmasi = confirm("Simpan Data?");
            if(konfirmasi){
                e.preventDefault();    
                var objData = {
                    username : $("#username").val(),
                    password : $("#password").val(),
                    email : $("#email").val(),
                    role : $("#role").val()
                };

                $.ajax({
                    url : '<?php echo URL_API;?>/api/v1/add-admin' ,
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
                            // createAlert("notif_edit","success","Add Event Success");
                            alert("Add User Success!");
                            window.location.replace('<?php echo site_url('admin/add_user'); ?>');
                        }else{
                            alert(response.message);
                        }
                    },
                    error : function(response){
                        alert("Error, terjadi kendala saat tambah User!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            } 
        });
    });
</script>
                