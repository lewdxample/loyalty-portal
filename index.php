<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyCygy3R5DruA3dV-PwkhaZou5h2Gl3SDho",
        authDomain: "f-db-e6169.firebaseapp.com",
        databaseURL: "https://f-db-e6169.firebaseio.com",
        projectId: "f-db-e6169",
        storageBucket: "f-db-e6169.appspot.com",
        messagingSenderId: "1055407543897",
        appId: "1:1055407543897:web:a3ff37a0559d66d6"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    </script>
    <script>
    //   if('serviceWorker' in navigator) {
    //     navigator.serviceWorker.register('/service-worker.js')
    //       .then(function() {
    //             console.log('Service Worker Registered');
    //     });
    //   }
      if("serviceWorker" in navigator){
		window.addEventListener('load',function(){
			navigator.serviceWorker.register('/service-worker.js')
			.then(function(){
				console.log('ServiceWorker Registered');
			})
			.catch(function(){
				console.log('ServiceWorker not Registered');
			});
		})
	}else{
		console.log("Serviceworker not supported");
	}
    </script>
    <title>Document</title>
</head>
<body>
    <div style="margin: 100px">
        EXP : <input type="number" name="exp" id="m_exp"> <br> <br>
        COIN : <input type="number" name="coin" id="m_coin"> <br> <br>
        <input type="button" name="entere" id="enter_btn" onclick="entere()" value="Save Exp"> <br>
        <input type="button" name="entere2" id="enter_btn1" onclick="entere1()" value="Save Coin">
    </div>
    
    
    <script>
        var database = firebase.database();
        var coin;
        var exp;

        var coinInt;
        var expInt;

        function entere(){
            exp = document.getElementById("m_exp").value;
            expInt = parseInt(exp);
            database.ref("profile").update({
                m_exp : expInt
            })
            window.alert("updated");  
        }

        function entere1(){
            coin = document.getElementById("m_coin").value;
            coinInt = parseInt(coin);
            database.ref("profile").update({
                m_coin : coinInt
            })
        }
    </script>
</body>
</html>