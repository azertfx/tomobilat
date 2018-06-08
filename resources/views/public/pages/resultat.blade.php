@extends('public.layouts.templatePageN-2')
<!--Modal Signal-->
<div id="signal" class="modal login">
    <div class="modal-content row">
        <div><a href="#" class="modal-close"><i class="material-icons pink-text text-accent-2">close</i></a></div>
        <h1 class="center indigo-text ppptitle">Why this comment?</h1>
        <form class="col l12 m12 s12">
            <div class="col l12 m12 s12 input-field">
                <input type="checkbox" id="sgnl1" />
                <label for="sgnl1" class="grey-text text-darken-4">Hateful or abusive content</label>
            </div>
            <div class="col l12 m12 s12 input-field">
                <input type="checkbox" id="sgnl2" />
                <label for="sgnl2" class="grey-text text-darken-4">Lorem ipsum dolor sit amet</label>
            </div>
            <div class="col l12 m12 s12 input-field">
                <input type="checkbox" id="sgnl3" />
                <label for="sgnl3" class="grey-text text-darken-4">Consectetur adipisicing elit</label>
            </div>
            <div class="col l12 m12 s12 input-field">
                <input type="checkbox" id="sgnl4" />
                <label for="sgnl4" class="grey-text text-darken-4">Deserunt mollit anim id est laborum</label>
            </div>
            <div class="col l12 m12 s12 input-field snglmrgtp">
                <input type="text">
                <label>Other reasons</label>
            </div>
            <div class="col l6 m6 s6">
                <br>
                <a class="waves-effect waves-light btn pink accent-2">Send</a>
            </div>
            <div class="col l6 m6 s6">
                <br>
                <a href="#singup" class="pink-text text-accent-2 right modal-close">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!--/Modal Signal-->
@section('content')

<!--Slider Announce-->
<div class="col s12 l12 m12 ad_slider z-depth-1">

    <div class="col l12 m12 s12 fvrtnameprc">
        <h1 class="col l7 m7 s7 indigo-text left-align">Rolls Royce Phantom (2010)</h1>
        <h2 class="col l5 m5 s5 indigo-text right-align">735,000<span>DH</span></h2>
    </div>
     <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:800px;height:550px;overflow:hidden;visibility:hidden;background-color:#24262e;">

           <a class="btn-floating btn-large waves-effect waves-light white tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ajouté au favorite" id="heart"><i class="fa fa-heart" aria-hidden="true"></i></a>

          <!-- Loading Screen -->
          <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
               <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
               <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
          </div>
          <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:800px;height:450px;overflow:hidden;">
               <div>
                    <img data-u="image" src="images/slider/1.png"  alt="img3"/>
                    <img data-u="thumb" src="images/slider/1.png"  alt="img4" />
               </div>
               <div>
                    <img data-u="image" src="images/slider/2.png"  alt="img3"/>
                    <img data-u="thumb" src="images/slider/2.png"  alt="img4" />
               </div>
               <div>
                    <img data-u="image" src="images/slider/3.png"  alt="img5" />
                    <img data-u="thumb" src="images/slider/3.png"  alt="img6"/>
               </div>
               <div>
                    <img data-u="image" src="images/slider/4.png"  alt="img7"/>
                    <img data-u="thumb" src="images/slider/4.png"  alt="img8"/>
               </div>
               <div>
                    <img data-u="image" src="images/slider/5.png"  alt="img9"/>
                    <img data-u="thumb" src="images/slider/5.png"  alt="img10"/>
               </div>
               <div>
                    <img data-u="image" src="images/slider/6.png" alt="img11" />
                    <img data-u="thumb" src="images/slider/6.png" alt="img12" />
               </div>

          </div>
          <!-- Thumbnail Navigator -->
          <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:115px;" data-autocenter="1">
               <!-- Thumbnail Item Skin Begin -->
               <div data-u="slides">
                    <div data-u="prototype" class="p">
                          <div class="w">
                               <div data-u="thumbnailtemplate" class="t"></div>
                          </div>
                          <div class="c"></div>
                     </div>
               </div><!-- Thumbnail Item Skin End -->
          </div>
          <!-- Arrow Navigator -->
          <span data-u="arrowleft" class="jssora05l" style="top:170px;left:8px;width:40px;height:40px;"></span>
          <span data-u="arrowright" class="jssora05r" style="top:170px;right:8px;width:40px;height:40px;"></span>
     </div>
</div><!--/Slider Announce-->

