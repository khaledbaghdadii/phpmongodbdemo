<?php 
require 'vendor/autoload.php';
$client= new MongoDB\Client("mongodb://localhost:27017");

$booksdb= $client->booksdb; //created a mongodb database
$bookscollection = $booksdb->bookscollection;
$books=$bookscollection->find([]);

?>
<html>
<?php include('templates/header.php'); ?>
	<div class="container">
		<div class="row">
			<?php foreach($books as $book){ ?>
				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($book['title'])?></h6>
							<div><?php echo htmlspecialchars($book['author'])?> </div>
							<div>#Pages: <?php echo htmlspecialchars($book['nbOfPages'])?> </div>
							<?php
							if (isset($book['yearOfPublication'])) {
							
							?>
							<div>Year: <?php echo htmlspecialchars($book['yearOfPublication'])?> </div>
							<?php
							}
							?>
							<div>
								<div class="row">
									<div class="col s6">
										<form action="delete.php" method="POST" >
											<input type="hidden" name="id_to_delete" value="<?php echo $book['_id']?>">
											<input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
										</form>	
									</div>
									<div class="col s6">
										<form action="edit.php" method="POST" >
											<input type="hidden" name="id_to_edit" value="<?php echo $book['_id']?>">
											<input type="submit" name="edit" value="Edit" class="btn brand z-depth-0">
										</form>	
									</div>
									
								</div>
															
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</html>