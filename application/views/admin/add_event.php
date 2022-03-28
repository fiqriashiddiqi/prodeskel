
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Event</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Event</a></li>
                                        <li class="breadcrumb-item active">Form Event</li>
                                    </ol>

                                </div>
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="notif_edit"></div>
                                        <form id="form-data" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <!-- <input type="hidden" class="form-control" id="id_web_role" name="id_web_role"> -->
                                                    <input type="text" class="form-control" id="nama_event" name="nama_event">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Descriptions</label>
                                                <div class="col-sm-10">
                                                    
                                                    <textarea name="deskripsi" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">File</label>
                                                <div class="col-sm-5">
                                                    
                                                    <input type="file" class="filestyle" name="gambar" data-buttonname="btn-secondary">
                                                    <label for="example-text-input" class="col-sm-8 col-form-label" style="color: red;">*Maximum upload file size: 2 MB & resolution : 1024x768 px</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-2">
                                                    <!-- <input type="hidden" class="form-control" id="id_web_role" name="id_web_role" value="1"> -->
                                                    <!-- <input type="text" class="form-control" id="input_date" name="input_date" placeholder="Every day, 8 am - 5 pm"> -->
                                                    <!-- <label>Default Functionality</label> -->
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="tanggal_event" placeholder="yyyy-mm-dd" id="datepicker">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Posting Period</label>
                                                <div class="row" style="margin-left: 0px">
                                                    <div class="col-sm-3">
                                                        <label>Start Date</label>
                                                        <div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="start_date" placeholder="yyyy-mm-dd" id="datepicker1">
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
                                                                <input type="text" class="form-control" name="end_date" placeholder="yyyy-mm-dd" id="datepicker2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                </div>
                                                            </div><!-- input-group -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Highlight</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" id="is_highlight" name="is_highlight">
                                                        <option>Select</option>
                                                        <option value="true">True</option>
                                                        <option value="false">False</option>
                                                        
                                                    </select>
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
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Link Booking (Weeloy)</label>
                                                <div class="col-sm-10">
                                                    <!-- <input type="hidden" class="form-control" id="id_web_role" name="id_web_role"> -->
                                                    <input type="text" class="form-control" id="booking_url" name="booking_url">
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
                    url : '<?php echo URL_API;?>/api/v1/events' ,
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
                            alert("Add Event Success!");
                            window.location.replace('<?php echo site_url('admin/add_event'); ?>');
                        }else{
                            alert(response.message);
                        }
                    },
                    error : function(response){
                        alert("Error, terjadi kendala saat tambah Event!");
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