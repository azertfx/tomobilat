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

<div class="clear"></div>
<div class="articlecntnt">
    <img src="images/news/news1.jpg" alt="article_img" class="responsive-img z-depth-1">
    <h1 class="indigo-text">Voitures électriques : Volvo fait le pari du tout vert</h1>
    <p>Fin 2014, le constructeur suédois Volvo Car, filiale du constructeur chinois Geely, avait fait sensation en annonçant son objectif de parvenir à zéro mort au volant de ses véhicules d’ici 2020. Le constructeur vient de récidiver avec une nouvelle annonce choc ce mercredi en dévoilant une stratégie 100% électrique ou hybride : à compter de 2019, tous ses nouveaux modèles seront équipés de l’une ou de l’autre de ces technologies. Le groupe de Göteborg, sur la côte occidentale suédoise, est ainsi le premier constructeur historique à sauter le pas et prévoir d’électrifier tous ses modèles à un horizon proche. Racheté par le chinois Geely depuis 2010 après avoir appartenu à Ford, Volvo compte lancer cinq modèles intégralement électriques entre 2019 et 2021 : trois sous sa marque et deux sous l’appellation Polestar, sa branche sportive devenue récemment une marque à part entière.
    </p>

    <p>Cette filiale destinée à se spécialiser dans le développement de véhicules électriques à hautes performances entend concurrencer Tesla sur le créneau des véhicules haut de gamme. L’américain s’apprête pour sa part à lancer vendredi la production de son troisième modèle. Un modèle milieu de gamme, le «Model 3», plus abordable que les Model X et Model S et qui sera vendu moins de 35 000 dollars (30,8 millions d’euros) outre-Atlantique. Son fondateur Elon Musk a récemment déclaré que Tesla était sur la bonne voie pour produire 200 000 «Model 3» d’ici décembre, soit un chiffre jamais vu pour ce constructeur aux prises avec des problèmes d’approvisionnement du marché récurrents depuis ses débuts.</p>
    <p>«Cette annonce marque la fin des voitures équipées seulement d’un moteur à combustion», a déclaré le patron de Volvo, Håkan Samuelsson, selon lequel la combinaison de nouveaux modèles 100% électriques et d’autres hybrides (carburant-électricité) permettra au constructeur de disposer d’une offre de voitures électriques «parmi les plus larges du marché». Le premier modèle électrique sera fabriqué dès 2019 en Chine. Le constructeur suédois, dont les ventes ont fortement augmenté de 6,2% en 2016 à 534 000 unités avec une croissance à deux chiffres en Chine ou aux Etats-Unis, a fait le constat que «les consommateurs plébiscitent de plus en plus les voitures électrifiées» et entend se concentrer sur ce seul créneau. Une annonce qui survient une semaine après que Geely eut dévoilé un projet de centre d’innovation et de recherche à Göteborg centré sur le développement de véhicules électriques.
        </p>
        <h4>Les modèles diesel trop chers à produire</h4>
        <p>En mai dernier, dans une interview au quotidien allemand Frankfurter Allgemeine Zeitung (FAZ), le PDG de Volvo Cars avait déclaré renoncer au développement de nouvelle génération de moteurs diesel en raison des coûts importants liés au durcissement à venir des réglementations. La législation européenne prévoit que les voitures neuves devront respecter des émissions moyennes de 95 grammes de CO2 par kilomètre (g/km), sous peine de sanctions, à l’horizon 2021. Et en Suède, le gouvernement envisage de quintupler le taux de taxation des émissions de CO2 dès 2018 : d’après les calculs du magazine automobile suédois TeknikensVärld, le propriétaire d’un 4X4 Volvo V90 T5 (154 g/km) devrait ainsi payer 630 euros de taxe par an, celui du puissant SUV BMW X6 M (258 g/km) plus de 1 500 euros. Un coût qui reste cependant marginal comparé au prix d’achat de ces modèles haut de gamme (entre 60 000 et 100 000 euros), font valoir les défenseurs de cette écotaxe.
        </p>
</div>

@endsection
@section('classContent2', 'announcement')
