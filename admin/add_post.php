
<h2> Add post </h2>
<form action = new_post.php method = post>
Page name: 
<input type = text name = name>
<p>
Page descr: 
<textarea rows="10" cols="75" name = descr>
</textarea>
<input type = hidden name = parent value="<?php echo $_GET['page'] ; ?>" >
<button> GO </button>
</form>


