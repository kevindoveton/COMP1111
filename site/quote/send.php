<?php
$price = 0;
$total = 0;

switch ($_POST['item'])
{
	case 'item1':
		$price = 20;
		break;
		
	case 'item2':
		$price = 15;
		break;
	
	case 'item2':
		$price = 25;
		break;	
	
	case 'item3':
		$price = 30;
		break;	
		
	case 'item4':
		$price = 25;
		break;	
	
	case 'item5':
		$price = 50;
		break;	
		
	case 'item6':
		$price = 10;
		break;	
		
	case 'item7':
		$price = 10;
		break;	
		
	case 'item8':
		$price = 10;
		break;	
		
	case 'item9':
		$price = 10;
		break;
		
	case 'item10':
		$price = 10;
		break;		
								
	default:
		break;
}


$name = $_POST['name'];
$email = $_POST['email'];
$size = $_POST['dimension'];

$total = $price * $size;

$headers = 'From: web@goodwoodlumberyard.com.au' . "\r\n" .
				'Reply-To: web@goodwoodlumberyard.com.au' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

mail ($email, 'Quote', 'Thanks for requesting a quote from us '.$name.', the total cost is: $'.$total, $headers);
	
?>