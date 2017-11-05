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
            <tr><td class='padding-l'></td><td class='answer'><input type='text' name='answer1'/></td></tr>
            <tr><td colspan='2' class='errorRow hiddenError' id='answer1Error'>Please take a guess!</td></tr>

            <tr><td class='q_num'>2)</td><td>How many varieties of apples are grown around the world?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer2' value='250'/> 250
              <input type='radio' name='answer2' value='2500'/> 2,500
              <input type='radio' name='answer2' value='7500'/> 7,500
              <input type='radio' name='answer2' value='75000'/> 75,000
            </td></tr>

            <tr><td class='q_num'>3)</td><td>How many apple leaves are used to produce one apple?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer3' value='6'/> 6
              <input type='radio' name='answer3' value='16'/> 16
              <input type='radio' name='answer3' value='30'/> 30
              <input type='radio' name='answer3' value='300'/> 300
            </td></tr>

            <tr><td class='q_num'>4)</td><td>How many apples does the average person eat in a year?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer4' value='15'/> 15
              <input type='radio' name='answer4' value='30'/> 30
              <input type='radio' name='answer4' value='50'/> 50
              <input type='radio' name='answer4' value='60'/> 60
            </td></tr>

            <tr><td class='q_num'>5)</td><td>Why does an apple float?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <select name='answer5'>
                <option value='boat'>There is a little propeller on the bottom</option>
                <option value='magnets'>Magnets, probably</option>
                <option value='air'>25% of an apple's volume is air</option>
                <option value='shutup'>Because I said so, that&#8217;s why</option>
              </select>
            </td></tr>

            <tr><td class='q_num'>6)</td><td>How many apples make up a pound?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer6' value='3'/> 3
              <input type='radio' name='answer6' value='5'/> 5
              <input type='radio' name='answer6' value='5.5'/> 5.5
              <input type='radio' name='answer6' value='5.75'/> 5.75
            </td></tr>

            <tr><td class='q_num'>7)</td><td>How many apples are in a bushel?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer7' value='62'/> 62
              <input type='radio' name='answer7' value='126'/> 126
              <input type='radio' name='answer7' value='162'/> 162
              <input type='radio' name='answer7' value='261'/> 261
            </td></tr>

            <tr><td class='q_num'>8)</td><td>How many apples are in a peck?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer8' value='6'/> 8
              <input type='radio' name='answer8' value='16'/> 16
              <input type='radio' name='answer8' value='30'/> 32
              <input type='radio' name='answer8' value='300'/> 48
            </td></tr>

            <tr><td class='q_num'>9)</td><td>How large is the world's largest apple?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer9' value='871'/> 871 g, or 1.92 lbs
              <input type='radio' name='answer9' value='1116'/> 1116 g, or 2.46 lbs
              <input type='radio' name='answer9' value='1849'/> 1849 g, or 4.08 lbs
              <input type='radio' name='answer9' value='2560'/> 2560 g, or 5.64 lbs
            </td></tr>

            <tr><td class='q_num'>10)</td><td>How many finger lakes are in New York State?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer10' value='5'/> 5
              <input type='radio' name='answer10' value='7'/> 7
              <input type='radio' name='answer10' value='9'/> 9
              <input type='radio' name='answer10' value='11'/> 11
            </td></tr>

            <tr><td class='q_num'>11)</td><td>What is the largest finger lake?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer11' value='Keuka'/> Keuka
              <input type='radio' name='answer11' value='Cayuga'/> Cayuga
              <input type='radio' name='answer11' value='Conesus'/> Conesus
              <input type='radio' name='answer11' value='Seneca'/> Seneca
            </td></tr>

            <tr><td class='q_num'>12)</td><td>What is the longest finger lake?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer12' value='Hemlock'/> Hemlock
              <input type='radio' name='answer12' value='Canadice'/> Canadice
              <input type='radio' name='answer12' value='Seneca'/> Seneca
              <input type='radio' name='answer12' value='Cayuga'/> Cayuga
            </td></tr>

            <tr><td class='q_num'>13)</td><td>What body of water do all of the rivers connecting the Finger Lakes flow into?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer13' value='Erie'/> Lake Erie
              <input type='radio' name='answer13' value='Ontario'/> Lake Ontario
              <input type='radio' name='answer13' value='Michigan'/> Lake Michigan
              <input type='radio' name='answer13' value='Superior'/> Lake Superior
              <input type='radio' name='answer13' value='Huron'/> Lake Huron
            </td></tr>

            <tr><td class='q_num'>14)</td><td>How deep are Lake Seneca and Lake Cayuga, respectively?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer14' value='188_133'/> 188 m and 133 m
              <input type='radio' name='answer14' value='98_251'/> 98 m and 251 m
              <input type='radio' name='answer14' value='251_98'/> 251 m and 98 m
              <input type='radio' name='answer14' value='133_188'/> 133 m and 188 m
            </td></tr>

            <tr><td class='q_num'>15)</td><td>Under which Finger Lake is the deepest salt mine in the United States?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer15' value='honeoye'/> Honeoye
              <input type='radio' name='answer15' value='canandaigua'/> Canandaigua
              <input type='radio' name='answer15' value='cayuga'/> Cayuga
              <input type='radio' name='answer15' value='owasco'/> Owasco
            </td></tr>

            <tr><td class='q_num'>16)</td><td>How did the town of Ithaca get its name?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <textarea name='answer16' cols='40' rows='3' placeholder='' maxlength='100'></textarea>
            </td></tr>

            <tr><td class='q_num'>17)</td><td>Who employs the most people in Ithaca?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <select name='answer17'>
                <option value='ithaca'>Ithaca College</option>
                <option value='cornell'>Cornell University</option>
                <option value='tcat'>Tompkins Consolidated Area Transit (TCAT)</option>
                <option value='ssb'>Shiny Silver Box LLC</option>
              </select>
            </td></tr>

            <tr><td class='q_num'>18)</td><td>What is the average annual snowfall in Ithaca?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer18' value='67'/> 67 cm
              <input type='radio' name='answer18' value='89'/> 89 cm
              <input type='radio' name='answer18' value='170'/> 170 cm
              <input type='radio' name='answer18' value='256'/> 256 cm
            </td></tr>

            <tr><td class='q_num'>19)</td><td>What is the average annual rainfall in Ithaca?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='radio' name='answer19' value='67'/> 67 cm
              <input type='radio' name='answer19' value='89'/> 89 cm
              <input type='radio' name='answer19' value='170'/> 170 cm
              <input type='radio' name='answer19' value='256'/> 256 cm
            </td></tr>

            <tr><td class='q_num'>20)</td><td>What year was the first Ithaca Apple Harvest Festival held?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'><input type='text' name='answer20' maxlength='4' size='4'></td></tr>
            <!--Need to include validation logic for non-numbers-->

            <tr><td class='q_num'>21)</td><td>4 of the following lakes are Finger Lakes. Which ones?</td></tr>
            <tr><td class='padding-l'></td><td class='answer'>
              <input type='checkbox' name='answer21' value='ampersand'/> Lake Ampersand
              <input type='checkbox' name='answer21' value='canadice'/> Lake Canadice
              <input type='checkbox' name='answer21' value='champlain'/> Lake Champlain
              <input type='checkbox' name='answer21' value='conesus'/> Lake Conesus
              <input type='checkbox' name='answer21' value='gilead'/> Lake Gilead
              <input type='checkbox' name='answer21' value='green'/> Lake Green
              <input type='checkbox' name='answer21' value='hemlock'/> Lake Hemlock
              <input type='checkbox' name='answer21' value='kanawauke'/> Lake Kanawauke
              <input type='checkbox' name='answer21' value='ontario'/> Lake Ontario
              <input type='checkbox' name='answer21' value='placid'/> Lake Placid
              <input type='checkbox' name='answer21' value='skaneateles'/> Lake Skaneateles
            </td></tr>
          </table>
          <button type='submit' class='submit'>SUBMIT</button>
        </form>
      </div>

    <?php include 'includes/footer.php'; ?>



   </body>
</html>
