<?php
/**
 * Template Name: Faq Page IACC
 * Description: The template for displaying the Piazza Italia Page
 * Template Post Type: page, service, careervisa
 *
 */

?>

<?php get_header(); ?>

<div class="row-faq-open" id="row-faq"style="padding-right:0px;">
    
    <div class="row row-faq-title" style="padding-right:0px;;padding-bottom:36px;">
        <div class="col-md-8" id="faq">
            <h2>See the Frequently Asked Questions</h2>
        </div>
        <div class="col-md-4" style="padding-right:0px;">
        </div>
    </div>

    <div class="row row-faq-queries"style="padding-right:0px;" id="faq-to-open">


        <?php 
        $faq_count = 0;
        while(has_sub_field('faq')): ?>

        <?php
          
        $question = get_sub_field('question');
        $reply = get_sub_field('reply'); ?>

        <?php if($faq_count == 0): ?>
        <div class="col-md-12">
            <div class="query-box open" id="query-box-<?php echo $faq_count;?>" style="background-color: rgba(136, 139, 141, 0.15) !important;">
                <div class="row question-faq active" id="question-faq-<?php echo $faq_count;?>">
                    <div class="col-10 col-md-10">
                        <h2 class="active" id="title-<?php echo $faq_count;?>"><?php echo $question; ?></h2>
                    </div>
                    <div class="col-2 col-md-2">
                    <p  id="button-close-<?php echo $faq_count;?>"><button class="plus-close"><i class="fa fa-close"  onclick="close_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"></i></button></p>
                    <p id="button-open-<?php echo $faq_count;?>" style="display:none;"><button class="plus-open" onclick="open_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fas fa-plus" style="color:white"></i></button></p>
                    </div>
                </div>
                <div class="question-reply" id="reply-<?php echo $faq_count;?>">
                    <p><?php echo $reply; ?></p>
                </div>
            </div>
        </div>

        <?php ;
        else:?>
        <div class="col-md-12">
            <div class="query-box" id="query-box-<?php echo $faq_count;?>" style="background-color: rgba(136, 139, 141, 0.15) !important;">
                <div class="row question-faq" id="question-faq-<?php echo $faq_count;?>">
                    <div class="col-10 col-md-10">
                       <h2 id="title-<?php echo $faq_count;?>"><?php echo $question; ?></h2> 
                    </div>
                    <div class="col-2 col-md-2">
                    <p id="button-close-<?php echo $faq_count;?>" style="display:none;"><button class="plus-close"  onclick="close_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fa fa-close"></i></button></p>
                    <p  id="button-open-<?php echo $faq_count;?>"><button class="plus-open" onclick="open_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fas fa-plus" style="color:white"></i></button></p>
                    </div>
                    
                </div>
                <div class="question-reply" style="display: none;" id="reply-<?php echo $faq_count;?>">
                    <p><?php echo $reply; ?></p>
                </div>
            </div>
        </div>
    <?php 
;
endif; ?>
    <?php 
    $faq_count++;
    endwhile; ?>
    
    </div>

</div>
<div class="row">
<div class="col-md-12" id="cta-faq-2">
    <div class="cta-faq-2">
        <a href="http://ec2-18-202-223-23.eu-west-1.compute.amazonaws.com/contact/">Click here to submit inquiries and requests!</a>
    </div>
</div>
</div>

<?php include (TEMPLATEPATH . "/template-parts/misc/chat_bot_2.php"); ?>

<script>

function open_faq(a,b,c,d,e,f) { // on a click
  document.getElementById(a).style.display = "block";
  document.getElementById(b).style.display = "none";
  document.getElementById(c).classList.add("active");
  document.getElementById(d).style.display = "block";
  document.getElementById(e).classList.add("open");
  document.getElementById(f).classList.add("active");
}

function close_faq(a,b,c,d,e,f) { // on a click
    document.getElementById(a).style.display = "none";
  document.getElementById(b).style.display = "block";
  document.getElementById(c).classList.remove("active");
  document.getElementById(d).style.display = "none";
  document.getElementById(e).classList.remove("open");
  document.getElementById(f).classList.remove("active");
}
</script>
    
</div>




<?php get_footer(); ?>