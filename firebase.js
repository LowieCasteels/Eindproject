  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-analytics.js";
  import { signInWithEmailAndPassword, createUserWithEmailAndPassword, signOut, getAuth } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-auth.js";
  import { getFirestore, collection, addDoc } from "https://www.gstatic.com/firebasejs/9.17.1/firebase-firestore.js";
  import * as $ from 'https://cdn.pika.dev/jquery@^3.5.1';

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
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
  const auth = getAuth(app)
  const db = getFirestore(app)

  const registerForm = document.getElementById('registerForm');
  const loginForm = document.getElementById('loginForm');

  export function registreer() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('wachtwoord').value;

    const name = document.getElementById('naam').value;
    const city = document.getElementById('plaats').value;
    const street = document.getElementById('straat').value +''+ document.getElementById('huisnr').value;
    const postalCode = document.getElementById('postcode').value;
  
    console.log(email, password) 

    createUserWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      // Signed in 
      var user = userCredential.user;
      // ...
      document.cookie = "accessToken="+ user.accessToken
      // window.location.href = 'index.php'
      console.log(user)

      // var xmlhttp = new XMLHttpRequest();
      // xmlhttp.open("GET", "connectUserInfo.php?id=" + user.uid + "&email=" + email + "&name=" + name + "&city=" + city + "&street=" + street + "&postalCode=" + postalCode ,true);
      // xmlhttp.send();      
      $.ajax({url: "connectUserInfo.php?id=" + user.uid + "&name=" + name + "&city=" + city + "&street=" + street + "&postalCode=" + postalCode});
      // Je hebt hier user.uid
      // AJAX call naar een php file
      //  --> Maak je customer aan
      // In zelfde file maak je een document aan in firestore met beide IDs (echo script type='module')
    })
    .catch((error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
      // ..
      console.log(error, errorCode, errorMessage)
    });
  }

  
  
  export function login() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('wachtwoord').value;

    console.log(email, password)


    signInWithEmailAndPassword(auth, email, password)
    .then((userCredential) => {
      // Signed in
      var user = userCredential.user;
      document.cookie = "accessToken="+ user.accessToken
      window.location.href = 'index.php'
      // ...
    })
    .catch((error) => {

      console.log(error)

      var errorCode = error.code;
      var errorMessage = error.message;
    })
  }

  export function loguit(){
    signOut().then(() => {
      // Sign-out successful.
    }).catch((error) => {
      // An error happened.
    });
  }


  // Async = aSsinchronisch aasingronisch kweni
  // Export: uit module script kunnen krijgen (anders werkt het niet)
  // Zodat je await kunt doen
  // Await wacht tot het klaar is
  // addDoc(welke collectie, data)
  
  //  
  export async function connectUserInfo(firebaseId, stripeId){
    const user = await addDoc(collection(db, "gebruikers"), {
      firebaseId: firebaseId,
      stripeId: stripeId
    });

    console.log(user)
  }