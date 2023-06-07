document.querySelectorAll("#deleteComment").forEach(function(button) {
    button.addEventListener("click", function() {
      var commentId = this.getAttribute("commentNr")
        console.log(commentId)
      // Output the button ID to the console
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "deleteComment.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Request successful, do something with the response if needed
          console.log('reload')
          location.reload();
        }
      };
      xhr.send("commentId=" + commentId);
      // Send an AJAX request or perform any other desired actions
    });
  });
  