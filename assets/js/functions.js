function searchUser(userid, page, page_number){

    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tableBody").innerHTML = this.responseText;
        }
    };
    if(userid.length >= 4){
      xmlhttp.open("GET", "../includes/search.php?id=" + userid + "&page=" + page, true);
    }
    else {
      xmlhttp.open("GET", "../includes/search.php?id=" + userid + "&page=" + page + "&page_number=" + page_number, true);
    }
    xmlhttp.send();
}

function searchUserWithPhoneNumber(phone_number, page, page_number){
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("tableBody").innerHTML = this.responseText;
        }
    };
    if(phone_number.length >= 6){
      xmlhttp.open("GET", "../includes/phone_number_search.php?phone_number=" + phone_number + "&page=" + page, true);
    }
    else {
      xmlhttp.open("GET", "../includes/phone_number_search.php?phone_number=" + phone_number + "&page=" + page + "&page_number=" + page_number, true);
    }
    xmlhttp.send();
}
