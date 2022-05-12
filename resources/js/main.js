
console.log("Hello");


$(window).on('load', function() {
    // Send post request to php to get data from the API
    get_measurements();
});

function get_measurements(){
    $.get("/api/measurement", function(data, status){
        console.log("Data: " + JSON.stringify(data) + "\nStatus: " + status);
    });

}

