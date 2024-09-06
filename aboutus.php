
    <section class="aboutus-title">
        <img id="background-image" src="assests/images/home/home_background2.jpg" style="position:absolute; width:100%; opacity: 0.6; object-fit: cover; z-index:-1;" alt="">
        <h2 style="color:white; margin-top:100px;" class="text-back-shadow">关于古城</h2>
        <!-- <span style="  font-size:60px; color:#f3f3f3;" class="text-back-shadow">About Us</span> -->
    </section>

    <div class="main-content flex flex-row center-center" style="padding-inline:10%; padding-block:50px;">
        <img src="assests/images/logo/ancient_city_logo2.png" class="main-content-image" style="  object-position: 55% 0px; background:none; margin-right:50px;" alt="">
        <span class="main-content-text flex align-items-center" style=" background:none; width:50%; font-size:20px; text-align:justify;">
        欢迎莅临古城咖啡美食坊，自1993年创立以来，我们一直是Kuala Lumpur区的美食瑰宝。坐落于Jalan Ipoh Batu 5（孟加兰），我们以传承大马传统美食为己任，以平价美味征服了无数食客的味蕾。
        </span>
    </div>

    <section class="flex flex-col justify-content-start" style="background-color:#f3f3f3; padding-block:100px; padding-inline:15%;">
        <h6 style="text-align:center; font-size:3rem; margin-bottom:50px;" class="text-small-shadow">More About Us</h6>
        <div class="container-fluid">
            <div class="aboutus-card row">
                <div class="aboutus-image col-12 col-lg-4" style=" margin-bottom:10px;">
                    <img src="https://ancientcitycoffee.com.my/wp-content/uploads/2023/12/IMG_20231117_123347-2048x1536.jpg" alt="" class="size-full" style="border-radius:20px;">
                </div>
                <span class="aboutus-card-content col-12 col-lg-8">这里不仅仅是一家餐厅，更是社区的温馨角落。老板和老板娘用心服务社区，帮助有需要的人，深得居民的爱戴。在这里，我们不仅提供美味佳肴，更传递着关怀和温暖，让每一位顾客都感受到家的温馨。</span>
            </div>

            <div class="aboutus-card row">
                <span class="aboutus-card-content col-12 col-lg-8 order-lg-1 order-2">古城咖啡美食坊的地标之一是店外的<龙壁>，象徵着华人传统文化的底蕴。这个独特标志也成为了网红必打卡的好去处，吸引了各地游客前来品味美食，感受传统文化的魅力。</span>
                <div class="aboutus-image col-12 col-lg-4 order-lg-2 order-1" style=" margin-bottom:10px;">
                    <img src="https://ancientcitycoffee.com.my/wp-content/uploads/2023/12/IMG_20231117_120540-2048x1536.jpg" alt="" class="size-full" style="border-radius:20px;">
                </div>
            </div>

            <div class="aboutus-card row">
                <div class="aboutus-image col-12 col-lg-4" style=" margin-bottom:10px;">
                    <img src="https://ancientcitycoffee.com.my/wp-content/uploads/2023/12/IMG_20231117_120322-1-2048x1536.jpg" alt="" class="size-full" style="border-radius:20px;">
                </div>
                <span class="aboutus-card-content col-12 col-lg-8">我们引以为傲的不仅仅是美味佳肴，更是我们独特的文化底蕴。古城咖啡美食坊，不仅是一顿美食之旅，更是一场文化体验。欢迎您在这里留下美好的时光，感受传统与现代的完美交融。无论是品味美食还是感受社区温暖，这里都是您心灵愉悦的港湾。</span>
            </div>
        </div>
    </section>

   

<script>
     $(document).ready(function() {
        $("section").css("min-height",screen.height);
        $("#background-image").css("height",screen.height);
        
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