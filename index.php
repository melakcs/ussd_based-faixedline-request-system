<?php
include('link.php');

  $sender = $_REQUEST['sender'];
  $message = $_REQUEST['keyword'];
  $message = trim($message);
  if ($message!='') 
  {  
     
     /******start here****/
if($message=='F'||$message=='f'){
echo "Dear Customer Wel Come TO Fixed Line SMS Registration\n"."\n 
          Please send your Full name and Address"."Fullname Address Area\n"."e.g.Abebe kebede Addisabeba Leghar";
   }/******** 1 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){2,10}\s([a-zA-Z0-9]){2,10}$/',$message,$rmatchs)){
    //print_r($rmatchs);
      $splittedstring=explode(" ",$message);//abde darimu dupa
      $fname=$splittedstring[0];
      $town=$splittedstring[1];
      $area=$splittedstring[2];
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
      $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }///********  *********/ /******** 2 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){//#abde #darimu #dupa dupa  
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0];
      $town=$splittedstring[1];
      $area=$splittedstring[2]." ".$splittedstring[3];
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
      $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//  /********  *********//******** 3 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){//abde #darimu darimu #dupa  
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0];
      $town=$splittedstring[1]."-".$splittedstring[2];
      $area=$splittedstring[3];
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
       $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }/******** 4 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){//abde #darimu darimu #dupa dupa  
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0];
      $town=$splittedstring[1]." ".$splittedstring[2];
      $area=$splittedstring[3]." ".$splittedstring[4];
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//
  /******** Another One   *********/
  /******** 5 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){//abde awelu #darimu  #dupa  
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]."hhhh";
      $town=$splittedstring[2];
      $area=$splittedstring[3];
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//
  /******** 6 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){//abde awelu #Darimu Darimu  #dupa  
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]."hhhh";
      $town=$splittedstring[2].$splittedstring[3]."ttess";// darimu darimu
      $area=$splittedstring[4];
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
       $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//

  /******** 7 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){//abde awelu #Darimu #dupa dupa 
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]."ooo";
      $town=$splittedstring[2];// darimu 
      $area=$splittedstring[3].$splittedstring[4]."kkk";// dupa dupa
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//
    /******** 8 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){//abde awelu #Darimu Darimu #dupa dupa 
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1];// abde awelu
      $town=$splittedstring[2]." ".$splittedstring[3];// darimu darimu
      $area=$splittedstring[4]." ".$splittedstring[5];// dupa dupa
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//
   /********Another One *********/

    /******** 9 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){//abde awelu awelu #Darimu #dupa 
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2];// abde awelu kalifa
      $town=$splittedstring[3];//darimu
      $area=$splittedstring[4];//dupa
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//
    /******** 10 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){//abde awelu kalifa #Darimu Darimu #dupa
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2];// abde awelu kalifa
      $town=$splittedstring[3]." ".$splittedstring[4];// addis abeba
      $area=$splittedstring[5];//dupa
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//

    /******** 11 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){//abde awelu kalifa #Darimu #dupa dupa
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2];// abde awelu kalifa
      $town=$splittedstring[3];// darimu
      $area=$splittedstring[4]." ".$splittedstring[5];//addis abeba
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
       $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//

  /******** 12 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){//abde awelu kalifa #Darimu Darimu #dupa dupa 
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2];// abde awelu kalifa
      $town=$splittedstring[3]." ".$splittedstring[4];// addis abeba
      $area=$splittedstring[5]." ".$splittedstring[6];//dupa
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
      $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//

 /******** Another One *********/

  /******** 13 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){//Mohammed zain abba ziban  #Darimu #dupa  
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2]." ".$splittedstring[3];// Mohammed zain abba ziban 
      $town=$splittedstring[4];// addis
      $area=$splittedstring[5];//dupa
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
     $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//

    /******** 14 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){// Mohammed zain abba ziban  #Darimu Darimu #dupa 
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2]." ".$splittedstring[3];
      $town=$splittedstring[4]." ".$splittedstring[5];// addis abeba
      $area=$splittedstring[6];//dupa
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
       $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//
   /******** 15 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){// Mohammed zain abba ziban  #Darimu  #dupa dupa
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2]." ".$splittedstring[3];
      $town=$splittedstring[4];
      $area=$splittedstring[5]." ".$splittedstring[6];// addis abeba
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//
   /******** 16 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/',$message,$rmatchs)){// Mohammed zain abba ziban  #Darimu  #dupa dupa
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2]." ".$splittedstring[3];
      $town=$splittedstring[4];
      $area=$splittedstring[5]." ".$splittedstring[6];// addis abeba
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//

   /******** 17 *********/
else if(preg_match('/^([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}\s([a-zA-Z]){3,21}$/', $message,$rmatchs)){
// Mohammed zain abba ziban  #Darimu Darimu  #dupa dupa
//print_r($rmatchs);
      $splittedstring=explode(" ",$message);
      $fname=$splittedstring[0]." ".$splittedstring[1]." ".$splittedstring[2]." ".$splittedstring[3];
      $town=$splittedstring[4]." ".$splittedstring[5];
      $area=$splittedstring[6]." ".$splittedstring[7];// addis abeba
      $regdate=date('Y-m-d H:i:s');
    $sql = "SELECT `contact_No`, `fname` FROM `ethio_fixedline_tbl` WHERE `contact_No`='".$sender."' OR `fname`='".$fname."'";
$result = $conn->query($sql);//print_r($result);
if($result->num_rows >= 1) {
    $reg_replay_msg .= "<br>" . "Dear Customer You are already Registrated by:"." ".$sender."<br>"."For more call 994";
      echo $reg_replay_msg;
} else {//insert query goes here
     $sql="INSERT INTO ethio_fixedline_tbl(contact_No,fname,town,area,regdate,remark)VALUES
                                          ('$sender','$fname','$town','$area','$regdate','$message')";
      mysqli_set_charset($conn,"utf8");
      if ($conn->query($sql) === TRUE) {//send replay 
        $reg_replay_msg .= "Dear :".ucwords($fname)."<br/>"."You are successfully Registrated"."<br/>"."Thank you!";
      echo $reg_replay_msg;
      }
      else
      { echo "Error: " . $sql . "\n" . $conn->error;
      }
      $conn->close();
    }//ende of check       
  }//


  else if($message=='help'||$message=='Help'||$message=='H'||$message=='h'){
    echo'To Request FixedLine use the format: Fullname Address Town <br>E.g :<br>Abebe bekele AddisAbeba Leghar for more call 994';
  }else{ 
    echo"Invalid Format please Send :Help or h";
    //echo $message;
       }
    /******End here****/ 
  }else 
    {//end of send not empty and message not empty
        echo "Invalid format,please use the format: Fullname Address Town <br>E.g :<br>Abebe bekele AddisAbeba Leghar";

   }
?>
