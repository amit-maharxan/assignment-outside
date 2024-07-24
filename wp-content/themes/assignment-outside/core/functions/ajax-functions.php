<?php

function filter_search_events() {
    $string = $_REQUEST['string'] ? htmlspecialchars($_REQUEST['string']) : '';
    $output = '';
    $total = '';

    $wp_query = new WP_Query(array(
        'post_type'       => 'events',
        'posts_per_page'  => 6,
        's' => $string
    ));
    
    $total_posts = $wp_query->found_posts;
    while ($wp_query->have_posts()) : $wp_query->the_post();
    $image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'thumbnail' ));
    $plus = site_url('/wp-content/uploads/2024/07/plus.png');
    $cross = site_url('/wp-content/uploads/2024/07/cross.png');
    $description = get_the_content();
    $description = wp_trim_words( $description, 50, '...' );

    $output .= '<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img src="'.$image.'" class="card-img-top" alt="event-image">
                                    <div class="card-body">
                                        <h5 class="card-title same-height-1">'.get_the_title().'</h5>
                                        <img class="plus-icon" src="'.$plus.'" alt="plus-icon" width="40">
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">'.$description.'</p>
                                        <a href="'.get_the_permalink().'">READ MORE</a>
                                        <img class="cross-icon" src="'.$cross.'" alt="cross-icon" width="40">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    endwhile;
    wp_reset_postdata();

    $total_page = ceil($total_posts/6);
    for($i=1; $i<=$total_page; $i++){
        if($i == 1){
            $class = 'active';
        } else {
            $class = '';
        }
        $total .= '<div class="page_num '.$class.'" data-number="'.$i.'">'.$i.'</div>';
    }

    $responseArray = array( 
        'total' => $total, 
        'data'  => $output 
    ); 

    echo json_encode($responseArray);
    // echo $output;
    die();

}

add_action( 'wp_ajax_nopriv_filter_search_events', 'filter_search_events' );
add_action( 'wp_ajax_filter_search_events', 'filter_search_events' );


function load_events() {
    $page = $_REQUEST['page'] ? htmlspecialchars($_REQUEST['page']) : '';
    $search_text = $_REQUEST['search_text'] ? htmlspecialchars($_REQUEST['search_text']) : '';
    $output = '';

    $offset = ( $page -1 ) * 6;
    $wp_query = new WP_Query(array(
        'post_type'       => 'events',
        'posts_per_page'  => 6,
        's' => $search_text,
        'offset' => $offset
    ));

    while ($wp_query->have_posts()) : $wp_query->the_post();
    $image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(), 'thumbnail' ));
    $plus = site_url('/wp-content/uploads/2024/07/plus.png');
    $cross = site_url('/wp-content/uploads/2024/07/cross.png');
    $description = get_the_content();
    $description = wp_trim_words( $description, 50, '...' );

    $output .= '<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="card">
                                    <img src="'.$image.'" class="card-img-top" alt="event-image">
                                    <div class="card-body">
                                        <h5 class="card-title same-height-1">'.get_the_title().'</h5>
                                        <img class="plus-icon" src="'.$plus.'" alt="plus-icon" width="40">
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">'.$description.'</p>
                                        <a href="'.get_the_permalink().'">READ MORE</a>
                                        <img class="cross-icon" src="'.$cross.'" alt="cross-icon" width="40">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
    endwhile;
    wp_reset_postdata();

    echo $output;
    die();

}

add_action( 'wp_ajax_nopriv_load_events', 'load_events' );
add_action( 'wp_ajax_load_events', 'load_events' );