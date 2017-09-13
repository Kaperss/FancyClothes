<?php 
require_once "connect.php";
//Vælger alt i articles-tabellen og sorterer det efter ID fra højest til lavest
$statement = $dbh->prepare("SELECT * FROM articles JOIN users ON articles.authorId = users.userId ORDER BY id DESC");
//Udfører det ovenstående
$statement->execute();
//Så længe der er poster/rækker i $statement så kører loopet 
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {

	/* Tips og tricks fra Mark til debugging
	echo "<pre>";
	print_r($row);
	echo "</pre>"; */ 

	?>
	<!-- Hiver værdierne ud af tabellen fra  DB -->

</aside>
<article class="col-sm-12 col-md-6 col-lg-3">
	<img src="img/<?php echo $row['imgSrc']; ?>" class="img-responsive" alt="<?php echo $row['imgAlt']; ?>">
	<div class="centrer"><h4><?php echo $row['heading']; ?></h4>
		<i class="fa fa-star fa-lg" aria.hidden="true"></i>
		<i class="fa fa-star fa-lg" aria.hidden="true"></i>
		<i class="fa fa-star fa-lg" aria.hidden="true"></i>
		<i class="fa fa-star fa-lg" aria.hidden="true"></i>
		<i class="fa fa-star fa-lg" aria.hidden="true"></i>
	</div>
	<div class="greybg">
		<h5 class="grey">Oprettet:<?php echo $row['published']; ?>
			af <?php echo $row['dbUsername']; ?>
		</h5>
		<p><?php echo $row['description']; ?></p>
		<a href="#"><p class="p-1 btmargin0">Læs mere...</p></a>
		<?php if (isset($_SESSION['accessLevel']))
	if ($_SESSION['accessLevel'] >= 3) {
		echo '<a href="includes/deleteArticle.php?id=".$row["id"].</a>';
	}
	?>
	</div>
</article>
<?php   
}
// Frakobler fra databasen så der kun er html osv
$dbh = null;
?>