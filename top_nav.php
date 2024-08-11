<nav id="default_navbar" class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid nav-container">
    <div class="brand">
        <a class="navbar-brand ps-3 ps-lg-0" href="/home">Ancient City</a>
        <button class="navbar-toggler" id="collapse_controller" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
      <a class="nav-link <?php echo $route == "home" ? 'active' : ''; ?>" <?php echo $route == "home" ? 'aria-current="page"' : ''; ?> href="/home">Home</a>
<a class="nav-link <?php echo $route == "menu" ? 'active' : ''; ?>" <?php echo $route == "menu" ? 'aria-current="page"' : ''; ?> href="/menu">Menu</a>
<a class="nav-link <?php echo $route == "promotion" ? 'active' : ''; ?>" <?php echo $route == "promotion" ? 'aria-current="page"' : ''; ?> href="/promotion">Promotion</a>
<a class="nav-link <?php echo $route == "location" ? 'active' : ''; ?>" <?php echo $route == "location" ? 'aria-current="page"' : ''; ?> href="/location">Location</a>
      </div>
    </div>
  </div>
</nav>
<div class="main_content">

<script>
   $(document).ready(function() {
    var lastScrollTop = 0;
        $(window).on("scroll", function() {
            var currentScrollTop = $(this).scrollTop();
            if($("#collapse_controller").attr('aria-expanded')== "false"){
                if ($(this).scrollTop() > 100) {
                        $("#default_navbar").css("background-color", "#dd902d");
                        $("#default_navbar").css("box-shadow", "0 4px 10px -10px rgba(0, 0, 0, 0.6)");
                } else {
                        $("#default_navbar").css("background-color", "transparent");
                        $("#default_navbar").css("box-shadow", "none");
                }
            }
            if (currentScrollTop > lastScrollTop) {
                if($("#collapse_controller").attr('aria-expanded')== "false"){
                    $("#default_navbar").css("transform", "translate3d(0px, -130px, 0px)");
                }
            }else{
                if($("#collapse_controller").attr('aria-expanded')== "false"){
                    $("#default_navbar").css("transform", "translate3d(0px, 0px, 0px)");
                }
            }
            lastScrollTop = currentScrollTop;
        });
        $("#collapse_controller").on("click",function(){
            if($("#collapse_controller").attr('aria-expanded')== "true"){
            $("#default_navbar").css("background-color", "#dd902d");
            }
            else{
                if (lastScrollTop < 100) {
                    $("#default_navbar").css("background-color", "transparent");
                }
            }
        })
    });
</script>