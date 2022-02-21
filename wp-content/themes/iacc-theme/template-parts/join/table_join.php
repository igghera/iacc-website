<div class="row row-table" style="margin-top:75px;">
<div class="col-md-12">
    <table class="table-iacc">
        <thead class="table-head-iacc">
            <tr>
                <th scope="col" class="col-title title-col-1">Small Business Advocacy Council</th>
                <th scope="col" class="col-title title-memeber-table">Advocate Member</th>
                <th scope="col" class="col-title title-memeber-table">Business Member</th>
                <th scope="col" class="col-title title-memeber-table" >Premier Advocate</th>
            </tr>
        </thead>

        <tbody>
            <!-- <tr style="height:20px;">
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height:32px;">
                <th scope="row" class="text-col-1"></th>
                <td class="space-table"></td>
                <td class="content-col"></td>
                <td class="space-table"></td>
                <td class="content-col"></td>
                <td class="space-table"></td>
                <td class="content-col"></td>
            </tr> -->

            <?php $count = 0;?>

                <?php while(has_sub_field('table')): ?>

                <?php

                $element = get_sub_field('element');
                $advocate = get_sub_field('advocate_member');
                $business = get_sub_field('business_member');
                $premier = get_sub_field('premier_advocate');
                ?>


                    <tr>

                    <th scope="row" class="text-col-1"><?php echo $element; ?></th>
                    <?php if ($advocate == true):?>
                    <td class="content-col"><i class="fa-light fa-check"></i></td>
                    <?php else: ?>
                    <td class="content-col"><i class="fa-light fa-times"></i></td>
                    <?php endif;?>
                    <?php if ($business == true):?>
                    <td class="content-col"><i class="fa-light fa-check"></i></td>
                    <?php else: ?>
                    <td class="content-col"><i class="fa-light fa-times"></i></td>
                    <?php endif;?>
                    <?php if ($premier == true):?>
                    <td class="content-col"><i class="fa-light fa-check"></i></td>
                    <?php else: ?>
                    <td class="content-col"><i class="fa-light fa-times"></i></td>
                    <?php endif;?>
                    

                    </tr>

                <?php endwhile; ?>

        </tbody>
    </table>
    </div>
</div>

<div class="row row-content" style="margin-top:86px;" id="button-pdf">
	<div class="col-md-12" style="padding:0px;">
		<div style="display:flex;flex-direction: column;justify-content: center;align-items: center;">

			<a class="button-grey" onclick="click_pdf()" style="margin-top:50px;margin:auto;color:#1D2545;font-size:16px;padding:18px 50px 18px 50px;background-color:rgba(136, 139, 141, 0.15);text-align:center;text-transform:uppercase;">Request pdf version</a>
		</div>
	</div>
</div>
<div id="form-pdf" style="display:none;">
<?php echo do_shortcode('[contact-form-7 id="641" title="Request Pdf"]'); ?>

</div>

<script>
function click_pdf() {
    document.getElementById("form-pdf").style.display = "block";
    document.getElementById("button-pdf").style.display = "none";
}


</script>

