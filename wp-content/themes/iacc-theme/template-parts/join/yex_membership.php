<?php 
                $yex_text = get_field('yex_text');
                ?>

<div class="row row-faq-queries"style="padding-right:0px;margin-top:88px;" id="faq-to-open">


    <div class="col-md-12">
        <div class="query-box" id="query-box-yex" style="border-top: 1px solid #888B8D;
        
        <?php if (wp_is_mobile()):?>
        background-color:transparent !important;">
        <?php else:?>
        background-color:rgba(136, 139, 141, 0.15) !important;">
        <?php endif;?>
        

            <div class="row question-faq" id="question-faq-yex">
                <div class="col-10 col-md-10">
                <h2 id="title-yex">Yex Membership</h2> 
                </div>
                <div class="col-2 col-md-2">
                <p id="button-close-yex" style="display:none;"><button class="plus-close"  onclick="close_faq('button-close-yex','button-open-yex','title-yex','reply-yex','query-box-yex','question-faq-yex')"><i class="fa fa-close"></i></button></p>
                <p  id="button-open-yex"><button class="plus-open" onclick="open_faq('button-close-yex','button-open-yex','title-yex','reply-yex','query-box-yex','question-faq-yex')"><i class="fas fa-plus" style="color:white"></i></button></p>
                </div>
                
            </div>
            <div class="question-reply" style="display: none;" id="reply-yex">
                
                <p><?php echo $yex_text; ?></p>
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="555" title="Yex Memebership"]'); ?>
                </div>
                
                
            </div>
        </div>
    </div>

</div>

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