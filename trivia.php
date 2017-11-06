<!DOCTYPE html>
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

      <div id='trivia'>
        <form method='post' action='submit.php' id='trivia_form' novalidate>
          <table class='questions'>

            <tr><td class='q_num'>1)</td><td>What is the science of growing apples called?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'><input type='text' name='answer1' id='answer1' required/></td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer1Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>2)</td><td>How many varieties of apples are grown around the world?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer2' class='answer2' value='250' required/> 250
              <input type='radio' name='answer2' class='answer2' value='2500' required/> 2,500
              <input type='radio' name='answer2' class='answer2' value='7500' required/> 7,500
              <input type='radio' name='answer2' class='answer2' value='75000' required/> 75,000
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer2Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>3)</td><td>How many apple leaves are used to produce one apple?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer3' class='answer3' value='6' required/> 6
              <input type='radio' name='answer3' class='answer3' value='16' required/> 16
              <input type='radio' name='answer3' class='answer3' value='30' required/> 30
              <input type='radio' name='answer3' class='answer3' value='300' required/> 300
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer3Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>4)</td><td>How many apples does the average person eat in a year?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer4' class='answer4' value='15' required/> 15
              <input type='radio' name='answer4' class='answer4' value='30' required/> 30
              <input type='radio' name='answer4' class='answer4' value='50' required/> 50
              <input type='radio' name='answer4' class='answer4' value='60' required/> 60
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer4Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>5)</td><td>Why does an apple float?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <select name='answer5' class='answer5' required>
                <option value=''>Select one</option>
                <option value='boat'>There is a little propeller on the bottom</option>
                <option value='magnets'>Magnets, probably</option>
                <option value='air'>25% of an apple's volume is air</option>
                <option value='shutup'>Because I said so, that&#8217;s why</option>
              </select>
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer5Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>6)</td><td>How many apples make up a pound?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer6' class='answer6' value='3' required/> 3
              <input type='radio' name='answer6' class='answer6' value='5' required/> 5
              <input type='radio' name='answer6' class='answer6' value='5.5' required/> 5.5
              <input type='radio' name='answer6' class='answer6' value='5.75' required/> 5.75
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer6Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>7)</td><td>How many apples are in a bushel?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer7' class='answer7' value='62' required/> 62
              <input type='radio' name='answer7' class='answer7' value='126' required/> 126
              <input type='radio' name='answer7' class='answer7' value='162' required/> 162
              <input type='radio' name='answer7' class='answer7' value='261' required/> 261
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer7Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>8)</td><td>How many apples are in a peck?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer8' class='answer8' value='6' required/> 8
              <input type='radio' name='answer8' class='answer8' value='16' required/> 16
              <input type='radio' name='answer8' class='answer8' value='30' required/> 32
              <input type='radio' name='answer8' class='answer8' value='300' required/> 48
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer8Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>9)</td><td>How large is the world's largest apple?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer9' class='answer9' value='871' required/> 871 g, or 1.92 lbs
              <input type='radio' name='answer9' class='answer9' value='1116' required/> 1116 g, or 2.46 lbs
              <input type='radio' name='answer9' class='answer9' value='1849' required/> 1849 g, or 4.08 lbs
              <input type='radio' name='answer9' class='answer9' value='2560' required/> 2560 g, or 5.64 lbs
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer9Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>10)</td><td>How many finger lakes are in New York State?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer10' class='answer10' value='5' required/> 5
              <input type='radio' name='answer10' class='answer10' value='7' required/> 7
              <input type='radio' name='answer10' class='answer10' value='9' required/> 9
              <input type='radio' name='answer10' class='answer10' value='11' required/> 11
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer10Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>11)</td><td>What is the largest finger lake?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer11' class='answer11' value='Keuka' required/> Keuka
              <input type='radio' name='answer11' class='answer11' value='Cayuga' required/> Cayuga
              <input type='radio' name='answer11' class='answer11' value='Conesus' required/> Conesus
              <input type='radio' name='answer11' class='answer11' value='Seneca' required/> Seneca
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer11Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>12)</td><td>What is the longest finger lake?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer12' class='answer12' value='Hemlock' required/> Hemlock
              <input type='radio' name='answer12' class='answer12' value='Canadice' required/> Canadice
              <input type='radio' name='answer12' class='answer12' value='Seneca' required/> Seneca
              <input type='radio' name='answer12' class='answer12' value='Cayuga' required/> Cayuga
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer12Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>13)</td><td>What body of water do all of the rivers connecting the Finger Lakes flow into?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer13' class='answer13' value='Erie' required/> Lake Erie
              <input type='radio' name='answer13' class='answer13' value='Ontario' required/> Lake Ontario
              <input type='radio' name='answer13' class='answer13' value='Michigan' required/> Lake Michigan
              <input type='radio' name='answer13' class='answer13' value='Superior' required/> Lake Superior
              <input type='radio' name='answer13' class='answer13' value='Huron' required/> Lake Huron
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer13Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>14)</td><td>How deep are Lake Seneca and Lake Cayuga, respectively?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer14' class='answer14' value='188_133' required/> 188 m and 133 m
              <input type='radio' name='answer14' class='answer14' value='98_251' required/> 98 m and 251 m
              <input type='radio' name='answer14' class='answer14' value='251_98' required/> 251 m and 98 m
              <input type='radio' name='answer14' class='answer14' value='133_188' required/> 133 m and 188 m
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer14Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>15)</td><td>Under which Finger Lake is the deepest salt mine in the United States?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer15' class='answer15' value='honeoye' required/> Honeoye
              <input type='radio' name='answer15' class='answer15' value='canandaigua' required/> Canandaigua
              <input type='radio' name='answer15' class='answer15' value='cayuga' required/> Cayuga
              <input type='radio' name='answer15' class='answer15' value='owasco' required/> Owasco
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer15Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>16)</td><td>How did the town of Ithaca get its name?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <textarea name='answer16' id='answer16' cols='40' rows='3' placeholder='' maxlength='100' id='answer16' required></textarea>
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer16Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>17)</td><td>Who employs the most people in Ithaca?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <select name='answer17' class='answer17' required>
                <option value=''>Select one</option>
                <option value='ithaca'>Ithaca College</option>
                <option value='cornell'>Cornell University</option>
                <option value='tcat'>Tompkins Consolidated Area Transit (TCAT)</option>
                <option value='ssb'>Shiny Silver Box LLC</option>
              </select>
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer17Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>18)</td><td>What is the average annual snowfall in Ithaca?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer18' class='answer18' value='67' required/> 67 cm
              <input type='radio' name='answer18' class='answer18' value='89' required/> 89 cm
              <input type='radio' name='answer18' class='answer18' value='170' required/> 170 cm
              <input type='radio' name='answer18' class='answer18' value='256' required/> 256 cm
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer18Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>19)</td><td>What is the average annual rainfall in Ithaca?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer19' class='answer19' value='67' required/> 67 cm
              <input type='radio' name='answer19' class='answer19' value='89' required/> 89 cm
              <input type='radio' name='answer19' class='answer19' value='170' required/> 170 cm
              <input type='radio' name='answer19' class='answer19' value='256' required/> 256 cm
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer19Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>20)</td><td>What year was the first Ithaca Apple Harvest Festival held?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'><input type='text' name='answer20' id='answer20' maxlength='4' size='4' required></td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer20Error'>Please take a guess!</td></tr>
            <!--Need to include validation logic for non-numbers-->

            <tr><td class='q_num'>21)</td><td>4 of the following lakes are Finger Lakes. Which ones?</td></tr>
            <tr><td class='padding-l'></td><td class='answer answer21_group'>
              <input type='checkbox' name='answer21' class='answer21' value='ampersand' /> Lake Ampersand
              <input type='checkbox' name='answer21' class='answer21' value='canadice' /> Lake Canadice
              <input type='checkbox' name='answer21' class='answer21' value='champlain' /> Lake Champlain
              <input type='checkbox' name='answer21' class='answer21' value='conesus' /> Lake Conesus
              <input type='checkbox' name='answer21' class='answer21' value='gilead' /> Lake Gilead
              <input type='checkbox' name='answer21' class='answer21' value='green' /> Lake Green
              <input type='checkbox' name='answer21' class='answer21' value='hemlock' /> Lake Hemlock
              <input type='checkbox' name='answer21' class='answer21' value='kanawauke' /> Lake Kanawauke
              <input type='checkbox' name='answer21' class='answer21' value='ontario' /> Lake Ontario
              <input type='checkbox' name='answer21' class='answer21' value='placid' /> Lake Placid
              <input type='checkbox' name='answer21' class='answer21' value='skaneateles' /> Lake Skaneateles
            </td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer21Error'>Please take a guess!</td></tr>
          </table>
          <button type='submit' class='submit'>SUBMIT</button>
        </form>
      </div>

    <?php include 'includes/footer.php'; ?>



   </body>
</html>
