<?php

function pagination($controller = '', $model, $limit = 10) {
    $num_reg = $model->num_reg();
    $max_page = $num_reg / $limit;
    if($max_page <= 1)
        return;
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('/', $uri);
    $page = 0;
    #echo count($uri);exit;
    if (count($uri) > 4)
        $page = $uri[4];

    #$page++;

    $string = "<ul class='pagination'>";
    if ($page == 0) {
        $string .= "<li class='disabled'><a>&lt; Anterior</a></li>";
        $string .= "<li class='disabled'><a>0</a></li>";
        $string .= "<li><a href='".base_url()."$controller/index/".($page+1)."'>".($page+1)."</a></li>";
    } else {
        $string .= "<li><a href='".base_url()."$controller/index/".($page-1)."'>&lt; Anterior</a></li>";
        $string .= "<li><a href='".base_url()."$controller/index/".($page-1)."'>".($page-1)."</a></li>";
        $string .= "<li class='disabled'><a>".$page."</a></li>";
    }

    if ($page == --$max_page) {
        $string .= "<li class='disabled'><a>".($max_page+1)."</a></li>";
        $string .= "<li class='disabled'><a>Próximo &gt;</a></li>";
    } elseif($page > 0) {
        $string .= "<li><a href='".base_url()."$controller/index/".($page+1)."'>".($page+1)."</a></li>";
        $string .= "<li class='next'><a href='".base_url()."$controller/index/".($page+1)."' rel='next'>Próximo &gt;</a></li>";
    }else{
        $string .= "<li><a href='".base_url()."$controller/index/".($page+2)."'>".($page+2)."</a></li>";
        $string .= "<li class='next'><a href='".base_url()."$controller/index/".($page+1)."' rel='next'>Próximo &gt;</a></li>";
    }
    #"<li><a href='#'>2</a></li>";
    
    $string .= "</ul><!-- /.pagination -->";

   return $string;
}

?>
