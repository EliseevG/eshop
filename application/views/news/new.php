
	<?php require_once 'application/header.php'; ?>
	<section class="news_new">
		<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Effloresce </a></h1>
				
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><a href='/news/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
						<p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?><a href='/news/<?php echo $newsItem['id'] ;?>' class="permalink"> Full article</a></p>
						<div class="entry">
							<p><img src="/template/images/pic01.jpg" width="800" height="300" alt="" /></p>
							<p><?php echo $newsItem['short_content'];?></p>
							<a href="/news">news</a>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>
				<!-- end #content -->
			
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>

<!-- end #footer -->
	</section>



<?php require_once 'application/footer.php'; ?>