

<script type="text/javacript">
 var _delay=1000;
 function logincheck () {
     $.get("login.php",function(data)){
        if(!data){
            window.location="logout.php";
        }
        setTimeout(function(){logincheck();},_delay);
     });
    window.setinterval(function(){
        logincheck();
    },1000);
 }
logincheck();

