<div class="row member-box-nav">
  <div class="col-md-12">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div style="text-align:center;">
        <h2 class="nav-item" id="flush-headingOne">
          <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" onclick="click_upcoming()">Upcoming Events</button>      
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" >
            
            <?php include (TEMPLATEPATH . "/template-parts/italian/events-listing/upcoming_events.php"); ?>
                
            </div>
        </div>
      </div>

      <div  style="text-align:center;">
        <h2 class="nav-item" id="flush-headingTwo">
        <button class="nav-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne"  onclick="click_past()">Past Events</button>       
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="row row-member-box" >
            
            <?php include (TEMPLATEPATH . "/template-parts/italian/events-listing/past_events.php"); ?>
                
            </div>
        </div>
      </div>
      
    </div>
  </div>  
</div>
</div>
</div>