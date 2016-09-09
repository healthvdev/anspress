<div class="ap-questions-widget clearfix">
	<?php 
		if ( ap_have_questions() ) {
			/* Start the Loop */
			while ( ap_questions() ) : ap_the_question();
				$ans_count = ap_question_get_the_answer_count();
				$net_vote = ap_question_get_the_net_vote();
				?>
				<div class="ap-question-item">
                                    <a style="font-weight: bold;color: #333;" class="ap-question-title" href="<?php ap_question_the_permalink() ?>">
                                    <?php 
                                    $img_small_banner = ap_get_image(ap_question_get_the_ID(), 'banner_img');
                                        if($img_small_banner!='' ){ 
                                    ?>
                                    <div>
                                        <img src="<?php echo $img_small_banner;?>" alt="<?php ap_question_the_permalink() ?>"/>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                        <?php the_title() ?>
                                    </a>
					<span class="ap-ans-count"><?php printf( _n('1 answer', '%d answers', $ans_count, 'anspress-question-answer'), $ans_count) ?></span>
					<span class="ap-vote-count"> | <?php printf( _n('1 vote', '%d votes', $net_vote, 'anspress-question-answer'), $net_vote) ?></span>
				</div>
				<?php
			endwhile;
		}else{
			_e('No questions found.', 'anspress-question-answer');
		}
	?>	
</div>


