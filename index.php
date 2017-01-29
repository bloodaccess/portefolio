<?php

if (isset($_POST['contacts']) && $_POST['contacts'] == 'submit') {
    if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['sujet']) && !empty($_POST['sujet'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['message']) && !empty($_POST['message'])))
        

    {
        $to      = 'blood.access@gmail.com';
        $message = $_POST['name']. " - " . $_POST['email']. " - ". $_POST['message'];
        mail($to, $_POST['sujet'], $message);
    }
    

}
?>
<?php
include "./configs/chemins.class.php";
require Chemins::VUES_PERMANENTE."head.inc.php";
?>

    <body>
      <br>
      <br>
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="./public/images/slider/PPEreseaux.png" alt="deezer v1" width="100%" height="850">
                <div class="carousel-caption">
                  <h3>Travail personnel encadré</h3>
                  <p>Mise en réseaux de deux serveurs 2012 et un zeroshell</p>
                </div>      
              </div>

              <div class="item">
                  <img src="./public/images/slider/developpement2sc.png" alt="Chicago" width="100%" height="850">
                <div class="carousel-caption">
                  <h3>Portfolio V3</h3>
                  <p>Devellopement de mon site perso en version 3 (php | boostrap)</p>
                </div>      
              </div>
    
              <div class="item">
                  <img src="./public/images/slider/filtrage%20zeroshell.png" alt="Los Angeles" width="100%" height="850">
                <div class="carousel-caption">
                  <h3>LA</h3>
                  <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
                </div>      
              </div>
              <div class="item">
                  <img src="./public/images/slider/portfolioV2.png" alt="Chicago" width="100%" height="850">
                <div class="carousel-caption">
                  <h3>Portfolio V2</h3>
                  <p>Developement de mon site perso en version 2 (html5 | CSS3)</p>
                </div>      
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
            
        </div>
        
        <div id="presentation" class='container'> <h2> Presentation : </h2> 
                <div class='col-sm-9'>
                <p>Bienvenue à tous sur mon portefolio. 
                Je vais faire une présentation rapide de ce qui me caractérise le plus.<br><br>

                Donc je me présente je m'appelle Gregory CAYZAC aussi connu sous le nom de Bloodaccess sur internet. 
                Je sors actuellement d'un bac professionnel Systeme Electronique et Numérique et je suis actuellement en
                BTS Système Informatique aux Organisation (option SISR) pour faire de la securité reseau.<br><br>

                En ce qui concerne mes passions : j'ai arrêté les sports extremes pour me consacrer aux études. 
                Je me considère aussi comme un Geek: passionné d'informatique, de developpement et de science. 
                En effet je consulte de nombreux articles faisant référence aux avancer technologique et scientifique<br><br>

                Je vous invite donc à consulter la suite du site pour en savoir plus sur ma personnalitée</p></div>
                <div class='col-sm-3'>
                    <p><img src="./public/images/Portrait-min.png" class="img-responsive" alt="profile picture"></p>
                </div>
        </div>";

          <div id="skillbar" class="container">
              <div class="row">
                  <div class="col-sm-4">
                      <div class="container" id="center">
                          <img src="./public/images/icones/coder.png" alt="Chicago" width="150" height="150">
                          <p>Développement</p>
                      </div>
                  <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                          <span class="sr-only">90% Complete</span>
                      </div>
                      <span class="progress-type">HTML / HTML5</span>
                      <span class="progress-completed">90%</span>
                  </div>
                  <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                          <span class="sr-only">55% Complete (success)</span>
                      </div>
                      <span class="progress-type">C#</span>
                      <span class="progress-completed">55%</span>
                  </div>
                  <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          <span class="sr-only">20% Complete (info)</span>
                      </div>
                      <span class="progress-type">Java</span>
                      <span class="progress-completed">20%</span>
                  </div>
                  <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete (warning)</span>
                      </div>
                      <span class="progress-type">JavaScript / jQuery</span>
                      <span class="progress-completed">60%</span>
                  </div>
                  <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span class="sr-only">80% Complete (danger)</span>
                      </div>
                      <span class="progress-type">CSS / CSS3</span>
                      <span class="progress-completed">80%</span>
                  </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              <span class="sr-only">60% Complete</span>
                          </div>
                          <span class="progress-type">HTML / HTML5</span>
                          <span class="progress-completed">60%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                          <span class="progress-type">ASP.Net</span>
                          <span class="progress-completed">40%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                              <span class="sr-only">20% Complete (info)</span>
                          </div>
                          <span class="progress-type">Java</span>
                          <span class="progress-completed">20%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                          <span class="progress-type">JavaScript / jQuery</span>
                          <span class="progress-completed">60%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              <span class="sr-only">80% Complete (danger)</span>
                          </div>
                          <span class="progress-type">CSS / CSS3</span>
                          <span class="progress-completed">80%</span>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              <span class="sr-only">60% Complete</span>
                          </div>
                          <span class="progress-type">HTML / HTML5</span>
                          <span class="progress-completed">60%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                          <span class="progress-type">ASP.Net</span>
                          <span class="progress-completed">40%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                              <span class="sr-only">20% Complete (info)</span>
                          </div>
                          <span class="progress-type">Java</span>
                          <span class="progress-completed">20%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                          <span class="progress-type">JavaScript / jQuery</span>
                          <span class="progress-completed">60%</span>
                      </div>
                      <div class="progress">
                          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              <span class="sr-only">80% Complete (danger)</span>
                          </div>
                          <span class="progress-type">CSS / CSS3</span>
                          <span class="progress-completed">80%</span>
                      </div>
                  </div>
              </div>
          </div>
        
        <div id="CV" class="container">
            <div id="EP" class="col-sm-7">
            <h2>Expériences professionnelles :</h2><br>
                <p>• Stage : ICM Val d’Aurel avril 2016 (4 semaines) : entretiens sur serveur</p>
                <p>• Stage : SAB international septembre 2015 (4semaines) : préparation d’ordinateur</p>
                <p>• Stage : Actiline computeur en juin 2015 (4semaines) : accueil et diagnostique</p>
                <p>• Stage : Datacomsys novembre 2014 (4 semaines) : création/installation de carte électronique</p>
                <p>• Stage : Datacomsys en juin 2014 (4 semaines) : création/installation de carte électronique</p>
                <p>• Stage : SAB international en décembre 2014 (4semaines) : préparation d’ordinateur</p>
                <p>• Stage : SAB international en juin 2013 (1 semaine) : accueil et diagnostique </p>
                <p>• Stage : Gabileon avril 2012 (1 semaine) : cuisine et service </p>
                <p>• Activité : entreprise parentale : vente et fabrication </p><br>
            </div>

            <div id="formation" class="col-sm-5">
            <h2>Formations :</h2><br>
                <p>actuellement en BTS <abbr title="Service informatique au Organisation">SIO</abbr> •</p>
                <p>2016 : Baccalauréat professionnel <abbr title="System Electronique Numerique">SEN</abbr> (mention bien) •</p> 
                <p>2015 : Titulaire du BEP Systèmes Numériques •</p>
                <p>2013 : Etude au collège avec obtention du brevet des collèges •</p>
                <br>
                <br>

            </div>
        </div>
        <div class="container" id="lettre_motivation">
            <h2>Lettre de motivation :</h2>
            <p>Madame Monsieur,</p>

            <p>Je suis actuellement en première année de BTS SIO (système informatique aux organisation) au lycée Marc Bloch (Sérignan).
            Je suis à la recherche active d’une administration ou entreprise comme la vôtre ayant un parc informatique ou une activité liée à l’informatique qui est 
            suffisamment importante pour m’accueillir du 15 mai 2017 au 23 juin 2017 pour un stage en milieu professionnel.</p>

            <p>Passionné par l’informatique et les nouvelles technologies , j’ai dans l’intention de devenir technicien réseau informatique et ce stage me permettrait
            de confirmer mes aspirations professionnelles. Connaissant le sérieux de votre administration, c’est tout naturellement que je me permets de vous adresser 
            ma candidature. Organisé, discret et soigneux, je suis particulièrement motivé pour vous venir en aide dans les taches que vous pourriez me confier.</p>

            <p>Je reste à votre disposition pour tous renseignements complémentaires et éventuellement un entretien. Je vous remercie de votre réponse, même négative, 
            veuillez agréer, Madame, Monsieur mes salutations distinguées.</p>

            <p>Cayzac Grégory</p>
        </div>
                
        
        <div id="contacts"class="container">  
            <h2>Contact</h2>
        <div class="col-sm-8">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="sujet">Sujet:</label>
                    <div class="col-sm-10">          
                      <input type="text" class="form-control" id="sujet" placeholder="Enter your sujet">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="message">Message:</label>
                    <div class="col-sm-10">          
                      <input type="textarea" class="form-control" rows="5" id="message" placeholder="Enter your massage">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                  </div>
                </form>
        </div>
                <div class="col-sm-4">
                    <div class="col-sm-2">
                        <span class="glyphicon glyphicon-home">
                    </div>
                    <div class="col-sm-10">
                        <p>77 rue du bois de la vierge, 34980 St gely du fesc</p>
                    </div>
                    <div class="col-sm-2">
                        <span class="glyphicon glyphicon-map-marker">
                    </div>
                    <div class="col-sm-10">
                        <p>Mon e-mail : gregory.cayzac@gmail.com</p>
                    </div>
                    <div class="col-sm-2">
                        <span class="glyphicon glyphicon-phone">
                    </div>
                    <div class="col-sm-10">
                        <p>06 50 43 21 02</p>
                    </div>
                    <div class="col-sm-2">
                        <span class="glyphicon glyphicon-download"></span>
                    </div>
                    <div id="dl" class="col-sm-10">
                        <a href="dl/CV Cayzac.pdf"> My CV</a>
                    </div>
                    <div class="col-sm-2">
                        <span class="glyphicon glyphicon-download"></span>
                    </div>
                    <div id="dl" class="col-sm-10">
                        <a href="dl/LDM Cayzac.pdf"> My Motivation letter</a>
                    </div>
                </div>
        </div>
    </body>
</html>
