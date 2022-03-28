<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Data Table</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:Eventvoid(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table List Carousel</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">List Carousel</h4>
                                        

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Image Header</th>
                                                <th>Order</th>
                                                
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
                                            <td>Image Header</td>
                                            <td>
                                                <!-- <input type="hidden" name="gambar" id="gambar"> -->
                                                 <input type="hidden" id="id_master_carousell" name="id_master_carousell" class="form-control" placeholder="Tipe Kamera" required>
                                                <input type="hidden" id="order_bg" name="order_bg" class="form-control" placeholder="Title" required>
                                                <input type="file" id="bg_carousell" name="bg_carousell" class="form-control">
                                                <label for="example-text-input" class="col-sm-12 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                <img class="img-thumbnail" id="prev_gambar" alt="200x200" width="200" src="" data-holder-rendered="true">
                                            </td>
                                        </tr>
                                        
                                        
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
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
                                <h3 class="modal-title">Konfirmasi</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_delete" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div id="notif_delete"></div>
                                    Hapus data ? <br>
                                    <input type="hidden" id="delete_id_siswa" name="delete_id_siswa" class="form-control" placeholder="Tipe Kamera" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
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
                                "url" : "<?php echo URL_API;?>/api/v1/list-all-carousell",
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
                    
                    function showModalEdit(id_master_carousell){
                        $("#notif_edit").html('');

                        console.log();
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/carousell-details/'+id_master_carousell ,
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
                                    promo = response.result;
                                    console.log(promo);   
                                    $("#id_master_carousell").val(id_master_carousell)
                                    $("#order_bg").val(promo[0].order_bg),
                                    
                                    $("#prev_gambar").attr("src","<?php echo URL_API;?>"+promo[0].bg_carousell)
                                    
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
                        // console.log($("#edit_id_master_outlets").val());
                        // const input = document.querySelector("input[type=file]");    
                        var gambar = document.getElementById('edit_gambar');
                        var hidden = document.getElementById('gambar');
                        var file_gambar = null;
                        
                        var formData = new FormData(this);
                        

                        $.ajax({
                            url : '<?php echo URL_API; ?>/api/v1/update-carousell/'+$("#id_master_carousell").val(),
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>"
                                      },
                            type: 'POST',
                            data: formData,
                            dataType : 'json',
                            success : function(response){
                                console.log(response);
                                // console.log(data);
                                if(response.statusCode == 200){
                                    // window.location.replace('<?php echo site_url('admin/list_promo'); ?>');
                                    // createAlert("notif_edit","success",response.message);
                                    console.log($("#datepicker").val());
                                    alert("Sukses");
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

               