
<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <title>Ma première page avec du style</title>
</head>

<body>

<!-- Menu de navigation du site -->
<ul class="navbar">
  <li><a href="index.html">Home page</a>
  <li><a href="reflexions.html">Réflexions</a>
  <li><a href="ville.html">Ma ville</a>
  <li><a href="liens.html">Liens</a>
</ul>

<!-- Contenu principal -->
<h1>Ma première page avec du style</h1>

<p>Bienvenue sur ma page avec du style! 

<p>Il lui manque des images, mais au moins, elle a du style. Et elle a desliens, même s'ils ne mènent nulle part...
&hellip;

<p>Je devrais étayer, mais je ne sais comment encore.

<!-- Signer et dater la page, c'est une question de politesse! -->
<address>Fait le 5 avril 2004<br>
  par moi.</address>
<script type="module">

  // Import the functions you need from the SDKs you need

  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-app.js";

  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.0/firebase-analytics.js";

  // TODO: Add SDKs for Firebase products that you want to use

  // https://firebase.google.com/docs/web/setup#available-libraries


  // Your web app's Firebase configuration

  // For Firebase JS SDK v7.20.0 and later, measurementId is optional

  const firebaseConfig = {

    apiKey: "AIzaSyAA6ivv8uB1lBTxoaT2MyjqkSj4YJD3e5Y",

    authDomain: "projetcloudcompu.firebaseapp.com",

    projectId: "projetcloudcompu",

    storageBucket: "projetcloudcompu.appspot.com",

    messagingSenderId: "583578801932",

    appId: "1:583578801932:web:0bf2ed50e8c97aa16ddb29",

    measurementId: "G-RCVK6QZE80"

  };


  // Initialize Firebase

  const app = initializeApp(firebaseConfig);

  const analytics = getAnalytics(app);

</script>
</body>
</html>

</html>