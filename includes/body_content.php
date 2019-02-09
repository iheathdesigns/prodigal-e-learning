<div id="body_content">
<?php
$section = '-1'; //Set default value for $section

if(isset($_GET['section'])){
	$section = $_GET['section'];
}



/*

If > else if > else script



*/


if($section == '-1'){
//Include Home Page Content Here
	
	include('content/intro.php');
	
}else if($section == 'scripting'){
//include scripting page content here

	include('content/scripting.php');

}else if($section == 'basics'){
//include basics page content here

	include('content/basics.php');

}else if($section == 'events'){
//include events page content here

	include('content/events.php');

}else if($section == 'functions_arrays_and_operators'){
//include functions, arrays, and operators page content here

	include('content/functions_arrays_and_operators.php');

}else if($section == 'objects_and_thedom'){
//include objects and the DOM page content here

	include('content/objects_and_thedom.php');
	
}else if($section == 'using_ajax'){
//include using AJAX page content here

	include('content/using_ajax.php');

}else{
//include default page content here

	include('content/intro.php');
	
}



?>
</div>
<a href="index.php"/>