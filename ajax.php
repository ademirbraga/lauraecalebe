<?php

if (isset($_POST["pagina"]) && $_POST["pagina"] != "") {
    
    $p = $_POST["pagina"];
    
    for ($i = 0; $i < 12; $i++) {
    
    
    $html .= '
     <div class="tk-gallery-item">
        <div class="tk_single_gallery_image">
            <a href="images/background-images/fotos/'.$p.'-'.'img01.jpg" title="" class="magnificPopup-child">
                <img src="images/background-images/fotos/thumbnails/'.$p.'-'.'img01.jpg" width="200" height="200" alt="">

                <div class="icon-search-plus"><i class="fa fa-search"></i></div>
                <span>&nbsp;</span>
            </a>
        </div>
    </div>
            
            ';
    }
    
    #tk-gallery
    echo json_encode(array('html'=>$html));
}