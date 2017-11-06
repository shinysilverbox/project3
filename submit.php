<!DOCTYPE html>

<?php
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $answer4 = $_POST['answer4'];
  $answer5 = $_POST['answer5'];
  $answer6 = $_POST['answer6'];
  $answer7 = $_POST['answer7'];
  $answer8 = $_POST['answer8'];
  $answer9 = $_POST['answer9'];
  $answer10 = $_POST['answer10'];
  $answer11 = $_POST['answer11'];
  $answer12 = $_POST['answer12'];
  $answer13 = $_POST['answer13'];
  $answer14 = $_POST['answer14'];
  $answer15 = $_POST['answer15'];
  $answer16 = $_POST['answer16'];
  $answer17 = $_POST['answer17'];
  $answer18 = $_POST['answer18'];
  $answer19 = $_POST['answer19'];
  $answer20 = $_POST['answer20'];
  $answer21 = $_POST['answer21'];
?>

<html>
   <head>

      <link rel='stylesheet' href='styles/all.css' />
      <meta charset='utf-8' />
      <title>Ithaca Apple Harvest Festival</title>
      <script src='scripts/jquery-3.2.1.min.js' type='text/javascript'></script>
      <script src='scripts/validation.js' type='text/javascript'></script>
   </head>

   <body>

     <a href='index.php'><img class='logo' alt='logotype' src='img/logotype.png'></a>

     <?php include 'includes/datetime.php'; ?>

     <div id='submitted'><p class='submitted_title'>Here are your results! You got X out of 20 correct.<br/></p><p class='submitted_body'>[insert results here]</p></div>

    <table>
      <tr>
        <td>#</td><td>Question</td><td>submitted answer</td><td>correct answer</td>
      </tr>
      <tr>
        <td>1)</td>
        <td>What is the science of growing apples called?</td>
        <td><?php echo($answer1);?></td>
        <td>Pomology</td>
      </tr>
      <tr>
        <td>2)</td>
        <td>How many varieties of apples are grown around the world?</td>
        <td><?php echo($answer2);?></td>
        <td>7500</td>
      </tr>
      <tr>
        <td>3)</td>
        <td>How many apple leaves are used to produce one apple?</td>
        <td><?php echo($answer3);?></td>
        <td>30</td>
      </tr>
      <tr>
        <td>4)</td>
        <td>How many apples does the average person eat in a year?</td>
        <td><?php echo($answer4);?></td>
        <td>50</td>
      </tr>
      <tr>
        <td>5)</td>
        <td>Why does an apple float?</td>
        <td><?php echo($answer5);?></td>
        <!-- make sure that the submitted answer for this question has the HTML number for %, otherwise this answer will never be right -->
        <td>25&#37; of an apple's volume is air.</td>
      </tr>
      <tr>
        <td>6)</td>
        <td>How many apples make up a pound?</td>
        <td><?php echo($answer6);?></td>
        <td>3</td>
      </tr>
      <tr>
        <td>7)</td>
        <td>How many apples are in a bushel?</td>
        <td><?php echo($answer7);?></td>
        <td>126</td>
      </tr>
      <tr>
        <td>8)</td>
        <td>How many apples are in a peck?</td>
        <td><?php echo($answer8);?></td>
        <td>32</td>
      </tr>
      <tr>
        <td>9)</td>
        <td>How large is the world's largest apple?</td>
        <td><?php echo($answer9);?></td>
        <td>1849</td>
      </tr>
      <tr>
        <td>10)</td>
        <td>How many finger lakes are in New York State?</td>
        <td><?php echo($answer10);?></td>
        <td>11</td>
      </tr>
      <tr>
        <td>11)</td>
        <td>What is the largest finger lake?</td>
        <td><?php echo($answer11);?></td>
        <td>seneca</td>
      </tr>
      <tr>
        <td>12)</td>
        <td>What is the longest finger lake?</td>
        <td><?php echo($answer12);?></td>
        <td>cayuga</td>
      </tr>
      <tr>
        <td>13)</td>
        <td>What body of water do all of the rivers connecting the Finger Lakes flow into?</td>
        <td><?php echo($answer13);?></td>
        <td>ontario</td>
      </tr>
      <tr>
        <td>14)</td>
        <td>How deep are Lake Seneca and Lake Cayuga, respectively?</td>
        <td><?php echo($answer14);?></td>
        <td>188_133</td>
      </tr>
      <tr>
        <td>15)</td>
        <td>Under which Finger Lake is the deepest salt mine in the United States?</td>
        <td><?php echo($answer15);?></td>
        <td>cayuga</td>
      </tr>
      <tr>
        <td>16)</td>
        <td>How did the town of Ithaca get its name?</td>
        <td><?php echo($answer16);?></td>
        <td>Keywords that will trigger a right answer are 'greek', 'island', 'ulysses', 'homer', and 'odyssey'.</td>
      </tr>
      <tr>
        <td>17)</td>
        <td>Who employs the most people in Ithaca?</td>
        <td><?php echo($answer17);?></td>
        <td>cornell</td>
      </tr>
      <tr>
        <td>18)</td>
        <td>What is the average snowfall in Ithaca?</td>
        <td><?php echo($answer18);?></td>
        <td>170</td>
      </tr>
      <tr>
        <td>19)</td>
        <td>What is the average annual rainfall in Ithaca?</td>
        <td><?php echo($answer19);?></td>
        <td>89</td>
      </tr>
      <tr>
        <td>20)</td>
        <td>What year was the first Ithaca Apple Harvest Festival held?</td>
        <td><?php echo($answer20);?></td>
        <td>1982</td>
      </tr>
      <tr>
        <td>21)</td>
        <td>4 of the following lakes are Finger Lakes. Which ones?</td>
        <td><?php echo($answer21);?></td>
        <td>['canadice','hemlock','conesus','skaneateles']</td>
      </tr>

    </table>

      <?php include 'includes/footer.php'; ?>

   </body>
</html>
