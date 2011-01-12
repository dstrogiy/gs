<?php get_header(); ?>
			
			<div id="content" class="clear">
			
				<div id="main" class="col700 clear" role="main">
				
					<h1 class="archive_title"><span>Search Results for:</span> <?php echo attribute_escape(get_search_query()); ?></h1>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" class="clear">
						
						<header>
							
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<p class="meta">Posted <time><?php the_time('F jS, Y'); ?></time> by <?php the_author(); ?> <span class="amp">&</span> filed under <?php the_category(', '); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_excerpt('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>
					
						</section> <!-- end article section -->
						
						<footer>
					
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clear">
								<li class="prev-link"><?php next_posts_link('&laquo; Older Entries') ?></li>
								<li class="next-link"><?php previous_posts_link('Newer Entries &raquo;') ?></li>
							</ul>
						</nav>
					<?php } ?>			
					
					<?php else : ?>
					
					<!-- this area shows up if there are no results -->
					
					<article id="post-not-found">
					    <header>
					    	<h1>No Results Found</h1>
					    </header>
					    <section class="post_content">
					    	<p>Sorry, but the requested resource was not found on this site.</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    			
    			<div id="sidebar1" class="col220 clear">
    				
    				<?php get_search_form(); ?>
    				
    				
    			
    			</div>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>