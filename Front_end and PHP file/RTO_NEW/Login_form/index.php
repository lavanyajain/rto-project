<!DOCTYPE html>

<html >
 
 <head>
 
   <meta charset="UTF-8">
 
   <title>Login Form</title>
    

    
    
    
        <link rel="stylesheet" href="css/style.css">

    
<script>
  
  
  /*function preventBack(){window.history.backward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
*/
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});  
  
</script>
    
    
    
  </head>


  <body >

  <h2 align="right"><a href="http://localhost/RTO_NEW/Start_page/index.html">HOME PAGE</a></h2>
   <div class="login-page">
 
 <div class="form">
 
   
   
 <form class="login-form" method="POST" action="validate.php">
    
  <input type="text" placeholder="ID" name="uid" id="uid" value=""/>
     
 <input type="password" placeholder="password" name="pwd" id="pwd" value=""/>
 
 
     <button>login</button>
     
    </form>
  </div>
</div>
 
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

 
       <script src="js/index.js"></script>

    
    
  </body>
</html>



