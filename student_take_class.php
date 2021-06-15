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
$아이디 = $row['아이디'];
$과목번호 = $row["과목번호"];
?>

 <head>
     <meta charset="UTF-8"> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Document</title> 
 </head> 
 <body> 
     <h1>수강 신청</h1> 
     <FORM METHOD="post" ACTION="student_take_class_result.php"> 
         학생아이디: <INPUT TYPE="text" NAME="아이디" VALUE=<?php echo $아이디 ?> READONLY> <br> 
         과목번호 : <INPUT TYPE="text" NAME="과목번호"><br>
 
         <br><br> 
         <INPUT TYPE="submit" value="수강 신청하기"> 

     </FORM> 
 </body> 
 </html> 
