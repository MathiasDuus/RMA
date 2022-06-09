let table;

$(document).ready(function() {

    // Run if on the history tab
    if (window.location.href.indexOf("history") > -1) {
        historyTable()
    }
    // Run if on home tab
    else{
        home();
    }

});

function home(){
    let ajax_call = function() {
        $.get("/api/measurement",
            function(data){
                let info = data.data[0].attributes;
                // console.log(info)
                $('#temperature').html('Temperatur:' + info.temperature)
                $('#humidity').html('Humidity:' + info.humidity)
                $('#light').html('Light:' + info.light)
            });
    };

    ajax_call();
    let interval = 1000 * 2;

    setInterval(ajax_call, interval);
}


function historyTable(){
    // to get initial values

    table = $('#example').DataTable({
        ajax: {
            'url': '/api/measurement',
            "dataSrc": "data"
        },
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
}
