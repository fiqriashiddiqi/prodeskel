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
        
                                       
                                        <h3>Checkout Bottle</h3>
                                        <form id="form-data" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Code</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="keeping_bottle_code" name="keeping_bottle_code" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Customer Name</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" class="form-control" id="id_master_customer" name="id_master_customer" value="<?php echo $this->uri->segment(3);?>">
                                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" readonly>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    
                                                    <input type="text" class="form-control" id="msisdn" name="msisdn" disabled>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Outlet</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="outlets" name="outlets" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Bottle</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="merk_bottle" name="merk_bottle" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Volume (ml)</label>
                                                <div class="col-sm-3">
                                                    <input type ="text" class="form-control" id="uom" name="uom" readonly>
                                                        
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Picture</label>
                                                <div class="col-sm-10">
                                                    
                                                <img class="img-thumbnail" id="prev_gambar" alt="200x200" width="200" src="" data-holder-rendered="true">
                                                </div>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success">Checkout</button>
                                            
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
        loadKeepBottle();
        loadMasterBottle();
        const code = "<?php echo $this->uri->segment(3);?>"
        $("form#form-data").submit(function(e) {
            
            var konfirmasi = confirm("Checkout?");
            if(konfirmasi){
                e.preventDefault();    
                var formData = new FormData(this);
                // formData.append('informasi',$('#elm1').val());
                console.log(formData);
                $.ajax({
                    url : '<?php echo URL_API;?>/api/v1/use-keeping-bottle/'+code ,
                    headers: {
                                "Authorization": "Bearer <?php echo $this->session->userdata('sess_token');?>",
                                "ax_users_id": "<?php echo $this->session->userdata('sess_id');?>",
                                "Content-Type": "application/json"
                            },
                    method : 'GET',

                    success : function(response){
                        console.log(response);
                        if(response.statusCode == 200){
                            createAlert("notif_edit","success","Checkout Bottle Success!")
                            window.location.replace('<?php echo site_url('admin/success'); ?>');

                        }else{
                            createAlert("notif_edit","warning",response.statusDescription);
                        }
                    },
                    error : function(response){
                        createAlert("notif_edit","warning","Terjadi kendala saat terhubung ke server");
                    },
                });
            } 
        });
        
        
        
    });
    
    function loadKeepBottle(){
        const code = "<?php echo $this->uri->segment(3);?>"
        $.ajax({
            url : '<?php echo URL_API;?>/api/v1/get-keeping-bottle/'+code ,
            headers: {
                        "Authorization": "Bearer <?php echo $this->session->userdata('sess_token');?>",
                        "ax_users_id": "<?php echo $this->session->userdata('sess_id');?>",
                        "Content-Type": "application/json"
                      },
            method : 'GET',

            success : function(response){
                console.log(response);
                if(response.statusCode == 200){
                    bottle = response.result;
                    merk = bottle[0].bottle_merk;
                    volume = bottle[0].uom;
                    nama = bottle[0].nama_lengkap;
                    image = bottle[0].image_bottle;
                    outlet = bottle[0].nama_outlets;

                    $("#keeping_bottle_code").val(code);
                    $("#nama_lengkap").val(nama);
                    $("#merk_bottle").val(merk);
                    $("#uom").val(volume);
                    $("#outlets").val(outlet);
                    $("#prev_gambar").attr("src","<?php echo URL_API;?>"+bottle[0].image_bottle)


                }else{
                    createAlert("notif_edit","warning",response.statusDescription);
                }
            },
            error : function(response){
                createAlert("notif_edit","warning","Terjadi kendala saat terhubung ke server");
            },
        });
    }

    function loadMasterBottle(){
        $.ajax({
            url : '<?php echo URL_API;?>/api/v1/list-master-bottle' ,
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
                        $("#id_master_bottle").append($('<option>',{
                            value : item.id_master_bottle,text : item.bottle_merk
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

    function createAlert(target,severity,message){
        console.log(target +' - ' + severity + ' - ' + message);
        $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
    }
</script>