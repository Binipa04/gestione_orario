function refresh() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        alert("Success")
    }
    xhttp.open("GET", "../pages/parser.php");
    xhttp.send();  
}
function update(str) {
    
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    }
    xhttp.open("GET", "../pages/parser.php?q=" + str);
    xhttp.send();   
}