<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="description" content="Website for buy & sell cars">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="FikraLABS">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{{asset('images/b-logo.png')}}" sizes="200x200">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,700,900|Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    @yield('cssFiles')
</head>

<body class="bg frfonts">
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!--Popup Elements-->
    <!--Modal FORGET PASSWORD-->
    <div id="forgetpsw" class="modal login">
        <div class="modal-content row">
            <div><a href="#" class="modal-close"><i class="material-icons pink-text text-accent-2">close</i></a></div>
            <h1 class="center indigo-text ppptitle">Retrouvez votre compte</h1>
            <div class="col l12 m12 s12 descppppara">
                <p class="center">Veuillez saisir votre adresse e-mail pour rechercher votre compte sur notre base de données.</p>
            </div>
            <form class="col l12 m12 s12">
                <div class="col l12 m12 s12 input-field">
                    <i class="material-icons prefix indigo-text">email</i>
                    <input type="email" class="validate">
                    <label data-error="wrong" data-success="right">Email</label>
                </div>
                <div class="col l6 m6 s6">
                    <a class="waves-effect waves-light btn pink accent-2">Send</a>
                </div>
                <div class="col l6 m6 s6">
                    <a href="#login" class="pink-text text-accent-2 right modal-close modal-trigger sngpbtn">Login</a>
                </div>
            </form>
        </div>
    </div>
    <!--/Modal FORGET PASSWORD-->

    <!--Modal LOGIN-->
    <div id="login" class="modal login">
        <div class="modal-content row">
            <div><a href="#" class="modal-close"><i class="material-icons pink-text text-accent-2">close</i></a></div>
            <h1 class="center indigo-text ppptitle">Se Connecter</h1>
            <form class="col l12 m12 s12">
                <div class="col l12 m12 s12 input-field">
                    <i class="material-icons prefix indigo-text">email</i>
                    <input type="email" class="validate">
                    <label data-error="wrong" data-success="right">Email</label>
                </div>
                <div class="col l12 m12 s12 input-field">
                    <i class="material-icons prefix indigo-text">lock</i>
                    <input type="password" class="validate">
                    <label>Mot de passe</label>
                </div>
                <p class="col l12 m12 s12 input-field mrgnttopcstm">
                    <input type="checkbox" id="test55" />
                    <label for="test55" class="grey-text text-darken-4">Enregistrer le compte</label>
                </p>
                <div class="col l6 m6 s6">
                    <a class="waves-effect waves-light btn pink accent-2">Login</a>
                    <br>
                    <a href="#forgetpsw" class="indigo-text modal-close modal-trigger">Mot de passe oublié</a>
                </div>
                <div class="col l6 m6 s6">
                    <a href="#singup" class="pink-text text-accent-2 right modal-close modal-trigger sngpbtn">S'inscrire</a>
                </div>
            </form>
        </div>
    </div>
    <!--/Modal LOGIN-->

    <!--Modal Register-->
    <div id="singup" class="modal singup login">
        <div class="modal-content row">
            <div><a href="#" class="modal-close"><i class="material-icons pink-text text-accent-2">close</i></a></div>
            <h1 class="center indigo-text ppptitle">Register</h1>
            <form class="col l12 m12 s12">
                <div class="col l12 m12 s12 input-field">
                    <i class="material-icons prefix indigo-text">email</i>
                    <input type="email" class="validate">
                    <label>Email</label>
                    <p class="tooltiptext white z-depth-1 left indigo-text">
                        <span class="pink-text">Attention !! <br></span> - Votre e-mail ne changera pas encore une fois.
                        <br> - Vous recevrez quelques emails plus tard.
                    </p>
                </div>
                <div class="col l12 m12 s12 input-field">
                    <i class="material-icons prefix indigo-text">email</i>
                    <input type="email" class="validate">
                    <label>Re Email</label>
                    <p class="tooltiptext white z-depth-1 left indigo-text">
                        <span class="pink-text">Attention !! <br></span> - Votre e-mail ne changera pas encore une fois.
                        <br> - Vous recevrez quelques emails plus tard.
                    </p>
                </div>
                <div class="col l12 m12 s12 input-field">
                    <i class="material-icons prefix indigo-text">lock</i>
                    <input type="password" class="validate">
                    <label>Mot de passe</label>
                    <p class="tooltiptext white z-depth-1 left indigo-text">
                        <span class="pink-text">Attention !! <br></span> - Votre mot de passe ne changera pas encore une fois.
                        <br> - Vous recevrez quelques emails plus tard.
                    </p>
                </div>
                <div class="col l12 m12 s12 input-field">
                    <select>
                                   <option value="" selected>Sélectionnez le type de compte</option>
                                   <option value="1">Agency</option>
                                   <option value="2">Auto Entrepreneur</option>
                              </select>
                </div>
                <p class="col l12 m12 s12 mrgnttopcstm input-field">
                    <input type="checkbox" id="test5" />
                    <label for="test5" class="grey-text text-darken-4">Acceptez <a href="#lois" class="pink-text text-accent-2 modal-trigger">les rôles</a></label>
                </p>
                <div class="col l6 m6 s6">
                    <a class="waves-effect waves-light btn pink accent-2">Register</a>
                </div>
                <div class="col l6 m6 s6">
                    <a href="#login" class="pink-text text-accent-2 right modal-close modal-trigger sngpbtn">Login</a>
                </div>
            </form>
        </div>
    </div>
    <!--/Modal Register-->

    <!--Modal Video-->
    <div id="video" class="modal singup login">
        <div class="modal-content row">
            <div><a href="#" class="modal-close"><i class="material-icons pink-text text-accent-2">close</i></a></div>
            <h1 class="center indigo-text ppptitle">Video Popup</h1>
            <div class="col l12 m12 s12">
                <iframe src="https://www.youtube.com/embed/Ap9eROAo82U" class="z-depth-1" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!--/Modal Video-->

    <!--/Popup Elements-->

    <!--Navigation-->
    <nav class="indigo" id="nav_home">
        <div class="nav-wrapper container">
            <ul class="left">
                <li><a href="index.html" class="brand-logo"><img src="{{asset('images/navlogo.png')}}" alt="logo" class="responsive-img"></a></li>
                <li><a class="btn-floating btn-large waves-effect waves-light red modal-trigger tooltipped videoicon" href="#video" data-position="bottom" data-delay="50" data-tooltip="Website Videos"><i class="material-icons pink accent-2">play_arrow</i></a></li>
                <li><a class="btn-floating btn-large waves-effect waves-light white modal-trigger tooltipped loginicon" href="#login" data-position="bottom" data-delay="50" data-tooltip="Login / Sign up"><i class="material-icons indigo-text">perm_identity</i></a></li>

            </ul>

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="index.html">Accueil</a></li>
                <li><a href="news.html">Nouvelles</a></li>
                <li><a href="Classement.html">Classements</a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Tomobilat<i class="material-icons right">arrow_drop_down</i></a></li>
                <li>
                    <a class="dropdown-button indigo-text" href="#!" data-activates="dropdown2">
                        <div class="langbg">
                            <span class="left">FR</span>
                            <i class="material-icons right">arrow_drop_down</i>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="clear">

            </div>
            <!-- Dropdown Language -->
            <ul id='dropdown2' class='dropdown-content'>
                <li><a href="#!" class="indigo-text arfonts">العربية</a></li>
            </ul>
            <ul id='respnav' class='dropdown-content'>
                <li><a href="#!" class="indigo-text arfonts">العربية</a></li>
            </ul>
            <!-- Dropdown Options -->
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="Modeles_voitures.html" class="indigo-text">Marque</a></li>
                <li><a href="List_societes.html" class="indigo-text">Société</a></li>
                <li><a href="List_entrepreneurs.html" class="indigo-text">Auto_Entrep</a></li>
                <li><a href="conseils.html" class="indigo-text">Conseils</a></li>
                <li><a href="about.html" class="indigo-text">Apropos</a></li>
                <li><a href="contact.html" class="indigo-text">Contact</a></li>
            </ul>
            <!--Responsive Nav-->
            <ul class="side-nav sdnvrspnsv" id="mobile-demo">
                <div class="row rspnsdbar">
                    <div class="col s4 rspnsdbarvd">
                        <a class="btn-floating btn-large waves-effect waves-light red modal-trigger tooltipped videoicon" href="#video" data-position="bottom" data-delay="50" data-tooltip="Website Videos"><i class="material-icons pink accent-2">play_arrow</i></a>
                    </div>
                    <div class="col s4 rspnsdbarlgn">
                        <a class="btn-floating btn-large waves-effect waves-light white modal-trigger tooltipped loginicon" href="#login" data-position="bottom" data-delay="50" data-tooltip="Login / Sign up"><i class="material-icons indigo-text">perm_identity</i></a>
                    </div>
                    <div class="col s4 rspnsdbarlng">
                        <a class="dropdown-button white-text" href="#!" data-activates="respnav">
                            <div class="langbg">
                                <span class="left">FR</span>
                                <i class="material-icons right white-text">arrow_drop_down</i>
                            </div>
                        </a>
                    </div>
                </div>
                <li class="active"><a href="index.html" class="indigo-text active">Accueil</a></li>
                <li><a href="news.html" class="indigo-text">Nouvelles</a></li>
                <li><a href="Modeles_voitures.html" class="indigo-text">Marque</a></li>
                <li><a href="List_societes.html" class="indigo-text">Société</a></li>
                <li><a href="List_entrepreneurs.html" class="indigo-text">Auto_Entrepreneur</a></li>
                <li><a href="Conseils.html" class="indigo-text">Conseils</a></li>
                <li><a href="Classement.html" class="indigo-text">Classements</a></li>
                <li><a href="about.html" class="indigo-text">Apropos</a></li>
                <li><a href="contact.html" class="indigo-text">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!--/Navigation-->
