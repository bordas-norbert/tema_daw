function submitForm(event) {
    if (event.keyCode === 13) {
      event.preventDefault();
      var input = document.getElementById("myInput").value;
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "comments.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          console.log(xhr.responseText);
        }
      };
      xhr.send("input=" + input);
    }
  }