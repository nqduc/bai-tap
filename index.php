<?php
   if( $_GET["1"] || $_GET["2"] )
   $ketqua = 0;
   if($_GET["ketqua"]=='-') 
   {
      echo "Kết quả = ".( $_GET['1']- $_GET['2'])."<br />";
   }
   if($_GET["ketqua"]=='+') 
   {
      echo "Kết quả = ".( $_GET['1']+$_GET['2'])."<br />";
   }
   if($_GET["ketqua"]=='*') 
   {
      echo "Kết quả = ".( $_GET['1']* $_GET['2'])."<br />";
   }
   if($_GET["ketqua"]=='/') 
   {
      echo "Kết quả = ".( $_GET['1']/ $_GET['2'])."<br />";
   }

?>
<html>
   <title> bài tập</title>
   <body>
      
      <form action="http://localhost:8080/tinhtoan/index.php" method="GET">
         Số thứ nhất: <input type="text" name="1" /><br>
         Số thứ hai: <input type="text" name="2" /><br>
         Phép tính : <input type="text" name="ketqua" />

         <input type="submit" />
      </form>
   </body>
</html>