<div id="index-wrapper">
    <div class="row">
        <div class="text-center large-8 large-offset-2 medium-10 medium-offset-2 columns">
            <h1 class="" id="welcome"><strong>View Training Schedules</strong></h1>
        </div>
    </div>
    <div class="row">
        <div class="large-12 large-centered columns text-center">
            <table>
            <tr>
                <th>Event Name</th>
                <th>Description</th>
                <th>Venue Name</th>
                <th>Venue Address</th>
                <th>Target Participants</th>
                <th>Requirements</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
            <?php foreach($schedules as $key => $value){ ?>
                <tr>
                    <td><?php echo $value->title; ?></td>
                    <td><?php echo $value->description; ?></td>
                    <td><?php echo $value->venue_name; ?></td>
                    <td><?php echo $value->venue_address; ?></td>
                    <td><?php echo $value->target; ?></td>
                    <td><?php echo $value->requirements; ?></td>
                    <td><?php echo $value->start_date; ?></td>
                    <td><?php echo $value->end_date; ?></td>
                    <td><a href="<?php echo base_url(); ?>homepage/deleteSched/<?php echo $value->id; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
        </div>

        <p class="text-center"><a href="<?php echo base_url() ?>homepage/newSched">Create new sched</a></p>
    </div>
    <div class="footer row mini-sitemap">
      <div class="large-8 large-offset-2 medium-10 medium-offset-1 columns">
            <h6 class="text-center">
                <a href="#" class="mini-sitemap-details">Home</a> |
                <a href="#" class="mini-sitemap-details">About</a> |
                <a href="#" class="mini-sitemap-details">Contact Us</a> |
                <a href="map" class="mini-sitemap-details">View Literacy Map</a>
            </h6>
      </div>
    </div>
</div>