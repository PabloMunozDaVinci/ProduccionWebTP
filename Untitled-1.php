<li><a href="producto.php?marca=<?php echo $marca['id']?>&cat=<?php echo isset($_GET['cat'])? $_GET['cat']:''?>" data-abc="true" </a></li> 

el primero da error





<li><a href="producto.php?cat=<?php echo $cat['id']?>&marca= <?php echo (isset($_GET['marca'])? $_GET['marca']:'')?>" data-abc="true"> </a></li>
