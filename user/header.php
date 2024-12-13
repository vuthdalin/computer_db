  <nav class="navbar navbar-expand-lg p-0">
  <div class="container-fluid">
    <div class="collapse navbar-collapse ">
      <ul class="navbar-nav gap-1 position-relative">
        <li class="nav-item ms-4">
          <i class="fa-solid fa-house"></i>
          <a class="nav-link " aria-current="page" href="#" name="home" id="home">Home</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-laptop"></i>
          <a class="nav-link" href="#" name="laptop" id="laptop">Laptop</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-desktop"></i>
          <a class="nav-link" href="#" name="desktop" id="desktop">Desktop</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-phone"></i>
          <a class="nav-link" href="#" name="phone" id="phone">Phone</a>
        </li>
        <li class="nav-item">
          <i class="fa-regular fa-keyboard"></i>
          <a class="nav-link" href="#" name="acessories" id="acessories">Acessories</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-building"></i>
          <a class="nav-link" href="#"  id="location">Location</a>
        </li>
        <li class="nav-item">
          <i class="fa-solid fa-location-dot"></i>
          <a class="nav-link" href="#" id="contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="contact ">
  <div class="qr">
    <i class="fa-solid fa-xmark" ></i>
    <img src="../image/Screenshot 2024-12-10 at 14.24.03.png" alt="">
  </div>
</div>
<script>
  $('document').ready(()=>{
    $('#location').click(function(){
      window.location.href = "https://maps.app.goo.gl/gvRmXbz3arwxHeMbA";
    })
    $('#contact').click(()=>{
      $('.contact').slideDown();
    })
    $(".fa-xmark").click(()=>{
      $('.contact').slideUp();
    })

  })
</script>

