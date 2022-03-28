<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Outlet Branch</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Outlet Branch</a></li>
                                        <li class="breadcrumb-item active">Form Outlet Branch</li>
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
                                                <label class="col-sm-2 col-form-label">Outlet</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" id="id_master_outlets" name="id_master_outlets">
                                                        <option>Select</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Outlet Name</label>
                                                <div class="col-sm-10">
                                                    <!-- <input type="hidden" class="form-control" id="id_web_role" name="id_web_role"> -->
                                                    <input type="text" class="form-control" id="outlets_cabang" name="outlets_cabang" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea name="deskripsi_outlets" class="form-control" rows="4" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Gallery 1</label>
                                                <div class="col-sm-10">
                                                    
                                                    <input type="file" class="filestyle" name="gallery_1" data-buttonname="btn-secondary">
                                                    <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Gallery 2</label>
                                                <div class="col-sm-10">
                                                    
                                                    <input type="file" class="filestyle" name="gallery_2" data-buttonname="btn-secondary">
                                                    <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Open Hours</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="jam_buka_tutup" name="jam_buka_tutup" placeholder="11AM-1AM" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="msisdn_outlets" name="msisdn_outlets" placeholder="085222111222" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Link Reservation Weeloy</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link_weeloy" name="link_weeloy" placeholder="https://www.weeloy.com/restaurant/jakarta/tan-nara-senopati" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Link Website</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link_website" name="link_website" placeholder="https://www.narajakarta.com/" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Instagram</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="link_instagram" name="link_instagram" placeholder="https://www.instagram.com/narajkt" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea name="alamat" id="alamat" class="form-control" rows="4" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Latitude</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="-6.241556999328565" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Longitude</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="106.80457674196644" required>
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
        loadMasterOutlet();
        
        $("form#form-data").submit(function(e) {
           
            var konfirmasi = confirm("Simpan Data?");
            if(konfirmasi){
                e.preventDefault();    
                var formData = new FormData(this);
                var objData = {
                    id_master_outlets : $("#id_master_outlets").val(),
                    outlets_cabang : $("#outlets_cabang").val(),
                    jam_buka_tutup : $("#jam_buka_tutup").val(),
                    msisdn_outlets : $("#msisdn_outlets").val(),
                    link_weeloy : $("#link_weeloy").val(),
                    link_website : $("#link_website").val(),
                    link_instagram : $("#link_instagram").val(),
                    alamat : $("#alamat").val(),
                    latitude : $("#latitude").val(),
                    longitude : $("#longitude").val()
                };
                // formData.append('informasi',$('#elm1').val());
                console.log(objData);
                $.ajax({
                    url : '<?php echo URL_API;?>/api/v1/add-cabang-outlets' ,
                    beforeSend: function(req) {
                        req.setRequestHeader("Authorization", "Bearer <?php echo $this->session->userdata('sess_token');?>");
                        req.setRequestHeader("ax_users_id", "<?php echo $this->session->userdata('sess_id');?>");
                        // req.setRequestHeader("Content-Type","application/json");
                    },
                    type: 'POST',
                    data: formData,
                    // data: JSON.stringify(objData),
                    dataType : 'json',
                    success : function(response){
                        console.log(response);
                        if(response.statusCode == 200){
                            // createAlert("notif_edit","success","Add Outlets Success");
                            alert("Sukses ditambahkan!");
                            // window.location.replace('<?php echo site_url('admin/outlet_management'); ?>');
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