<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                               
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                       
                                        <h3>Forgot Password</h3>
                                        <form id="form-data" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id_oauth_users" name="id_oauth_users" value="<?php echo $this->uri->segment(3);?>">
                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password1" name="password1" required>
                                                </div>
                                                <div id="message"></div>
                                            </div>
                                            
                                            <button type="submit" id="btn-sub" class="btn btn-success" >Submit</button>
                                            
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                      </div>
                <!-- container-fluid -->

            </div>

<script type="text/javascript">
    $('#password, #password1').on('keyup', function () {
        if ($('#password').val() != $('#password1').val()) {
            $(':input[type="submit"]').prop('disabled', true);
            $('#message').html('Not Matching').css('color', 'red');
            
        } else {
            $('#message').html('').css('color', 'red');
            $(':input[type="submit"]').prop('disabled', false);
        }
            
    });
    $(document).ready(function() {
        
        const id = "<?php echo $this->uri->segment(3);?>"
        
        
        $("id_oauth_users").val(id);
        console.log(id);
        $("form#form-data").submit(function(e) {
            
            var konfirmasi = confirm("Simpan Data?");
            if(konfirmasi){
                e.preventDefault();
                // console.log(id);
                var formData = new FormData(this);
                // var pass = $("#password").val(); 
                var objData = {
                    password : $("#password").val()
                };
                // console.log(objData);
                $.ajax({
                    url : '<?php echo URL_API;?>/api/v1/update-password/'+id ,
                    beforeSend: function(req) {
                        // req.setRequestHeader("Authorization", "Bearer <?php echo $this->session->userdata('sess_token');?>");
                        // req.setRequestHeader("ax_users_id", "<?php echo $this->session->userdata('sess_id');?>");
                        req.setRequestHeader("Content-type", "application/json");
                    },
                    type: 'POST',
                    data: JSON.stringify(objData),
                    dataType : 'json',
                    success : function(response){
                        // console.log(response);
                        if(response.statusCode == 200){
                            // createAlert("notif_edit","success","Add Event Success");
                            alert("Success Change Password!");
                            window.location.replace('<?php echo site_url('admin/success_password'); ?>');
                        }else{
                            alert(response.message);
                        }
                    },
                    error : function(response){
                        alert("Error, terjadi kendala saat Update Password!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            } 
        });

         
    });
    
    function createAlert(target,severity,message){
        console.log(target +' - ' + severity + ' - ' + message);
        $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
    }
</script>