<?php
$html = "";
if (isset($_POST["pagina"]) && $_POST["pagina"] != "") {
    
    $p = 2;//$_POST["pagina"];
    
    for ($i = 1; $i <= 9; $i++) {

    /*
    $html[$i] = '
     <div class="tk-gallery-item" id="item'.$i.'">
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
    */
        $j = '0'.$i;

        $html[$i] = '<div class="tk-gallery-item" id="item'.$i.'"><div class="tk_single_gallery_image"><a href="images/background-images/fotos/'.$p.'-img'.$j.'.jpg" title="" class="magnificPopup-child"><img src="images/background-images/fotos/thumbnails/'.$p.'-img'.$j.'.jpg" width="200" height="200" alt=""><div class="icon-search-plus"><i class="fa fa-search"></i></div><span>&nbsp;</span></a></div></div>';
    }

    #tk-gallery
    echo json_encode(array('html'=>$html));
}