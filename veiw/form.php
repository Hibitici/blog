<?php
     require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>
<!-- using this method will let us send stuff to our form -->
<!-- when we hit the submit button it will echo out our tilte and our form -->
<form method="post" action="<?php echo $path . "controler/create-post.php"; ?>">
	<!-- we can now connect our controler to store it in our database -->
	<div> 
      <label  for="title">Title: </label>
	  <input type="text" name="title" />
	</div>
<!-- this code will show our code on our webpage  -->
	<div> 
     <label for="post">Post: </label>
	  <textarea name="post"></textarea>
	</div>

	<div>
		<button type="submit">submit to my blogk</button>
	</div>
</form>      
<!--wee need to submit this code submit button to our code -->