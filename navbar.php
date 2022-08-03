<div class="news-wrapper">
  <div class="news-header-one text-light">
  <h5><a href="/?cat=53">ग्याजेट्स</a></h5>
  </div>
  </div>
  <div class="row mt-3 ">
  <?php $i=0; $args = array('showposts' =>5, 'cat' =>'53'); $loop = new WP_Query( $args ); while($loop->have_posts()): $loop->the_post();if($i++<2){?>
    <div class="col md-6">
      <a href="<?php the_permalink();?>">
        <div class="large-img position img-w mini-height mbl-img">
          <?php the_post_thumbnail('large');?>
          <div class="overlay"></div>
          <h5 class="large-font fancy-font" style="font-size: 25px!important;">
            <?php echo wp_trim_words( get_the_title(), 10 ); ?>
          </h5>
  
        </div>
      </a>
    </div>
     
    <?php } else {if ($i==2) { echo '</div> ';} elseif{ ?>
    <div class="row mt-2">
          <div class="col-md-3 mb-3  ">
              <div class="wrap  h-100">
                  <div class="banner world-img  position share-vers mbl-w">
                      <figure><?php the_post_thumbnail('medium');?></figure>
                      <a href="<?php the_permalink();?>">     
                          <div class="over-lay">
                              <div class="effect-text">
                                  <h5 class="small-font " style="font-size:20px!important;">
                                      <?php echo wp_trim_words( get_the_title(), 20 ); ?></h5>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
    </div>
          <?php } endwhile; wp_reset_postdata();?>
  
  <style>
      .kt-img img {
      height: 360px;
      object-fit: cover;
      width: 633px;
  }
  .world-img img {
      height: 189px;
      object-fit: cover;
      width: 100%;
  }
  </style>
  
  