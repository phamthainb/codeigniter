<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

echo $results;

?>
<!DOCTYPE html>
<html lang="en">

		<head>
				<meta charset="utf-8">
				<title>Welcome to CodeIgniter</title>
		</head>

		<body>
				<div id="container">
						<h1>Welcome to CodeIgniter!</h1>
						<div id="body">
								<?php if (isset($results)) {?>
								<table border="1" cellpadding="0" cellspacing="0">
										<tr>
												<th>ID</th>
												<th>NAME</th>
										</tr>
										<?php foreach ($results as $data) {?>
										<tr>
												<td>
														<?php echo $data->uid ?>
												</td>
												<td>
														<?php echo $data->uname ?>
												</td>
										</tr>
										<?php }?>
								</table>

								<?php } else {?>
								<div>No user(s) found.</div>
								<?php }?>
								<?php if (isset($links)) {?>
								<?php echo $links ?>

								<?php }?>
						</div>
						<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.
								<?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
						</p>
				</div>
		</body>

</html>
