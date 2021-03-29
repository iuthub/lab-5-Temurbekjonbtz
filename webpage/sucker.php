<?php

$name=POST['name'];
$section=POST['section'];
$card=POST['card'];
$cardtype=POST['cardtype'];
file_put_contents("suckers.txt", $name.";".$section.";".$card.";".$cardtype,FILE_APPEND);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
	
    <h1>Thanks, sucker!</h1>

<p>Your information has been recorded.</p>
		
		
	
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name"  value="<?php echo  $name ?>"/>
			</dd>
			
			<dt>Section></dt>
			<dd>
				<input type="text" name="section"  value="<?php echo  $section ?>"/>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
				<input type="text" name="card" value="<?php echo  $card ?>"/>
			
			</dd>
		</dl>
		
	
	
	</body>
</html>