<?php
 $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속에 실패하셨습니다"); 
 $sql = "SELECT * FROM 학생 WHERE 아이디='".$_GET['아이디']."'";

 $ret= mysqli_query($con, $sql);
if($ret){
 $count = mysqli_num_rows($ret);
    if($count==0) {
        echo $_GET['아이디']." 아이디의 회원이 없습니다 "."<br>";
        echo "<BR> <a href='student.html'>  <---뒤로가기</a> ";
        exit();
        }
     }
else {
      echo "데이터 조회에 실패했습니다"."<br>";
      echo "실패 원인:".mysqli_error($con);
      echo "<br> <a href='student.html'> <---뒤로가기 </a> ";
      exit();
}
$row= mysqli_fetch_array($ret);
$학생아이디 = $row['아이디'];
$학원이름 = $row["학원이름"];
$상담날짜= $row["상담날짜"];
$상담내용 = $row["상담내용"];


?>
<html>
 <head>
     <meta charset="UTF-8"> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Document</title> 
 </head> 
 <body> 
     <h1>상담 신청</h1> 
     <FORM METHOD="post" ACTION="student_counsel_result.php"> 
         아이디 : <INPUT TYPE="text" NAME="학생아이디" VALUE=<?php echo $학생아이디 ?> READONLY> <br> 
         학원이름 : <INPUT TYPE="text" NAME="학원이름" VALUE=<?php echo $학원이름 ?> READONLY> <br> 
         상담날짜 : <INPUT TYPE="text" NAME="상담날짜" VALUE=<?php echo $상담날짜 ?> READONLY> <br> 
        상담내용: <INPUT TYPE="text" NAME="상담내용" VALUE=<?php echo $상담내용 ?> READONLY> <br> 
        
         <br><br> 
         <INPUT TYPE="submit" value="상담 신청하기"> 
     </FORM> 
 </body> 
 </html> 
