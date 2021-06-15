<?php 
    $con=mysqli_connect("localhost", "root", "password", "학원관리시스템") or die("MySQL 접속에 실패하셨습니다"); 
    $userID = $_POST["아이디"];
    $sql ="DELETE FROM 학생 WHERE 아이디='".$userID."'";
    $ret = mysqli_query($con, $sql);    
     echo "<h1> 탈퇴하기 </h1>";
    if($ret) { 
 	   echo "회원님의 탈퇴가 완료되었습니다.";
 	   }		    
    
    else { 
 	   echo "탈퇴에 실패하였습니다"."<br>"; 
 	   echo "실패 원인 :".mysqli_error($con); 
 	  
    }    
    mysqli_close($close);
    
    echo "<br><br> <a href ='student.html'>  <---초기화면으로 돌아가기</a>";
      
?> 
