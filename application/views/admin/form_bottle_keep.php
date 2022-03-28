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
        
                                       
                                        <h3>Keeping Bottle</h3>
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
                                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                                                <div class="col-sm-10">
                                                    
                                                    <input type="text" class="form-control" id="msisdn" name="msisdn" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Outlet</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" id="id_master_outlets" name="id_master_outlets" required>
                                                        <option>Select</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Bottle</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control select2" id="id_master_bottle" name="id_master_bottle" required>
                                                        <option>Select</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Volume</label>
                                                <div class="col-sm-3">
                                                    <input type ="number" class="form-control" id="uom" name="uom" placeholder="point, example: 0.3, 0.5 etc" required>
                                                        
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                                                <div class="col-sm-10">
                                                    <img class="img-thumbnail" id="prev_gambar" alt="200x200" width="200" src="" data-holder-rendered="true">
                                                    <!-- <input type="file" class="filestyle" name="bottle_image" data-buttonname="btn-secondary" required> -->
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

    var listBotol;

    $(document).ready(function() {
        loadMasterOutlet();
        loadMasterBottle();
        generateCode();
       
        const id = "<?php echo $this->uri->segment(3);?>"
        const nama = "<?php echo $this->uri->segment(4);?>"
        const msisdn = "<?php echo $this->uri->segment(5);?>"

        $("#nama_lengkap").val(decodeURI(nama));
        $("#msisdn").val(msisdn);
        $("id_master_customer").val(id);

        $("form#form-data").submit(function(e) {
            
            var konfirmasi = confirm("Simpan Data?");
            if(konfirmasi){
                e.preventDefault();    
                var formData = new FormData(this);
                // formData.append('informasi',$('#elm1').val());
                console.log(formData);
                $.ajax({
                    url : '<?php echo URL_API;?>/api/v1/keeping-bottle' ,
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
                            alert("Add Bottle Success!");
                            window.location.replace('<?php echo site_url('admin/success_keeping'); ?>');
                        }else{
                            alert(response.message);
                        }
                    },
                    error : function(response){
                        alert("Error, terjadi kendala saat tambah Bottle!");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
            } 
        });

        $('#id_master_bottle').on('change', function(){
            let currentId = this.value;
            for(var x=0;x<listBotol.length;x++){
                if(listBotol[x].id_master_bottle == currentId){
                    $("#prev_gambar").attr("src","<?php echo URL_API;?>"+listBotol[x].image_bottle);
                }
            }
        })   
    });
    
    
    function loadMasterOutlet(){
        $.ajax({
            url : '<?php echo URL_API;?>/api/v1/outlet-list-server' ,
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
                    listBotol = items;
                    console.log(listBotol);
                    $.each(items,function(i,item){
                        $("#id_master_bottle").append($('<option>',{
                            value : item.id_master_bottle,text : item.bottle_merk
                        }));
                        // disini me 
                        //$("#prev_gambar").attr("src","<?php echo URL_API;?>"+item.image_bottle);
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

    function generateCode(){
        $.ajax({
            url : '<?php echo URL_API;?>/api/v1/generate-keeping-code' ,
            // headers: {
            //             "Authorization": "Bearer <?php echo $this->session->userdata('sess_token');?>",
            //             "ax_users_id": "<?php echo $this->session->userdata('sess_id');?>",
            //             "Content-Type": "application/json"
            //           },
            method : 'GET',

            success : function(response){
                console.log(response);
                if(response.statusCode == 200){
                    code = response.result;
                    $("#keeping_bottle_code").val(code.code);

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