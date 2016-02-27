<?php
/**
 * Author: VCUarts
 * URL: http://arts.vcu.edu
 *
 * @package VCUarts_Bones_WP
 */

get_template_part( 'library/templates/the-header' );

  if ( ! have_posts() ) :
    get_template_part( 'library/templates/not-found' );
  endif;

  while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<div class="grid-control countries-control" data-filter-group="country">
  <p class="control-title"><strong>Countries</strong></p>
  <span class="checkbox" data-filter=".austria">Austria <em class="check"></em></span>
  <span class="checkbox" data-filter=".france">France <em class="check"></em></span>
  <span class="checkbox" data-filter=".germany">Germany <em class="check"></em></span>
  <span class="checkbox" data-filter=".hungary">Hungary <em class="check"></em></span>
  <span class="checkbox" data-filter=".italy">Italy <em class="check"></em></span>
  <span class="checkbox" data-filter=".sweden">Sweden <em class="check"></em></span>

  <div class="filter-area">
    <span class="filter filter-alpha"><em>Filter by alphabet</em> <i class="fa fa-caret-down"></i></span>
    <span class="filter filter-size"><em>Filter by size</em> <i class="fa fa-caret-down"></i></span>
  </div>
</div>

<div class="grid-control months-control" data-filter-group="month">
  <p class="control-title"><strong>Months</strong></p>
  <span class="checkbox" data-filter=".january">January <em class="check"></em></span>
  <span class="checkbox" data-filter=".february">February <em class="check"></em></span>
  <span class="checkbox" data-filter=".march">March <em class="check"></em></span>
  <span class="checkbox" data-filter=".april">April <em class="check"></em></span>
  <span class="checkbox" data-filter=".may">May <em class="check"></em></span>
  <span class="checkbox" data-filter=".june">June <em class="check"></em></span>
  <span class="checkbox" data-filter=".july">July <em class="check"></em></span>
  <span class="checkbox" data-filter=".august">August <em class="check"></em></span>
  <span class="checkbox" data-filter=".september">September <em class="check"></em></span>
  <span class="checkbox" data-filter=".october">October <em class="check"></em></span>

  <div class="filter-area">
    <span class="filter filter-select-all"><em>Select all</em> <div class="filter-checkbox"></div></span>
    <span class="filter filter-organize"><em>Organize by month</em> <div class="toggle"><div class="toggle-switch"></div></div> </span>
  </div>
</div>

