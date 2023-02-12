
<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
 <style>
      #public_news
      {
        background: #fff;
        display: none;
        border-radius: .35rem;
        border: #dee2e6 solid 1px;
        margin: 30px 0 30px 0;
      }
    </style>
<body>
  <div id="public_news">
    <h2 class="text-center mt-5 text-danger">Add Your News</h2>
      <div class="container  align-items-center mt-5">
        <form class="" method="POST" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for="news" class="form-label">Enter News</label>
            <input type="text" required=""  name="news" class="form-control" >
          </div>
          <div class="text-center mb-4">
            <button type="submit" name="news_submit" class="btn btn-primary">Submit</button>
          </div>  
        </form>
      </div>
  </div>

      <?php
     if (isset($_POST['news_submit'])) {
        $news=$_POST['news'];
        $insert="insert into newsticker(news) VALUES ('$news')";
        $inserted=mysqli_query($con,$insert);

       if ($inserted) {
          echo "<script>alert('News Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?insertnews','_self')</script>";
       }else{
          echo "<script>alert('Not Added Suucessfully')</script>";
          echo "<script>window.open('dashboard.php?insertnews','_self')</script>";
       }
     }
      ?>
</body>
</html>