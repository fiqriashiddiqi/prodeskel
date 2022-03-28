<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Smart Parking - Administrator Area</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> 
        <script src="<?php echo base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
        </head>
    <!-- END HEAD -->

    <body onload="cek()">
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Laporan Transaksi Pada Sistem Smart Parking</h3>
                    <h4>Periode <?php echo $this->uri->segment(3); ?> sampai dengan <?php echo $this->uri->segment(4); ?></h4>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">User <br> Nomor Kartu</th>
                                <th class="text-center">Tipe Transaksi <br> Tanggal Transaksi <br> Kode Referensi</th>
                                <th class="text-center">DR</th>
                                <th class="text-center">CR</th>
                                <th class="text-center">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody id="tbl_laporan">
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script>
            
        function cek(){
            var where = {
                "tanggal_awal" : '<?php echo $this->uri->segment(3); ?>',
                "tanggal_akhir" : '<?php echo $this->uri->segment(4); ?>'
            }

            var data = {
                "where" : where
            };

            $.ajax({
                url : '<?php echo site_url("api/laporan_check/"); ?>' ,
                type: 'POST',
                data: JSON.stringify(data),
                dataType : 'json',
                success : function(response){
                    console.log(response);
                    if(response.severity == "success"){
                        transaksi = response.content.transaksi;
                        if(transaksi.length > 0){
                            str = '';
                            ctr = 1;
                            sum_dr = 0;
                            sum_cr = 0;
                            for(var c=0;c<transaksi.length;c++){
                                nominal_dr = '';
                                nominal_cr = '';
                                tipe_transaksi = (transaksi[c].ref.substr(0,2)) == "TU" ? "TOPUP" : "BAYAR PARKIR";
                                str += '<tr>';
                                str += '<td>' + ctr + '</td>';
                                str += '<td>' + transaksi[c].user[0].nama + '<br>';
                                str += transaksi[c].user[0].nomor_kartu + '</td>';
                                str += '<td>' + tipe_transaksi + '<br>'  + transaksi[c].datetime + '<br>';
                                str += transaksi[c].ref + '</td>';
                                if(transaksi[c].tipe_transaksi == "DR"){
                                    nominal_dr = transaksi[c].nominal;
                                    sum_dr += parseInt(nominal_dr);
                                }

                                if(transaksi[c].tipe_transaksi == "CR"){
                                    nominal_cr = transaksi[c].nominal;
                                    sum_cr += parseInt(nominal_cr);
                                }

                                str += '<td>' + formatRupiah(nominal_dr.toString(),"Rp ")  + '</td>';
                                str += '<td>' + formatRupiah(nominal_cr.toString(),"Rp ") + '</td>';
                                str += '<td></td>';
                                str += '</tr>';
                                ctr++;
                            }
                            saldo = sum_cr - sum_dr
                            str += '<tr>';
                            str += '<th colspan="3">Total Transaksi</th>';
                            str += '<th>' + formatRupiah(sum_dr.toString(),"Rp ") + '</th>';
                            str += '<th>' + formatRupiah(sum_cr.toString(),"Rp ")  + '</th>';
                            str += '<th></th>';
                            str += '</tr>';
                            str += '<tr>';
                            str += '<th colspan="4">Saldo Aktif</th>';
                            str += '<th>' + formatRupiah(saldo.toString(),"Rp ") + '</th>';
                            str += '<th></th>';
                            str += '</tr>';
                            $("#tbl_laporan").html(str);
                            window.print();
                        }
                    }else{
                        createAlert("notif_laporan",response.severity,response.message);
                    }
                    
                },
                error : function(response){
                    createAlert("notif_laporan","danger","Terjadi kendala saat terhubung ke server");
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }

        function createAlert(severity,message){
            $("#notif_login").html('<div class="alert alert-'+severity+'">'+message+'</div>');
        }

        function formatRupiah(angka, prefix){
            var number_string = angka.replace(/[^,\d]/g, '');
            split   		= number_string.split(',');
            sisa     		= split[0].length % 3;
            rupiah     		= split[0].substr(0, sisa);
            ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
            if(ribuan){
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp ' + rupiah + ',00': '');
        }
        </script>
    </body>
</html>