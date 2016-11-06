var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};


conn.onmessage = function(e) {
    var message = document.getElementById('message');
    $('.progress-bar').attr('aria-valuenow', +e.data);
    $('.progress-bar').attr('style', 'width: '+ +e.data +'%');
    console.log(e.data);
};