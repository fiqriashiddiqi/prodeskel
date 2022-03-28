<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                    <h4 class="page-title">Push Notification</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Push Notification</a></li>
                                        <li class="breadcrumb-item active">Form Push Notification</li>
                                    </ol>

                                </div>
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                       
        
                                        <form id="form_notifikasi" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Body Message</label>
                                                <div class="col-sm-10">
                                                    <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 col-form-label">Topic</label>
                                                <div class="col-sm-3">
                                                    <select class="form-control" id="topic" name="topic">
                                                        <option>Select</option>
                                                        <option value="tan/promo/all">Promo Notification </option>
                                                        <option value="tan/event/all">Event Notification</option>
                                                    </select>
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
    
    $("#form_notifikasi").submit(function(e) {
        e.preventDefault(); 
        var form = $(this);
        var url = form.attr('action');
        var jsonMQTTMessage = {
            title : $("#title").val(),
            content : $("#content").val()
        }
        console.log(jsonMQTTMessage);
        kirimNotifikasi($("#topic").val(), JSON.stringify(jsonMQTTMessage));               
    });

    function kirimNotifikasi(strTopic,strMessage){
        message = new Paho.MQTT.Message(strMessage);
        message.destinationName = strTopic;
        client.send(message);
    }
        
</script>