<!--Features-->
<section class="white col s12 l12 m12 z-depth-1 anncinfsvg">
     <div class="col l2 m2 s4 indigo-text center-align">
          <img src="images/features/engine.svg" class="responsive-img" alt="one">
          <span>6.7 Litre</span>
     </div>
     <div class="col l2 m2 s4 indigo-text center">
          <img src="images/features/gas.svg" class="responsive-img" alt="two">
          <span>Essence</span>
     </div>
     <div class="col l2 m2 s4 indigo-text">
          <img src="images/features/gear.svg" class="responsive-img" alt="three">
          <span>Automatic</span>
     </div>
     <div class="col l2 m2 s4 indigo-text center">
          <img src="images/bodystyle/sedan.svg" class="responsive-img bdstlsvg" alt="body">
          <span>Sedan</span>
     </div>

     <div class="col l2 m2 s4 indigo-text center">
          <img src="images/features/Kilometrage.svg" class="responsive-img" alt="km">
          <span>Kilometage</span>
          <div class="col l12 m12 s12"><span>209567</span></div>
     </div>
     <div class="col l2 m2 s4 indigo-text center">
          <img src="images/features/Kilometrage.svg" class="responsive-img" alt="useage_date">
          <span>1er-Use</span>
          <div class="col l12 m12 s12"><span>DEC<br>2017</span></div>
     </div>
</section><!--/Features-->

<!--Car Information-->
<table class="z-depth-1 striped">
      <tbody>
           <tr>
                <td>Marke<br><span>Rolls Royce</span></td>
                <td>Model<br><span>Phantom</span></td>
                <td>Carburant<br><span>Essence</span></td>
           </tr>
           <tr>
                <td>Annee<br><span>2012</span></td>
                <td>Carrosserie <br><span>Sedan</span></td>
                <td>Kilometage<br><span>123 567 KM</span></td>
           </tr>
           <tr>
                <td>Boîte à vitesse<br><span>Automatique</span></td>
                <td>Cylindres<br><span>12</span></td>
                <td>Puissance Fiscale<br><span>49 CV</span></td>
           </tr>
           <tr>
                <td>Colour<br><span>Blue Dark</span></td>
                <td>Dédouanee<br><span>Oui</span></td>
                <td>Première utilisation<br><span>2012</span></td>
           </tr>
      </tbody>
</table><!--/Car Information-->

<!--Car options-->
<article class="col l12 m12 s12 z-depth-1">
      <h6>Voiture options</h6>
      <ul class="col l4 m4 s6 hderlpdng">
           <li><span class="left">ABS</span></li>
           <li><span class="left">Air-Conditionné</span></li>
           <li><span class="left">Airbag Conducteur</span></li>
           <li><span class="left">Toit Ouvrant</span></li>
           <li><span class="left">Airbag Passager</span></li>
           <li><span class="left">Chargeur sans fil</span></li>
           <li><span class="left">Anti-Patinage</span></li>
           <li><span class="left">Siéges Cuir</span></li>
           <li><span class="left">Sièges Chauffants</span></li>
           <li><span class="left">Lumières de l'humeur</span></li>
      </ul>
      <ul class="col l4 m4 s6">
           <li><span class="left">DVD | CD</span></li>
           <li><span class="left">GPS | Bluetooth</span></li>
           <li><span class="left">Commande Vocale</span></li>
           <li><span class="left">Régulateur de vitesse</span></li>
           <li><span class="left">Automatique lumières</span></li>
           <li><span class="left">Auto-Stationnement</span></li>
           <li><span class="left">Parking Radar</span></li>
           <li><span class="left">Parking Caméra</span></li>
           <li><span class="left">Caméra 360°</span></li>
           <li><span class="left">Auto-Frein</span></li>
      </ul>
      <ul class="col l4 m4 s6 hderlpdng">
           <li><span class="left">Siéges Electriques</span></li>
           <li><span class="left">Cuir noir</span></li>
           <li><span class="left">Jantes Aluminum</span></li>
           <li><span class="left">Antibrouillard</span></li>
           <li><span class="left">Affichage tête haute</span></li>
           <li><span class="left">vision de nuit</span></li>
           <li><span class="left">Anti-Patinage</span></li>
           <li><span class="left">Air-Suspension</span></li>
           <li><span class="left">Sièges à mémoire</span></li>
           <li><span class="left">Massage de sièges</span></li>
      </ul>
</article><!--/Car options-->

<!--Description-->
<article class="col l12 m12 s12 z-depth-1">
    <h6>Description</h6>
    <p>La Rolls-Royce Phantom VII est dessinée par Marek Djordjevic, s'inspirant des Phantom des années 1930 et de la Silver Wraith des années 1950. Elle représente le premier modèle de la marque anglaise construit sous l'ère BMW. L'intérieur comprend des fauteuils en cuir moelleux, d'épaisses moquettes en laine d'agneau et des essences de bois, au choix : acajou figuré, ronce de noyer, érable piqué, tibourbou noir, ronce d'orme ou chêne.<br><br>Le moteur n'est autre que le V12 6 L à injection directe de la BMW 760i réalésé à 6,75 L, cylindrée mythique de l'ancien V8 Rolls-Royce. La Rolls-Royce Phantom est produite dans la nouvelle usine (Goodwood) construite par BMW, à Goodwood, en Angleterre. Elle est déclinée en berline, limousine (EWB), coupé et cabriolet (Drophead Coupé).</p>
</article>

@endsection
@section('classContent1', 'Resulta classement announcement')

@section('jsFiles')
      <script type="text/javascript" src="{{asset('js/slide_script.js')}}"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jssor-slider/23.1.5/jssor.slider.min.js"></script>
      <script type="text/javascript">jssor_1_slider_init();</script>
@endsection
