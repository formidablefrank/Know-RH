<style type="text/css">
  .top-bar{
    background-color: #163A53;
  }
</style>

<div id="quiz-wrapper">
<div class="row">
    <div class="large-6 large-offset-3 small-12 columns text-center">
    <p><?php
        if($isCorrect){
            echo "CORRECT!";
        }
        ?></p>
    </div>
</div>
<div class="row">
  <div class="small-12 large-6 large-offset-3 columns">
    <div class="large-6 small-6 columns">
      <div class="nice round progress">
        <span class="meter" style="width: <?php echo number_format(($this->session->userdata('total_points') + $this->session->userdata('summation'))/200*100, 0) ?>%"></span>
        <small><?php echo ($this->session->userdata('total_points') + $this->session->userdata('summation'))?> out of 200 points for medical mission</small>
      </div>
    </div>
    <div class="large-6 small-6 columns" id="total-points">
      <h4>Total Points:
        <?php echo $this->session->userdata('total_points') ?>
      </h4>
    </div>
  </div>
</div>
<br/>
<div class="row">
  <div class="large-12 large-centered columns text-center">
    <div class="question-card large-6 large-offset-3">
      <div class="row main-container">
        <p id="question"><strong><?php echo $question['question_text'] ?></strong></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="large-12 large-centered columns text-center">
    <div class="choice-container large-6 large-offset-3">
        <ul class="stack button-group">
          <li><a href="<?php echo base_url() ?>homepage/submit/<?php echo $question['question_id'] ?>/0" class="button btn-choices"><?php echo $question['choice1']; ?></a></li>

          <li><a href="<?php echo base_url() ?>homepage/submit/<?php echo $question['question_id'] ?>/1" class="button btn-choices"><?php echo $question['choice2']; ?></a></li>

          <li><a href="<?php echo base_url() ?>homepage/submit/<?php echo $question['question_id'] ?>/2" class="button btn-choices"><?php echo $question['choice3']; ?></a></li>

          <li><a href="<?php echo base_url() ?>homepage/submit/<?php echo $question['question_id'] ?>/3" class="button btn-choices"><?php echo $question['choice4']; ?></a></li>
        </ul>
    </div>
  </div>
  <div class="row end-container">
    <div class="large-12 end-container text-center">
        <a href="#" id="exitButton" class="button choice-hover" data-reveal-id="myModal">End Game</a>
    </div>
  </div>
</div>
<div class="row difficulty">
  <div class="large-6 large-offset-3 small-12 columns text-center">
  <h4>Difficulty:
      <?php switch ($question['difficulty']) {
          case 1:
              echo "Easy";
              break;
          case 2:
              echo "Medium";
              break;
          case 3:
              echo "Hard";
              break;
      } ?></h4>
  </div>
</div>

<div id="myModal" class="reveal-modal" data-reveal>
  <div class="row">
    <div class="large-12 columns text-center">
      <h2> Please before you go, enter your name. </h2>
      <input href="<?php echo base_url() ?>homepage/results/" placeholder="Enter name here" id="nameBox"></input></br></br>
      <a href="#" id="doneButton" class="button choice-hover">Done!</a>
    </div>
  </div>
  <a class="close-reveal-modal">&#215;</a>
</div>

</div>