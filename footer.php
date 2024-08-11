
<?php
$jsonFilePath = $_SERVER['DOCUMENT_ROOT'].'/assests/js/footer-content.json';


if (file_exists($jsonFilePath)) {
    $jsonContent = file_get_contents($jsonFilePath);
    
    $footerData = json_decode($jsonContent, true);
} else {
    echo '<script>parent.window.location.reload(true);</script>';
}

$footer = $footerData['content'];
?>


<footer class="page_footer container-fluid ">
    <div class="row gx-3" id="footer_content">
        <div class="col-12 col-md-3 order-4 social-media">
            <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95"/></svg></a>
            <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3"/></svg></a>
            <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73"/></svg></a>
        </div>
        <?php
            $i=0;
            foreach ($footer as $content){
                $i++;
                echo "<div class='col-12 col-md-3 order-$i footer-datas'>";
                echo "<h5 style='font-size:1.25rem'>".$content['name']."</h5>";
              
                foreach ($content['data'] as $data){
                    echo '<ul><li><i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="m14 17l-5-5l5-5z"/></svg></i>';
                    echo "<a href='".$data['href']."' target='_blank'>".$data['name']."</a>";
                    echo "</li></ul>";
                }
                echo "</div>";
            }
        ?>
    </div>
    <div class="row" style="text-align:center; margin-top:40px">
        <div class="col">
    © Copyright 2023 Ancient City Coffee - All Rights Reserved
        </div>
    </div>
</footer>


            </div>
        </div>
    </body>
</html>