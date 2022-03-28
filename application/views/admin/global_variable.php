<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Form</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Form</a></li>
                                        <li class="breadcrumb-item active">Form Global Variable</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">List Global Variable</h4>
                                        
                                        <form id="form_edit" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div id="notif_edit"></div>
                                                
                                                <table class="table table-bordered">
                                                    
                                                    <tr>
                                                        <td>Default Multiplier Point Silver (%)</td>
                                                        <td>
                                                             <input type="text" name="SILVER" id="SILVER" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Multiplier Point Gold (%)</td>
                                                        <td>
                                                             <input type="text" name="GOLD" id="GOLD" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Multiplier Point Black (%)</td>
                                                        <td>
                                                            <input type="hidden" name="id_master_param_global" id="id_master_param_global" value="1">
                                                             <input type="text" name="BLACK" id="BLACK" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Point Redeemed (%)</td>
                                                        <td>
                                                             <input type="text" name="point_multiplier" id="point_multiplier" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Point Silver</td>
                                                        <td>
                                                             <input type="number" name="default_silver" id="default_silver" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Point Gold</td>
                                                        <td>
                                                             <input type="number" name="default_gold" id="default_gold" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Point Black</td>
                                                        <td>
                                                             <input type="number" name="default_black" id="default_black" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Price Gold</td>
                                                        <td>
                                                             <input type="number" name="default_gold_price" id="default_gold_price" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Default Price Black</td>
                                                        <td>
                                                             <input type="number" name="default_black_price" id="default_black_price" class="form-control" placeholder="" >
                                                             
                                                        </td>
                                                    </tr>
                                                </table> 
                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> -->
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>

                                        

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                    <!-- container-fluid -->

                </div>

                

                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#notif_edit").html('');

                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/param-global' ,
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-Type": "application/json"
                                      },
                            method : 'GET',
        
                            success : function(response){
                                console.log(response);
                                // console.log(id_tbl_tan_event);
                                if(response.statusCode == 200){
                                    param = response.result;
                                    console.log(param[0]);   
                                    $("#id_master_param_global").val(),
                                    $("#SILVER").val(param[0].SILVER),
                                    $("#GOLD").val(param[0].GOLD),
                                    $("#BLACK").val(param[0].BLACK),
                                    $("#point_multiplier").val(param[0].point_multiplier),
                                    $("#default_silver").val(param[0].default_silver),
                                    $("#default_gold").val(param[0].default_gold),
                                    $("#default_black").val(param[0].default_black),
                                    $("#default_gold_price").val(param[0].default_gold_price),
                                    $("#default_black_price").val(param[0].default_black_price)
                                    
                                }else{
                                    createAlert("notif_edit","warning",response.statusDescription);
                                }
                            },
                            error : function(response){
                                createAlert("notif_edit","warning","Terjadi kendala saat terhubung ke server");
                            },
                        });
                    });

                    $("form#form_edit").submit(function(e) {
                        e.preventDefault();
                        
                        var data_promo = {
                            "id_master_param_global": $("#id_master_param_global").val(),
                            "SILVER": $("#SILVER").val(),
                            "GOLD": $("#GOLD").val(),
                            "BLACK": $("#BLACK").val(),
                            "point_multiplier": $("#point_multiplier").val(),
                            "default_silver": $("#default_silver").val(),
                            "default_gold": $("#default_gold").val(),
                            "default_black": $("#default_black").val(),
                            "default_gold_price": $("#default_gold_price").val(),
                            "default_black_price": $("#default_black_price").val()
                            
                        };

                        var where = {
                            "id_master_param_global" : $("#id_master_param_global").val()
                        }

                        var data = {
                            "user" : data_promo,
                            "where" : where
                        };

                        $.ajax({
                            url : '<?php echo URL_API; ?>/api/v1/update-param',
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-type": "application/json"
                                      },
                            type: 'POST',
                            data: JSON.stringify(data_promo),
                            dataType : 'json',
                            success : function(response){
                                console.log(response);
                                // console.log(data);
                                if(response.statusCode == 200){
                                    // window.location.replace('<?php echo site_url('admin/list_promo'); ?>');
                                    createAlert("notif_edit","success","Success Edit!");
                                   
                                    
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

                    function createAlert(target,severity,message){
                    console.log(target +' - ' + severity + ' - ' + message);
                    $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
                    }
                </script>