<!Doctype html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Smart Parking - Administrator Area</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/global/plugins/datatables/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url('assets/global/css/components.min.css'); ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url('assets/global/css/plugins.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url('assets/layouts/layout/css/layout.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/layouts/layout/css/themes/darkblue.min.css'); ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url('assets/layouts/layout/css/custom.min.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <script src="<?php echo base_url('assets/global/plugins/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.min.js" type="text/javascript"></script>
    </head>
    <!-- END HEAD -->
<body>    
    <div class="container container-fluid" style="margin-top:60px">
        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 1</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_a">-</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 2</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_b">-</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 3</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_c">-</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 4</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_d">-</span>
                    </div>
                </div>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 5</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_e">-</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 5</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_f">-</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 7</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_g">-</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Area 8</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="area_h">-</span>
                    </div>
                </div>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Gerbang Masuk</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="gate_in"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>Gerbang Keluar</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span id="gate_out"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    $("#gate_in").html("Silakan tap kartu untuk masuk.");
    $("#gate_out").html("Silakan tap kartu untuk keluar.");
    rnd = Math.floor(Math.random() * (99999 - 1 + 1) ) + 1;
    //////-------------------------------GATE IN-----------------------------------//////

    var clientGateIn = new Paho.MQTT.Client("144.217.86.1", Number(9001), rnd.toString() + "IN");

    clientGateIn.onConnectionLost = onConnectionLostGI;
    clientGateIn.onMessageArrived = onMessageArrivedGI;

    clientGateIn.connect({
        onSuccess: onConnectGI,
        userName : "renzcybermedia",
        password : "laurens23"
    });


    function onConnectGI() {
        console.log("onConnect");
        clientGateIn.subscribe("sp_ibad/gate_in");
        message = new Paho.MQTT.Message("Hello");
        // message.destinationName = "instruksi";
        // clientGateIn.send(message);

    }

    function onConnectionLostGI(responseObject) {
        if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:"+responseObject.errorMessage);
        }
    }

    function onMessageArrivedGI(message) {
        console.log("onMessageArrived:" + message.payloadString);
        $("#gate_in").html(message.payloadString);
        var msg = new SpeechSynthesisUtterance(message.payloadString);
        msg.voiceURI = "native";
        msg.volume = 1;
        msg.rate = 1;
        msg.pitch = 0.8;
        msg.lang = 'id-ID';
        window.speechSynthesis.speak(msg);
        // wait(5000);
        // $("#gate_in").html("Silakan tap kartu untuk masuk.");
    }

    //////-------------------------------GATE OUT-----------------------------------//////

    var clientGateOut = new Paho.MQTT.Client("144.217.86.1", Number(9001), rnd.toString() + "OUT");

    clientGateOut.onConnectionLost = onConnectionLostGO;
    clientGateOut.onMessageArrived = onMessageArrivedGO;

    clientGateOut.connect({
        onSuccess: onConnectGO,
        userName : "renzcybermedia",
        password : "laurens23"
    });


    function onConnectGO() {
        console.log("onConnect");
        clientGateOut.subscribe("sp_ibad/gate_out");
        message = new Paho.MQTT.Message("Hello");
        message.destinationName = "instruksi";
        clientGateOut.send(message);
    }

    function onConnectionLostGO(responseObject) {
        if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:"+responseObject.errorMessage);
        }
    }

    function onMessageArrivedGO(message) {
        console.log("onMessageArrived:" + message.payloadString);
        $("#gate_out").html(message.payloadString);
        var msg = new SpeechSynthesisUtterance(message.payloadString);
        msg.voiceURI = "native";
        msg.volume = 1;
        msg.rate = 1;
        msg.pitch = 0.8;
        msg.lang = 'id-ID';
        window.speechSynthesis.speak(msg);
        // wait(5000);
        // $("#gate_out").html("Silakan tap kartu untuk keluar.");
    }

    //////-------------------------------GATE Area PArkir-----------------------------------//////

    var clientAreaParkir = new Paho.MQTT.Client("144.217.86.1", Number(9001), rnd.toString() + "AP");

    clientAreaParkir.onConnectionLost = onConnectionLostAP;
    clientAreaParkir.onMessageArrived = onMessageArrivedAP;

    clientAreaParkir.connect({
        onSuccess: onConnectAP,
        userName : "renzcybermedia",
        password : "laurens23"
    });


    function onConnectAP() {
        console.log("onConnect");
        clientAreaParkir.subscribe("sp_ibad/area_parkir");
        message = new Paho.MQTT.Message("Hello");
        // message.destinationName = "instruksi";
        // clientAreaParkir.send(message);

    }

    function onConnectionLostAP(responseObject) {
        if (responseObject.errorCode !== 0) {
            console.log("onConnectionLost:"+responseObject.errorMessage);
        }
    }

    function onMessageArrivedAP(message) {
        console.log("onMessageArrived:" + message.payloadString);
        incoming = JSON.parse(message.payloadString);
        $("#area_a").html(incoming.area_parkir.area_a);
        $("#area_b").html(incoming.area_parkir.area_b);
        $("#area_c").html(incoming.area_parkir.area_c);
        $("#area_d").html(incoming.area_parkir.area_d);
        $("#area_e").html(incoming.area_parkir.area_e);
        $("#area_f").html(incoming.area_parkir.area_f);
        $("#area_g").html(incoming.area_parkir.area_g);
        $("#area_h").html(incoming.area_parkir.area_h);
        
    }

    function wait(ms){
        var start = new Date().getTime();
        var end = start;
        while(end < start + ms) {
            end = new Date().getTime();
        }
    }

    </script>

        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
        <script src="<?php echo base_url('assets/global/plugins/respond.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/global/plugins/excanvas.min.js'); ?>"></script> 
        <script src="<?php echo base_url('assets/global/plugins/ie8.fix.min.js'); ?>"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/js.cookie.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/jquery.blockui.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url('assets/global/scripts/app.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url('assets/layouts/layout/scripts/layout.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/layout/scripts/demo.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/global/scripts/quick-sidebar.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/layouts/global/scripts/quick-nav.min.js'); ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>