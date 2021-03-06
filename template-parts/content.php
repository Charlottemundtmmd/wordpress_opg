<?php
/**
 * Template part for displaying content on index.
 *
 * @package easthill
 */
?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php if ( is_sticky() && is_home()) : ?>
                                <div class="ribbon"><span><?php esc_html_e( 'Stickied', 'easthill' ); ?></span></div>
                            <?php endif; ?>
                                    <div class="featured-img">
                                     <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'easthill-featured' );
                                        } ?>
                                    </a>
                                    </div>
                                    <div class="text-holder">
                                    <?php
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<span class="cat-link"><a class="category" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></span>';
                                        }
                                    ?>
									<header class="entry-header">
										<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
										<div class="entry-meta">
                                            <?php easthill_entry_meta(); ?>
										</div>
									</header>
                                    <div class="entry-excerpt">
                                            <?php
                                                the_excerpt( sprintf(
                                                    /* translators: %s: Name of current post. */
                                                    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'easthill' ), array( 'span' => array( 'class' => array() ) ) ),
                                                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                                ) );

                                                wp_link_pages( array(
                                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'easthill' ),
                                                    'after'  => '</div>',
                                                ) );
                                            ?>
                                    </div>
									<div class="entry-footer">
				            <a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('Læs mere &#8250;', 'easthill') ?></a>
									</div>
									</div>

						</article>