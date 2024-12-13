<?php
  $con=new mysqli('localhost','root','','MYDB');
  if($con->connect_errno){
    die('connect false: '.$con->connect_error);
  }
  else{
    echo 99;
  }
  function insert(){
    if(isset($_POST['submit'])){

      global $con;
      $name=$_POST['name'];
      $qty=$_POST['qty'];
      $category=$_POST['category'];
      $memory=$_POST['memory'];
      $Image=rand(1,1000).$_FILES['image']['name'];
      $tmp_name=$_FILES['image']['tmp_name'];
      $path="../image/".$Image;
      move_uploaded_file($tmp_name,$path);

      $mysql="INSERT INTO `computer`( `name`, `memory`, `image`, `qty`, `category`) 
                            VALUES ('$name','$memory','$Image','$qty','$category')";
      if ($con->query($mysql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $mysql . "<br>" . $con->error;
      }  
    }
  }
  insert();
  function getdata(){
    global $con;
    $mysql="SELECT * FROM `computer` ";
    $row=$con->query($mysql);
    while($result=$row->fetch_assoc()){
      echo '
        <tr>
          <td>'.$result['id'].'</td>
          <td>'.$result['name'].'</td>
          <td>'.$result['qty'].'</td>
          <td>'.$result['memory'].'</td>
          <td>'.$result['category'].'</td>
          <td><img width="100px"; src="../image/'.$result['image'].'" alt=""></td>
          <td>
            <button class="btn btn-danger" id="btn_delete"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
            <button class="btn btn-warning edit_pro" >Edit</button>
          </td>
        </tr>
      ';
    }
  }

  if(isset($_POST['submitDelete'])){
    function deletedata(){
      global $con;
      $id=$_POST['id'];
      $mysql="DELETE FROM `computer` WHERE `id`=$id";
      $con->query($mysql);
    }
    deletedata();
  }
  

  if(isset($_POST['edit'])){
    date_default_timezone_set('Asia/Phnom_Penh');
    global $con;
      $name=$_POST['name'];
      $qty=$_POST['qty'];
      $category=$_POST['category'];
      $memory=$_POST['memory'];
      $Image=$_FILES['image']['name'];
      $hideID=$_POST['hide_id'];
      $update_pro=date('ymdhis');
      $hide_img=$_POST['hide_img'];
     

    if(!empty($Image)){
      $Image=rand(1,1000).$_FILES['image']['name'];
      $tmp_name=$_FILES['image']['tmp_name'];
      $path="../image/".$Image;
      move_uploaded_file($tmp_name,$path);
      if (!move_uploaded_file($tmp_name, $path)) {
        die("Error: Failed to upload file.");
      }
    }
    else{
      $Image= $hide_img;
    }
    $mysql="UPDATE `computer` SET `name`='$name',`memory`='$memory',`image`='$Image',`update_at`='$update_pro',`qty`='$qty',`category`='$category' WHERE  `id`=$hideID";
    $con->query($mysql);
  }
  
?>