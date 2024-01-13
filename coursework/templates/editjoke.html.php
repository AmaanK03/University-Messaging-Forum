<form action="" method="post">
   <input type="hidden" name="jokeid" value="<?= $joke['id']; ?>">
   <label for="joketext">Edit  student post:</label>
   <textarea name="joketext" cols="40" rows="3">
   <?=$joke['joketext']?> 
   </textarea>
   <input type="submit" name="submit" value="Save">
</form>
