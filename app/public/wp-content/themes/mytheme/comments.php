 <!-- Comments
============================================= -->
<?php

if( post_password_required() ){
	return;
}

?>
<div id="comments" class="clearfix">
    <?php 

    if(have_comments()) :
        ?>
        <h3 id="comments-title"><span><?php comments_number(); ?></span></h3>

        <!-- Comments List
        ============================================= -->
        <ol class="commentlist clearfix">
            <?php
                foreach($comments as $comment) :
                    ?>
                    <li class="comment even thread-even depth-1" id="li-comment-1">
                        <div id="comment-1" class="comment-wrap clearfix">
                            <div class="comment-meta">
                                <div class="comment-author vcard">
                                    <span class="comment-avatar clearfix">
                                        <?php echo get_avatar($comment, 60); ?>
                                    </span>
                                </div>
                            </div>
            
                            <div class="comment-content clearfix">
                                <div class="comment-author">
                                    <?php comment_author(); ?>
                                    <span><a href="#" title="Permalink to this comment"><?php comment_date(); ?></a></span>
                                </div>
                                <?php comment_text(); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <?php 
                endforeach;    

                the_comments_pagination();
            ?>
        </ol><!-- .commentlist end -->
        <?php
    endif;    
    ?>

    <div class="clear"></div>

    <!-- Comment Form
    ============================================= -->
    <div class="clearfix">

    <?php
    $req = true;
    $aria_req = ' aria-required="true"';
    $html_req = ' required="required"';
    $html5 = true;
    $required_text = ' Required fields are marked *';

    comment_form(array(
        'fields'               => array(
            'author' => '<div class="col_one_third">' . '<label for="author">' . __( 'Name', 'mytheme' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                        '<input id="author" class="sm-form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="22" maxlength="245" tabindex="1"' . $aria_req . $html_req . ' /></div>',
            'email'  => '<div class="col_one_third"><label for="email">' . __( 'Email', 'mytheme' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                        '<input id="email" class="sm-form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="22" maxlength="100" tabindex="2" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>',
            'url'    => '<div class="col_one_third col_last"><label for="url">' .__( 'Website', 'mytheme' ) . '</label> ' .
                        '<input id="url" class="sm-form-control" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="22" maxlength="200" tabindex="3" /></div>',
         ),
         'comment_field'        => '<div class="clear"></div>
                                    <div class="col_full">
                                        <label for="comment">' . __( 'Comment', 'mytheme' ) . '</label>
                                        <textarea id="comment" class="sm-form-control" name="comment" cols="58" rows="7" maxlength="65525" tabindex="4" aria-required="true" required="required"></textarea>
                                    </div>',

         /** This filter is documented in wp-includes/link-template.php */
         'must_log_in'          => '<h5 class="must-log-in">' . sprintf(
            /* translators: %s: login URL */
               __( 'You must be <a href="%s">logged in</a> to post a comment.', 'mytheme' ),
               wp_login_url( apply_filters( 'the_permalink', get_the_permalink() ) )
            ) . '</h5>',

         /** This filter is documented in wp-includes/link-template.php */
         'logged_in_as'         => '<h5 class="logged-in-as">' . sprintf(
            /* translators: 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
               __( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>', 'mytheme' ),
               get_edit_user_link(),
               /* translators: %s: user name */
               esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.', 'mytheme' ), $user_identity ) ),
               $user_identity,
               wp_logout_url( apply_filters( 'the_permalink', get_the_permalink() ) )
            ) . '</h5>',
    
         'comment_notes_before' => '<h5 class="comment-notes">' . __( 'Your email address will not be published.', 'mytheme' ) . ( $req ? $required_text : '' ) . '</h5>',
         'comment_notes_after'  => '',
    
         'action'               => site_url( '/wp-comments-post.php' ),
         'id_form'              => 'commentform',
         'id_submit'            => 'submit-button',
         'class_form'           => 'comment-form clearfix',
         'class_submit'         => 'button button-3d nomargin',
         'name_submit'          => 'submit',
         'title_reply'          => __( 'Leave a <span>Comment</span>', 'mytheme' ),
         'title_reply_to'       => __( 'Leave a <span>Comment</span> to %s', 'mytheme' ),
         'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
         'title_reply_after'    => '</h3>',
         'cancel_reply_before'  => ' <small>',
         'cancel_reply_after'   => '</small>',
         'cancel_reply_link'    => __( 'Cancel reply', 'mytheme' ),
         'label_submit'         => __( 'Submit Comment', 'mytheme' ),
         'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" tabindex="5" class="%3$s">%4$s</button>',
         'submit_field'         => '<div class="col_full nobottommargin">%1$s %2$s</div>',
         'format'               => 'xhtml' 
    ));
    ?>

    </div><!-- #respond end -->

</div><!-- #comments end -->
