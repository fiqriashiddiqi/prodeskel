<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Voucher</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Voucher</a></li>
                                        <li class="breadcrumb-item active">Form Voucher</li>
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
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id_web_role" name="id_web_role">
                                                    <input type="text" class="form-control" id="title" name="title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Descriptions</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Term_Conditions</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea id="elm1" name="tnc"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-10">
                                                    
                                                    <input type="file" class="filestyle" name="gambar" data-buttonname="btn-secondary">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Product Value in IDR</label>
                                                <div class="col-sm-5">
                                                    <input type="number" class="form-control" id="point" name="point">
                                                    <label for="example-text-input" class="col-sm-8 col-form-label" style="color: red;">*generating points</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Type Voucher</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" id="type_voucher" name="jenis_voucher">
                                                        <option>Select</option>
                                                        <option value="diskon">Discount %</option>
                                                        <option value="potongan_harga">Disc Amount</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Discount Value</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="status_publikasi" name="status_publikasi" value="VISIBLE">
                                                    <input type="hidden" class="form-control" id="type_redeem" name="type_redeem" value="POINT">
                                                    <input type="text" class="form-control" id="value" name="value">
                                                    <label for="example-text-input" class="col-sm-8 col-form-label" style="color: red;">*in IDR or Percentage</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Posting Period</label>
                                                <div class="row" style="margin-left: 0px">
                                                    <div class="col-sm-3">
                                                        <label>Start Date</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker" name="start_date">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label>End Date</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="yyyy-mm-dd" id="datepicker1" name="end_date">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Outlet</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" id="id_master_outlets" name="id_master_outlets">
                                                        <option>Select</option>
                                                        
                                                    </select>
                                                </div>
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
                    url : '<?php echo URL_API;?>/api/v1/voucher' ,
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
                            // createAlert("notif_edit","success","Add Event Success");
                            alert("Add Voucher Success!");
                            window.location.replace('<?php echo site_url('admin/add_voucher'); ?>');
                        }else{
                            alert(response.message);
                        }
                    },
                    error : function(response){
                        alert("Error, terjadi kendala saat tambah Voucher!");
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