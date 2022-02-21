<div class="row row-boxes" style="margin-top:60px;">
	<?php
	$host_img = get_field('host_company_img');
	$app_img = get_field('applicant_image');
	$ji_img = get_field('ji_image');
	?>

	<div class="col-md-4">
		<div class="a-service" id="box-service-hc">
			<div class="box-page-service visa-box-card" id="opacity-hc" onclick="openhost()" style="background:url(<?php echo $host_img ?>)" >
				<h2 style="font-weight:300;">HOST COMPANY</h2>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="a-service" id="box-service-ap" >
			<div class="box-page-service visa-box-card" id="opacity-ap" onclick="openap()" style="background:url(<?php echo $app_img ?>)" >
				<h2 style="font-weight:300;">APPLICANT</h2>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="a-service" id="box-service-ji">
			<div class="box-page-service visa-box-card" id="opacity-ji"  onclick="openji()" style="background:url(<?php echo $ji_img ?>)" >
				<h2 style="font-weight:300;">J1 COMMUNITY</h2>
			</div>
		</div>
	</div>

</div>

<div class="row row-description" style="margin-top:36px;">
	<?php
	$host_desc = get_field('host_company_description');
	$app_desc = get_field('applicant_description');
	$ji_desc = get_field('ji_description');
	?>

	<div class="col-md-12">
		<div class="service-box-description" id="desc-hc" style="display:none;">
			<?php echo $host_desc ?>
		</div>

		<div class="service-box-description" id="desc-ap" style="display:none;">
			<?php echo $app_desc ?>
		</div>

		<div class="service-box-description" id="desc-ji" style="display:none;">
			<?php echo $ji_desc ?>
		</div>

	</div>

</div>

<div class="row-faq-open" id="row-faq "style="padding-right:0px;">
    
    <div class="row row-faq-queries"style="padding-right:0px;display:none;" id="faq-to-open-hc">


        <?php 
        $faq_count = 0;
        while(has_sub_field('host_faq')): ?>

        <?php
          
        $hc_question = get_sub_field('hc_question');
        $hc_reply = get_sub_field('hc_reply'); ?>

        <div class="col-md-12">
            <div class="query-box" id="query-box-<?php echo $faq_count;?>">
                <div class="row question-faq" id="question-faq-<?php echo $faq_count;?>">
                    <div class="col-10 col-md-10">
                       <h2 id="title-<?php echo $faq_count;?>"><?php echo $hc_question; ?></h2> 
                    </div>
                    <div class="col-2 col-md-2">
                    <p id="button-close-<?php echo $faq_count;?>" style="display:none;"><button class="plus-close"  onclick="close_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fa fa-close"></i></button></p>
                    <p  id="button-open-<?php echo $faq_count;?>"><button class="plus-open" onclick="open_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fas fa-plus" style="color:white"></i></button></p>
                    </div>
                    
                </div>
                <div class="question-reply" style="display: none;" id="reply-<?php echo $faq_count;?>">
                    <p><?php echo $hc_reply; ?></p>
                </div>
            </div>
        </div>

    <?php 
    $faq_count++;
    endwhile; ?>
    
    </div>

    <div class="row row-faq-queries"style="padding-right:0px;display:none;" id="faq-to-open-ap">


        <?php 
        while(has_sub_field('app_faq')): ?>

        <?php
          
        $ap_question = get_sub_field('app_question');
        $ap_reply = get_sub_field('app_reply'); ?>

        <div class="col-md-12">
            <div class="query-box" id="query-box-<?php echo $faq_count;?>">
                <div class="row question-faq" id="question-faq-<?php echo $faq_count;?>">
                    <div class="col-10 col-md-10">
                       <h2 id="title-<?php echo $faq_count;?>"><?php echo $ap_question; ?></h2> 
                    </div>
                    <div class="col-2 col-md-2">
                    <p id="button-close-<?php echo $faq_count;?>" style="display:none;"><button class="plus-close"  onclick="close_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fa fa-close"></i></button></p>
                    <p  id="button-open-<?php echo $faq_count;?>"><button class="plus-open" onclick="open_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fas fa-plus" style="color:white"></i></button></p>
                    </div>
                    
                </div>
                <div class="question-reply" style="display: none;" id="reply-<?php echo $faq_count;?>">
                    <p><?php echo $ap_reply; ?></p>
                </div>
            </div>
        </div>

    <?php 
    $faq_count++;
    endwhile; ?>
    
    </div>


    <div class="row row-faq-queries"style="padding-right:0px;display:none;" id="faq-to-open-ji">


        <?php 
        while(has_sub_field('ji_faq')): ?>

        <?php
          
        $ji_question = get_sub_field('ji_question');
        $ji_reply = get_sub_field('ji_reply'); ?>

        <div class="col-md-12">
            <div class="query-box" id="query-box-<?php echo $faq_count;?>">
                <div class="row question-faq" id="question-faq-<?php echo $faq_count;?>">
                    <div class="col-10 col-md-10">
                       <h2 id="title-<?php echo $faq_count;?>"><?php echo $ji_question; ?></h2> 
                    </div>
                    <div class="col-2 col-md-2">
                    <p id="button-close-<?php echo $faq_count;?>" style="display:none;"><button class="plus-close"  onclick="close_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fa fa-close" ></i></button></p>
                    <p  id="button-open-<?php echo $faq_count;?>"><button class="plus-open" onclick="open_faq('button-close-<?php echo $faq_count;?>','button-open-<?php echo $faq_count;?>','title-<?php echo $faq_count;?>','reply-<?php echo $faq_count;?>','query-box-<?php echo $faq_count;?>','question-faq-<?php echo $faq_count;?>')"><i class="fas fa-plus" style="color:white"></i></button></p>
                    </div>
                    
                </div>
                <div class="question-reply" style="display: none;" id="reply-<?php echo $faq_count;?>">
                    <p><?php echo $ji_reply; ?></p>
                </div>
            </div>
        </div>

    <?php 
    $faq_count++;
    endwhile; ?>
    
    </div>


