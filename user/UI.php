<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
*{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}
#carouselExampleSlidesOnly img{
  height: 500px;
}
.card{
  box-shadow: 6px 2px 6px rgb(230, 232, 230);
  color:white;

}
<?php
 include 'header.css';
?>

</style>
<body>
  <div class="container-fluid p-0 m-0">
    <?php
      include 'header.php';
      include 'slide.php';
    ?>
   
  </div>
  <div class="container-fluid p-0 mb-4">
    <div class="bg-success p-2">
      <h4 class="ms-5">Product</h4>
    </div>
  </div>
  <div class="container">
    <div class="row">

     
    </div>
  </div>
 
 
</body>
</html>
<script>

  $(document).ready(()=>{
    function ajax(url){
      $.ajax({
        url:url,
        cache : false,
        success:function(respone){
          const res=`${respone}`;
          $('.row').html(res);
        }
      })
    }
    ajax('home.php');
    $("#home").click(()=>{
      ajax('home.php');
      
    })
    $('#laptop').click(()=>{
      ajax('laptop.php');
      
    })
    $('#desktop').click(()=>{
      ajax('desktop.php');
      
    })
    $('#acessories').click(()=>{
      ajax('acessories.php');
      
    })
    $('#phone').click(()=>{
      ajax('phone.php');
      
    })

    

  })
</script>
