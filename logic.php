<?php

$server = 'localhost';
$usernamee = 'root';
$pass = '';
$dbname = 'blog_app';

$conn = mysqli_connect($server, $usernamee, $pass, $dbname);
if(!$conn){
  echo "<h3>There is no database connection!</h3>";
}


$sql = "SELECT * FROM blog";
$query = mysqli_query($conn, $sql);
  

  
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $title = $_POST["title"];
  $content = $_POST["content"];
  $category = $_POST["category"];
  $password = $_POST["password"];


  if($_FILES["img_url"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["img_url"]["name"];
    $fileSize = $_FILES["img_url"]["size"];
    $tmpName = $_FILES["img_url"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'upload/' . $newImageName);
      
      $query = "INSERT INTO blog(username, title, img_url, content, category, password) VALUES('$username', '$title', '$newImageName', '$content', '$category', '$password')";

      mysqli_query($conn, $query);
      echo
      "
      <script>
      setTimeout(() => {
        document.querySelector('.added').classList.remove('hidden');
      }, 0000)
      setTimeout(() => {
        document.location.href = 'blog.php?info=added';
        document.querySelector('.added').classList.add('hidden');
      }, 1000)
      </script>
      ";
    }
  }
}

    if(isset($_REQUEST['id'])){
      $id = $_REQUEST['id'];

      $sql = "SELECT * FROM blog WHERE id = $id";
      $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST['username'])){

      $username = $_REQUEST["username"];
  
      $sql2 = "SELECT id, username, title, content, category, img_url FROM blog WHERE username = '$username'";
      $query2 = mysqli_query($conn, $sql2);
    }

    

    if(isset($_REQUEST['category'])){

      $category = $_REQUEST["category"];
  
      $sql = "SELECT id, username, title, content, category, img_url FROM blog WHERE category = '$category'";
      $query = mysqli_query($conn, $sql);
    }

    if(isset($_REQUEST['update'])){

      $id = $_POST["id"];
      $title = $_POST["title"];
      $content = $_POST["content"];



      if($_FILES["img_url"]["error"] == 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>"
        ;
      }
      else{
        $fileName = $_FILES["img_url"]["name"];
        $fileSize = $_FILES["img_url"]["size"];
        $tmpName = $_FILES["img_url"]["tmp_name"];
    
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
          echo
          "
          <script>
            alert('Invalid Image Extension');
          </script>
          ";
        }
        else if($fileSize > 1000000){
          echo
          "
          <script>
            alert('Image Size Is Too Large');
          </script>
          ";
        }
        else{
          $newImageName = uniqid();
          $newImageName .= '.' . $imageExtension;
    
          move_uploaded_file($tmpName, 'upload/' . $newImageName);
        
          $sql = "UPDATE blog SET title = '$title', img_url = '$newImageName', content = '$content' WHERE id = $id ";
    
          $query = mysqli_query($conn, $sql);
          
          echo
          "
          <script>
          document.location.href = 'blog.php?info=added';
          alert('Post has been updated');
          </script>
          ";
        }
      }

    }




    // delete
    if(isset($_REQUEST['delete'])){

      $id = $_POST["id"];
      
      $sql = "DELETE FROM blog WHERE id = $id";
      $query = mysqli_query($conn, $sql);

      echo
          "
          <script>
          document.location.href = 'blog.php?info=added';
          alert('Post has been deleted');
          </script>
          ";
    }



?> 