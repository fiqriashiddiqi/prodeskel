var client = new Paho.MQTT.Client("51.79.159.110", Number(9001), "RANDOM_ID");

client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

client.connect({
    onSuccess: onConnect,
    userName : "renzcybermedia",
    password : "laurens23"
});

function onConnect() {
    console.log("onConnect");
    client.subscribe("tan/#");
    message = new Paho.MQTT.Message("{\"title\":\"Notifikasi\",\"content\":\"Hello, connected\"}");
    message.destinationName = "tan";
    client.send(message);
}

function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
        console.log("onConnectionLost:"+responseObject.errorMessage);
    }
}

function onMessageArrived(message) {
    console.log(message.payloadString);
    console.log(message.destinationName);
    if(message.destinationName == "tan/promo/all" || message.destinationName == "tan/event/all"){
        alert("Push Notification Success!");
        window.location.reload();
    }
}