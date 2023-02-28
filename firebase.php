<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDmC7RutQUvc5x7INiXjhqpDXIGmhgXrr4",
    authDomain: "vop-6if.firebaseapp.com",
    databaseURL: "https://vop-6if-default-rtdb.europe-west1.firebasedatabase.app",
    projectId: "vop-6if",
    storageBucket: "vop-6if.appspot.com",
    messagingSenderId: "318912216964",
    appId: "1:318912216964:web:edd20ffdf7a2294b8b27d1",
    measurementId: "G-K7R8QVNL84"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

<script src="firebase.js"></script>