<?php

var_dump("WHAT?: ", $page_wide);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo $page_wide['description'];?>">
		<meta name="author" content="<?php echo $page_wide['author']; ?>">

		<?php
			foreach($page_wide["styles"] as $style) {

				echo "<link rel='stylesheet' type='text/css' href='$style'>";
			}
		?>
	</head>
	<body>

			<h1>It works!</h1>
	</body>

</html>