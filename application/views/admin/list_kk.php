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
                                        <li class="breadcrumb-item active">Table List Data KK</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">List KK</h4>
                                        

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor KK</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Deskripsi</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>


                                            <tbody>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>123456879</td>
                                                <td>Fiqri </td>
                                                <td>02/03/2022</td>
                                                <td>Tambah Anggota</td>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit data" class="btn btn-primary" onclick="javascript:showModalEdit();return false;">
                                                        <span class="ion ion-md-create"></span>  
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>32515897556</td>
                                                <td>Ashiddiqi </td>
                                                <td>02/03/2022</td>
                                                <td>KK Baru</td>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit data" class="btn btn-primary" onclick="javascript:showModalEdit();return false;">
                                                        <span class="ion ion-md-create"></span>  
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>235459789523</td>
                                                <td>John Doe</td>
                                                <td>02/03/2022</td>
                                                <td>Tambah Anggota</td>
                                                <td>
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit data" class="btn btn-primary" onclick="javascript:showModalEdit();return false;">
                                                        <span class="ion ion-md-create"></span>  
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-success" onclick="tinyMCE.triggerSave(true,true);">Proses</button>
                                    </div>
                                </div>
                                
                            </div>
                             <!-- end col -->
                             
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
                                            <td>Event Name</td>
                                            <td>
                                                <input type="hidden" id="id_tbl_tan_event" name="id_tbl_tan_event" class="form-control" placeholder="Tipe Kamera" required>
                                                <input type="text" id="nama_event" name="nama_event" class="form-control" placeholder="Event Name" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Outlets</td>
                                            <td>
                                                
                                                <select id="id_master_outlets" name="id_master_outlets" class="form-control">
                                                    
                                                </select>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>
                                                 <textarea id="deskripsi" name="deskripsi" class="form-control" rows="4" placeholder="Description" required></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Event Date</td>
                                            <td>
                                                 <input type="date" id="datepicker" name="tanggal_event" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Start Date</td>
                                            <td>
                                                 <input type="date" id="datepicker1" name="start_date" class="form-control" placeholder="Nama" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>End Date</td>
                                            <td>
                                                 <input type="date" id="datepicker2" name="end_date" class="form-control" placeholder="Nama" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Highlight</td>
                                            <td>
                                                <select id="is_highlight" name="is_highlight" class="form-control">
                                                    <option value="true">True</option>
                                                    <option value="false">False</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Reservation URL</td>
                                            <td>
                                                <input type="text" id="booking_url" name="booking_url" class="form-control" placeholder="URL" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Image</td>
                                            <td>
                                                <!-- <input type="hidden" name="gambar" id="gambar"> -->
                                                <input type="file" id="gambar" name="gambar" class="form-control">
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
                                <h3 class="modal-title">Confirmation</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form_delete" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div id="notif_delete"></div>
                                    Are you sure delete this data? <br>
                                    <input type="hidden" id="id_tbl_tan_event" name="id_tbl_tan_event" class="form-control" placeholder="Tipe Kamera" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END MODAL EDIT -->
                <script type="text/javascript">
                    $(document).ready(function(){
                        
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

                    function loadMasterOutletSearch(){
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
                                        $("#id_master_outletss").append($('<option>',{
                                            value : item.nama_outlets,text : item.nama_outlets
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

                    function showModalEdit(id_tbl_tan_event){
                        $("#notif_edit").html('');

                        console.log();
                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/events-details/'+id_tbl_tan_event ,
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-Type": "application/json"
                                      },
                            method : 'GET',
        
                            success : function(response){
                                console.log(response);
                                console.log(id_tbl_tan_event);
                                if(response.statusCode == 200){
                                    event = response.result;
                                    console.log(event);   
                                    $("#id_tbl_tan_event").val(id_tbl_tan_event),
                                    $("#id_master_outlets").val(event[0].id_master_outlets),
                                    $("#nama_event").val(event[0].nama_event),
                                    $("#deskripsi").val(event[0].deskripsi),
                                    $("#is_highlight").val(event[0].is_highlight),
                                    $("#booking_url").val(event[0].booking_url),
                                    $("#datepicker").val(event[0].tanggal_event),
                                    $("#datepicker1").val(event[0].start_date),
                                    $("#datepicker2").val(event[0].end_date),
                                    // $("#gambar").val(event[0].gambar),
                                    $("#prev_gambar").attr("src","<?php echo URL_API;?>"+event[0].gambar)
                                    
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
                        
                        // console.log(file_gambar);
                        // console.log($("#edit_gambar").val());

                        var formData = new FormData(this);
                        var data_event = {
                            "id_tbl_tan_event": $("#id_tbl_tan_event").val(),
                            "id_master_outlets": $("#id_master_outlets").val(),
                            "nama_event": $("#nama_event").val(),
                            "deskripsi": $("#deskripsi").val(),
                            "is_highlight": $("#is_highlight").val(),
                            "booking_url": $("#booking_url").val(),
                            "tanggal_event": $("#datepicker").val(),
                            "start_date": $("#datepicker1").val(),
                            "end_date": $("#datepicker2").val(),
                            // "gambar": $("#edit_gambar").val()
                        };

                        var where = {
                            "id_tbl_tan_event" : $("#id_tbl_tan_event").val()
                        }

                        var data = {
                            "user" : data_event,
                            "where" : where
                        };

                        $.ajax({
                            url : '<?php echo URL_API; ?>/api/v1/update-events/'+$("#id_tbl_tan_event").val(),
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>"
                                      },
                            type: 'POST',
                            data: formData,
                            dataType : 'json',
                            success : function(response){
                                console.log(response);
                                if(response.statusCode == 200){
                                    window.location.replace('<?php echo site_url('admin/list_event'); ?>');
                                    // createAlert("notif_edit","success",response.message);
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

                    $("form#form_delete").submit(function(e) {
                        e.preventDefault();    
                        

                        $.ajax({
                            url : '<?php echo URL_API;?>/api/v1/delete-event/'+$("#id_tbl_tan_event").val(),
                            headers: {
                                        "Authorization":"Bearer <?php echo $this->session->userdata('sess_token');?>",
                                        "ax_users_id":"<?php echo $this->session->userdata('sess_id');?>",
                                        "Content-Type": "application/json"
                                    },
                            type: 'POST',
                            // data: JSON.stringify(data_user),
                            // dataType : 'json',
                            success : function(response){
                                console.log(response);
                                if(response.statusCode == 200){
                                    window.location.reload(true);
                                    createAlert("notif_delete","success","Success Delete Event!");
                                }else{
                                    createAlert("notif_delete","danger","Error Delete!");
                                }
                                
                            },
                            error : function(response){
                                createAlert("notif_delete","danger","Terjadi kendala saat terhubung ke server");
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    });


                function showModalDelete(id_tbl_tan_event){
                    $('#modal_delete').modal('show');
                    $("#id_tbl_tan_event").val(id_tbl_tan_event);
                }

                function createAlert(target,severity,message){
                    console.log(target +' - ' + severity + ' - ' + message);
                    $("#"+target).html('<div class="alert alert-'+severity+'">'+message+'</div>');
                }
                </script>

               