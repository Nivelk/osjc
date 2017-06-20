<?php if ( comments_open() ) : ?>
<div class="comments">
    <?php if ( post_password_required() ) : ?>
                    <p class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.'); ?></p>
                </div><!-- #comments -->
    <?php
            return;
        endif;
    ?>
    <div id="comments">
    <?php if (have_comments()) : ?>
        <h3><?php printf(_n('1 comment', '%1$s comments', get_comments_number()), number_format_i18n( get_comments_number() ), '' ); ?></h3>
        <div class="comment_list">
          
            <ol>
                <?php wp_list_comments(array('callback' => 'commentslist')); ?>
            </ol>
        </div>
    <?php endif; // end have_comments() ?>
    </div>
    <?php if ('open' == $post->comment_status) : ?>
    <div id="respond">
        <h3>Seu Comentário</h3>
        <div class="comment_form">
        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
            <p class="comment_message">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
        <?php else : ?>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <?php if ( $user_ID ) : ?>
                    <p class="comment_message">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
                    
                                <div class="commform-textarea">
                                    <textarea name="comment" id="comment" cols="50" rows="7" tabindex="1"></textarea>
                                </div>
                          
                    
                     <div class="submit clear ">
                    <input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
                    <p id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></p>
                </div>
                <?php else : ?>
                
                	<table style="width:100%; border:0;  cellspacing:0; cellpadding:0;" >
                      <tr>
                        <td> 
                        	
                            <table style="width:100%; border:0;  cellspacing:0; cellpadding:0;" >
                              <tr>
                                <td class="commform-author">
                                <p>Nome <span>obrigatório</span></p>
                                <div><input type="text" name="author" id="author" tabindex="2" />
                                </div></td>
                              </tr>
                              <tr>
                                <td class="commform-email">
                                <p>Email <span>obrigatório</span></p>
                                <div>
                                    <input type="text" name="email" id="email" tabindex="3" />
                                </div>
                            </td>
                              </tr>
                              <tr>
                               <td class="commform-url">
                                <p>Website</p> <div><input type="text" name="url" id="url" tabindex="4" /></div>
                            </td>
                              </tr>
                            </table>
                        
                        
                        </td>
                        <td>
                        <p>Comentário</p>
                        <div class="commform-textarea">
                        <textarea name="comment" id="comment" cols="50" rows="7" tabindex="1"></textarea>
                        </div></td>
                      </tr>
                    </table>
                     <div class="submit clear comment_b_submit">
                    <input name="submit" type="submit" id="submit" tabindex="5" value="Enviar" />
                    <p id="cancel-comment-reply"><?php cancel_comment_reply_link() ?></p>
                </div>
                    		
                <?php endif; ?>
                <!--<p class="comment_message"><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
               
                    
                <div><?php comment_id_fields(); ?><?php do_action('comment_form', $post->ID); ?></div>
            </form>
        <?php endif; // If registration required and not logged in ?>
        </div>
        <?php endif; // if you delete this the sky will fall on your head ?>
    </div>
</div>
<?php endif; // end ! comments_open() ?>
<!-- #comments -->