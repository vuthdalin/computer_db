<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
  .modals{
    padding: 30px;
    background-color:pink;
    width: 25%;
    border-radius: 10px ;
    margin: 0 auto;
    display: none;
    position: absolute;
    left: 37%;
    top: 105px;
    position: absolute;
    box-shadow: 1px 1px 10px gray;
  }
</style>
<body>
  <div class="container">
   
    <h3 class="mt-3">ADD PRODUCT</h3>
    <button class="btn btn-primary float-end mb-2 py-2" name="btn-create" id="btn-create">CREAT NEW PRODUCT</button>
    <table class="table table-hover table-dark ">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>QTY</th>
          <th>Memory</th>
          <th>Category</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      
       <?php
          
          include 'function.php';
          getdata();
       ?>
          
       
      </tbody>
      
    </table>
  </div>
  

  <div class="modals">
    <h4 class="title"></h4>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" id="hide_id" name="hide_id">
      <div class="form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="memory" class="form-label">Memory</label>
        <input type="text" name="memory" class="form-control" id="memory">
      </div>
      <div class="form-group">
        <label for="qty" class="form-label">QTY</label>
        <input type="text" name="qty" class="form-control" id="qty">
      </div>
      <div class="form-group">
        <label for="category" class="form-label">Category</label>
        <select name="category" id="" class="form-control">
          <option value="Laptop">Laptop</option>
          <option value="Deskto">Desktop</option>
          <option value="Phone">Phone</option>
          <option value="Acessories">Acessories</option>
        </select>
      </div>

      <div class="form-group">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" >
        <input type="text" name="hide_img" id="hide_img">
      </div>
      <div class="form-group">
        <input type="submit" value="Edit" name="edit" class="btn btn-success mt-3 px-4" id="btn_edit">
        <input type="submit" value="Submit" class="btn btn-success mt-3" name="submit" id="btn_submit">
        <button type="button" class="btn btn-danger mt-3 ms-2 px-3" name="cancel" id="btn-cancel">cancel</button>
      </div>
    </form>
  </div>
  



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure to delete?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
          <form action="" method="post">
          <input type="hidden" class="id" id="id" name="id" >
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="submitDelete">Yes, I'm sure.</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  
  $(document).ready(() => {

    $('#btn-create').click(() => {
        $('.modals').fadeIn();
        $('.title').html('ADD PRODUCT');
        $('#btn_edit').hide();
    });
    $('#btn-cancel').click(()=>{
      $('.modals').fadeOut();
    })
      
   
    $(document).on('click','.edit_pro',function(){
      $('.modals').fadeIn();
      $('.title').html('EDIT PRODUCT');
      $('#btn_submit').hide();
      $('#btn_edit').show();
      var TId=$(this).parents('tr').find('td').eq(0).text();
      var tname=$(this).parents('tr').find('td').eq(1).text();
      var tqty=$(this).parents('tr').find('td').eq(2).text();
      var tmemory=$(this).parents('tr').find('td').eq(3).text();
      var tcategory=$(this).parents('tr').find('td').eq(4).text();
      var tImage=$(this).parents('tr').find('img').attr('src');
      var nameImage=tImage.split('/').pop();

      console.log(nameImage);
      

      $('#hide_id').val(TId);
      $('#name').val(tname);
      $('#memory').val(tmemory);
      $('#qty').val(tqty);
      $('#category').val(tcategory);
      $('#hide_img').val(nameImage);
      
  

    })

   
  
    $(document).on('click','#btn_delete',function(){
      var proID=$(this).parents('tr').find('td:nth-child(1)').text();
      $('#id').val(proID);
      console.log(proID);
      })
  });

  

    
  
</script>
</html>