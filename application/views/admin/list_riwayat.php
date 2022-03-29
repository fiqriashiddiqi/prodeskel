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
                                        <li class="breadcrumb-item active">Table List Riwayat</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">List Riwayat</h4>
                                        

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor KK</th>
                                                <th>Nama Kepala Keluarga</th>
                                                <th>Tanggal Proses</th>
                                                <th>Petugas</th>
                                                <th>Deskripsi</th>
                                                
                                            </tr>
                                            </thead>


                                            <tbody>
                                            
                                            <tr>
                                                <td>1</td>
                                                <td>123456879</td>
                                                <td>Fiqri </td>
                                                <td>02/03/2022 : 14:00:00</td>
                                                <td>Sukirman</td>
                                                <td>Mutasi</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>32515897556</td>
                                                <td>Ashiddiqi </td>
                                                <td>02/03/2022 : 14:00:00</td>
                                                <td>Sukirman</td>
                                                <td>KK Baru</td>
                                                                                               
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>235459789523</td>
                                                <td>John Doe</td>
                                                <td>02/03/2022 : 14:00:00</td>
                                                <td>Sukirman</td>
                                                <td>Mutasi</td>
                                                
                                                
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                        
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
                        $('#datatable').DataTable();
                        //Buttons examples
                        var table = $('#datatable-buttons').DataTable({
                            
                            "buttons": ['copy', 'excel', 'csv', 'pdf', 'colvis']
                        });
                        
                    });
                    
                </script>

               