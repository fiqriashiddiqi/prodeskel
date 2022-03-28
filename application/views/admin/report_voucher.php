<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Data Table</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Table Report</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Voucher Report</h4>
                                        

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Active Voucher</th>
                                                <th>Used Voucher</th>
                                                
                                                
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
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#datatable').DataTable();
                        // Buttons examples
                        var table = $('#datatable-buttons').DataTable({
                            "processing": true,
                            "serverSide": true,
                            "ajax": {
                                "url" : "<?php echo URL_API;?>/api/v1/report-voucher-datatables",
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
                            },
                            // "lengthChange": false,
                            "lengthMenu":[[10, 25, 50, 1000000], [10, 25, 50, "All"]],
                            "buttons": ['copy', 'excel', 'csv', 'pdf', 'colvis'],
                            
                            "initComplete": function(settings, json) {
                                table.buttons().container()
                                    .appendTo( $('#datatable-buttons_wrapper .col-md-6:eq(0)' ) );
                            }
                        });
                        
                    });
                </script>

   
