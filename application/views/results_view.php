<style type="text/css">
  .top-bar{
    background-color: #163A53;
  }
</style>

<div id="result-wrapper-odd">
    <div class="row">
        <div class="columns large-6 large-offset-3 medium-10 medium-offset-1 small-12 text-center">
            <p style="font-size: 60px; margin-top: 30px; margin-bottom: 30px;">Congratulations!</p>
            <h3>You scored <?php echo $this->session->userdata('total_points'); ?> points!</h3>
        </div>
    </div>
    <div class="row">
        <div class="columns large-6 large-offset-3 medium-10 medium-offset-1">
            <p style="font-size: 40px; margin-top: 50px; margin-bottom: 30px; text-align: center;">What to do Next?</p>
            <p>
                Press donate button below to give your points in exchange of our good cause. Let our minds be opened to solve population problems in our country..
            </p>
        </div>
    </div>
    <div class="row">
        <div class="large-6 large-offset-3 columns text-center">
            <a class="button" id="donateButton" src="<?php echo base_url() ?>homepage/donate"/>Donate Now</a>
        </div>
    </div>
</div>

<div id="result-wrapper-even">
<div class="row">
    <div class="columns large-6 large-offset-3 medium-10 medium-offset-1 small-12">
        <p style="color: #000; font-size: 40px; margin-top: 50px; margin-bottom: 30px; text-align: center;">Your Points Can Help</p>
        <h3>Donate your points now to improve other people's lives in terms of Reproductive Health through:</h3>
    </div>
</div>

<div class="row">
    <div class="columns large-6 large-offset-3 medium-10 medium-offset-1 small-12">
    <div class="column large-4 medium-4 small-12 text-center">
        <p><img class="th" src="<?php echo site_url('img/book.svg') ?>" style="height:205px;"></p>
        <h4>Trainings</h4>
        <p style="margin-top:40px">We will conduct free trainings to barangays regarding sex education and reproductive health.</p>
    </div>
    <div class="column small-4 medium-4 small-12 text-center">
        <p><img class="th" src="<?php echo site_url('img/condom.svg') ?>" style="height:205px;"></p>
        <h4>Free Contraceptives</h4>
        <p>We will provide contraceptives to people with less access to.</p>
    </div>
    <div class="column small-4 medium-4 small-12 text-center">
        <p><img class="th" src="<?php echo site_url('img/helping_hand.svg') ?>" style="height:205px;"></p>
        <h4>Medical Missions</h4>
        <p style="margin-top:40px">We will organize medical missions to barangays to ensure people's reproductive health.</p>
    </div>
    </div>
</div>
</div>