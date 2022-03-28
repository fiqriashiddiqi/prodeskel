<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Master Outlet</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Master Outlet</a></li>
                                        <li class="breadcrumb-item active">Form Outlet</li>
                                    </ol>

                                </div>
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                       
        
                                        <form id="form-data" enctype="multipart/form-data">
                                            <div id="notif_edit"></div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Outlet Name</label>
                                                <div class="col-sm-10">
                                                    <!-- <input type="hidden" class="form-control" id="id_web_role" name="id_web_role"> -->
                                                    <input type="text" class="form-control" id="nama_outlets" name="nama_outlets">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea name="deskripsi_outlets" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div> -->
                                            
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Logo Outlet White</label>
                                                <div class="col-sm-5">
                                                    
                                                    <input type="file" class="filestyle" name="icon_outlets" data-buttonname="btn-secondary">
                                                    <label for="example-text-input" class="col-sm-8 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Logo Outlet Black</label>
                                                <div class="col-sm-5">
                                                    
                                                    <input type="file" class="filestyle" name="icon_outlets_black" data-buttonname="btn-secondary">
                                                    <label for="example-text-input" class="col-sm-8 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Outlet Header Background</label>
                                                <div class="col-sm-5">
                                                    
                                                    <input type="file" class="filestyle" name="bg_header" data-buttonname="btn-secondary">
                                                    <label for="example-text-input" class="col-sm-8 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                </div>
                                            </div>
                                           
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            
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
        
        $("form#form-data").submit(function(e) {
           
            var konfirmasi = confirm("Simpan Data?");
            if(konfirmasi){
                e.preventDefault();    
                var formData = new FormData(this);
                // formData.append('informasi',$('#elm1').val());
                console.log(formData);
                $.ajax({
                    url : '<?php echo URL_API;?>/api/v1/add-outlets' ,
                    beforeSend: function(req) {
                        req.setRequestHeader("Authorization", "Bearer <?php echo $this->session->userdata('sess_token');?>");
                        req.setRequestHeader("ax_users_id", "<?php echo $this->session->userdata('sess_id');?>");
                    },
                    type: 'POST',
                    data: formData,
                    dataType : 'json',
                    success : function(response){
                        console.log(response);
                        if(response.statusCode == 200){
                            // createAlert("notif_edit","success","Add Outlets Success");
                            alert("Sukses ditambahkan!");
                            window.location.replace('<?php echo site_url('admin/outlet_management'); ?>');
                        }else{
                            alert(response.message);
                        }
                    },
                    error : function(response){
                        alert("Error, terjadi kendala saat tambah Outlet!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            } 
        });
    });
    
</script>