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
<div class="consielcntnt">
    <div class="clear"></div>
    <div class="cnslpara">
        <h1 class="indigo-text center">Consiels</h1>
        <p class="center">Toyota—with its now-ubiquitous Prius—has spent the better part of two decades democratizing the benefits of electrification like no other automaker, yet its enthusiasm for non-hybrid electric vehicles has been tepid at best.</p>
        <div class="valign-wrapper">
            <span class="indigo-text" id="strtcnslbtn"><i class="fa fa-angle-down pink-text text-accent-2" aria-hidden="true"></i> Commencer</span>
        </div>
    </div>
    <div class="cnslclass frstcnslbtn">
        <div class="col l4 m4 s12">
            <img src="images/consiels/consiel1.png" alt="consiel" class="responsive-img">
        </div>
        <div class="col l8 m8 s12">
            <h2 class="pink-text text-accent-2">Consiel's title</h2>
            <p class="grey-text text-darken-1">Toyota—with its now-ubiquitous Prius—has spent the better part of two decades democratizing the benefits of electrification like no other automaker, yet its enthusiasm for non-hybrid electric vehicles has been tepid at best.</p>
            <div class="valign-wrapper">
                <span class="pink-text text-accent-2" id="frstcnslbtn"><i class="fa fa-angle-down" aria-hidden="true"></i> Suivre</span>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="cnslclass scndcnslbtn">
        <div class="col l4 m4 s12 right">
            <img src="images/consiels/consiel2.png" alt="consiel" class="responsive-img">
        </div>
        <div class="col l8 m8 s12 left right-align">
            <h2 class="indigo-text">Consiel's title</h2>
            <p class="grey-text text-darken-1">Toyota—with its now-ubiquitous Prius—has spent the better part of two decades democratizing the benefits of electrification like no other automaker, yet its enthusiasm for non-hybrid electric vehicles has been tepid at best.</p>
            <div class="valign-wrapper right">
                <span class="indigo-text" id="scndcnslbtn"><i class="fa fa-angle-down" aria-hidden="true"></i> Suivre</span>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="cnslclass thrdcnslbtn">
        <div class="col l4 m4 s12">
            <img src="images/consiels/consiel3.png" alt="consiel" class="responsive-img">
        </div>
        <div class="col l8 m8 s12">
            <h2 class="pink-text text-accent-2">Consiel's title</h2>
            <p class="grey-text text-darken-1">Toyota—with its now-ubiquitous Prius—has spent the better part of two decades democratizing the benefits of electrification like no other automaker, yet its enthusiasm for non-hybrid electric vehicles has been tepid at best.</p>
            <div class="valign-wrapper">
                <span class="pink-text text-accent-2" id="thrdcnslbtn"><i class="fa fa-angle-down" aria-hidden="true"></i> Suivre</span>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="cnslclass frthcnslbtn">
        <div class="col l4 m4 s12 right">
            <img src="images/consiels/consiel4.png" alt="consiel" class="responsive-img">
        </div>
        <div class="col l8 m8 s12 left right-align">
            <h2 class="indigo-text">Consiel's title</h2>
            <p class="grey-text text-darken-1">Toyota—with its now-ubiquitous Prius—has spent the better part of two decades democratizing the benefits of electrification like no other automaker, yet its enthusiasm for non-hybrid electric vehicles has been tepid at best.</p>
        </div>
    </div>
</div>  

@endsection
@section('classContent2', 'announcement')
