<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Data KK Baru</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Data KK Baru</a></li>
                                        <li class="breadcrumb-item active">Form Data KK Baru</li>
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
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Kode Keluarga (Nomor KK)*</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control" id="nama_promo" name="nama_promo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Nama Kepala Keluarga*</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_promo" name="nama_promo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Alamat*</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea name="deskripsi_promo" id="deskripsi_promo" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <!-- <label for="example-text-input" class="col-sm-2 col-form-label">Posting Period</label> -->
                                                <div class="row" style="margin-left: 0px">
                                                    <div class="col-sm-3">
                                                        <label>RT*</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="" id="" name="rt">
                                                               
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>RW*</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="" id="" name="rw">
                                                                
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Nama Dusun</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_promo" name="nama_promo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <label for="example-text-input" class="col-sm-2 col-form-label">Posting Period</label> -->
                                                <div class="row" style="margin-left: 0px">
                                                    <div class="col-sm-3">
                                                        <label>Bulan*</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="" id="" name="rt">
                                                               
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>Tahun*</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="" id="" name="rw">
                                                                
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Nama Pengisi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_promo" name="nama_promo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_promo" name="nama_promo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama_promo" name="nama_promo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Sumber data</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea name="deskripsi_promo" id="deskripsi_promo" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">* Field yang wajib diisi</label>

                                            </div> 
                                            <button type="submit" class="btn btn-success" onclick="tinyMCE.triggerSave(true,true);">Submit</button>
                                            
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                      </div>
                <!-- container-fluid -->

            </div>
            <!-- <script type="text/javascript">
                function check() {
                    var dropdown = document.getElementById("type_promo");
                    var current_value = dropdown.options[dropdown.selectedIndex].value;

                    if (current_value == "information") {
                        document.getElementById("jumlah").style.display = "block";
                    }
                    else {
                        document.getElementById("jumlah").style.display = "none";
                    }
                }
            </script> -->

<script type="text/javascript">
    $(document).ready(function() {
        loadMasterOutlet();
        $("form#form-data").submit(function(e) {
            $("#datepicker").datepicker({          
                format: 'YYYY-MM-DD' //can also use format: 'dd-mm-yyyy'     
            });
            console.log($('#datepicker').val());
            var konfirmasi = confirm("Simpan Data?");
            if(konfirmasi){
                e.preventDefault();    
                var formData = new FormData(this);
                // formData.append('informasi',$('#elm1').val());
                console.log(formData);
                $.ajax({
                    url : '<?php echo URL_API;?>/api/v1/promo' ,
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
                            // createAlert("notif_edit","success","Add Promo Success");
                            alert("Add Promo Success!");
                            window.location.replace('<?php echo site_url('admin/add_promo'); ?>');
                        }else{
                            alert(response.message);
                        }
                    },
                    error : function(response){
                        alert("Error, terjadi kendala saat tambah Promo!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            }else{
                return false;
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