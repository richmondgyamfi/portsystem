<?php 
	$page = (isset($_GET['page']))? $_GET['page']: 'login';

switch($page)
{
    
    case 'login':
        $title = "Account Login";
        $content_view="views/login.php";
    break;
    case 'table':
        $title = "Table View";
        $content_view="views/table.php";
    break;  
    case 'change':
        $title = "Change Password";
        $content_view="views/pass.php";
    break;

    
      
}

 	
?>