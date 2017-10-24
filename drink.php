<!DOCTYPE html>
<html>
   <head>

      <link rel='stylesheet' href='styles/all.css' />
      <meta charset='utf-8' />
      <title>Ithaca Apple Harvest Festival</title>
   </head>

   <body>

     <a href='index.html'><img class='logo' alt='logotype' src='img/logotype.png'></a>

      <?php include 'includes/datetime.php'; ?>

      <!-- <div id='selector'>
        <table>
          <tr>
            <td class='wineries'><a class='wine_button'><img alt='wineries' src='img/wineries_text.png'></button></td>
            <td class='cideries'><button class='cider_button' onclick='showCideries()'><img alt='cideries' src='img/cideries_text.png'></button></td>
          </tr>
        </table>
      </div> -->

      <div id='wineries'>
        <div class='category'><img alt='wineries' src='img/strip_wineries.png'></div>

        <div class='business_name'><a href='http://www.ryanwilliam.com/'>Ryan William Vineyard</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/mX84EfaYQon'>4156 State Route 414<br/>Burdett, NY 14841</a></div>
        <div class='business_description italic'>Situated on the eastern shore of Seneca Lake, a handcrafted range of wines exhibit exceptional aromatics and elegant flavors.</div>

        <div class='business_name'><a href='https://wagnervineyards.com/'>Wagner Vineyards Estate Winery</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/u9h9AUGAZh72'>9322 State Route 414<br/>Lodi, NY 14860</a></div>
        <div class='business_description italic'>Over 30 award-winning wines, ranging from bone-dry to dessert-wine sweet. On the eastern shore of Seneca Lake.</div>

        <div class='business_name'><a href='https://www.thousandislandswinery.com/'>Thousand Islands Winery</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/dj2JhawJXK22'>43298 Seaway Avenue<br/>Alexandria Bay, NY 13607</a></div>
        <div class='business_description italic'>The largest farm winery in Northern New York. Located along the St. Lawrence River, and features Frontenac, Frontenac Gris, Marquette, and La Crescent grape varieties.</div>

        <div class='business_name'><a href='https://www.lakelandwinery.com/'>Lakeland Winery</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/DExdeoYqB712'>877 State Fair Boulevard<br/>Syracuse, NY 13209</a></div>
        <div class='business_description italic'>Wine tastings for up to 30 people, wedding hosting, wine store, and special events.</div>
      </div>

      <div id='cideries'>
        <div class='category'><img alt='cideries' src='img/strip_cideries.png'></div>

        <div class='business_name'><a href='https://www.blackduckcidery.com/?v=7516fd43adaa'>Blackduck Cidery</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/DCsQ7c1Rkiq'>2046 County Road 138<br/>Ovid, NY 14521</a></div>
        <div class='business_description italic'>Family orchard producing cider, perry, and vinegar.</div>

        <div class='business_name'><a href='http://www.fingerlakesciderhouse.com/'>Finger Lakes Cider House</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/nESsV2F1qxD2'>4017 Hickock Road #1<br/>Interlaken, NY 14847</a></div>
        <div class='business_description italic'>The premier cider tasting room experience in the country.</div>

        <div class='business_name'><a href='https://indiancreekithaca.com/'>Indian Creek Farm</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/EyrPykPTcu92'>1408 Trumansburg Road<br/>Ithaca, NY 14850</a></div>
        <div class='business_description italic'>100 year-old orchard and picking spot. Homebrewed cider 3 minutes from downtown Ithaca.</div>

        <div class='business_name'><a href='http://www.littletree-orchards.com/'>Littletree Orchards</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/mpV3m46Kxoq'>345 Shaffer Road<br/>Newfield, NY 14867</a></div>
        <div class='business_description italic'>Produces fresh, sweet, flash-pasteurized apple cider with no preservatives.</div>

        <div class='business_name'><a href='http://www.cidery.com/'>Bellwether Hard Cider</a></div>
        <div class='business_address'><a href='https://goo.gl/maps/ojy3Tct57792'>9070 Route 89<br/>Trumansburg, NY 14886</a></div>
        <div class='business_description italic'>Specializes in the production of hard cider using a wide variety of upstate New York apples to produce a range of carefully handcrafted, premium ciders.</div>
      </div>

      <?php include 'includes/footer.php'; ?>

   </body>
</html>
