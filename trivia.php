<!DOCTYPE html>
<html>
   <head>

      <link rel='stylesheet' href='styles/all.css' />
      <meta charset='utf-8' />
      <title>Ithaca Apple Harvest Festival</title>
   </head>

   <body>

     <a href='index.php'><img class='logo' alt='logotype' src='img/logotype.png'></a>

      <?php include 'includes/datetime.php'; ?>

      <div id='trivia'>
        <table class='questions'>
          <form action='http://af.shinysilverbox.com/submit.php' method='get'>

          <tr><td class='q_num'>1)</td><td>What is the science of growing apples called?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'><input type='text' name='answer1'/></td></tr>

          <tr><td class='q_num'>2)</td><td>How many varieties of apples are grown around the world?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>
            <input type='radio' name='answer2' value='250'/> 250
            <input type='radio' name='answer2' value='2500'/> 2,500
            <input type='radio' name='answer2' value='7500'/> 7,500
            <input type='radio' name='answer2' value='75000'/> 75,000
          </td></tr>

          <tr><td class='q_num'>3)</td><td>How many apple leaves are used to produce one apple?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>
            <select name='answer3'>
              <option value='6'>6</option>
              <option value='16'>16</option>
              <option value='30'>30</option>
              <option value='300'>300</option>
            </select>
          </td></tr>

          <tr><td class='q_num'>4)</td><td>How many apples does the average person eat in a year?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>50.</td></tr>

          <tr><td class='q_num'>5)</td><td>Why does an apple float?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>25% of an apple's volume is air.</td></tr>

          <tr><td class='q_num'>6)</td><td>How many apples make up a pound?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>3.</td></tr>

          <tr><td class='q_num'>7)</td><td>How many apples are in a bushel?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>4 pounds, or around 126 medium apples.</td></tr>

          <tr><td class='q_num'>8)</td><td>How many apples are in a peck?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>Around 32 medium apples.</td></tr>

          <tr><td class='q_num'>9)</td><td>How large is the world's largest apple?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>1.849 kg, or 4lb 1oz. It was picked by Chisato Iwasaki, an apple farmer in Hirosaki City, Japan on 10/24/2005.</td></tr>

          <tr><td class='q_num'>10)</td><td>How many finger lakes are in New York State? Can you name them?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>11: Conesus, Hemlock, Canadice, Honeoye, Canandaigua, Keuka, Seneca, Cayuga, Owasco, Skaneateles, and Otisco.</td></tr>

          <tr><td class='q_num'>11)</td><td>What is the largest finger lake?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>Seneca.</td></tr>

          <tr><td class='q_num'>12)</td><td>What is the longest finger lake?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>Cayuga.</td></tr>

          <tr><td class='q_num'>13)</td><td>What body of water do all of the rivers connecting the Finger Lakes flow into?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>Lake Ontario.</td></tr>

          <tr><td class='q_num'>14)</td><td>How deep are Lake Seneca and Lake Cayuga?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>188 m/617 ft and 133 m/435 ft, respectively.</td></tr>

          <tr><td class='q_num'>15)</td><td>Where is the deepest salt mine in the U.S.?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>701 m under Lake Cayuga, where 200 workers mine over 9,000,000 kg of road salt per day, every day of the year.</td></tr>

          <tr><td class='q_num'>16)</td><td>How did the town of Ithaca get its name?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>From the Greek island home of Ulysses, in Homer's <span class='italic'>The Odyssey</span>.</td></tr>

          <tr><td class='q_num'>17)</td><td>Who employs the most people in Ithaca?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>Cornell University, with over 8,500 employees.</td></tr>

          <tr><td class='q_num'>18)</td><td>What is the average annual snowfall in Ithaca?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>67 inches or 170 cm.</td></tr>

          <tr><td class='q_num'>19)</td><td>What is the average annual rainfall in Ithaca?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>35 inches or 89 cm.</td></tr>

          <tr><td class='q_num'>20)</td><td>How many years has the Apple Harvest Festival been held?</td></tr>
          <tr><td class='padding-l'></td><td class='answer'>35.</td></tr>
      </table>
    </div>

      <?php include 'includes/footer.php'; ?>

   </body>
</html>
