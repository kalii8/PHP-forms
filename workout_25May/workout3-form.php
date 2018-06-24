Here is the form



<form action="" method="post">

 <?php foreach($items as $i => $text) : ?>

     <input type="text" name=item[<?php echo $i; ?>] value="<?php echo htmlspecialchars($text); ?>">
 <?php endforeach;?>
 

 <input type="text" name=item[<?php echo count($items); ?>] value="">

<input type="submit" value="Add">

</form>