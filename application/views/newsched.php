<div id="index-wrapper">
    <div class="row">
        <h1>Create Schedule</h1>
    </div>
    <div class="row">
        <form method="POST" name="new_sched_form" action="<?php echo base_url() ?>homepage/insertSched">
            <label>Event Name:</label>
            <input type="text" name="ev_name"></input><br/>
            <label>Event Description:</label>
            <input type="text" name="desc"></input><br/>
            <label>Venue Name:</label>
            <input type="text" name="ve_name"></input><br/>
            <label>Venue Address:</label>
            <input type="text" name="address"></input><br/>
            <label>Target Participants:</label>
            <input type="text" name="target"></input><br/>
            <label>Requirements:</label>
            <input type="text" name="req"></input><br/>
            <label>Start Date:</label>
            <input type="datetime-local" name="start_date"></input><br/>
            <label>End Date:</label>
            <input type="datetime-local" name="end_date"></input><br/>
            <input type="submit"></input>
        </form>
    </div>
</div>