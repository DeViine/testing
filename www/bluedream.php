<?php include (dirname(__FILE__) . "/../lib/classes/header.php"); ?>
<div class="straininfo">
<h2 class="infobar">Information</h2>

<div class="infocontainer">
        <div class="audinfo">
          <img src="../img/ak-47_logo.png" class="strainlogo">
          <h2>
            <?php
            $path = __FILE__;
            $file = basename($path);         // $file is set to "index.php"
            $file = basename($path, ".php"); // $file is set to "index"
            echo file_get_contents('../lib/strains/' . $file . '/strain_name');
            ?>
          </h2>
        </div>    
    <!--Rating system begin-->
    <div id="ak47_rating">
        <div class="starRating">
            <div>
                <div>
                    <div>
                        <div>
                        <input id="rating1" class="<?php echo file_get_contents('../lib/strains/' . $file . '/strain_name');?>" type="radio" name="rating" value="1">
                        <label for="rating1"><span>1</span></label>
                        </div>
                    <input id="rating2" class="<?php echo file_get_contents('../lib/strains/' . $file . '/strain_name');?>" type="radio" name="rating" value="2">
                    <label for="rating2"><span>2</span></label>
                    </div>
                <input id="rating3" class="<?php echo file_get_contents('../lib/strains/' . $file . '/strain_name');?>" type="radio" name="rating" value="3">
                <label for="rating3"><span>3</span></label>
                </div>
            <input id="rating4" class="<?php echo file_get_contents('../lib/strains/' . $file . '/strain_name');?>" type="radio" name="rating" value="4">
            <label for="rating4"><span>4</span></label>
            </div>
        <input id="rating5" class="<?php echo file_get_contents('../lib/strains/' . $file . '/strain_name');?>" type="radio" name="rating" value="5">
        <label for="rating5"><span>5</span></label>
        </div>
                <h3 class="ratingstext">Rated <div id="sativaRatings"></div>/5 by <div id="sativaUsers"></div> users</h3>   
                <!--Rating system end-->
                <a href="#" class="favbtn">FAVORITE</a>
                <canvas id="myChart" width="120" height="120" data-value="<?php echo file_get_contents('../lib/strains/' . $file . '/indica');?>"></canvas>
                <h3 class="makeup"><?php echo file_get_contents('../lib/strains/' . $file . '/sativa');?>% Indica / <?php echo file_get_contents('../lib/strains/' . $file . '/indica');?>% Sativa</h3>
            </div>
        </div>
</div>

<!--REPLACE WITH PHP INSERT SLIDESHOW-->
      <div class="images">
        <h2 class="imagesbar">Images</h2>
          <ul class="imagesbody" data-orbit>
            <li>
              <a href="../img/jedi_kush.jpg" class="dispimage">
              <img src="../img/jedi_kush.jpg" alt="slide 1" ></a>
            </li>
            <li>
              <a href="../img/jedi_kush_jar.jpg" class="dispimage">
              <img src="../img/jedi_kush_jar.jpg" alt="slide 2" ></a>
            </li>
            <li>
              <a href="../img/jedi_kush.jpg" class="dispimage">
              <img src="../img/jedi_kush.jpg" alt="slide 3" ></a>
            </li>
            <li>
              <a href="../img/jedi_kush_jar.jpg" class="dispimage">
              <img src="../img/jedi_kush_jar.jpg" alt="slide 5" ></a>
            </li>
            <li>
              <a href="../img/jedi_kush.jpg" class="dispimage">
              <img src="../img/jedi_kush.jpg" alt="slide 6" ></a>
            </li>
            <li>
              <a href="../img/jedi_kush.jpg" class="dispimage">
              <img src="../img/jedi_kush.jpg" alt="slide 8" ></a>
            </li>

          </ul>
      </div>



   
      
         
      <div class="description">
        <div class="descriptionbody">
          <p>Don't let the scary name fool you: AK-47 will leave you relaxed and mellow. This sativa-dominant hybrid delivers a steady and long-lasting cerebral buzz that keeps you mentally alert and engaged in creative or social activities. AK-47 mixes Colombian, Mexican, Thai, and Afghani varieties, bringing together a complex blend of flavors and effects. While AK-47’s scent is sour and earthy, its sweet floral notes can only be fully realized in the taste. 
          <br><br>
          Created in 1992 by Serious Seeds, AK-47 has won numerous Cannabis Cup awards around the world for its soaring THC content. For those hoping to fill their gardens with this resinous, skunky hybrid, growers recommend an indoor environment with either soil or hydroponic setups. AK-47 is easy to grow and has a short indoor flowering time of just 53 to 63 days, while outdoor plants typically finish toward the end of October.</p>
        </div>
      </div>




      <div class="reviews">
        <h2 class="reviewsbar">Reviews</h2>
        <div class="reviewsbody">
           <div id="disqus_thread"></div>
              <!--script type="text/javascript">
                  var disqus_shortname = 'devinewalkingravenreviews';

                  /* * * DON'T EDIT BELOW THIS LINE * * */
                  (function() {
                      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
        </div>
      </div>

<!--CHANGE CODE TO INCLUDE THE DESCRIPTIONS-->         
      <div class="profile">
        <h2 class="profilebar">Profile</h2>
        <div class="profilebody">
          <ul>
            <li><div class="redsquare"></div>Earthy</li>
            <li><div class="yellowsquare"></div>Skunk</li>
            <li><div class="greensquare"></div>Pine</li>
          </ul>
        </div>
      </div>



      <div class="effects">
        <h2 class="effectsbar">Effects</h2>
        <div class="effectsbody">
          <ul>
            <li><div class="redsquare"></div>Euphoric</li>
            <li><div class="yellowsquare"></div>Relaxed</li>
            <li><div class="greensquare"></div>Creative</li>
          </ul>
        </div>
      </div>




       <div class="negatives">
        <h2 class="negativesbar">Negatives</h2>
        <div class="negativesbody">
          <ul>
            <li><div class="redsquare"></div>Cotton Mouth</li>
            <li><div class="yellowsquare"></div>Dry Eyes</li>
            <li><div class="greensquare"></div>Dizzy</li>
          </ul>
        </div>
      </div>
<?php include (dirname(__FILE__) . "/../lib/classes/footer.php"); ?>      