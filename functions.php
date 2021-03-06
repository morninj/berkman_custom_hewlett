<?php 
wp_enqueue_script('jquery', 'jquery');
wp_enqueue_script('jquerycycle', get_bloginfo('stylesheet_directory') . '/jquery.cycle.all.js');
wp_enqueue_script('hewlett.js', get_bloginfo('stylesheet_directory') . '/hewlett.js');

function hewlett_twitter_shortcode( $atts ) {
		return "<script src='http://widgets.twimg.com/j/2/widget.js'></script> 
              <script type='text/javascript' language='javascript'> 
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#berkmancenter',
  interval: 6000,
  title: 'Berkman Center',
  subject: '#berkmancenter ',
  width: 188,
  height: 300,
  theme: {
    shell: {
      background: '#5FA1D0',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'default'
  }
}).render().start();
</script>";
}
add_shortcode( 'hewlett_twitter', 'hewlett_twitter_shortcode' );

add_filter('widget_text', 'do_shortcode');

register_sidebar(array(
  'name' => 'MidSidebar',
  'id' => 'mid-sidebar',
  'description' => 'Widgets in this area will be shown on the next to the slider image.',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => "</aside>",
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
));
