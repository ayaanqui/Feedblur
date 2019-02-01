<?php 
/* // Hide all errors
error_reporting(0);
ini_set('display_errors', 0); */

// Show all errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!doctype html>
<html lang="en">
    <?php include 'includes/head.php'; ?>

    <body>
        <div class="site-content main-body" id="sc-main">

            <?php include 'includes/global-nav.php'; ?>

			<div class="content-wrapper clearfix">
				<div class="content-left">
					<div class="user-feed">

						<div class="user-feed-container">

							<div class="uposts-feed-loader-prompt">
								<span class="spin-loader"></span>
								<span class="loader-comment">Loading posts...</span>
							</div>

							<div class="upost-feed-case animated" id="upost-feeds">

                                <?php 
                                include 'content.php';

                                for ($i = count($posts)-1; $i >= 0; $i--) {
                                ?>
								<div class="upost-view">
									<div class="upost-view-tags-categories">
										<div class="upost-view-tags-categories-inner">
											<!--<a href="#" class="upost-category-item">
												<img src="resources/img/cont_img/samsung.jpg">
												<span>Samsung</span>
											</a>-->
                                            <?php 
                                            $solid_tags = $posts[$i]['tags'];
                                            $tags = explode(", ", $solid_tags);

                                            foreach ($tags as $t) {
                                            ?>
                                            <a href="#" class="upost-category-item">
												<img src="resources/img/cont_img/<?php echo str_replace(' ', '_', $t); ?>.jpg" onerror="this.src=''">
												<span><?php echo $t; ?></span>
											</a>
                                            <?php } ?>
										</div>
									</div>

									<div class="upost-view-controller upost-options">
										<a class="upost-author-img" href="#">
											<img src="resources/img/cont_img/<?php echo $posts[$i]['uimg']; ?>">
										</a>

										<a href="#" class="up-one">
											<div class="up-one-tally">
												<span class="icon-up-arrow-key"></span>
												<span class="up-post-counter"><?php echo $posts[$i]['likes']; ?></span>
											</div>
										</a>
									</div>

									<div class="upost-view-main">
										<a href="#">
											<div class="upost-view-heading">
												<h1><?php echo $posts[$i]['title']; ?></h1>
											</div>

											<div class="upost-author-nametag">
												<div class="upost-fname">
													<a href="#">
														<span class="fname-sm"><?php echo $posts[$i]['name']; ?></span>

														<span class="upost-uname">
															<span class="at-name-sm">@<?php echo $posts[$i]['uname']; ?></span>
														</span>
													</a>

													<small class="upost-dt-stamp"><?php echo $posts[$i]['date']; ?></small>
												</div>
											</div>

											<div class="upost-view-content">
												<p><?php echo $posts[$i]['cont']; ?></p>
											</div>

											<div class="upost-view-toolbar">
												<div class="upost-cont-options">
													<a href="#" class="upost-opt-item"><span>Answer<span class="red-alert"><?php echo $posts[$i]['answers']; ?></span></span></a>
													<a href="#" class="upost-opt-item"><span class="icon-share-button"></span></a>
													<a href="#" class="upost-opt-item"><span class="icon-show-more-button-with-three-dots"></span></a>
												</div>
											</div>
										</a>
									</div>
								</div>
                                <?php } ?>

							</div>

							<div class="loader load-uposts-loader">
								<span class="spin-loader load-upost-spinner"></span>
							</div>
						</div>

					</div>
				</div>

				<div class="content-right">
					<div class="hashtags-popular">
						<div class="panel-mini-title"><span class="icon-burn-button"></span> <span>Trending tags</span></div>
						<?php 
						foreach ($side_tags as $s_tag) {
							echo '<span>#' . $s_tag . '</span>';
						}
						?>
					</div>
				</div>
			</div>

		</div>
    </body>
</html>