</div>

<script>
	
function openhost() {
	document.getElementById('box-service-hc').style.backgroundColor = "#002E6D";
	document.getElementById('box-service-ap').style.backgroundColor = "transparent";
	document.getElementById('box-service-ji').style.backgroundColor = "transparent";

	document.getElementById('opacity-hc').style.opacity = "1";
	document.getElementById('opacity-ap').style.opacity = "0.6";
	document.getElementById('opacity-ji').style.opacity = "0.6";

    document.getElementById('desc-hc').style.display = "block";
	document.getElementById('desc-ap').style.display = "none";
	document.getElementById('desc-ji').style.display = "none";

	document.getElementById('faq-to-open-hc').style.display = "block";
	document.getElementById('faq-to-open-ap').style.display = "none";
	document.getElementById('faq-to-open-ji').style.display = "none";


}


function openap() {
	document.getElementById('box-service-hc').style.backgroundColor = "transparent";
	document.getElementById('box-service-ap').style.backgroundColor = "#002E6D";
	document.getElementById('box-service-ji').style.backgroundColor = "transparent";

	document.getElementById('opacity-hc').style.opacity = "0.6";
	document.getElementById('opacity-ap').style.opacity = "1";
	document.getElementById('opacity-ji').style.opacity = "0.6";

    document.getElementById('desc-hc').style.display = "none";
	document.getElementById('desc-ap').style.display = "block";
	document.getElementById('desc-ji').style.display = "none";

	document.getElementById('faq-to-open-hc').style.display = "none";
	document.getElementById('faq-to-open-ap').style.display = "block";
	document.getElementById('faq-to-open-ji').style.display = "none";
}

function openji() {
	document.getElementById('box-service-hc').style.backgroundColor = "transparent";
	document.getElementById('box-service-ap').style.backgroundColor = "transparent";
	document.getElementById('box-service-ji').style.backgroundColor = "#002E6D";

	document.getElementById('opacity-hc').style.opacity = "0.6";
	document.getElementById('opacity-ap').style.opacity = "0.6";
	document.getElementById('opacity-ji').style.opacity = "1";

    document.getElementById('desc-hc').style.display = "none";
	document.getElementById('desc-ap').style.display = "none";
	document.getElementById('desc-ji').style.display = "block";

	document.getElementById('faq-to-open-hc').style.display = "none";
	document.getElementById('faq-to-open-ap').style.display = "none";
	document.getElementById('faq-to-open-ji').style.display = "block";
}

function open_faq(a,b,c,d,e,f) { // on a click
  document.getElementById(a).style.display = "block";
  document.getElementById(b).style.display = "none";
  document.getElementById(c).classList.add("active");
  document.getElementById(d).style.display = "block";
  document.getElementById(e).classList.add("open");
  document.getElementById(f).classList.add("active-2");
}

function close_faq(a,b,c,d,e,f) { // on a click
    document.getElementById(a).style.display = "none";
  document.getElementById(b).style.display = "block";
  document.getElementById(c).classList.remove("active");
  document.getElementById(d).style.display = "none";
  document.getElementById(e).classList.remove("open");
  document.getElementById(f).classList.remove("active-2");
}

</script>