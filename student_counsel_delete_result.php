<?php 
    $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속에 실패하셨습니다"); 
    $아이디 = $_POST["아이디"];
    $sql ="DELETE FROM 관리 WHERE 아이디='".$아이디."'";
 
 
    $ret = mysqli_query($con, $sql);    
    echo "<h1> 상담 취소하기 </h1>";
    if($ret) { 
 	echo $아이디." 회원님의 상담취소가 완료되었습니다.";
 	   }		    
    
    else { 
 	   echo "상담취소에 실패하였습니다"."<br>"; 
 	   echo "실패 원인 :".mysqli_error($con); 
 	   
    }    
    mysqli_close($con);
    
    echo "<br><br> <a href ='student.html'>  <---초기화면으로 돌아가기</a>";

?>