<!DOCTYPE html>

<head>

  <link rel="stylesheet" href="prohect5.css">  

 </head> 
 
<body id="body" >
     
      <form method="post"> 
           <input type="text" name="num1"  id="num1" placeholder="Number1">  
           <input type="text" name="num2"  id="num1" placeholder="Number2">  <br>
           <input type="submit" name="operetor"  id="but" value="+"> 
           <input type="submit" name="operetor"  id="but" value="-"> 
           <input type="submit" name="operetor"  id="but" value="*">  
           <input type="submit" name="operetor"  id="but" value="/">  <br>
       
      </form>
      <?php      
   $num1=@$_POST['num1'];
   $num2=@$_POST['num2'];
   $operetor=@$_POST['operetor'];
   $result='';
   switch($operetor){
       case " ":
         echo "ent num";
        break;
        case "+":
            echo $num1 + $num2;
        break;
        case "-":
            echo $num1 - $num2;
        break;
        case "*":
            echo $num1 * $num2;
        break;
        case "/":
            echo $num1 / $num2;
        break;
 

   }
 ?>
      
       <br>
       <br>
        <form method="post">
        <dev id="num3">  <input type="text" name="num3"  id="num1" placeholder="Angle"> </dev> <br>
           <input type="submit" name="angl"  id="but" value="sin"> 
           <input type="submit" name="angl"  id="but" value="con"> 
           <input type="submit" name="angl"  id="but" value="tan"> 
         </form>
      <?php  
      $num3=@$_POST['num3'];
      $angle=@$_POST['angl'];
      $reselt2='';

      switch($angle){
          case 'sin':
                echo sin($num3);
                break;
          case 'con':
                echo cos($num3);
                break;
          case 'tan':
                echo tan($num3);
                break;
      }
           
     
     
     
     ?>
         <br>
         <br>

     <form  method="post"> 
     <dev id="num3">  <input type="text" name="num4"  id="num1" placeholder="Circle"> </dev> <br>
     <input type="submit" name="Circle"  id="but" value="Circle_area">
     <input type="submit" name="Circle"  id="but" value="circumference_of_a_circle"> 
     </form>
     <?php
     
     $num4=@$_POST['num4'];
     $Circle=@$_POST['Circle'];
     $num_2_2 =@$num4*@$num4;
     $q=2;
     $resolt3='';
     
     switch( $Circle){
        case 'Circle_area':
            echo (pi() * $num_2_2 ); 
           break;
        case 'circumference_of_a_circle':
             echo ( pi()* $q * $num4) ;
            break;

     }
     
     ?>
</body>





 
</html>