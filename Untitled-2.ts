<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDzwHUFQoz_xlmW-oppJnyKVsyNpWTw0_o",
    authDomain: "studyjulle.firebaseapp.com",
    projectId: "studyjulle",
    storageBucket: "studyjulle.appspot.com",
    messagingSenderId: "763790275343",
    appId: "1:763790275343:web:9ccd92ddb02549c9ef047a",
    measurementId: "G-1FCPMVTQH0"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

npm install -g firebase-tools