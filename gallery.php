<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$route = "galeria/images";
if (isset($_POST["gallery"]) && $_POST["gallery"] != ""){
	$route = $route."/".$_POST["gallery"];
}

$element = scandir($route);
$ext = array("jpg","png","jpeg");
$gallery = '<div class="tz-gallery"><div class="row">';
$menu_tab = '<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">';
$menu_tab .= '<li class="nav-item">
				<a class="nav-link active" id="home-tab" data-toggle="pill" role="tab" aria-controls="home" aria-selected="true" onclick="loadGallery($(this))" data-gallery="">Carteleria</a>
			</li>';

foreach ($element as $value) {
	$arr_value = explode(".", $value);
	if($value != "." && $value != ".." && $value != ".DS_Store"){
		if(count($arr_value) > 1 && in_array($arr_value[1],$ext)) {
			$gallery .= '<div class="col-sm-6 col-md-4"><a class="lightbox" href="'.$route.'/'.$value.'">
	                    <img src="'.$route.'/'.$value.'" alt="'.$arr_value[0].'">
	                </a></div>';
		} else {
			$menu_tab .= '<li class="nav-item">
							<a class="nav-link" id="'.$value.'-tab" data-toggle="pill" role="tab" aria-controls="'.$value.'" aria-selected="true" onclick="loadGallery($(this))" data-gallery="'.$value.'">'.ucfirst($value).'</a>
						</li>';		
		}	
	}	
}

$menu_tab .= '</ul>';

$gallery .= "</div></div>";

$response = json_encode(array("menu" => $menu_tab,"gallery"=>$gallery));

function send_response($response){

	echo $response;
}

send_response($response);
