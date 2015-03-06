<div id="index-wrapper">
    <div class="row">
        <h1>View Training Schedules</h1>
    </div>
    <div class="row">
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
    <div class="row">
        <a href="<?php echo base_url() ?>homepage/newSched">Create new sched</a>
    </div>
</div>