<style type="text/css">
	*{
		color: white;
	}
</style>

<?php 


var_dump($_POST);

if ($_POST['lastname'] == "") {
	header('location:' . route('Contact') . '?error_message=True');
}