<div class="country-grid">
  <div class="country-item austria january">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-jan.svg" /></div>
    <p class="country-name">Austria: <span class="number">3,845</span></p>
    <p class="country-month">January</p>
  </div>
  <div class="country-item austria february">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-feb.svg" /></div>
    <p class="country-name">Austria: <span class="number">2,685</span></p>
    <p class="country-month">February</p>
  </div>
  <div class="country-item austria march">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-mar.svg" /></div>
    <p class="country-name">Austria: <span class="number">2,350</span></p>
    <p class="country-month">March</p>
  </div>
  <div class="country-item austria april">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-apr.svg" /></div>
    <p class="country-name">Austria: <span class="number">3,170</span></p>
    <p class="country-month">April</p>
  </div>
  <div class="country-item austria may">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-may.svg" /></div>
    <p class="country-name">Austria: <span class="number">5,525</span></p>
    <p class="country-month">May</p>
  </div>
  <div class="country-item austria june">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-jun.svg" /></div>
    <p class="country-name">Austria: <span class="number">6,715</span></p>
    <p class="country-month">June</p>
  </div>
  <div class="country-item austria july">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-jul.svg" /></div>
    <p class="country-name">Austria: <span class="number">7,705</span></p>
    <p class="country-month">July</p>
  </div>
  <div class="country-item austria august">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-aug.svg" /></div>
    <p class="country-name">Austria: <span class="number">11,410</span></p>
    <p class="country-month">August</p>
  </div>
  <div class="country-item austria september">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-sep.svg" /></div>
    <p class="country-name">Austria: <span class="number">7,610</span></p>
    <p class="country-month">September</p>
  </div>
  <div class="country-item austria october">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/aus-sep.svg" /></div>
    <p class="country-name">Austria: <span class="number">9,970</span></p>
    <p class="country-month">October</p>
  </div>
  <div class="country-item france january">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-jan.svg" /></div>
    <p class="country-name">France: <span class="number">1,935</span></p>
    <p class="country-month">January</p>
  </div>
  <div class="country-item france february">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-feb.svg" /></div>
    <p class="country-name">France: <span class="number">2,835</span></p>
    <p class="country-month">February</p>
  </div>
  <div class="country-item france march">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-mar.svg" /></div>
    <p class="country-name">France: <span class="number">2,695</span></p>
    <p class="country-month">March</p>
  </div>
  <div class="country-item france april">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-apr.svg" /></div>
    <p class="country-name">France: <span class="number">1,920</span></p>
    <p class="country-month">April</p>
  </div>
  <div class="country-item france may">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-may.svg" /></div>
    <p class="country-name">France: <span class="number">2,145</span></p>
    <p class="country-month">May</p>
  </div>
  <div class="country-item france june">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-jun.svg" /></div>
    <p class="country-name">France: <span class="number">2,620</span></p>
    <p class="country-month">June</p>
  </div>
  <div class="country-item france july">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-jul.svg" /></div>
    <p class="country-name">France: <span class="number">2,640</span></p>
    <p class="country-month">July</p>
  </div>
  <div class="country-item france august">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-aug.svg" /></div>
    <p class="country-name">France: <span class="number">4,010</span></p>
    <p class="country-month">August</p>
  </div>
  <div class="country-item france september">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-sep.svg" /></div>
    <p class="country-name">France: <span class="number">2,865</span></p>
    <p class="country-month">September</p>
  </div>
  <div class="country-item france october">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/fra-oct.svg" /></div>
    <p class="country-name">France: <span class="number">4,090</span></p>
    <p class="country-month">October</p>
  </div>
  <div class="country-item germany january">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-jan.svg" /></div>
    <p class="country-name">Germany: <span class="number">16,915</span></p>
    <p class="country-month">January</p>
  </div>
  <div class="country-item germany february">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-feb.svg" /></div>
    <p class="country-name">Germany: <span class="number">18,770</span></p>
    <p class="country-month">February</p>
  </div>
  <div class="country-item germany march">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-mar.svg" /></div>
    <p class="country-name">Germany: <span class="number">23,500</span></p>
    <p class="country-month">March</p>
  </div>
  <div class="country-item germany april">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-apr.svg" /></div>
    <p class="country-name">Germany: <span class="number">20,000</span></p>
    <p class="country-month">April</p>
  </div>
  <div class="country-item germany may">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-may.svg" /></div>
    <p class="country-name">Germany: <span class="number">18,530</span></p>
    <p class="country-month">May</p>
  </div>
  <div class="country-item germany june">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-jun.svg" /></div>
    <p class="country-name">Germany: <span class="number">24,330</span></p>
    <p class="country-month">June</p>
  </div>
  <div class="country-item germany july">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-jul.svg" /></div>
    <p class="country-name">Germany: <span class="number">28,570</span></p>
    <p class="country-month">July</p>
  </div>
  <div class="country-item germany august">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-aug.svg" /></div>
    <p class="country-name">Germany: <span class="number">29,705</span></p>
    <p class="country-month">August</p>
  </div>
  <div class="country-item germany september">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-sep.svg" /></div>
    <p class="country-name">Germany: <span class="number">37,020</span></p>
    <p class="country-month">September</p>
  </div>
  <div class="country-item germany october">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ger-oct.svg" /></div>
    <p class="country-name">Germany: <span class="number">50,060</span></p>
    <p class="country-month">October</p>
  </div>
  <div class="country-item hungary january">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-jan.svg" /></div>
    <p class="country-name">Hungary: <span class="number">11,920</span></p>
    <p class="country-month">January</p>
  </div>
  <div class="country-item hungary february">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-feb.svg" /></div>
    <p class="country-name">Hungary: <span class="number">15,835</span></p>
    <p class="country-month">February</p>
  </div>
  <div class="country-item hungary march">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-mar.svg" /></div>
    <p class="country-name">Hungary: <span class="number">4,225</span></p>
    <p class="country-month">March</p>
  </div>
  <div class="country-item hungary april">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-apr.svg" /></div>
    <p class="country-name">Hungary: <span class="number">5,740</span></p>
    <p class="country-month">April</p>
  </div>
  <div class="country-item hungary may">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-may.svg" /></div>
    <p class="country-name">Hungary: <span class="number">8,870</span></p>
    <p class="country-month">May</p>
  </div>
  <div class="country-item hungary june">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-jun.svg" /></div>
    <p class="country-name">Hungary: <span class="number">14,965</span></p>
    <p class="country-month">June</p>
  </div>
  <div class="country-item hungary july">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-jul.svg" /></div>
    <p class="country-name">Hungary: <span class="number">29,095</span></p>
    <p class="country-month">July</p>
  </div>
  <div class="country-item hungary august">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-aug.svg" /></div>
    <p class="country-name">Hungary: <span class="number">44,325</span></p>
    <p class="country-month">August</p>
  </div>
  <div class="country-item hungary september">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-sep.svg" /></div>
    <p class="country-name">Hungary: <span class="number">29,940</span></p>
    <p class="country-month">September</p>
  </div>
  <div class="country-item hungary october">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/hun-oct.svg" /></div>
    <p class="country-name">Hungary: <span class="number">430</span></p>
    <p class="country-month">October</p>
  </div>
  <div class="country-item italy january">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-jan.svg" /></div>
    <p class="country-name">Italy: <span class="number">3,880</span></p>
    <p class="country-month">January</p>
  </div>
  <div class="country-item italy february">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-feb.svg" /></div>
    <p class="country-name">Italy: <span class="number">4,140</span></p>
    <p class="country-month">February</p>
  </div>
  <div class="country-item italy march">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-mar.svg" /></div>
    <p class="country-name">Italy: <span class="number">4,835</span></p>
    <p class="country-month">March</p>
  </div>
  <div class="country-item italy april">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-apr.svg" /></div>
    <p class="country-name">Italy: <span class="number">3,615</span></p>
    <p class="country-month">April</p>
  </div>
  <div class="country-item italy may">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-may.svg" /></div>
    <p class="country-name">Italy: <span class="number">4,305</span></p>
    <p class="country-month">May</p>
  </div>
  <div class="country-item italy jun">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-jun.svg" /></div>
    <p class="country-name">Italy: <span class="number">4,405</span></p>
    <p class="country-month">June</p>
  </div>
  <div class="country-item italy jul">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-jul.svg" /></div>
    <p class="country-name">Italy: <span class="number">7,325</span></p>
    <p class="country-month">July</p>
  </div>
  <div class="country-item italy august">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-aug.svg" /></div>
    <p class="country-name">Italy: <span class="number">7,745</span></p>
    <p class="country-month">August</p>
  </div>
  <div class="country-item italy september">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-sep.svg" /></div>
    <p class="country-name">Italy: <span class="number">9,565</span></p>
    <p class="country-month">September</p>
  </div>
  <div class="country-item italy october">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/ita-oct.svg" /></div>
    <p class="country-name">Italy: <span class="number">8,575</span></p>
    <p class="country-month">October</p>
  </div>
  <div class="country-item sweden january">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/swe-jan.svg" /></div>
    <p class="country-name">Sweden: <span class="number">3,315</span></p>
    <p class="country-month">January</p>
  </div>
  <div class="country-item sweden february">
    <div class="svg"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/library/images/svg/swe-feb.svg" /></div>
    <p class="country-name">Sweden: <span class="number">2,585</span></p>
    <p class="country-month">February</p>
  </div>
</div>







</article> <?php // end article ?>

  <?php endwhile; ?>

<?php get_template_part( 'library/templates/the-footer' );
