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
                                        <li class="breadcrumb-item active">Table List Notification</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">List Notification</h4>
                                        

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Topic</th>
                                                <th>Body Message</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Point</td>
                                                <td>Segera datangi outlet TAN Group tinggal xxx point lagi untuk naik ke tier xxx!!</td>
                                                
                                                <td class="text-center">
                                                   
                                                    <a href="#" data-toogle="tooltip" data-placement="bottom" title="Edit Data" class="btn btn-primary" onclick="javascript:showModalEdit(1);return false;"><span class="ion ion-md-create"></span></a>
                                                </td>
                                            </tr>
                                            
                                            
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
                                            <td>NISN</td>
                                            <td>
                                                <input type="hidden" id="edit_id_siswa" name="edit_id_siswa" class="form-control" placeholder="Tipe Kamera" required>
                                                <input type="number" id="edit_nisn" name="edit_nisn" class="form-control" placeholder="NISN" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Siswa</td>
                                            <td>
                                                
                                                 <input type="text" id="edit_nama_siswa" name="edit_nama_siswa" class="form-control" placeholder="Nama" required>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td>
                                                 <input type="text" id="edit_tempat_lahir" name="edit_tempat_lahir" class="form-control" placeholder="Nama" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>
                                                 <input type="date" value="" id="edit_tanggal_lahir" name="edit_tanggal_lahir" class="form-control" placeholder="Nama" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NIK</td>
                                            <td>
                                                <input type="number" id="edit_nik" name="edit_nik" class="form-control" placeholder="NIK" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NIPD</td>
                                            <td>
                                                <input type="text" id="edit_nipd" name="edit_nipd" class="form-control" placeholder="NIPY" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>
                                                <input type="password" id="edit_password" name="edit_password" class="form-control" placeholder="Username" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ayah</td>
                                            <td>
                                                <input type="text" id="edit_ayah" name="edit_ayah" class="form-control" placeholder="Nama" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ibu</td>
                                            <td>
                                                <input type="text" id="edit_ibu" name="edit_ibu" class="form-control" placeholder="Nama" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>
                                                <select id="edit_jk" name="edit_jk" class="form-control" required>
                                                    <option value="L">Laki-laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>
                                                <input type="text" id="edit_alamat" name="edit_alamat" class="form-control" placeholder="Alamat" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>RT</td>
                                            <td>
                                                <input type="text" id="edit_rt" name="edit_rt" class="form-control" placeholder="RT" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>RW</td>
                                            <td>
                                                <input type="text" id="edit_rw" name="edit_rw" class="form-control" placeholder="RW" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dusun</td>
                                            <td>
                                                <input type="text" id="edit_dusun" name="edit_dusun" class="form-control" placeholder="Dusun">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kelurahan</td>
                                            <td>
                                                <input type="text" id="edit_kelurahan" name="edit_kelurahan" class="form-control" placeholder="Kelurahan" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td>
                                                <input type="text" id="edit_kecamatan" name="edit_kecamatan" class="form-control" placeholder="Kecamatan" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Telepon</td>
                                            <td>
                                                <input type="phone" id="edit_telepon" name="edit_telepon" class="form-control" placeholder="No Handphone" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input type="email" id="edit_email" name="edit_email" class="form-control" placeholder="Email">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Akun</td>
                                            <td>
                                                <select id="edit_status_kartu" name="edit_status_kartu" class="form-control" required>
                                                    <option value="AKTIF">AKTIF</option>
                                                    <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                                </select>
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

               