<?php

    global $prof_default;

?>
 
<!-- Footer Start
================================================== -->      

 
    <!-- Footer Columns
    ================================================== -->
    <footer class="app-footer">
        <?php if(of_get_option('select_columns_columns',$prof_default) == 'On'){ ?>
            <div class="container footer-content">
                <div class="row">
                    <div class="span-3 footer-col">
                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('FooterColI')) { ?>   
                            <?php dynamic_sidebar('FooterColI'); ?>
                        <?php } ?>
                    </div>
                    <div class="span-3 footer-col">             
                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('FooterColII')) { ?>   
                            <?php dynamic_sidebar('FooterColII'); ?>
                        <?php } ?>
                    </div>
                    <div class="span-3 footer-col">             
                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('FooterColIII')) { ?>   
                            <?php dynamic_sidebar('FooterColIII'); ?>
                        <?php } ?>
                    </div>
                    <div class="span-3 footer-col">             
                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('FooterColIV')) { ?>   
                            <?php dynamic_sidebar('FooterColIV'); ?>
                        <?php } ?>  
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="bottom-bar">
            <div class="container">
                <div class="footer-wrapper">
                    <!-- Copyright Section -->
                    <?php if (of_get_option('select_copyrights_columns',$prof_default) == 'On') { ?>
                        <div class="copyright" id="copyright">
                            <?php echo wp_kses_post(of_get_option('footer_text',$prof_default)); ?>                         
                        </div>
                    <?php } ?>
                    <!-- Footer Navigation -->
                    <?php
                        if (of_get_option('select_menu_footer',$prof_default) == 'On') {
                                wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );
                        } else {
                                echo esc_attr(of_get_option('select_menu_text',$prof_default));
                        }
                    ?>  
                </div>
            </div>
        </div>
        

        <?php if(of_get_option('select_backtotop',$prof_default) == 'On') { ?> 
            <a id="back-top" href="#" style="display: none;"><i class="fa fa-angle-up fa-2x"></i></a>
        <?php } ?>      
        
    </footer>


<!-- Footer End
================================================== -->      
</div>

<div class="loading-wrapper active">
    <div class="spinner"></div>
</div>


<span class="icon-lrg nav-trigger flyout-trigger" id="flyout-trigger">
    <i class="fa fa-bars"></i>
</span>

<nav class="flyout-nav-container" id="flyout-nav"></nav>


<?php
    if(of_get_option('select_header_search',$prof_default) == 'On'){
?>                              
    <form action="<?php echo esc_url(get_site_url()); ?>" class="main-search" id="searchform" method="get" role="search">                       
        <input type="search" name="s" id="s" value="" placeholder="<?php _e("Enter your query..." , "nexus"); ?>">
        <button type="submit"><i class="fa fa-search"></i></button>
        <div class="button brand-1 search-close"><i class="fa fa-times"></i></div>
    </form>
<?php } ?>


<?php wp_footer(); ?>
</body>
<!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script>

    jQuery('.icon-click').click(function(event) {
      jQuery(this).siblings('.icon-hidden-text').toggle();
    });

    jQuery('.icon-text').click(function() {
      jQuery(this).siblings('.icon-hidden-text').toggle();
    });

    // document.getElementById("battery-name").onclick = function() {
    //     if (document.getElementById("battery").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("battery").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("battery").style.display = "none";
    //     }

    // };
    // document.getElementById("sync-name").onclick = function() {
    //     if (document.getElementById("sync").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("sync").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("sync").style.display = "none";
    //     }

    // };
    // document.getElementById("update-name").onclick = function() {
    //     if (document.getElementById("update").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("update").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("update").style.display = "none";
    //     }

    // };

    // document.getElementById("led-name").onclick = function() {
    //     if (document.getElementById("led").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("led").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("led").style.display = "none";
    //     }

    // };

    // document.getElementById("size-name").onclick = function() {
    //     if (document.getElementById("size").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("size").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("size").style.display = "none";
    //     }

    // };

    // document.getElementById("bluetooth-name").onclick = function() {
    //     if (document.getElementById("bluetooth").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("bluetooth").style.display = "none";
    //     }

    // };

    // document.getElementById("sensor-name").onclick = function() {
    //     if (document.getElementById("sensor").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("sensor").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("sensor").style.display = "none";
    //     }

    // };

    // document.getElementById("commission-name").onclick = function() {
    //     if (document.getElementById("commission").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("commission").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("commission").style.display = "none";
    //     }

    // };

    // document.getElementById("smart-name").onclick = function() {
    //     if (document.getElementById("smart").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("smart").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("smart").style.display = "none";
    //     }

    // };

    // document.getElementById("safe-name").onclick = function() {
    //     if (document.getElementById("safe").style.display == "none") {
    //         console.log("clicked");
    //         document.getElementById("update").style.display = "none";
    //         document.getElementById("battery").style.display = "none";
    //         document.getElementById("sync").style.display = "none";
    //         document.getElementById("led").style.display = "none";
    //         document.getElementById("size").style.display = "none";
    //         document.getElementById("bluetooth").style.display = "none";
    //         document.getElementById("sensor").style.display = "none";
    //         document.getElementById("commission").style.display = "none";
    //         document.getElementById("smart").style.display = "none";
    //         document.getElementById("safe").style.display = "none";
    //         document.getElementById("safe").style.display = "block";
    //     } else {
    //         console.log("clicked again");
    //         document.getElementById("safe").style.display = "none";
    //     }

    // };

    jQuery("div.feature-highlights div.vc_column_container").mouseenter( function() {
            jQuery(this).css("background", "#ffffff !important");
            jQuery(this).css("background-image", "url(http://clients.liftmedia.io/itovi/wp-content/uploads/2015/08/dark-jawbone-up-move.jpg?id=145)");
            jQuery(this).find(".hidden-1").css("visibility", "visible");
        }
    ).mouseleave( function() {
            jQuery(this).find(".hidden-1").css("visibility", "hidden");
            jQuery(this).css("background-image", "url(http://clients.liftmedia.io/itovi/wp-content/uploads/2015/07/jawbone-up-move.jpg?id=46)");
        });
    document.getElementById("specs").onclick = function() {
        console.log(document.getElementById("specs-text").style.display);
        if (document.getElementById("specs-text").style.display === "none" || document.getElementById("specs-text").style.display === "") {
            document.getElementById("specs-text").style.display = "block";
        } else {
            document.getElementById("specs-text").style.display = "none";
        }
    };
    document.getElementById("faqs").onclick = function() {
        if (document.getElementById("faqs-text").style.display === "none" || document.getElementById("faqs-text").style.display === "") {
            document.getElementById("faqs-text").style.display = "block";
        } else {
            document.getElementById("faqs-text").style.display = "none";
        }
    };

    function {}

</script>
</html>

