
<div class="aboutus-container ">
    <section class="aboutus-title">
        <img src="assests/images/home/home_background2.jpg" style="position:absolute; height:100%; width:100%; opacity: 0.6; object-fit: cover; z-index:-1;" alt="">
        <button style="background-color:absolute; border:0px;">
            <img src="assests/images/logo/ancient_city_logo2.png" style="height:100%; width:100%; background-color:absolute;" alt="">
        </button>
        <h1 style="font-weight:300; color:white; margin-bottom:5%;" class="text-back-shadow">关于古城</h1>
        <span style="  font-size:60px; color:#f3f3f3;" class="text-back-shadow">About Us</span>
    </section>

    <section class="center-center">

    </section>

   
</div>

<script>
     $(document).ready(function() {
        $("section").css("min-height",screen.height);
    })

    $("#all").addClass("selected");

    function selectOutlet(outlet) {
    if (outlet === "all") {
        $("#all").addClass("selected");
        $("#ancient").removeClass("selected");
        $(".outlet-card").show(); // Show all outlets when "All" is selected
    } else {
        $("#ancient").addClass("selected");
        $("#all").removeClass("selected");

        $(".outlet-card").each(function() {
            if ($(this).attr("id") === outlet) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
}

</script>