function loadBooks(genre) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200)
      document.getElementById("books").innerHTML = this.responseText;
  }
  xmlhttp.open("GET", "select.php?category="+genre, true);
  xmlhttp.send();
}