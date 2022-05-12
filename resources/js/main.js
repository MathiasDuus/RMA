let first = true;
console.log("Hello");


$(window).on('load', function() {
    // to get initial values
    if (first){
        get_measurements();
        first = false;
    }

    // Runs every ten seconds.
    var intervalId = window.setInterval(function(){
        /// call your function here
        get_measurements();
    }, 10000);

    // Used to stop loop
    // clearInterval(intervalId)
});

function get_measurements() {
    // ajax GET request
    $.get("/api/measurement", function (data, status) {
        // Checks for success
        if (status === 'success') {
            // We only want the first element
            data = data[0];
            // Formats a location string
            let location = "School: " + data.attributes.location.school + "<br>Rum: " + data.attributes.location.room

            // Writes all info to DOM
            $("#location").html(location)
            $("#temperature").text("Temperature: " + data.attributes.temperature)
            $("#humidity").text("Humidity: " + data.attributes.humidity)
            $("#light").text("Light: " + data.attributes.light)

        } else {
            console.log("Data: " + data + "\n status: " + status)
        }

    });

}

