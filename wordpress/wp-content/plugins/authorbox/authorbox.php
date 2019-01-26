<?php
/*
Plugin Name: authorbox
Plugin URI:
Description: author msg
Version: 0.0.1
Author: lyp
Author URI: https://www.itishow.com
Text Domain: authorbox
*/
class Authorbox_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        // 小工具ID
        'authorbox_widget',

        // 小工具名称
        __('AuthorBox', 'authorbox' ),

        // 小工具选项
        array (
            'description' => __( 'It will show author message.', 'authorbox' )
        )
        );
    }

    function form( $instance ) {
        $defaults = array(
            'author' => '1'
        );
        $author = $instance[ 'author' ];
        ?>
        <p>默认文章页面显示作者，其他页面显示指定ID</p>
        <p>
            <label for="<?php echo $this->get_field_id( 'author' ); ?>">Author ID:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'author' ); ?>" name="<?php echo $this->get_field_name( 'author' ); ?>" value="<?php echo esc_attr( $author ); ?>">
        </p>

        <?php
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance[ 'author' ] = strip_tags( $new_instance[ 'author' ] );
        return $instance;
    }

    function widget( $args, $instance ) {
        extract( $args );
        if (is_single()):
            $author = get_the_author_ID();
        else:
            $author = $instance['author'];
        endif;
        echo $args['before_widget'];
        echo $args['before_title'];
        echo '关于作者';
        echo $args['after_title'];
        ?>
        <div class="row" style="padding: 20px 0 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="border-bottom: 1px #8d96a0 solid;padding-bottom: 20px;">
                <div>
                    <?php
                    $photo = str_replace('class="','class="center-block ',get_avatar(get_the_author_meta( 'user_email' ,$author)));
                    $photo = str_replace('class=\'','class=\'center-block ',$photo);
                    echo $photo;
                    ?>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 text-left" style="margin-top: 10px;">
                <div>
                    <?php
                    echo "博主：".get_the_author_meta( 'display_name' ,$author);
                    ?>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 text-left">
                <div>
                    <?php
                    echo "邮箱：".get_the_author_meta( 'user_email' ,$author);
                    ?>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 text-left">
                <div>
                    <?php
                    echo get_the_author_meta( 'description' ,$author);
                    ?>
                </div>
            </div>
        </div>
        <?php
        echo $args['before_widget'];
    }

}

function authorbox_check_for_page_tree() {

    //首先检测当前访问的是否是一个页面
    if( is_page() ) {

        global $post;

        // 接着检测该页面是否有父级页面
        if ( $post->post_parent ){

            // 获取父级页面名单
            $parents = array_reverse( get_post_ancestors( $post->ID ) );

            // 获取最顶级页面
            return $parents[0];

        }

        // 返回ID  - 如果存在父级页面，就返回最顶级的页面ID，否则返回当前页面ID, or the current page if not
        return $post->ID;

    }

}

function authorbox_register_widget() {

    register_widget( 'Authorbox_Widget' );

}
add_action( 'widgets_init', 'authorbox_register_widget' );