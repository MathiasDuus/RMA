
let table;
console.log("Hello");

$(document).ready(function() {

    // to get initial values

    table = $('#example').DataTable({
        ajax: {
            'url': '/api/measurement',
            "dataSrc": "data"
        },
        // data: 'data',
        columns: [
            {"data": "attributes.temperature"},
            {"data": "attributes.humidity"},
            {"data": "attributes.light"},
            {"data": "attributes.location.school"},
            {"data": "attributes.location.room"},
            {"data": "attributes.created_at"}
        ],
        "order": []
    });



    // Runs every ten seconds.
    let intervalId = window.setInterval(function () {
        // Reloads the table, without moving user
        table.ajax.reload( null, false);
    }, 10000);

});



//
// function get_measurements()  {
//     // ajax GET request
//     $.get("/api/measurement", function (data, status) {
//         // Checks for success
//         if (status === 'success') {
//             // We only want the first element
//             let firstData = data[0];
//             // Formats a location string
//             let location = "School: " + firstData.attributes.location.school + "<br>Rum: " + firstData.attributes.location.room
//
//             // Writes all info to DOM
//             $("#location").html(location)
//             $("#temperature").text("Temperature: " + firstData.attributes.temperature)
//             $("#humidity").text("Humidity: " + firstData.attributes.humidity)
//             $("#light").text("Light: " + firstData.attributes.light)
//             set_data_table(data);
//
//         } else {
//             console.log("Data: " + data + "\n status: " + status)
//         }
//
//     });
//
// }
//

