<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.12.1/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.12.1/firebase-database.js";
  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBFVoHFqx3tsBraMBqKI8VgkLMpygLI5Mo",
    authDomain: "group-video-chat-b05c3.firebaseapp.com",
    projectId: "group-video-chat-b05c3",
    storageBucket: "group-video-chat-b05c3.appspot.com",
    messagingSenderId: "365294478951",
    appId: "1:365294478951:web:c080518bca0d5beb2456c2"
  };
    var message = document.getElementById("message").value;

    firebase.database().ref("messages").push().set({
      "sender": myName,
      "message": message,
    });

    return false;
  }
</script>

<form onsubmit="return sendMessage();">
  <input id="message" placeholder="Enter message" autocomplete="off">
  <input type="submit"
</form>