@extends('public.layouts.templateFullWidth')
@section('cssFiles')
<link href="{{asset('css/nouislider.min.css')}}" rel="stylesheet">
@endsection()
@section('content')

<!--LOGO & Titles-->
<article class="container">
    <!--BUTTON GO TO SECTION TOP-->
    <a class="btn-floating btn-large waves-effect waves-light pink accent-2" id="btnToTop"><i class="material-icons">navigation</i></a>
    <div class="center">
        <img src="{{asset('images/homepagelogo.png')}}" class="responsive-img" alt="logo">
        <h4 class="center grey-text text-darken-4">Trouvez votre prochaine voiture avec <span>Tomobilat </span>Plus de 400 000 voitures en ligne, vous pouvez acheter et vendre des voiture de nouveaux ou d'occasion Simple, Facile, et Rapide!</h4>
    </div>
</article>
<!--/LOGO & Titles-->

<section class="container white z-depth-1" id="homePageSection">
    <!--Tabs Nav fixed-->
    <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s12 m3 l3"><a href="#test-swipe-1" class="active tabscolor"><i class="tiny material-icons">monetization_on</i><span>Budget</span></a></li>
        <li class="tab col s12 m3 l3"><a href="#test-swipe-2" class="tabscolor"><i class="tiny material-icons">directions_car</i><span>Forms</span></a></li>
        <li class="tab col s12 m3 l3"><a href="#test-swipe-3" class="tabscolor"><i class="tiny material-icons">location_on</i><span>Provinces</span></a></li>
        <li class="tab col s12 m3 l3"><a href="#test-swipe-4" class="tabscolor"><i class="tiny material-icons">clear_all</i><span>Details</span></a></li>
    </ul>
    <!--/Tabs Nav-->

    <div class="row full_tabs">
        <!--Range Prix-->
        <div id="test-swipe-1" class="col s12 m12 s12 range_slider">
            <div class="priceLimit pink-text text-accent-2">
                <span id="slider-margin-value-min"></span> <span>DH - </span>
                <span id="slider-margin-value-max"></span> <span>DH</span>
            </div>
            <div id="slider-margin"></div>
            <div class="minMaxPricce">
                <div class="left">
                    <span class="minPrice">10000</span><span>DH</span>
                </div>
                <div class="right">
                    <span class="maxPrice">300000</span><span>DH</span>
                </div>
            </div>
            <div class="col s12 m12 s12 center btnshrchrslt">
                <a class="waves-effect waves-light btn indigo" id="btnshrchrslt"><i class="fa fa-car right" aria-hidden="true"></i>Chercher</a>
            </div>
        </div>
        <!--Range Prix-->

        <!--Body Style-->
        <div id="test-swipe-2" class="col s12 m12 s12 bodystyle">
            <ul class="col s12 m12 s12">
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/sedan.svg')}}" alt="Sedan" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Sedan</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/coupe.svg')}}" alt="Coupe" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Coupe</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/suv.svg')}}" alt="SUV" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">SUV</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/convertable.svg')}}" alt="Convertable" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Convertable</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/pickup.svg')}}" alt="Pickup" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Pickup</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/minivan.svg')}}" alt="minivan" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Minivan</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/van.svg')}}" alt="Van" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Van</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/micro.svg')}}" alt="Micro" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Micro</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/supercar.svg')}}" alt="supercar" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Supercar</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/minitrunk.svg')}}" alt="minitrunk" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Minitrunk</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/hatchback.svg')}}" alt="Van" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Hatchback</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
                <li class="center col l3 m3 s6">
                    <a href="#!" class="indigo-text">
                                 <img src="{{asset('images/bodystyle/campervan.svg')}}" alt="Micro" class="responsive-img">
                                 <div class="bsinfo">
                                     <span class="bsname">Campervan</span><br>
                                     <span class="bsnumber">(4135)</span>
                                 </div>
                            </a>
                </li>
            </ul>
        </div>
        <!--/Body Style-->

        <!--Map search-->
        <div id="test-swipe-3" class="col s12 m12 s12 map">
            <div id="allcity" class="z-depth-1"><span id="cityname">souss-massa-draa</span></div>
            <svg viewBox="0 0 928 940.632" id="marocMap">
                      <g opacity="0.2">

                        <image overflow="visible" width="859" height="919" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA1sAAAOXCAYAAADSFlvKAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAtwFJREFUeNrsnYly40isZUHJds3/
                        f+10lSVOvIj2PHYWloskZWs5J4KhxZtMSzSPgLwwAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                        AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIBnZmEX
                        AAAAAPzoedbKrgJAtgAAAADge86nEDAADg4AAAAAnEPdGMQLgAMFAAAAAOdME1+zHvx5AIBsAQAA
                        ADzFedLR51Przo8DALIFAAAA8JDnRssNz6nWhlghXQDIFgAAAMBDnxMtO+47UrRWpAsA2QIAAAB4
                        NsFaJj9nVrbWxseQLgBkCwAAAOChJKuSqc7nKnK0Nq4jXADIFgAAAMDdn/eoEuVdnxWuSLRWQbCq
                        KhfCBYBsAQAAANyNZKlS1f2YIltr41KtciFcAMgWAAAAwN1J1sxlR7QUyVKuZ8KFbAEgWwAAAADf
                        do4zI1nd6+r5lSJYa3I/wgWAbAEAAADcxbmN2gY4XlduV7K1OPKTCZS6VcKFbAEgWwAAAAA3O6+Z
                        rWAtgmB1hMsK0cq2a0O4qG4BIFsAAAAA3yZao3B1JMvbToKQWVO2rsntayFeFsgXsgWAbAEAAADc
                        XLTUdsBIpk6CbC1WV7Yy0epeKm2FCBcAsgUAAABwyLlM1DaoVLBOxfWTKF6VbK2JbI3Xr879inAh
                        WwDIFgAAAMBNZKsKsjgFouVdRterKteMaHnbJREyZS0XwgWAbAEAAADcVLQWQbBOwe1T8vFZ2ark
                        arweVbtG8TKjugWAbAEAAAB8s2iNLYCZXJ0L4fIqXZFsrYlsXZzLS/KxqLWQ6hYAsgUAAABw6DlM
                        V7QUgTo7wlXJlypbW0kaBSvaRgmLKlyRdCFbAMgWAAAAQPv8RQnAiCpY50CwouuZdHVk65pI1mdw
                        3at4VRUuQ7gAkC0AAACAmfMXNWUwq2CNYhVtkXxVspW1D3qS9Rlcz6RLCcxAtgCQLQAAAIC2aJnV
                        67I8ycq2N1HAOrI1VrU+A9GKNk+4qpZCQ7gAkC0AAACArmx5lS0vZfCciNZb8zKSrZPlLYRfIvQl
                        SZFg/Qmuq8JFdQvgTnhjFwAAAMCDipY5olW1EHpVq7dh8+6LhGsrcl8/b/v4sqrW+V95qkTNLA/A
                        WO3vitrq7LvVuQ4AyBYAAABAKl9m9Totr5IVbe/Jx6J2wiWQnigUI/r6UbbUbdmIlPd9kCwAZAsA
                        AAAgFauoqmXmV7ai9VieWL1vbr8H4jVWuLI2wrGytQ3DiETNkq//ujxtri+J6G33U3YbAJAtAAAA
                        gFS4qhZCr4L1Plwft6jS1ZGtMRTjf77+j81Vtbbrsk6mVbe8FkKECwDZAgAAAEgly0xfq7WtbEVy
                        9ZFIV9RO6MmWt17rS7S+Klt/rJdguN1Ojmytple3EC4AZAsAAAAQrJZwKaL15gjXx0a0PhzxGitc
                        3pqr0/BYx6rWVrTOO0RrK1zbdsKT/beqVVW3EK7bPE/Zn4BsAQAAwEOf2Gax70oboSda4+YJ17h2
                        K2oj3ErTOLz4j2lrvKrNayf8Er6r+WN+VoTr8DcAlI+zf5EtAAAAgLs9qV2Sj0cthFE4RiZavxLh
                        2la3lMqWN8Q4aju0pmhl7YTb/RG1DiJcx8lV93uwn5EtAAAAgLs86Y0SCE/JFs3UGoXrVyFcmWyd
                        EnEa4967snUxrZ0wm721/RkI1/cIVvW92dfIFgAAAMBdnviqw4wV0VKFy2sl9OLbv06ir4lsRemD
                        mVRtv4fXTugJ1+nfzxl/ViRYryxcyw0+f0W6kC0AAACAez/x9VoKO6J1Nn+9VtRKGMnWGJIxrtna
                        nmR7suXN1VIk62vL1m6N25fwLYUIvKpwLTf+fDOtfRDpQrYAAAAA7uLkuFqndRKF6y2Qra1o/TK/
                        lTCSra2obMMxvmLfqyCNNZCsd6uDMrJ2Qq+6da/CtdzZ823vY1wbUoV0IVsAAAAAP37Cu1jdRhiF
                        Y3SqW9vLsbLlBWRkla1KyiLRulhe3fKGHXeqW9vH+x3CtTzY822PcK0Wr5mzRKyQLmQLAAAA4EdO
                        eJdEvLIZW5loVeu3lMpWFvuetRoqoqWEZFwD0dpyFUTLE65XEnlVuGb2iydaSyFdCBeyBQAAAPAt
                        J8bqWi1Vut4K4RqHHUeVrWyg8dn+N/Y9SgdcC6m6FLK1JqK1TgqXffOJ/vLDzy1rCv5exv28IFzI
                        FgAAAMA9nAQrSYRVG2E0b8sTrnHWVlTZ8mTran4oxvZzVstDMaqqViZbHtcJGfhOoVru4Lm2iOJV
                        fc+1IVrR/ka4kC0AAACAbz/p3TtjaytcUXuhV9n6+n5f399LF9y2EWYfVypb2ce6ojWKniJayw3/
                        vvciXJVcdatbqyBKkWhFw6iPFF9AtgAAAAD+I1bRdWXNVrR2qxKuN+dzxhlbWWUr+rgVonUxrbo1
                        K1tReqEiaXtFae/Hv0O01PtUWV2trlApn0uVC9kCAAAAOPQE2AK5WjYik0nWm8Xx72+BUL0HklUN
                        NN5K1Mn+t7Jlzsevk1uUPtjZr8vwvZQT+k6VaybFb9nxfc16EqLOcZuVrUyevP3rfW7WVjjzOwOy
                        BQAAAAhWegJsiXBl1a1ItEa5iu7zZCtKGbSNxCz/Cpd3crxOiNdqefpgJV5fj/PqiEElbmpV5ZYp
                        f0fJVvX8Mvu7iqoKYbRfF1GMozbOtbE/kDBkCwAAAEA6IT6yhVAJzvDE6i34Ht6Mre1J8pJ8/Gr9
                        CldV1VqL/XgZbl/tv1Uubyjy9vsuVg/l7QhWZy2Uuk5qj2wpoqU+jkiE1YpkR7qqfYV8IVsAAAAA
                        6Ul7J+5dTSQchcqTqky0svlZSjBGR7qyk3XvxD2rBl5E4cpO+meES0356/yM9aDn2iLIljrMeBX+
                        5uPjqII0ov3flS/EC9kCAAAAhEuShiz2PZOus8XrsDz52n5PLxwjayPMTsiVVsGZeVrVXLJRuLZt
                        btdE4tbG3y36O87I10/JViZfHdG6Wl3pUiTOk6YofAXxQrYAAAAAwhPG2RZCZZjxW/LxSM5O9ndF
                        q2ojvA73nYcT7DfLq12raVWtSiCibSt5o3RFP0NZO9RN+DtyiPA68ZzLnl+qbGXVrFFkl+Lv2lnX
                        pXysav1EupAtAAAAeHHp6gpWtXUF6xz8zEi2srawWblSQiyWYr9FsrUdwnwNZEutmCgypQrXrWTL
                        RJlXhCsSrav5SYNe62bVWlglGmaiVVWzkC5kCwAAAF5QuKoqzax0vQmfo4rWyTlhXTbiMkrWuZCu
                        2YrHYnU8/uew3y6JcK0N4erIVCUv3aj1TLQUOazaLavHuwoS7VUPR+HyvseYYKgIVyVamXghXcgW
                        AAAAPLFcWXBi650QR5Hv1XotVbS86pV3e3HEYN0IS3QS/Gb1OqxOa1kmo+M++txcH4cqZ4mHXXmx
                        4u+ofN09yFbVRtgNPlkC8Rr3vZkWVtIRMEu+HulCtgAAAOAFpUsRCC/EolvdikI2RsmKTsTHxz5T
                        3ZpZw1OFhnjbZbON7YPjpZlW2apEK7u9V7hW8XY2U6tT3TJnv8xE+i/2d3thtT4vk67xetVuWEkX
                        woVsAQAAwJMI1q1bCKu5WZFknQLJ807Gtye5p+GEehSvs/Xi3DuiVe2jz0G4zhbP9KoeT6eaVbXn
                        HVXZOlq2lPVamWhdnNuL+YmQSiDKGjyGUbRmYuVXZx8hXcgWAAAAPImA7W0hPE9sVdpgFDKxFGJw
                        Ck5yz47EHNk6WInWKFzKbC/vpLsbn77YfKVrr2jZDtHKZCurao2Vw4v9d71WFk6iSHjUbuh9rFPp
                        osqFbAEAAMATCVZHJKoWQk+4vGrWyeo5WpF0meWhCaOEnIIT5LNpa6JU2fLmjm2v//n38rK59IQr
                        mw/VlS21PU9J/ltEqVLj6o+WrVG0vvbxaSNUF0e+ohbOVRAq9bqaZohwIVsAAADwZIL1HSmEsy2D
                        WeugWbxu64ttO+E2OOMcyII6PHimdfDr8vPf88GsuhWt28oeT1dg1CpXR7bUQczezzqZvi4vk63L
                        5nK7nQbJPRX7PZMm5WNZlWwJ9uFitBUiWwAAAPCUAha1De4JxVASCLffy4tNr9rixt8jqm5tQzNU
                        KVBkYRHkc5StL+FSqluqbFVtnzPCZYXMVuuXOo+5I1tRdH8kWpF0KS2cqyBUmWRdm9LlyZf3HAdk
                        CwAAAO5csCqJ2BP3/iZIV1bZyk78IxnwhsuOorVnXynVLG8//HFk65LIVqeNcDlItrLK1rJTtNbg
                        79d5PJFseS2E2+0zkK6zaS2camKl97VjymG0Hi8TLYQL2QIAAIAHFazOCXinhTATrWpo8WJ15LtZ
                        XNnypCsTrjE0o9p/atXP2yefgXBla4g6slX9/WZkK2vjm5WtGdFazK8iZaI1ro/L9vkouTPSNX79
                        GOu/BEKmCNe4XxEuZAsAAAAeVMT2SJY6vHi8VKRAkSyzuJ3Q7O/QjGo/VGKQ7Ze3zfY/J/p/Nif8
                        Y8VFSSQ0Ubg6aY7dQcKRdKlthF1RjH7etZCtz0G2Ps0PJlGDMhS58pIRt+sGV0e4LPk7V2mFCBey
                        BQAAAHcuVsrJ72wwxpv1AzLUKkt2n1cVOA0nvydBChSpUSX0j/23utVpI9wrW9XtW1W2ssetCpf3
                        c6sWwm0IyXiZydY1kahKtLJZX4v9PfttXJN3LYR2SYRLfR4jWwAAAADfKFjVSe8oQJ30wUq0Oi2E
                        lVx5v2tHuNT9dJRoHSFbatWtU+0yq9dtVUmEnWRH5XeIftbXProEsnWxv9Mf34L9fmnKVlTFirbL
                        IFpb4Rp/r614ja2TrONCtgAAAODBpEs5ce9WtbqthJ11WtnvsO4QrkW49JISqzbCSLT2rNmqgiZO
                        DeGarWx1RKvz2K2QLWW91ihbWVCGum4rahmsBOsrAXGUwki6vp6TWVshwoVsAQAAwB0L1iKc/Fat
                        g2oK4XYdl5di6M3WUk76s99hnRSuaN9lVaNx3/yx/0a+Z8EYn1YHNcxWtvYIV7R/u6I1Ox/MHNny
                        qj+r+XHve2QrWrelVrPGxzMOVf6qcF0sr3QRnIFsAQAAwIMLWCcAIput9WZ63LvSRtitaEX3rQcI
                        VyUmnnh6Ue/ZSb9X2VLXbM22EZ4EyYnmmHWlq/scjAQ6Cse4JLJ1Efb9VRCuTLYuVs/5Om2EaytX
                        F6vbJTNYx4VsAQAAwB0JlnLCfrK8sjU7V6sSraMS8kY5UIRrDfbLpdhPnxYPMlZESxmuO55Yq7I1
                        E46hVLbU2PdOIqEJf+eshfA6IVrRvo8qW1FV6+KI1ljB9J7r1+A5dhWli7ZCZAsAAADuTLD2zNba
                        G4wRCVe1Zis7UT9KuL6uR9/jYnEL4afl67ayFja1hXBmzpZa2bIDZKsSr+pvWFW1MtnKJCcSrusB
                        spVVss6DaG2vL/Z3lWv7HBv357iOa0W4kC0AAAC4b+nyTqirQb3j7Ter12spVa1TIViZeKm/eyVc
                        23CCSGIuiYxuK1yfg2i9NUTrKohWV5yrJMJKdjzxqUSrki1VuBTZqqpK0Vyzbhvh9nomWtuZXttK
                        59fzJGuX3Va5rsM+UNdxvbRwIVsAAADwU4KlDuw9BUKRDTJ+CySrEi517pMlIuDdXpvC9SVdajS8
                        J11eVSMapFtVVY6Urc5srSMrW53naPTcHL/nKEGjOHlyq6yT64iWInifm7+/9+bCp7P/L87f1pzf
                        XxGu8e/wMsKFbAEAAMBPC5gyW6tqIXyzY2ZrVcI1I5VWnHBWwjWe4GdVri/JivZXR7TWG8qWuk5r
                        75qtrmyZ8DOjJEJPfLIqYmegcSZakWyNKYh/kud+9fe4DPtFqXKNla3lFYUL2QIAAICfEKzuiboX
                        iuGtRxorW521Wt7MKmXm0kxIRke4VOn6OvHehh2cNpK1vV6tEYpSCDshE3tFK7u0pnCp0rUU16PK
                        VlZlupq2Ru5iegJhFvE+Sta2qvVnc6kM8B6Fy2NbfTXh7/NSIFsAAADwE4K1JxBDDcc4C/KlVLay
                        30ERyaOEaytd2+qC1563PQHeipYiWZlo3UK27E5lK/p5SkBGtI7q2hAtpbp1CWTrM5AtT7Syaq76
                        PN+GZlydfRWt4Xr66hayBQAAAD8pXWZ5MIaSQvgmCtabI1hb6arWEqkype6HSLiyz9+e3G/Fahm+
                        x/ak/zTcPpueeqeK1ijRqnSZ6cEY1b5fhet7n6uZbEXVLa/KpQRiXJPvH/0sr6r1Z5Ct6o0GRYgv
                        zj5aLa5yra8qXMgWAAAAfLdgdYIxMtHygjDeTK9qqYOMlVS8GRHLTjq9cAFvLdc6CNfV2YfRiXxW
                        PbmFbJlpbYPq/r6laHk/a/y+UUjGNZEqNeY9+ptE67W8BMIv0Xqz/20fzERLnXkW7avrZn90hetp
                        QbYAAADgpwSsI1pR3PtZFKy3QrSyNVqVMO7dD6vzfat2wu3XrsPXXAfR2l6vqiaZZK07/7bZ7Ui4
                        ZmRLud0VLbN4bpe3bsurIKrtm97fJmon9FoTt1UtT7SqkIwqHEZ57l+TffhScfDIFgAAAHynYHkn
                        5UcMMlarWtUarUq4lhvtl240/Pg1Y6VrHUSrqpRU2x7ZMpurZCnr5dYJ8Zp5zq7JZSZDnS36eyiV
                        raiN8E/xOlisX9XNXgOr/V1Vjf4+pBECAAAA3FCwbKdgeQmEalXLO+lUW6g67W1HCVd0Urv9vHEb
                        79/O61qbmyIu2T5aLK9cdVsHO7K1R7iy4cnRvlJaNtV1clVly2slHEMxlPVa1XBp9fm93U9jdSsL
                        hXla+UK2AAAA4Ceky0xfo9WdraVEwHfWrHznPsraq6q2Qivkaw0+ZqZVtNbG3zhbl2e2r5qlnOjv
                        lazqZ2T7TZmN1Vkn50lX1Er41ToYtRGeiuf/LV4DV+fv9zLrtpAtAAAA+C7ByipFnnidE8l6s7nZ
                        WlUoxi1ma83ss73ruBZRqKr7Z4Wlkq1KsGZi9dfm/Xtky4J9OEagZwJWtXKa9VoJLxvR+rr0gjGU
                        gcbqfo+eR9vna/Q3XZM3FJAtAAAAgEnpigQrqm5FrYRvwjZWwE6mpRBmwtiVgNl9VrUVjvJVVcYq
                        oTpKtCrhMtMCMBbx+bROCNgRouXtv5MjXXvXyVVVs0sgXNVcLW8+W7eFMGsxjVoKmbMFAAAAcLBg
                        VTHgHcmqZmtFotV9d3+5g31YtRWOJ7fjvC3vcjyRt0Ky1oP+/h2x6kqt+hj3nthna7c86fLEa0a0
                        zPIWxbGV0Hu+d2ZrKftb3RbneTnuw6etbiFbAAAA8J3SFcmXKlzZbK1KtLpx12bf20LYES7vRDWa
                        yRV9zyppb6+cqDK1NJ83FkjmT8qWJbKkipYJsqVUt7ahGKeJNxeWAwQrE65xPzLUGAAAAGCHYGXr
                        s7wWvtkUQiWBMGsjnFm7snzj/sykqxKtTLCij81IyjLxnOjKlfo568F/r6gq0xElpXplhYB5YRnn
                        jWhd/n1OX5znu/fGRvW8r0JUslCP7eiBqrqFbAEAAABMSlcW935yTgBn12hVla1qkHEWS34P+3Mt
                        7l8COVhNi1DPoub3yFZHVpcbPP8UkepKb9SmWcmSuk6u+pprIFynQbb2DO8e95Ead3+yv2e/ZdUt
                        73n8FBKGbAEAAMCtBCsSrqyFcBSjPdKVrdmKhrpGknWL2Vp79u+a7OfV+Vw1Lj6bi3Sk7OypZN2T
                        9GYVw87auBnhGtsJVbmqWmMroarmhZ0tXqcWVbc6Qo9sAQAAANIViIuyRutk+6tae+ZqLQ+0f1fh
                        Y1GQxh5ZOlLIf0K41h0/c3We30oKpIli5V33KltjxHxUzfq0OnEw+j2VQc3b7TxcbtsJx219hQMh
                        sgUAAAC3OonuVrWq4cWdalYlXfcejNHZ56vw96iqVKt9f/DHkV+zfsPPj/bTOjxvKvGqqohKCIcN
                        krUVmmvxeqvWZ1VVrYv9Pd9r+xobxevUEK6nayVEtgAAAOCWJ9KdqlY1vLgjXNuvySpo9xyMMbO/
                        FfEy21fZuRf5+o7Hvwr7cRHEKwshqQIjolbCbZT/spGai+UhGMrvWg1Q3orWKFzbzz3Z3y2Fnefl
                        w4NsAQAAwC1OlvdUtaK4971VrWi91r0HYxwtXpmcrN/0/HjU5/W4jxZRvCL56nyPLJ1wHG69la5s
                        qPj2+2Utgxdnew+Ey2tlfNlWQmQLAAAAbnVymiUQRumDs6KVVbXUJEKz+w3GuKV43bsUHZ0qeKv9
                        mklTJF/R94hCTrzUw2UjRt7rznvTY5S2SLouiWxd/n2dVcJVtTE+dSshsgUAAABHnwxXVa0qGMNL
                        EpyVLk+4qvjrV/gbfZeYfLfgHf03XJs/byaURB1cbfZ3dWsZpGnZSJc1nttey+B2bdbnRqY+h9fa
                        p2lhNFeL23SfLvId2QIAAICjT26PTCD01mi92/5gDPXd9kesZB0pJus3/IxH3Ecd+Vob+3o2MGT7
                        M06DtFRvJKitg1+vvS/ReheEq1PdqgZqI1sAAAAAzkmeulYrWl/lSdX7ZlMi3zvDjBVRWF7o7wj7
                        5EtdF7fslLDF4gHJ2eOOUgejNVmeaKlvamTVradeu4VsAQAAwBEnnosgX7PztN6b979Z3EIYCZfZ
                        Y83Zgvt7DRyxLm4tBClrwfvCq3BtBescSJcX694ZGn4yrZI8HhvWRCCRLQAAAABHVjoJhIp0KcLl
                        vcs+Xqrzhh45GAN+Xrw68qV+j8WRLi9q/kuctpWkUyB240Dit0K0zpZXkzvjFZSkxocXL2QLAAAA
                        9p5YLoJ4HVHVere8mpWd/I2P45ni3uEx5GtGwrzKmSdaI6fg52wrWV+vwS/p2orWufEam3nNjdXk
                        p123hWwBAADAESeU2YnUyfK5WlWy4Lv567aqE8DsXfaT9eLeAW4tYZVoqLHw49ecnO+/DqJ13lx+
                        vSa9tVmdtZGdytbTgmwBAADA3pNF77YyvLgKxVCrWl5rk7d+ZM8JH+IFP/HaWhvS5TGGUpw292+r
                        W9dBtrbC5SWEZi27p8Zr7ukHHCNbAAAAMHsyWM3TUtsHPcl6t7qqla3XOpsfiJGFYrA+C+759abM
                        4lqD1+ZY3drKlvf6rN4U6VS2Zt/oeAoBQ7YAAADgSPmK1ml4laZqYPG7xXHv7xbP11LeZY+E6pXj
                        3uExXmuZdHmf47X1roFsRQLlBc4oglWt1VIj4B9WvJAtAAAAmBWrUbLM+pUtVbSU9VqRcEUnfS+3
                        fgSeWrqUNw2U12clX9mbGt5rbitf3mPzQjKq3+9hOPF8BQAAgB0nfbMR754oZaKlJhGqc7WyChbt
                        hPBob35kz99FeL1Gr9OsxdATsm5AxtO/vpAtAAAA6J7YKQOMvRO57lqt6Ho0VLVT1TKjqgXPLVzZ
                        mkpvLeOpkK7ociaFMHpsyBYAAABwcmf9qlYlWpV0RZWtrXB1qlpKVQDgEYXLEpHxXqfRfVVFS9mU
                        Ft6nBtkCAACA7slcFfWetSMpkqUEY2RDjI+qaiFe8OhviGT3V9Wuqh14lLBorl6WBDo+zuXZXoPI
                        FgAAAKiipUa9Z9KlRr1H4qUKF1UteOU3RCoBy5JD1fCMqpoVVbSyx6PIIrIFAAAALyNfyhqQTvtg
                        JFpR62AkWlS1gNdpT2wiycpag/dIlxJW8/AgWwAAANA5YTPTot7VNVpV62CUQDgmGnbn/EQnogDP
                        8HqN7oskbKbClb3J0h238LSvQ2QLAAAAVNHaE/WuClfWUugJV9ZCGA0ypqoFr/yaXixPLVTkam84
                        RvTGzdOBbAEAAEBXvsyOGV6cpQ5W4RiqZGWztahqwSu8SRI915U1mNVrfEne3FDXbz01yBYAAAB0
                        TtiUUIyzzbURRtWtLBDDWz+irBVRpRLg2d4oUeVqsbxapVa+1J+VvbGDbAEAAMDTitZMKEYV9V7N
                        0oqqWudEuqqIaSt+N4BXfI13EwqXG0pW1e77cK9XZAsAAABMlJIqFEMNx3hvbtVaLaV9kKoWvPIb
                        JlY8/49oIYxeg9kbIWZP3lKIbAEAAIAnGup6jpmId7WF0KtqVWu1omCMSCABXvX1XVWYokHHVfpg
                        9jUvl0iIbAEAAEAWHKEOLR6F683mqlpvgXSN3+ds/qyfLH2QqhbAXHWrEqpOEmEmXUS/AwAAwMuI
                        VnQipkS8e5WtmbbBKIHQC8VYEuGqfj+AV3ztz2xK1HsVVGPJJbIFAAAALyFae2Zqza7P8sTLG2Cc
                        DTLuvmOOeMEzv7YX4ePZaz8Tp5PV4RlKJevpgjGQLQAAAE7GuqJ1sn2Di9+s3z6oztXKWgij3xHR
                        gld/3UfHALV9OFqj1d2qx/Ow4oVsAQAAvN7JVle0snVaShjGe0O4oqj3KhyjEykN8MqipSSMmukt
                        hdG6LiUgIzsuPcXr9Y3nHQAAwMudbHm3K9Gq1mepYRgf1l+3tRWuKma6akd6qhM5gIOPC0rrcHU9
                        q3ZZInxP+ZqksgUAAPDaoqUmkFXJg1UYxscgWh+BfEWSpbQQnkyr3AG84mu+Oh50pEutbKnJg1n7
                        70NDZQsAAOD1TriUdiK1otWdn5WJVreqRdQ7gH4cWIP7VclSK15HrdlCtgAAAOAhJcusnzh4hGRV
                        opVVtU7DdaLeAY4VsKziNJNMWCUSdl+fkTAiWwAAAHA3oqWmDi6DaGXx7m+FXG23TLQU4SLqHeBY
                        yVKPC1UbYbeKlVXYnwZkCwAA4DUkKzqpUdZozQ4r/gi2TLS8IcYnI+od4EjR2l4qaxw7qYR7Wwe3
                        n7M++g5HtgAAAJ5TtJR3kGeSB2cqWUoioTdX6815DES9A9zuGFIdK1T5qgYX732dPoyIIVsAAADP
                        JVlmetqXkjq4layzzVWyOq2EWftgtWaEUAyAOWHpHkeOEC3ldbn92ENWuZAtAACA55Os6ORGrWiN
                        gRTZ+qyPyW0Urq/vO6YPesOLT4VcUdUC+FuoOl+jVLiyz6mOOWb6YOOHBtkCAAB4Dcky05LDsoj3
                        90G2FKn6JYpWNFcrEi6i3gGOEa8qoKJK+VRaDF/29YhsAQAAPK9kRSc+nTCMcZ3WmyBavwLJyipa
                        71YPMFaHoyJXAD0Bi44vyvHErE4DVSpiyBYAAADcrWSZ6S08e0XrPRGsX45w/TI/NONtkKxthcuL
                        nSfqHeB7jjmdapRyDLJEtJ4aZAsAAOA5JMssfrf5ZHXioLdGK2sffB9E6pcjXB+BcGWDjKPKlrrm
                        I9tPALBPvpTr3uuuU716qtcssgUAAPA8kmWmVbIWR7JOjmRF7YPvgUz9CqRrFK0PQba8UAxvzZb3
                        +wPAPqmqBKkSK5t4TXrHMeZsAQAAwE0E6wjJUmLds9TBKH2wI1uVaI1thKMAKgNTu/sVgGPOXEph
                        R5YiEXup1yWyBQAA8JyS5VWyMslSROt9EKdfgnApCYRK3Hu3fRAActHK0gmrdViRXEWvQ/V7IlsA
                        AADwEJIVVbOqIIxMtKJgjEi4orVab4l0nQNJzBbbd/YxAHz/MexlX6fIFgAAwM+eoFTrHTqSNVPN
                        2iNamXBlKYRe6+A5EEMv5KNqV0K0AHrHpaVxvwnHrO736DzWh1rHhWwBAAB8v2BlctCdl7W3mpWF
                        YSiiFQ0vVtIHR9HyqlrV7B7kCuCxjnus2QIAAICnkayqmnUuJMuTrfdCtLxBxu+BdJ0nhIv2QYCf
                        P7btWbOFbAEAAMCPSVZ3XVbWMpjNz6oqWh+ibEWC9ZFIlpdAWA0vVtLOAOB2x7ZFPJ5Vr82XkS9k
                        CwAA4HaSNbseyyYlq1qbla3PiloHFdl6DyTrw/6OeH83PwzjbNoarUy0EC+A+zgGdirRT/3GCbIF
                        AABwW8maaRW0QLDUAIyT/V3J2ita7w258qpZUShGNMQ4kixEC+D7j3HKjC3lmLhMfhzZAgAAeHHB
                        OkKyOuuyFqtbBrO2wTfzo9gz0XpvCFYViJGJVnedFgD8nIRlx729lassffAhkgmRLQAAgO+VrJng
                        iyplsJM2qIRhvCdCFV33qljv9ncYRyRZnmip67QQMYDvl6zovsXqFmq1vXB99J2FbAEAABwrWUes
                        x8raBcfEvmpt1jmQrEq2ssrVRyBYXiVrbGM8mVbRQrQAfu5YVx3PzOLWZ7PeTLyq8vUlXQ8pX8gW
                        AABAT7KUd2zNtPVYJ+u3C85Ws94CMVLWalVtgpFkRdUsRAvgsUSr87WZVCmhN0siXA8HsgUAANCX
                        rFutx1LbBau1WV41q5KsqnrlfZ0nWt5jOSFaAHd7rFuFz1HEqapwZcfJpwXZAgAAqE/gF1GyOvOx
                        PMFaLG4VHNvvvKTBan2WIlnvhWR5Auety8paBveKFgD8zPFxdjPrtyiqMohsAQAAPKhodSpYqmRl
                        gnUSBEupZimipYrXm/XaBSPJOge/94xoIV8A9y9YXRnzjqcEZAAAACBZuwMvPNFShhNXQRgd0Xoz
                        bT1WVsnK1mWdrB5ajGgB3JdkRa+/owTr6dsJkS0AAECyjpUstU1QaRdURSsLw8hEK1uDlVWzosHE
                        yrqsk/VajRAtgP3HurXxuUtx/5FVrJnX9UNVvJAtAABAsvZLlpIqqM7JOplfLaqqWUpV600UqyzC
                        /eiWQUQL4D6Pi0eI1Uyly5Oyhx1sjGwBAACS5V/vSpaSKni2Xrvgm2lrsxTZ6lxW6YJRJauSrFOx
                        bxEtgNsfB9fgvixxUJUvpVW4qnSNP2u1B561hWwBAMCri1Y266UrWVWrYBXf7lW03kTJerN4jZUi
                        Vu/Bz/Ik62Rx26BywoVoAdz/8bIjWUogkCpwHVFEtgAAAO5Ussz2hV5EYrVYv4J1hGRV1a1KsDzJ
                        ioIvvHVm6rosJQYa0QK4D9GaESz1fiWR8OFBtgAAAMnaF92ursWK5mN11mOdrY5gV6RKXY+lSFa3
                        moVoAdzPcXIVxesI6epK1lMcA5AtAAB4JdGq1mUpoqUKVqdNUK1kqbKVSda5IVlem2AkWUrKYNa6
                        iWgBfL9obS+V1+otKlpZJWuxB5+3hWwBAMAzS5YnWtW6rE7oRSZXJ0Gu9rYLdrZoHZYS4e7NzFLW
                        Y1TrshAtgMd4s6qSLrWFWK1400YIAADwACcIlvwT39suqM7E+k7ByloPI8F6szr0IhOtmXVZSBbA
                        fR0/10Sysra/2aqWNY4NnceMbAEAAHyjaHUXe0fJgnsHD99KsBS5yloEj6xkUc0CeI5jabeNcLZt
                        cCY05+FAtgAA4BVEK5OtznysKFVwdg3WEYKltAdm87FmKlmdeVmIFsB9HCtX4eMzozD2zNqy4rix
                        /dyHHGyMbAEAwLOIVuckYTwZ8ERrrGZ1K1iREKnhFuq6q2w92FmQLE+0ssHEM+9KL+LfEAB+XrxU
                        +TFRvvaGZHhC+DCBGcgWAAC8gmh1qllVouARs7C6wlVVr96cxxgFdkTtgpFgdVsGFdFCsgDu//g6
                        M3NrppKVpcTOiCKyBQAA8A0nCbeSrK5cve+Qra5kddZhnQXBitoFqWYBPM8xU521ZXbcGi6zF5ix
                        hWwBAMAjC1V2MtBdl6XMxaokKxsk3B0yPLMO62R62EU3+KITgBGdKCFZAPcpWuqsrdkhx0cMNn7Y
                        WVvIFgAAvJJoReEX0VysjmC9i/epA4cVyVIES2kV7A4ljkSLahbA8x1nby1alXQx1BgAAOAHTwhm
                        REutZKmS9R7I1bvV7YRRuuBsm2BUyVqakuWd8CBZAM97PM1mbZn118bOxr8/1awtZAsAAB5NrvaI
                        ViZZWRUrqla9N4Qrax08eibWrGSZ1euyEC2A1zjeLoJ83SI0IzvuPFz8O7IFAACPJlo2IVpR+IUS
                        dvFeCJYqX6OsKS2DM1WsaDizKllm8ymDSBbAfR9H1cj3SLJmBUtdFxq90ePNAXuI1kJkCwAAHk20
                        qjSsTLSUdkGvIuVtb8X9VRthJFuzg4ezuVidVkGlTZAADIDnE69osPGe2VqdAcdVYuFDgmwBAMAj
                        ipcS7V7FuGeSNbuNVa2sfTAKvuimClaR7V3JMuulDCJaAM9/vO1IVnU8OlkdyOP9/IcMykC2AADg
                        Ef7ZZwJgwT/ykyNaY0WpI1gfyf3Vuq1OAEaWKrjYfGx71p6DZAGAFaIz00Z4Co5bVbuzd8xaHeG6
                        ewFDtgAA4BFEy4R//JlkZdWsTKw+Etny5CsTrSwE44hUQe+2NSUru45kATzvsVYdbLyIx1+1sqVW
                        4b3H+xDihWwBAMAjiFbWxnKyXmVrFKKPQLI+AvH6sLqNMIp2rwYSj487q2R1Z2N1Ai+WpgQDwGOL
                        ljLYuFvRytaVdkVrGWTqYVoKkS0AAHgU8eq8q5pVtbIq1kdxO5IupaJVSZZSyVLbBc20+VjKbSQL
                        4HWPu0eLlnds80Ssaif0hBHZAgAAmPgnHwmBIlxVy+BHY8uqW50gDC8EY3Y+lk1KVidNEMkCeJ1j
                        7xq8/qvugr1bFZ6xfXxZhevuxAvZAgCAexUt7599t6LlrdWKROtXct/YWhgFY4ytg6NoeZJ1trkB
                        xNk6LLU9kHZBAPBe+9kxZkaysmOeEpKx3bbx9HffSohsAQDAvYqW2sairtGKKlq/HNnyxKtb1do+
                        BlWyvmM9FpIF8NrH2VX8eDd9UJGsrF3aa0W8mh/o8zAR8MgWAADcs2h1/7lXyYMfiWhV0jW2EUbr
                        tDprs7rJXLdaj4VkASBe1efuqWqdAwk7Wz2UPapsrYkk3o2MIVsAAHDPouX9s8/+mXdCMT4G0fpl
                        caXLE66qopWlDWaSdTJtPVYnSRDJAgDlOLya9iZXp5XbGy5fhQJFQ469VkIzAjIAAACmRGtv+2Am
                        Wr+CzROurKrlhWFEbYOKZH1HqyCSBQDbY0EWONFtHYyOf1EbddReuCTi9TAgWwAA8EiidWRFq1Pd
                        itZqKRWtbpR7JVm0CgLAdxyflWNxdFz2jtEn6yWybrer81jWhjQiWwAAgGhZnnoVSdesaI2CNd7v
                        tRCOoRjnQLbGkw4lAKMjWbQKAsAtj89rIV2VaJ3FLWonVNatjse1u2wlRLYAAODeRWsmEEMRrayd
                        sFPVUipaUaT7XsmiVRAAbnWc/k7RUlsJtzL4EKmEyBYAANyDaFkiWuoCbHWeVlTBihIJK9F6M71t
                        8FRIFtHtAPAdx+E1uP5FtW5LWat1tp54VQPer9ZLJUS2AAAA0Ur+mXtrm2baB71gjEq6vATCN8ur
                        WtmA4k47DJIFAD8pYNUxOTouR2u1ZkVrSURLSSW8C/FCtgAA4F5EK/onf6tAjGx4sVfV2srWtqI1
                        tsIsgmwhWQDwSMdupeOgK1lqUMb2Z66CUN1VUAayBQAA9yJalWRtr0dDi1XJyloKvTVa1TqtKnFw
                        JsodyQKAnzpmr8Nl1nnQafXeU+nyqlur3fFAY2QLAADuTbSif94n61W0stbBKt7dE64o5r3bOrhX
                        shAsADhSqKLrmWgpse/n5Li9p6WwaiVci98P2QIAAETLtLVZb4VgqVUtJQhjG/V+VEULyQKAexUw
                        s35CbCVamXBVA46z6lYkWnchXMgWAAA8imgpVa0PcfvlCFYlXVlscaeihWQBwKOJl9lcKqFyDM8+
                        72K9dkKzOBb+R4QL2QIAgFuLlhWipQpXd5ZW1kJYBWF4W1bV8tITzfLWQSQLAO5FqKJWwqMlq5Kv
                        T6sHHW+DMsY3tWwjXJ5gfbtwIVsAAPBd8lUNyMySB2daB7uS9T58f3VocVTVQrIA4JEFzALZ8qpL
                        niDNBmSMbYhjdWsdNq+VcJTGHxMuZAsAAG4hVpbIRlbNynr9uwOLVcn6sL+j3dWhxV3RQrIA4NGO
                        5Wty/FYHG79ZnCSrSNjl38svwbraf6tcS/C4f1y4kC0AAPgu0ZqJDZ4JxPhVXHrJg1k1K4qgV+Zo
                        IVkAcO/H7SxYwixuI7yaNti4kqnxuPv2r1xdhu91Nb/Cdfr3cV7Nbyf8UeFCtgAA4F5E64gQDEW0
                        quTBsyBdiBYAvNoxPtu6wUbRMfdr3db2a67D5rUTjhLYES67pXQhWwAAcO+ipQZidEXrw+JADG+G
                        VhSEoa7TQrIA4BGO56tzrFotTpLN1t1uB9FnwjVul8329X/hS7ZWZ/viGhxjM+G6KcgWAADcQry6
                        opUJVyVYv2yuoqUmDkbC1RUtJAsA7l2wovtGCctaCaPjeke4Lo5wVbK1WlzdqoTrZgKGbAEAwBFy
                        FQmXGhmsBGFUyYPd1sFsrZb3GLOqFqIFAK9wvN8bAx91LXxuLj3Zug6ydd38jK1M2eZjdyFcyBYA
                        ANxCvKJ/yOM/Z6Wa5UnWL/OrWkrr4FjdyhZw720dRLIA4BGP5VUrYVbd8tIIVdF6d0TrYn5Va/u4
                        1HbCSrgOB9kCAICj5CqSDWUR9VvyjzianfVRCFe2RssLxciqWl4ohvK7AwA8mmBF92XDjpWOhc+m
                        aF3Nr2pla7ZGroJwVfsB2QIAgB8VLU86ZttMulUt73YkXVXEe5Y8uCQiiWgBwKvI2PZSiYEfj+8X
                        R7Qu/173KlrvgmhV4nXdCJYnVTdtJ0S2AADgSPFSooHVHv4q4j0SLkWyovTBbvKgKqIAAI8oV5Vo
                        RW+ofQVaeLOztsf5SyJb3jqtTnXLS1C0Qbxu3k6IbAEAwF65UiWraiM8oqJVrdEa12plFa09yYMA
                        AI8sWNF9UQvh1Tm+X+zvitbFES1PtrzWwSr23ZOtL6LQjJu3EyJbAABwpHxZIF+zw4uzuHevotWt
                        ah2dPIh4AcAryNj2GLkOwrWtal3NbyG8mL9Gq9rW5maDcC2JlJFGCAAAdyVWSvpgNXtlFK038ytT
                        kWR9FJta0TpbHIRBIAYAIFf/DceIkglXy1sJr4NoVemDM7Jl5s/fWobHH/2udqR8IVsAAHCUfGXS
                        tRSiVQ0w/mV1VauSrGiAsZo8SCAGALySYKn3ee2EkWhd7e/wC6Wy1a1ojfO31uIYfrPqFrIFAAB7
                        JWsJpGSxv9dqRUMus9bBX4lwKRWtMep9rGaNVa2lKVOIFgC82nHfSyRch8sv4XozPyxjK1/XxrZO
                        itgX23bCKoVwt3whWwAAMPOPNrodVbbOg3BlVa0PccsqWt7g4mqW1uzgYgCAZz7ur8n/g04r4Vsg
                        TaNsXQrB8sIyVPnaPtbV8oTCQ0C2AABg7z/irKqVBWOczW8frNoIveHGo3BlEe/eGq1Z0UK8AODV
                        pMtrIdyKlheK9CVEb5ZXrRTRWq1uNbxuHs/V8mTZm83YQrYAAKDzj7YSjCr6/TQpWsr2HmyZZCkx
                        74gWAMDfMhIFZZzsv+um1kG0VkeaxuHFnnyNbYdK6+HXzzhZv7plRwkYsgUAAEfIl5pEqIRjfFhe
                        3fJmaXlBGOPP89Zozc7SQrQA4BlZC8Fag2Oht25rbCccq1tvgTRFguWJ2Zd4fR3rv+4b//9cLU6X
                        PVywkC0AADhKuKqhxqp0vVu9bssbUhxVtaJZWp5oMUsLAJAs/WPRbEWzOChjbP97G25fEtm6ONe9
                        bTtI+ToI1la4tv+zPIlkzRYAAHy7VCn/ZM30QcZedeu92CLh8loGo3laiBYAIFC3+T+xXa+1rWp5
                        Fa4v0fJi4cdI+O0srrfh9qdznFcqW9/WSohsAQDAEfI1isqpkC5vmPGb5Wu3vEpWFoSRzdKaES0A
                        gGcWppmfPa7dMvNbCreSFYVljNWrrVhtj++fm8toSP3FtFbxTKQYagwAAD8qXDMthFVIhlLhene+
                        xpOtLARjRrSQLwB4ZHna+/iqwcZb6fICM8b/A1fn/8EluHxzhKsa6bFYvSZ3ufXfBNkCAICjBSyb
                        tRVtUWCGd/lWSFb0DziTLEQLAJ5BqtZv+J5r8rMWR7jG/wPbaPZtG+FWsLbVq7fi/0cUeqQI181B
                        tgAAoCNTmWCZ9apbXtvfu3iZrc86WR7vfgoeM6IFAPcgOeudPk71a0fh2la3roN4bdMDt4mxHbny
                        jvEnQbCUVkJkCwAAvlWwluJjnSRCtbLVqWadLH+nM3rMiBYAfIe4rD/0c2/19Wvx/2N8UyuqQJ0c
                        4fIulTfRlHEe42O8meAiWwAAMCNg1XqtTLpGKfIqVW/Bx6qkwW47SUc0AQA6srIe+L1++usq2aqk
                        ywrxqrYluB5VsaL/V2a0EQIAwIMKmDlyo7x76VW4KglTY90ZWgwA3yVZ6w0+9l2fO/s9R/FaLV7L
                        ZVa3ni/mv0mmVK6WA4WKocYAAHBXglUJV6el0KteKXOzOlUtRAsAjhCtdefnHiVi686P790nayJf
                        VgiYidL0nWM5GGoMAAB3J1xKK2HU7qcIV9U22HmXE9ECgD0n3usBn9MRtb1C9V2hG6v9XeFaJx/D
                        csPH+21pkcgWAAAo/+jUoIxqvdZifgvhKbgvW4+l9vlX/fuIFgDMitY68bG18f1vcf8e+VrE/bFN
                        H1yTTdk3a/E5a7CvFdm7uXghWwAA0P0nG7V3qGEZUWhG1haYJQ1GaVTe4+qcQAAAoqWKVkcW1Otd
                        kTpC3GZkywoJum6k6yoI2NFb92+AbAEAwI8LVyRhShphtikx7tm6rEi4ImEEAOjKTKf60r1Uheuo
                        zznyf4H3+4yS5d3e3rcG93nbjLSZ0UYIAAAPJF2R0HSkK1vHVc1U8doF1WHFJnwMABCtvRJVVVn2
                        iNfe20eI1lLspy8putj/DjG+HrB58nU1rV1RkS7SCAEA4G6EK5OrLAJ+Zg1WNcQyEqis0gUAsEe0
                        ospJVlmJPt9srs1wj6R1JSs7jnq/51aSLsV2daRMEbRuxauzL6bFC9kCAIDOP9jqH25nnVZU1apa
                        B6v0wWieCwDAkaKVSZXysUrQbELA9q4F68qW9/8h+r230vQpSNcoYN71SyJiimhZ8Pc8DGQLAABU
                        wcpmn6jR78qaLa9F8GR55UydnUVVCwCOFK3Z7WrHVLtmAjtmhCsTLe9jUSrhKFufmy26fXHkbBQr
                        Vbos+BvuFVFkCwAAbiZlimSp0rUI91cVrGi2FgDALUUra2WrbquVrm7a4VHpe5FsZa3b3rqtrRh9
                        Dtsf5z5PtJTWw+5aLuU5gWwBAMBNZCoTrEi6upKVxbgrLYPZP36qWgAwI1+KaHmC1b1UWxDN5sI1
                        jhAuJYAoEq5o3daXRP0ZROtPIWCjjM20E1rwtz1cvJAtAACoBKuzRmuPZHXlKxM/AICOWFW3M9GK
                        IsuV250q15oIwp45X0fIVreVcKxu/Qm2TLjGqlcnuXA9aL8gWwAAcJiAddZrnex40craCCvJQsAA
                        oCNaVcCFOj9qrObMCFcVHz8jXHtkK/t/MB5vo3lbkWz9FoXLEy1PurJWwmg/HCpfyBYAAERSUrUQ
                        dlIHj6xsLYJwZeu1EC8AUCVMFa1MrJQI85khvap07a1wRW+umWljN6JWwq00jbL1WxSuqoWwCskw
                        u/GQY2QLAAA6/1z3zNOKhhafLY51V2Le1bZHAIBIMip5qUTrIlyqQ33vSbgW8X+Cmd9O6LUSRrL1
                        OUjW7+F2FqLhiVdnH6riiWwBAMBuwVJud9ZnnQexOls8XyuTrqqihVgBwNEiVg3o9YQqmwfVqcSo
                        ARqRHH6nbKnVLS+u3Vu3tRWtUbiOCMhYG397ZAsAAA4VrSgEI/pHW8nVyREtT8Ai4TqJwhX9k6fS
                        BQCWnERHAlIlD0ai9VncVqXriIh4RbzU/w9Kp4MnaGMEfNVKOEpX1FZ4GaSrUy00u+EgY2QLAACs
                        IShm/tqsan3WOZGssyhfagthFAEPAGCJXKjtg1FV6+pIlScC1cwob06U0lZoNi9finDNiFYUlJFF
                        wI/ztn4P2yhan8K+zOaeqSmUyBYAANxMvJR1WlXr4IxoZUEZ3fUCAADq/KSoffBqeRucJ1jZXKgs
                        TW92DdeMdFX7R/1/UB2Pswj4aO3Wn0C2qllbnbh31mwBAMC3y5WZFoSxiJL1NlxGHz8LorW9bsZ6
                        LQDoC5YiWVlFK1qzNYqWMphXFa7ZWVxKS2G0Tzr/G5TgIjMtlXCsbkWR8JVoRcKq/O7IFgAAHC5a
                        0X1qVessiNabs2VVrqqyFZ0QAACC1ZGsqG3wanUwRjSg99P+TtFTKjOjdK2FcO0RrWh/RP8HMuE6
                        Wd5pkMmWOuT4dyJanerWuD/MbljhQrYAAMCTluifq1rNygRLFa6z1W2ElWQhYwCvLViZVGSi5UlB
                        FozxKchCFGFeVbgi4TpCtI5csxVVthbLUx09af1T7MdRVqNK1rUhWTcB2QIAQK6qpEFVtEZ5UkVL
                        bSWshCtrXwGA1xasTLLMelWtjmhFrXCecFUVmm4yYUe0btFGuCR/myhoJFq/pc7YUqpayvMC2QIA
                        gMNFa/ycbttgJlnv1q9sKbO2on/oCBfA60nWKtznrc8y0wcXK6I1rjnKZkaNMebZGqSZkIxKuLL9
                        2p2x1ZUtpZ3QSypURSurAq7f9aRFtgAAQPlHqla1PLl6F4RrFC9l1lYmiwDwGpI1I1iRiGSpg0oC
                        odf65kWYK+l6V9PT9VarK1iVZH13ZataBxfF6EeVLaUK2HmeIFsAALBLrLzrarx7VtF6H+Tq3RGu
                        d5sPy1AGaALA84vWOnm7mqdVVbW8+VnZGqPfwfYnEa4qKONI0equ2epKlxXC5a2FuyRSeylEyxNT
                        S8SLNVsAAHBT0eqmD3baBqPNq3JVa7eyVsLo9yEcA+D5RKsjWatwmUW8XxIBUEVrFK5/rI4yj6pb
                        VejDKv7e3yVb2bE3Etxqn0eDoZXZWorEI1sAAHC4fM20D1Ztg9VWhWVEA44z4UKsAF5HtKrrXdHy
                        Wgir9VnjWiJFtJTqlhcDryQSdn7/jnBEb2wdJVtKCEkmYdl8sky8vqXChWwBALyWWHnX97QPqtUs
                        RbqqWVtVtDAAPKdo7ZWsrALkVYy8E/5ItP44wuWJVtVOqCTsKbO2KrHqCsaSXCrpsNHxeU2E19v/
                        UUhJd9/cVKyQLQAARGsRhatqH+xI1sdwWbUTdmds0UII8FqilSUKmuXrdJSKViRbWSUrWqvVXbuV
                        zdzyhELZB5WozghXNnZDlS0zbb1cFFbiVbKyYIxvr2ohWwAAry1f6uDijmR9TIqWt2ZLqW5lYgkA
                        zytaStR5tXmila3VUkTrt2kBGVkr4czsqJm2wU5lS/nfoYqWObIcrZu7Cttq2jyym4sVsgUA8Lpi
                        5V2PKlmL7QvE+NhsnmhF67bGNVueYJ2MQcYAryxaanvgmpx4Z62DSgvhnirWHtlSKluqaHXEw/vf
                        YYJwqbIV/c2uyd8oEiylskUaIQAAfIt8VdJVhWJ0Wgi9qlbUQhiFY5yKf+BVOyEAPJdojSfUUUXj
                        KkiWl4Z3NX+tVtY2+Nvqqpc3c0uZH9Vdk6RUstQ0QrN6/VYmWlUroTWkuPqbZtUsKlsAAHATsequ
                        0ZoJxPhwtioY493+W9U6BcI1O8sFAJ5HtKo2wUqqoha1SLS8FMJtzPvv5DKrbHkth8pg4yiJMLu8
                        hWwpwqW+8aW2gGZS1Wmv7PzuyBYAALSkq5KsqH1QaRucEa9ovZYS9579jgDwnKKlSpbafpYFMHhr
                        tbzK1pcw/WP1uiyvbXC89KLfZ2TraMFQgpasKVwdsb6avhavI6DIFgAA7P7HaImgKO2Do3S9C3JV
                        tRR+fZ8qGGMULe9xq/sAAJ5DtJTKlSpYl0K01MpWNksray0cRSuSLaVNTmmXO0K2VOGqZKv6uyuy
                        bZOixVBjAAA4XLrU4cUzoRidqpaXRDi2DmYthMo/eAB4btHqJtZ5seGKaGVDjDttg9kQ49n1WrNC
                        0RWNpfi/0rmuPCe6IShmeuvgt4NsAQA8t2BFtztDjI9apzWKllfVyhIIO5HCiBfA40qYKlpKK2Am
                        VZ5kRWu1qjTCr0ulsqWIViccI5KVI0QrO6YeJVqVcGUydavIe2QLAABa/xyjaN7TcH1PRatqJ4yG
                        GFfztbJADKpaAI8pVNVJtSJalURdCpmKrkcthFvZ+jQ/8EKZpZW1DXbma820yN1KtlTJWhrPCTM9
                        CERJY/x20UK2AACeW7Ay4dqKVhb1vpUuRbKq6PdMsrJAjKg6V/3OAPDcopWJUrVVX5dVtqKgDC/e
                        vQrEqAYZV7LVFa4j/nbLcJ93e1a2FHmqKljrvTzpkS0AgOeXrlFMToJoRZWtSrKU9MFoiPERUe+I
                        FsDjitjq3K5Ey5OjiyMwnw0J+7S8spXN28ri3cfEwaptUFmv9VOSsQ7H21U8FquyVf1u3d//x+QL
                        2QIAeE7BioQrCsfozNN6s7+rVp5geemDXijGVrRGAaR9EOB55co7CY5ivyPRiqpPl0BsVAn7NL26
                        lYmXMrhYqWpdLV+r9BNSsVo+P6srVtXnKu2GdyVayBYAwPNLVxaZXlW1POmKRCsSrLdAtKIWQtoH
                        AZ5briLh6rYOVlWnKHxCEbBOdcsTLk++tp9XyVU2W+tuhvXa362DHRnb+5y5e8lCtgAAnlewIuHa
                        I1pqOEY05FiVrKqNUP39AeCxxMsc8RrnaWWi5a2FUpL/vCpTdLsjXdn6rGydVjRHLAvF+G7hWMTv
                        vez8+bMtges9PdmRLQCA55WurKoVSdfMTK2oZbC7TmtMRszi3pErgOcRr2yGkhfrfrE6sEIVHq+6
                        lcmXJ1yXhuBVs7SyAcazce/fKcsdGTvq592lZCFbAADPKVjR7W5VSw3IyOZpjTO1onVamVgp67QQ
                        L4D7FypLRCESr7GV0BsyPIrWb/PXTVVJgFlLYSZcWcXrUkjdTPLgXQ7unZCe5UBRWu/5yY9sAQA8
                        r4BVm5pC6IVjZEmD745kZbO0ovZBc6QL0QJ4LgmLqlqeaEXSlcWvR+L19XUXQYb2hGlU39MTrKv9
                        nTjYEa3vXLP1U4K0PsqTHNkCAHguwcrui0RLWasVSdeb1RHv2TottX3w6H/0APCzklWJV6eF0Jtv
                        pc67UipPs1tUxapaCDuVrZ8UkPUbj8/roz7ZkS0AgOcSrKwdL5uxVbUQZoL15khWVs1SqlrEvAM8
                        n1hVlRg1GCNrIcy2TLi8StTV6kHI0WDk6GuvduxarXuVkZWnPrIFAPAqMha1EC6D/ChJhG8WB2Fk
                        wuWFYWStg2a0DwI8u4RFoRirIyBVZWsrW/80hKuqbF2d69Vl9LFuxPujihYgWwAATyNSmXyoa7VG
                        4XoThOvNjqlqZZvyewPA40lWJl6ecF0C0doK1+9EuP4xfx1XJVtey98oThfhuiJYUcQ7ooVsAQDA
                        HclXFjDhCZdX1VKEKxKtTsT7TPsgogXw+JLlVbPM6qHGXnXLq2yNkrUVrygso1pjdRW2SyJUWRVr
                        dpYWooVsAQDAHciXWb5ma6xqedKkbFHaYCRaM+2DAPCYglV9bCsYnqRkla1MukbhimQrCsZQq1PZ
                        /WtDsu4tcRCQLQAApCoRrZnY9yqV0BOsrIWwEi3aBwFeV8aiyPNRsjLh2gZe/E6Eq1q3pYpWJlIz
                        ctWdpYVoIVsAAPDNgrUUH4vWamUDjc+FZGXR7krMe2d4MaIF8BxyZY5IZHHv1bqtMZEwEi4vKOOz
                        IVtdmboWMpm1UiJayBYAANypgHlx70pAhpdGGIlX9PFslpZSyaJ9EOC5xcoSsahCMsb49yiRUBWu
                        SrbUMAulWqVUspRADEQL2QIAgDuRLmtK19mRrqxl8Gz1Wq2oqnUy2gcBIBeuUXIuFs/biqTrt/nr
                        uKKAjKqqNSNYJgiWGogByBYAANyRcHWrW+fGVgViRBHvp0SgqGoBvJZkRTHnUUuhF2ChSFe2data
                        R4qVGu+OfCFbAADwzSJlgZgsyfUojbCqcHlthN7srLP5FaztfZEIKr8rADy2XEXiUK3buiSyFYVl
                        jOLlre9SWggV0TLTq1Yz1SxEC9kCAIAflq8ocCKrbFUVrpPVUe6qcFVyRVUL4DUkKwuGuDpi0xWu
                        rNrlydgoW2pVa0awoutIFrIFAAAPLmFq/PvJ6oHHShCGEoxBVQvg+QVL+biaSFi1FHrhGZfgshOM
                        MRvTrgRdMKwY2QIAgAcTrFFUIsmKgjIikYrum00fzB4zADy/kFVbJlqKcF0S4Yq2qKplpg0eVq5n
                        QoVoIVsAAPBAwqVIV7adk8uz+euzvEsLHkf1OwDA80lWR7q6la1quwaXVQuhCaI1K1hIFrIFAAB3
                        LFXK5ykthaqEnZ3P9y6jdWORGALAawhW9jlHiFcmUJFwXa1uIRyFSxGq9YB9A8gWAADcmXwtpkvW
                        ybSkwlMhZXvWZ81IJAA8lnBlQjUrWlmbYSZd0bDiaq0WggXIFgDAiwhV9PEluV8Ny1AqXNVasKiS
                        5bU3AgAyFs3bqqRrTW5HX7c6oqUOKZ4RLCQL2QIAgAeWr0WUr061q4pvzypa42NbRHFEvACeS6CU
                        jyuVrUq+VkegMsma2cy0uVgIFiBbAABPKFyKZKnSlQ0mzmLeMwlEpAAQrFsI1xGbWd7SqIoWcgXI
                        FgDAi4vZnk2RLGXIsiFjAMhY8jkzkpS1/UU/w0SRYjYWTHFiFwAAvIRcmcXpgGp1Kwu86LQKIlYA
                        sB70NdEMrEyqstvqz0O0ANkCAHhRsVIHB++tcpnwMQQLAG4lJ+s3PEaSBQHZAgCAULzM6sCKxY4R
                        L+VnZY8XAKB7nPOOY9GxULl9L7IHyBYAADzQyUhW2YqkK5Km6nuRPAgAt5arTJY6rc6dnwWAbAEA
                        gHQSoYjSTOVqJu4dAEA9bh29dY6VAMgWAMALnXgcJVnZOqzq8yphs0TUAIDj11FilQ1cn22HBkC2
                        AABgWrK8kwq1UqWuyeKdYQD4LuGqRlQcUe0CQLYAAEAWIbN6fcMy+T0BAFTJ6oymOBVbNHy9U9Hi
                        GAbIFgAATElW52s7FbAqQAMAIDvmHCFaHQFThrBzDANkCwAApk5qspOJahjyEWLHSQwAxyT7BtHy
                        qlwn08dYcIwCZAsAgJOW9udW7+Sa6ZUtAIDZY1dW2YqqU9l2npCsmXVbHAMB2QIAgCkJU1oJrfk5
                        AABWHGfMesEXW8E6O6KlphRGjwPBAmQLAADckxfvfvUy+n6dZENF7ADgeVgnX/972gcrweqKV3Ys
                        BUC2AACeXKaO+PpMsKoToUrs9ggYALzeMayqaJ2cyyPWbakthIRkALIFAACl9HRPhI58Z5cTFIDn
                        Zw1ur8nneMeJ7eWRojXTPkilC5AtAADYJUBe+0x1AsTicQDYCtQ6+bWddubuGq6T5RWyTuw7ALIF
                        APCiwjSzrkoRKzUggxMTACTL+5h3GX1edXzzhEmZneUlGe5NIIyOgQAub+wCAICXkrNKlliXBQA2
                        IUfVx1dB0rLjjjr4uLs+a+b4tdh8NQ+QLQAAeHEJqyLel4mPAcDrSNZ60PWqjbkjU8obSbyBBMgW
                        AAC0JKojRkrrIQAgWdHHPGkaK1qr+VWu1eL2wzURI/V4V0kWogXIFgAA7Jauaj2WMrgYAJAs5XYk
                        Wv+zXYP710C8LLmfYxYgWwAAcBfSpdy/THwNADy3aHVbBbPK1jW4VISs+nmqNAIgWwAAcJhQeZ9H
                        FQsAvlOyKuEat3X4mCJoo5iNj726f23uK4QOkC0AgBeRrO9cY6WcyGxPXhbnc5fk4wBwX6KlilUk
                        WpYI1CWQrWzrVMi8Y1NWCUOgANkCAICHOYlDpAAeS7T2SFZV0YqqWZfN5t2+Op9fyZi6ASBbAADw
                        IydgnTYhC24jXQCPLVozcmXWax3cytVncPszELJuJUwN5ABAtgAAXpDvbhFUI5nVd4kRL4Dnlayq
                        mhWtzxrlartdkktvO0K4olh6AGQLAAAOOQmLFsYrla3xctnc9tZqIWAA9ytalYRk6YFXy9sHty2B
                        o0z9GS6j7VJsSnthJFWEYQCyBQAAUydc6gnUTGVrRaIAHkq01JALVa4yyVrt73VXl0K2/gjy1a1y
                        dQM0kC9AtgAAYNfJ17pjs0LEluQ2Ygbw/a91mxCsSKSyNVmqaHlthF+S9Xu4/OPIWCVfM9IFgGwB
                        AIArTHagSHVilr2TtsW5RLAAvl+yMtHqJgmqYhVtlwnZ+ro+ytdY8dojWkgWIFsAAC9+8rSIJ1We
                        fM1GM1cnWFX74YJcAdyNaClrs66N40ImWJdCtLz1WqNsbSWrqnIpFa7uG0YAyBYAAAKWrjvI1l14
                        7/ZmJ1pr8D06okWlC+D7JEsRLbWSVW2X5LbXPqjK1la4/nHkq9tKqAqXt08RMEC2AACgPJFaE3Hq
                        DBIdv/bkfN9RBpEqgO8RrW7bYFbJ7oiUepnFvkfrtrbCFVW5Runa20qIYAGyBQAA0toL9V1qdc2D
                        GqschWJQ3QI4XrI6olWlB1YiFV2vPh4NL1aqW1Fb4ez6rWw/ASBbAACQnmRV0cyd1qCLc9/4vU+W
                        z9pCqgBuJ1pq2uA6KVmRMEXx69V9nxZXt7bVqt+mr99S2gg7CasAyBYAwAueZC3DCZTZXKtg54Rp
                        PPE6B6LlnbwolSxEDGBOsmZEK0sR7EjVp/h51ddvRWmsVHkx8KOAea2EWWUrkqxqnwIgWwAALyBa
                        XvCEBSdW0clU54Qqeqd4K11f27LZquoWggVwW8ky09oGs1bBz0COsvtUKfu0PCgjain0rnui5VXp
                        o5bnSr4AkC0AgBcUr0iyIunKBotWJ0jj151Na81BrgBuJ1mZYKlrN7M3X7zq02dwO5Or6r5Py8My
                        PPEat8/iDaKqfTCTWABkCwDgiYUqm7WVJYzNtA+OJ1Hb+98c8Tr9u31Vtk4WtxOOvxsyBjAvWmq0
                        e5YymK2n+ixE6FMQL1W+Ipn7U4hXNWsrmw9GRQuQLQAAkGVsz3ot7yRlPPF5c07MxjbCrXQtRgw8
                        wC0lyxMss37bYFXF+pMIUCZdF1G8VMH7IzyGPWu1mK0FyBYAAPy1BqojWkqb0GdxojRKlydcSgw8
                        ANQn90rLoFl/5EMnhj279GLXI/mpAjU+TWtd7Mid0upM2yAgWwAA8Je0rINwmdXtg5VwZesxKtHa
                        nuBFMfC0EgJokmWWtwxa8KZGNA+vO1g4CqlQWviySnk35bASsOh7R8fBNdl3yt8EANkCAHhyuco+
                        Hr2r/SVG1fqsTLqyePitdEUx8LQSAmii1W0ZrNZndUTrj+VpgH8C+VKqTp25XNnaLu92NKpCaSFc
                        ESxAtgAAIDtZ8064Tua3DV3t75bATmvO19dFbYTZ7C0EC6AvWmra4Oz6rD+WV7N+i9LVka1r87Yi
                        a55keUPdq/ZBpAuQLQAATtD+P4vpwRjZO9vVuq2xldBr14lEa/vYl+Q2AKKVV7O829eGaGVrs0bR
                        +h3I1m/Tq1tdSboI9ymCpYoWYgXIFgAAJ2VSK+FMQEZV3aragKKTm+jEcLF4DRfAq0uWJ1xHVLOu
                        FrcIV8ODfxfilQnXeOy4Wjy7L7uufK4X8a6KFlUtQLYAACA8QfNCJsaZV53Yd/Xd6e67yKvVYRmG
                        hAGilVazroVoXcTX+qfFa7I8wfo9iNZv02ZdRbJ1LaRJ+VgmWTOiBYBsAQCAKydmdWXrawDx2bRU
                        QnWtRGddBDIFiFYuV9Vreg3kwpOsq8XtwKMoRYLlyZZX3eq8SaMKVBZdn1Ww1PVZJBACsgUAAK5c
                        LcHndFoJOwvQlUhldZ4NogWIliZYZnUlqzuouArB+J2IVke2Zo4fmURF963Wm6WFUAGyBQAAu07g
                        tidlX62EVXvOTOqXKlyVPAIgWvpw4tX0GXqKaFUtg4psbb9vd42nWqXKKlfVWlFlbRYSBsgWAAAn
                        bVPVrW064BFVrk5FywrpAkC08oTBjmSpQRif5q+/+i3K1tf9YztiZ51Wpw1QrVxlxx5EC5AtAADY
                        fTJXpRKuxUnb1fptP0oLYXZCQ5ULXl20VuF1myUNZtWscYaWGoShrteqqlrK7KuraWmLWeUqE6xV
                        +JsAIFsAALArBn5tiFNn66yTyBIJARAtbWaW2jJYtQ5mohUFZWRrtaKqlpJaerW6nbISq2pOGaIF
                        yBYAAOw6ufNi4DuzefaGX1RrtTJ5BHhl0boWb4pk7b7ZoGIl3l1ZnzUTirF93DPR7Mr6q6hdeRX/
                        JgDIFgAAyMJSVbaqdRJXq99pnxUrAERLj3Kv2gWrAAw13r0KxzhCtNS2QbNe5aqqYCFZgGwBAMAh
                        chV93KxfkZqpXCFfwOvyGNHKqlmf1lublcW7K7O1qjVaM6JVtQzaxKUiWYgWIFsAAHCohHltNasg
                        SMqaK6QK4DaidSlEa1wfpUiWIlqjbI1f50mWJ1t7AnRmKlZIFiBbAADwbaKlrIFS5UpJ8gLgtdcX
                        La+trpMwGMW5/7F8fZYiW9H3GGUrmqcVSVa3mtWRKiQLkC0AAPh28QKA+xataO7dKFpfUvPHtPAL
                        VbQqwYrWZ6lDi5XY9uwNndnZWEgWIFsAAHA3LI6cbe8bLwHgtqI1Vo66rYJ/CqnKPs/7GV4169Pi
                        gcUzoqUI1TrxNwFAtgAA4MfkahGka/uxcbPg453HAvDKorVtG/TWZf0xLfRi5rrSLjg7RytrHTTT
                        qlmqQCFZgGwBAMDNBUq5vjREqrPNSBSiBc8mXzOila3NUtdiqeuwfguCFQ0qjoIwstTBKmwHwQJk
                        CwAAHkq4luK6IlenzbZsLrvyVbUnIl3wyGJ1C9GqBhJH66+865VojdWyqmWwqmYprYORbCFYgGwB
                        AMDDClgmWafgMvv4SRQw7+cCvJJorTtEK6tieUOIq/lYv61ek5VJVtU2eERFC7kCZAsAAO5OoLyP
                        exUmr3pVCVW0LRPSZcXjBng20RplpBKtrQBlVaxoy2RLWZcVxblHorUmsmWmB2EgWIBsAQDAXctX
                        JDeZZHlidXaunxsC1pUugGcWraqypVSzRtH6Z4dsKYOJs5bBiyBZndZB5AqQLQAAuDux8q5ngqVK
                        1jm4fgqky2s1PJlfWbOGdCFmcK+SFYlXtU4rGlQciVbUKvhPIVyRbHkBGFHwRTY3S20bPCoEAwDZ
                        AgCAu5KvbF1W1CJ4dqQrki/va6oQDUUSESy4d8myQLIi8YpEq1qfFVWtPNH6x/KADHVtlrIuK4t1
                        70S7I1qAbAEAwEOI1ShZZvm6LEWolC2qdHWFC8GCRxKsNbmuDiz+tLyyVQlWVdnKot0r0VIkqxuC
                        gWgBsgUAAA8rWmoMu1rFmhGuTky8J1kIF3y3NO39fjPrtJT2wUy0/hGFSxWto1sGaRsEQLYAAJ5W
                        vqwQLC/wwtvexPuyFkNPuDzJAvgpeTpCsqwpWWN1q2ob9ETrH9PWbHVF62r9lkHaBgGQLQCApxSr
                        bH5VVdWKhOttI1VvwzZb4cpmbgHc44n4KtyvVLW8FsLPYPOkKxOtf0xrIcwGFCtR7t1KFqIFgGwB
                        ADyNaCmDipW0wXMgXdGWSZbSOrgEwoWMIVb39n33VrWiVj2lfbASLaWqNVPR6sS5q7OzEC1AtgAA
                        4CHla5SXbP5VVMVSBGuses1Ut6wQRkCovkvM1h2f6wlHFoqRzdMaBxerkhXJVtQ+WM3N2rMui2oW
                        ALIFAPAUYuVdV8MwzoV07RGtTLKqdkKE6zUFau/3Xb/xZ3baB6t5WhdBtGYrW9k6LWV9lpoyGO0P
                        RAsA2QIAeArRUkIxMunKROvd9BbCSLiUNEJ4DYma/VnrjR/zOvl5narWWM3yRGs2HCOrannrtBTR
                        mp2ZhWgBIFsAAE8nX9Xg4ijePRKs941ovQvSpazdOpm2dsuM9VrPJlfrAZ+33vj7dyVrFK6sqhWt
                        0xpFSx1c3GkfzNZpzbQNIlkAyBYAwFOLlXc9ahusqllV+6AiXVXs+0kULMTqceTqll+/7riv8/j2
                        tipGLYRfsuJFu3sJhFvRqlIIq8HFW9nKkgezxEFaBgGQLQAARMvq9sGlkKyqqhWJliJcM+EYcD+C
                        9RMted79yon8Ovk4jpCtqoUwSh0c2waVAcZeZauKeVcrWmProBnVLABkCwAA+ZICMcbKVlbFUqRL
                        XbtVxb9Hse+0EH6/YN1aTFR5UaVr9oT/yHbGrLI1hmJ41axO3LtS2RpbB//YvoqWGXHuAMgWAMAL
                        iZV3XWkfrKpaXgXrPRGuqrq1/bmj+GXBGIjV9wnWjIzcStzWG1zfK1yzspW1EGZVra0w/Ra3Pxav
                        z4oCMbKKFnHuAMgWAABYr33QW6/1lgiXulVrtqrBxmYkEn63ZO1dC7Xe8OeuhcxY876OfM0ImPcY
                        sxbCTLK6whWt8aoi3rdVrWhQsRnVLABkCwDgRcVKmamVDS72RMsTqY+GbJ0T4VoE4Rp/N1oIjxWs
                        GQm5hbR0q1ndy+q+vcKoPL5ItqKK1m+br2pVouWlH3ZaBzOJRbIAkC0AgKeVrkqyovbBUY689Vkf
                        g2h9BPKlDDfOhhkjU7eXrOoEuVNZ2istMz8rO/GfEbCuNFrjMSuR794srWqNVke0Pk0PxFBSB4/Y
                        ZwCAbAEAPIRgZbc77YOd1sFMtLbXs2HGVey7IV/fKliKNKiysgqPSzlpV6VKuV79Dj8lW2oQRmdt
                        1kw1a2aNFqIFgGwBADy9aEXtg5aIVhaKUbUIVqKVBWOcHcGKhCuTLMRrXrL2CNZM+55ycp5dV0Sr
                        c7sjkLPSVbURfonOlwRtK1vV4GK1ZTCraI2JiHtEC8kCQLYAAF5OvvZUtJT1WtG6raqFMKtsWSJc
                        0JOsGbmZqSJVn9+RvegxZZUiSwRBEa5Hkq2sqjUOK85aBi8NyUK0AJAtAICXFysLROU0IVkzFS2v
                        fXAUrW4K4fj70U6oneQeVcWKRMYmREaVmb2PR9kUebyFcHXaCLMZWjNVraxtcIykR7QAkC0AAHDk
                        S9lmqlof9t9gjCyJUAnFmBEu2CdZewSrkhlFyMz09V7qOqwjNlW2Zgc2V3O2vDTC34lw7Q3BUKQL
                        0QJAtgAAXl6sLBGSjmSNwqWu1YqqWtUQ40yyzOI0QsQrPsE9SrL2VIs6ItNNGqwez9UeS7i6ARn/
                        mNY6OErXLcMwEC0AZAsA4GVEqxoGfPRaLa/a5QlXJHVj/PwSSFYkWq8oXt00v9mAiVmhuZoeVDEj
                        gVY8luukgJnNzZDq/s2iytZ2zVaWRhgJ155o92xfIVoAyBYAAFgd9X7Ueq0P8+dsdQcZb0Ura3dU
                        f99XFa29kqVITHRbkR2lxdAKATRB7K4HCFe3Cjf794tka6xsdVoJM+GqKlq0DgIgWwAAEIhGlTy4
                        FJIVtQ++2VwohlcdGyXLG2QcyRXtg71q1p42vEymruLlHuFSq26VZKkSNlPd2isa3r4ehxors7b+
                        cUSru0aL1EEAZAsAAATRqiRrTyhGZ1PaB6tKFlWt+sRWWYs1u9ZJkaqxIqKKlyJbR1S0ZkSwW93a
                        +/f09qUnW1F1K0sfnK1qWSHviBYAsgUA8DKiFd3XDcWYnamVrdHqJBBm1a1XrmrNVLPUBMGqLfAq
                        yNW1+Fi3ylXJoiJanerbUWEZ3derOmsrqm79KYQrqmqpYRgrogWAbAEAIFpa+6CyVuts+ytao3BF
                        w4vPFq/T8oSx+r1fSbT2zsRSqkCVTHW2SnLMtCrX122lmnUV7tvbTqjIxyL+fcfHGUXAZ8IVidan
                        xYEY1TotRAsA2QIAQLR2ClYkWcparaqq5bUQqoEYr94+OCNas22Cilxditsd6eoOF56RrT3CpQjg
                        3tdud7ixJ1x/EtH6TETLkyzbIZUAgGwBADy1aI33d6TrzeIWwqrC5QmaJ1mnYqN9cJ9kmfXCLrL1
                        V5lUXYpLVbq6laQ94li1Fs60EnbEQ6lurRav3YraCT3xitoHO3O0IqlEtACQLQCAlxOvqrKlDi/u
                        tBB+JNI1rtPKpIv2wWNEq1rTVAVbRBWs7PIyKV4zwRRqHH1W2equIztizZb6vI1+l0sgXH8S8VLT
                        B2faBwEA2QIAeHq5ioRLqWTtmakVSdZY/RqFKwvCyNoIO/vhWSUrkiszveqzR7A8uYru6wrXTEWp
                        I5OKdCnCFYnWbFVrKWSrSib01nB9JpsiWJlMIl4AyBYAwMuJlhqI0Yl4z9ZpzYZhdJMHX7V98Khq
                        VrV+SalcZTKlbOP3OWLtVmcOWEe0VPEb97n3N1uFN0VU2YrWbmXSFQViqBUtS2QS0QJAtgAAXk60
                        IuFSqll7ZmpVLYRb4erGu5u9XvtgR7Q6lZ6v65dEtFSx+mx8zPvenWTC7Hc0m4+rX63fyni0bC3F
                        80CpbkXSFf0tuhHviBYAsgUAgGgFYtJZp9VtHVTWaSlVLTV98NlF66gQDKVdMFtzlcmTcj2rpCit
                        hFfTUwD3xtcfUdXqiMgiXLfi96uEK/o7XK2/TguxAkC2AAAQLUeuTuZXtZRq1h7R2l7ffv+oqrWY
                        nj6IaPXmTHUlqxKp7FKRrUy4ZkMy9q7dqoYhq0OWbyVbFsjWav2Wz6iq6FWyZn8/AEC2AACeXrQ6
                        7YNRtLsyT8uLeq8qW1vh8gIxxt/x2ddpHRmCUc3G8k68I0ny1vx8FqL1aXWL4ey6LWtKVxZ6UVXS
                        OoERMxUgpVo7Ck4lXGpipJq8aIgWALIFAIBo+aJ1cm7PDi3+2GyjaH3Y3wOMo1AMb31W1UKo7o9n
                        Eq1bV7MysbokgvUpClhW4cqSCY8YbtwVrk7U+972wa5sZX//Kk2yGjStpi0CALIFAIBo2VxVqwrC
                        8NoEP5zrUUWrG4phpqUPvqJoKWuUsmpHFaRw1Fat49rTRmg2106YidWeQIxIStbm61h5Tmcpk1U1
                        M9vP10K0qGoBIFsAAIhWIVndNVpjFWusbEVthJFwZaEYUQvhs7cPrsUJdXQZCcN4sp2tx/KqUONc
                        puq2IlvZmi2vpS0SALN91a2sPbAbNW+mtQ+uxet45g2ELH2xSlpUq3nV7wUAyBYAwMuLViZdnVj3
                        j2RTZmtl87RedXjxnrZBZX1WFo6QVbL+BJfRfbOylaURzgZTzLQVHlXN6gz63SNcM+mTnZZJK34v
                        xAsA2QIAQLTsmHj3jwnR6q7XiloIo9/3GTiibTCLdM/WZY2i9SeRrT+BfHVla3tdHWo8yoCJ4jNT
                        5TpKso6obCnPdbXS2W2XrH4fRAsA2QIAeHnRGqtZM4OKs/ZB72NZG6EnWZ5omektg48sXt22waxd
                        LJq1dLU4tl2pYv1xts9AvjLZmq1qVS2Eyr7qSJeJArJXtLLnbke4OlXPrlR2fhcAQLYAAF5OtLoR
                        791qViRaY+T7OdiiUAy1qvWoonVU26AS534tJKuqYGVb1U4YJRF2hxnvqTJ1gzTM5kIwjgqNmBnQ
                        vbeN0vuaSrgA4AFOFgAA4PtESxGsrUT9Grb/s7ncbtuPjdsYCx8FZZwa4vXosrW3bTALQKjWZnnB
                        F5Vc/TaturUVrmjO1lGipVaZOpUu5WO3Fq0Z4VIkvRKwSCa93wfxAkC2AAAQLcvXaG2rTopo/XLk
                        6v84EvZr8/VRW6EnWmf7e31Z1U74bKLVnZ2lhmBka7OqytVv61W3PgXJitIHV1G2zPQq06x8WVNC
                        jhSSRbzPhMcy87vRPgiAbAEAvOTx8kjRyloGI9H6FcjWWNnyWgzHlsJozlaWQjjTXvUMolUlDSqR
                        7lXLoCdWv02vbmXrtNT2wdV67YOVIKgS1hGQW0rWUedMM7+vIVoAyBYAwKseK6N1S3tEK6poqVWt
                        qHXw6+ujmVvVQONnbB+8RdugEoKhrM2KBEsRraqqNVPR6iTkdUSoW/WaEa17lK17/L0AANkCALib
                        Y+SSXHbj3WfWaamiNbYOjmEZ7/Z39HuWSGj2HFUtRbTUtMGv25dAtD4T2cok67coWr8tTyLcE4ah
                        zrqqxGmPdM2IyK3EZBE/vu6QLkWyEC0AZAsA4CmPj1k1y6weVjwjWh9Wtw4eKVpnywcZmz1uVas6
                        cd2bNnhENWsUKVW6lIrWp/3d1njdIVqjjHYlaD3o+ndKyXLw8w/JAkC2AAA4LppezfKqWmebi3b/
                        NcjWrGipyYNZ+6DZY1e1jh5SrES6ZwEYmWj9Tq5H67fUQIxqYPFayJbZ/iG7647bnfVY6zcdG46S
                        /Z/4fQAA2QIAuAvJMsurWVXr4Mn6M7TUUIyOaEUztqL2QbPHD8XYI1pqpPvM3KzfO2XLW6uVDS32
                        HrMqWUfGkc8IWOe+WwrKcoPnIpIFgGwBACBZiWydTK9oKcmDWVVLCcNQRCtLHnyW9sFbDylW2gb3
                        VLOyFsKsfXBmhtZqxwZhHC0Xz9ZWtx70OQCAbAEAPKxojVKRtQ52K1qddVqZcEWipczS8ipaHdG6
                        5/8hR4hW1TY4ilY0nHiMdFcFq1qnpbQOVm2DV4tTFmfmPu2tNK03+NhPnkutBz13AQDZAgB4Gsky
                        09dmRfHuVUWrG/OeSZYS774VrTeL12id7PHXaR3ZNujNzorSBseKliJaXdnK2ga91MGj0wb3zLNa
                        d/z9nl1EECwAZAsA4KUly8yvZHVFa2adViRcH85l1DroVbS85MFHX6d11JDiI9oG/wiipchW1jp4
                        mRCtbH2W3Ui0bvV53/G9lm98rgIAsgUA8JSi1WkZjNoGZ0Xr3f5eo6VundbBqKJ1Cn5HezDZUlLs
                        1LbBKAQjEq1MsjLRqqpZ6hwtJQhDCcGwCdGalYf1Rn/3ezufQqoAOPkAAHhZyTKbaxlcAska12hl
                        gRgzVa0P01oHvTAMb51WNxDj0UXLky0vcTCqZlXrsyLBykRLaR38dH5WFIQx2zYYiVa1f79LLpAW
                        AEC2AAAeSLRmWwYj0coqWlX7oCJbo2gpFa1sltYritbXbS8Y4uu+i/29RmusaGWS1RUtJXUwWpvl
                        zdDaI1pmevgFUgUAgGwBAMc397YyMysSrMXialZU0VLSBz8E0fLWZylrtLaPc0lk61lEq9M26IVg
                        RKJVrc+qkgYV2VJFq4p277QNRpJ1C8FCpgAA2QIAeFLR8tZmzQRg7KloZTO1PpqiNVa03q1uHXyW
                        5MFZ0craBq+ByERpg3uqWZVoedHuUTWrO6TYhuuRbHXkCIkCAEC2AOAFj2lV2+BMAMZRolUJ1/a+
                        I1oHvZbISrTu8X/FXtEaEwfHytBnIFpHVrOUtsE/1h9U7AnW1RGsSLYUcUKsAACQLQDgeHb4uqzx
                        8m1CtN4dyfoI5KoSLa918M16a7QerX3wCNHqxrqPlaZx0HBXsvasz8oGFe9dm/WKM64AAJAtAIAD
                        RasaTLwIkjUKVrVGyxOtj0K0th8bvx7ROka0orRBJdZ9VrLUxMGoolVVs7LZWV3JQrAAAJAtAOA4
                        Ft7uhF90JcurZmWBGJFoVVUsb43W9mdFa7TOiFYoWlUIxsURoD3rstQgjKPaBpWKViRTCBYAALIF
                        ALBLtDLJUtZlnUXJ6shWJlieaHlrtLwwjGcWLbN4fpayNssbCqzOzvKE6x87Lggjmp11seNDMJAs
                        AABkCwCgJVqRbGXhFyf7uzrkrcs6299tfO/JVsnWu+WVLEW0ThYnDz7rLK1Z0eq2DXZCMP4xfYZW
                        J9Y9mp+1t5qFZAEAIFsAALJsVSEYVcugWsmqqlmeaL2bVsGKQjDe7e/1WVnq4DMPLVZmaO2dneUF
                        YcxsfyyfoXVxZKsaUtxZnxVJFaIFAIBsAQAcKlqdeVl7JCuSp6qClaUNIlrHiNZWcKK2waya9Y/d
                        NggjEq29aYNIFgAAsgUA8G2idTZtXlZXsjLRere8VTALwciCMJ5NtEYp8NZpfd2XDSq+CKJVrc1S
                        Wwaz1kFPsrzWwU7aoCWyhWgBACBbAACHiZaZvj5rbBt8M7+a9T4hWZlMfQTXo3bBKATjFUQrEods
                        jdaXiFRBGFnLYCZa/xT3Veuz/ljcNjgTgkE1CwAA2QIAuBvRitZmZZWsam6WKlpZ6IUiWW/mR9Lv
                        Ea17/j/gtRBW7YNVRUsRraqKNZM4qM7P6oZgkDQIAIBsAQDcrWh1JOujEKcPQcQy0fIkS2kbfEbR
                        MtOrWuoaLTVp0BMqT7SUitbe9Vl7QzCQLAAAZAsA4NtFK2oXVOZkvTeuR3JVhV94ARjZDK1KtLL9
                        +GiyVVW11PVZUTXrH/FSnaFViZbXNkgIBgAAsgUA8LCipQRffExeKpLlxbgrSYNn8yPsn1m0zOIW
                        Qq+qlbUORqLlCVV0XY12n52fNf5uZr0QDCQLAADZAgCYOj5lw4qVxMFZyfpI7ldFy6uieUOTOy2D
                        zyhakUxU6YNj+6DXOpi1DP7jbL+d21lV63OHaBGCAQCAbAEA/KhoRZI1K1pZu6C3vVs+jLgbfKGk
                        DJ6H3y+SrGcRrUq2lPbBiyBamWT9k8hX1j5YxbqPrYNK2yAhGAAAyBYAwI+L1mJ6EEZXsn41ZMtr
                        GVQkK6tmnZzf9VlFy5OtqIXQk60vwfHWaEWi9X+D616Va2wd/D0hWlHboFle1fKkCskCAEC2AAAO
                        Ey1zpKMaVJzNyqoEq6pyVQOJvRlenmRVce6nRDafSbQi2RpbCD3ZGgMxxnVaXjXr/xaX0Xqtzhqt
                        MXEwm59llrcPIloAAA/EG7sAAB5QtKr2wSgQIxOtX871X4VsRVWtbox7JFmZYL2KaFVyEYVlRBUv
                        JTBDGWYcxbtvf1YW675nfRaSBQCAbAEA3Ey0ToFoKcOKR9GKJOuXxVWubJ1WJVqZZHlVrFMgV48+
                        R2uvkHmVIE+0vNCMSLiqYcVeVWu2oqVEuyNaAADIFgDAt4rWIorW2eqK1q9Esn6ZVtnyqlpe22BH
                        sqp1WYhWvlXBGZFwjZWu6LYnW2pFaxQuM9oGAQCQLQCAOxGtkyBcUetgtjbr17BF7YReVSsSrWht
                        ljKY+OT87vaCorUWspGJVjbk2Bt03N2Uila2PotYdwAAZAsA4FtEa1x3lIlWJ+I9qmyNbYK/CuHy
                        ZCtbo1UFYMyEX7xqRSsSE6Wy5QlXtHUFS0kdrFoHK6FEsgAAkC0AgGnJiiRidp3W2fTUwV/FFslW
                        FIix/flKAIZXrTNBtl5JtCL5skSyKuGK2gkj8VIEKxtWrIgW1SwAAGQLAOAmkmVWz9KqIt47FS11
                        82ZsZYEYysysqpKlVLFeWbQq4fJES5Guquo1K1qszwIAQLYAAO5CsszqocWVaKlztNTKVlXVqmZn
                        qW2DZnWc+6sFYVT3VS2FXirhNRClz0C+LoVkRVKXzdDKRAvJAgBAtgAA2oIVCYTZ96zR8iRLXa9V
                        rdPyWgertkEzqlmzEhYNPa7WbUWiNQrXxRGuSLQ6c7TMWJ8FAIBsAQAcKFiVZI3S0Yl4zyQrq2Jl
                        wuXN1srmaXUqWrNR7ojWvHRlrYUXYbsmYjUrWrQNAgAgWwAAhwlWJVlmcUVrsb/DJirRUkIxolla
                        VfpgtE5LTRs0R7gi0Vom9vujC9TR0hWFZlwc6RqvZy2I0dwsgjAAAADZAoCbCFYmC0rbYNY+qK7T
                        qtZlKVWtaKZWVdE6D4/7yACMZ5asrohFLXndytY1ECtPurJtVrSQLAAAZAsAoCVYkTgoQRiqaG3j
                        3d9MC8PoVrUy0coqWkqkuyqliFYtX17SnyJe46W6eRUzT7AM0QIAAGQLAGZP6hXBMqtbBmdFqwrC
                        yEIvfgUCliUPZhHvyhqtTDyRrOPkq5Kua3AZSZRSvVIrW4gWAACyBQDI1ZRgmdVVLBMkK1qjlbUP
                        fgyy9cu0cIxsYHG1RmusalWJg5FkRX8DJGtOuLqthWNla49kRY8B0QIAQLYAALGSPn9P8IUJknWy
                        OBAjqmp9idKvCcEaRW02eTBrHYxEi2rWPpmalawjNu9nr4VUIVoAAMgWALyoWM3IVSQTSqR7Nker
                        qmgpVa1fhXBlVa2qouWJlto6iGT9nKTdWroyuUK0AACQLQB4IbFS5SoShWpeliVytVe03gLRqgYW
                        Z+EZXkXrHGxHixaSdaxUmemtfnvXYWUthAAAgGwBwIvIVaeaooRdeJLlCZbaNhit04pES6lqZUEZ
                        M+u0ZgYWz+x/2C9dHSGLPm6WtwhGlSvWaQEAALIF8MSCNStWXdFS2wU9wRqDMKrkwWymlrpeq6po
                        qWEYR4gWkvWzEhat8YqkLJKzGeEDAABkCwAeRLKWnffPVLFUwZqtZs1UtarqljdHSwnCOO0QLSTr
                        ceSr+3XIFAAAIFsALyJYy+TndeXqSMnaI1rVEONMsryq1tsgXDNrtBCt5xCubvUK8QIAAGQL4Akk
                        aznw9kwFSxGtMQBDqWZ5a7Sq9sFKtjLBUqpab6ZFu6uihWQBAAAgWwBwZ5KlCpMiU5EMRFJl1ksX
                        jKpY0dqsTkVrRraiWVrby07r4CmRTEQLAAAAkC2ABxGt5YDrS+Nji922klVVsyrRiloI380fTFxJ
                        ltc6ePQsLUQLAAAA2QKAB5Ks2TVWRwpWZ15WVMlSWwezqpYiXaNgza7RQrQAAAAA2QJ4UMnaI1R7
                        75utYs2KVlTRitZpjZeeaEXVK6+Spa7RqqpZiNZzvx4BAACQLYAnOLE7os3PEnFSxMp2CFYWgBFV
                        s96sV9WqqlueXGWVrFG0qnj3U7GvOXl/rDc0qtcjf0MAAEC2AJ5ItJbgZG9GkKL7u9HtSyIdJ+tX
                        s06BYFVrtd4Cccq2N8tbBr2KVlTZiqpZnZN8OO41tDQ+rv6t+LsBAACyBfDkojXb3neLrRN8MdM2
                        2BGtSJwi+fKqWO+BZEWilUlqJMlwv6+56O/YETkAAABkC+ABREuJXe8KUTUD6tT8Xt1KlhKC0W0f
                        zNZuReu5ooTBLAjjqKHFnKj/7GtMbR1UP77s+FoAAABkC+DORGtPCuDSuF7dVtZkeZKSSVYkWzPC
                        ld33HgjWmyBZiNZrvR6jdXeqZI2v35XdCwAAyBbAfZ307Un/WywPc6guZyVLDcGoWge71S11iypo
                        4+NEtF7nTQ4TZEq5n1ZDAABAtgDu9IRPbRlUU/+WQhpmxawb5z4T715Vt86FSEVy5UnWOZDDTEIR
                        rZ97zawHfi9FkpbJ1zMAAACyBXCHomWBaM2sk1K2pSljapy7uk4rkqFIts6FgJ0LyVLWZSnVLETr
                        vkVMrU5lg8Kr2Xb8jQEAANkCeDDRqqpZnda9SCTOgjyplbKObCmVLWX9VhamUcnVudg/SjWL1MHH
                        eY0tE1+rhNQAAAAgWwAPclI4I1qR3ETXKwFTql6zrYNqC2GVTJhdz4IuqnbBjmQposXJ+P29vhbx
                        ddf9O1LhAgAAZAvgzk7+9ojWTNWoko5TISC3FK2uhHUqV5VgqeEghmg9/RsdmUDdoo2QhEIAAEC2
                        AG4kWjYhWpXAVFUedb2SWvX6LuGakciz+PtUEfiI1vO9BqsgDDW4pvO9/x97d6LbRq41apSS7eT9
                        H7c7sXXxAx1cnQr3wJJsa1gLEJI4k9OtAPWF5CYAiC34pvBaDa1opScaHlHFV7Xyc8k5se6AjNXv
                        q7ZJds6ldbYLRoEltB7r7+He+7RWgw4AxBZ8QVzNHs5nwdVZyereK7UyNKIaqNFZ2eqeJXtpfH/0
                        a3VCsRprv7qSJbRu5+/U6YKfW/09vPT/r+gCQGzBF4fWLLiiyNqGTBVZb8HXswt9Z7HTCaxOlL2M
                        te2FnaBaWYGrLmz+8+3RjC2hdd9//w47/p5Gf1fHMAIeALEFNx1e2da1WWRtQ2sbV2+bj78F4bWy
                        pXBlW+HLWBtD35mU2P1cupcyV1sFq21lQuv+g6v6x4/RiCgj4AEQW3CDcdWNrNkEwpdJaL0lr22E
                        zVa5/vx6ncESewZndH+91d8rO39VDbzYs11QaN3n373Dzh/zGRdUmz4IgNiCL4yvMfKBGNEQjG1I
                        /dhE1o8kvKoVrmtOJ9x79uvPj6suWr40sETWcwZW9eM6l45f8nsDgNiCK4dVtH0wC65jEFuz0Dr/
                        8kcQXdtY68RWZ9veJa/DWDt3dQz+ex3G+lTBQ+P/k9B67kjbOwYeAMQWfHFoZSPeZ9GRRdYssLav
                        LLhm2wmr2Do0Q2nl49V2wG5cRRcQV8MMuqtZHqrv9+/fnp+3skLmvQGA2IIbe/irzmlFWwhfg9D6
                        2Qyu7XbC89WtaEhFtY2v+/UspjrbAldXsDrbA7tnczxMP87fwT13aR0u/H2d1wJAbMEnhFVn+2C2
                        dbBa2ToPrSi4qtWt7l1bq6HU/THRSPbs22Psu4B4ZcugyHr8f/To/sPIV3xeYgxAbAFXiK9oC9xK
                        aL0FoTULr9nqVhZb2fbB7irUyvevrFrtmSZ4aMawyHrcv3/VxcXdM1t7fz8AEFvwCWE1giiYrRht
                        Y6cajDFb2fo55itcf35OtI0w20K4Elh7vr0nri5ZxRJarP79nb33AEBswTc/tHUiYmX6YDQQ4+ck
                        tn6O/srWLLaiFa1LIyobZrE3rrqRdWg+aOPvLwCILbjhB7TsX8a3ofUy8m2Es0uLs+CabSWcxdb2
                        98uGYVRBdVwIzCqoLr10WGTR/Tvr/z8AYgvuNLq6QzGqVa3ZFsJsGuF5cJ2vbEX3bEXntFanAY4r
                        RdW1hlyILC79RxMAEFtwYw9o1arWceT3anUuMc7ObG3ja7ayla1qrQ6vGGNtC+AlK1eXrGJ5mOZa
                        f9+9jwAQW/CN0RXFxzZkXsb69sHsMuNs9PufX/NlE1zZmPdLtgCOsX9y4OrZK6tYfNU/pgCA2IJv
                        ehCrLjBe2UKYjX1fCa3tJMJqC2EUW1FgrUZV9X3XCCwPyf5eHj7hxwKA2IIbedBbPat1HlzXCKxo
                        EmG0hbBa0erGVDeqPiOwRNZz/mOHS4EBEFvwoA96WRhE2wdn0dVZ1aq2FlahFV1kPFvZGo3QGjs+
                        thpTAouv/vsMAGILbvBhrbOq1TmvNZtEGK10ZYE1m0K4sqq1N7K64XTJ5cIejrmnAPu/X8sKHABi
                        C67wQFatas3u1opWtmYXG0ff3v7Y7YrW7KzWbMR7J7KquFoNKYHFPcUTAIgt+KKHttVVrW1wvY78
                        zNYsrH4EP2YWbSsTCKPQ2nOv1TWmBHpA5hp/X72PABBbcOfRNQuvzqrWJWe2ZtsFZ7H1MvJVrSgY
                        o7hcDaPDhf9dQXgBILbgyQIrW9WabdObrWpVWwhfk8iKQis6n1Wd1Yoi6zMvEPbwCwCILaAMhNmK
                        Vmfseye0Xke8qpVtG4wmEH7FipbA4pH+fgOA2IIvegA7JJEVbSHcBtb2y86K1usktF4acZVdXhxF
                        1t5x7B5eAQDEFlwUDt0LjKNVrfPQiqYQzs5wvSavl8nvFUVWZ+rgaiwJKwAAsQW7A2J1VSta3arG
                        vr+OfFUr2zK4HYQRndUaY33roLACABBb8KkBdkiCq4qslySwqsjK7tDKtg5WFxd3IkpgAQCILfiU
                        wIqia3avVrS6VU0hzAZmZMMvslWtwySsZt8WWAAAYgu+JbAORbisbCF8GfH9WtkFxbMVrZeRD8E4
                        Jp97FpIAAIgt+NLomgXWnrNa3XNb21Wt1/H3EIxs++AY8UrWJQMxAABYcPSfAMIIiQImi6zjqIdi
                        ZME1C7TqwuLojNYY8RRCoQUAILbgW6Mriq9o7Pt5cL3uiK6VVa3Z9MFs+6DQAgAQW/CtgdUZ9z4b
                        jLFnC2EWWrMzWi9jPgwjCqiDuAIAEFtwawGWbR/MRr7PVqdWAiuaRDhbxepsJaziEgAAsQWfHlhR
                        dEVbCGfnqTqrWtUkwiyyLlnVEloAAGILviWwDo1XdFZrdTDGy+TLLLSusaoFAIDYgm+Nru3HupcY
                        d6LrrQiv2UpZNASj+tytagEAiC349sCK7qW65BLjl5FPGszOaFVbCKPPDwAAsQU3GWBZyHSCa3UC
                        YTQYo7q8OIorq1oAAGILbiawoui6ZFWre2ZrT2A5qwUAILbgLgJr72CMa65qrQ7IsKoFACC24G6i
                        axYq0WCMztj31VWt1e2DVrUAAMQW3Gxg7R2MkY1974TX7MfPgqu7bTCbTggAgNiCbwuwlcEY2eTB
                        l9HbKjiLrNmY91l4zT7vTlgCACC24EsCK4quvee1qpWszt1a1RbCEUSXuAIAEFtwM4F1rcEY2Sva
                        Ppitam3v1upeZlzFJAAAYgs+NbS+cjBGFF8vwa+VhdZIgktcAQCILbiZ+Mqm+33GYIzuqlYWWlkk
                        Ci8AALEFXx5WVYhcI7SqwRhRcK1OITTuHQBAbMFNhlb3rFZnCuHKYIxoZWsWWMdGXNlOCAAgtuDb
                        Qyv6WLSatV3ZetnxiiIrC65oK+EYVrUAAMQW3GBoHYLAmgVXdyDGysXF5x87jv7kwZVLjEUYAIDY
                        gm8JrSi4qjNax9Eb6V5FV7a6Fa1mDTEFACC24B5Ca7uidWy8qq2Cs0EY3cEY1SXG2URC8QUAcKNe
                        /SfggSMrC63Zlr2VyKpWtKozW1lgrQzGqD4GAMA3sbLFs4bW6mj36mxW9sru1jIYAwDgQVnZ4hFD
                        qzPqfc+q1t7Q2g7GWL3A2GAMAACxBd8aWSMJlVlo7R2EsX29FaFVDcXYE1wAAIgt+NLImgXWKELr
                        ku2Cb2dfvo3eFMLz33d7r9eewRhCDABAbMGnhlbnjNYstM6/3g2styC0slWubFWrc6+WsAIAEFvw
                        pZE1C6wx4nNa29DqrGq9Fa/XJLjOtxPOIm/7eRmMAQAgtuCmImsWWNkQjPPY6qxirQRXdW4rOq81
                        +zON5OMiDABAbMHFoZWdWepMHcxWtLqh9aMRXN0thNFkRBEFACC24Esia4x8VadazYrOaZ2vOlWB
                        9eMstH5MPpZFV3anVnRma4z5FkIRBgAgtuCqkTULrihMZqtZ0fTBaDXrR/Has50wWt3Kgqv73wYA
                        ALEFV4msMdZWs1ZCqxNbVXx1V7VmwSWmAADEFnxqaHXPZXVCa3tOK7ova7tV8GcztH6M+MxWFF3V
                        9sEx3K0FACC24IqRNQuuKEiOo38+K1rVOt/6dx5PP8++PH/NIizaTphNIYyiq/PfCgAAsQVLodU9
                        lxUF1mESWdsVrZWBGD8nYRWtdkUTCV8mn8/szzAa4QUAgNiCpchaCazu2azOhcWzse5RbG3D6+eY
                        byWMVrWyla1uhA4RBgAgtqAbWp0tg7PVoJVtg1VozWLr56i3E0ahtV3Z6o58t6oFACC24OLImgXW
                        GPkqVrSSdUwiqxNa0QTCKLiy0IqmEVYj36sYBQBAbEEZWrNJg9feMhid0XpthlYUXLMthJeE1uy/
                        wcp/UwAAxBZCK/yyCqzOOPcssqLY2m4dfGuEVnbHVhVaqxMIxRXP7vTfCwDEFiyE1p5zWS+jv2Xw
                        Zfy92lSd05qtcs3GvO89r3UY9Zmtlf+uwP4oE3EAiC3uOrSy81nXGOW+ZzVrNbZ+JHE1u8y4mkJY
                        RZZVLfj68AIAscXDhla0ZbC7kjWLrCq0OrGVrWLNtg/O7tbqbh88JKElvHiWSLo0qEQWAGKLp4yw
                        1XNZ1cXEnS2D3dB6a8TV7HxWtqq1jcXD2Ld9EITX5/2a4gwAscXdBNUssDqhtTrGvbOStRJaWXxF
                        K1lvk9jrDMaIVrisaiGuPifABBUAYounCa3szqzoTNZrElpRYHXOaUWrVtEq1lsQeVVkVXdrCS1E
                        1t8fi77vlHx7T3CdPvHPAoDYgquHVxVa0dmsznTB1e2CWXB1V7CqyHod862DVWjZQujhlX3vhSy6
                        TkmIeU8BILa4u7iKgqvaPjg7lzU7k5UNvVgJrR/Jx15HvlXwbRJ/2RmtTmhl/y0fOcI88FK9L7Jg
                        qqLLewwAscVDh1cWWbPQqs5kdc9idQOrcxYrmjL4Ogms1a2Dz3ZOy4MvK++PU/Lx7Ws0ouy0GGJG
                        xwMgtri5uIoiq7ttsIqs7dd/jH0rWG/Jr7v9fV8aoXX+ZzoIravElQdd0XWaBFYnjKIgq7Yhet8B
                        ILa4m/gak/jKpg2u3pEVTQysvl2Nbs8mDGahNQusZwyt0yf9WB43qrLv/4yVrWrbofclAGKLmwqr
                        7vbBaKR7J7KiEe0/xv6hF9FWwWyU+3Yla/tnOwitXd/vAVdsjSKAupFVrWzNzoJ5/wEgtrjp6DoU
                        r+jS4m1wVatY269n92R1V7OiyHodf5/Jys5mrdyh9UihtRpRpx2/zrUe4rmv91MWW3tf0e+x8v71
                        PgNAbPHpgZWFwiy2qu2Ds8iaxdWPSWxdElqze7xWpwweg8h81tA6LX57z0MvjxtZndD6+O8VfXs1
                        vmbfFlcAiC1uIroORWBVgzG2wfWjeP0c8YpXZ9tgNvhiNo5+FllRYD1zaK1E1sr3ia/nC64otj42
                        YZVFVze+vLcAEFvcXGBF3462EGah9ZaE1s/g69kK154LiavImq1iVRcVHxb+2z1SaFVfPy3+PLEl
                        tmaxNXudNqH1cUGAdQZwWPkCQGzx6QE2i41qOEY1EOM8rqIvV1a1si2D3fuystUsoTUPqs73rUQY
                        jxtY1XtjG1bvwcfegwjrhFYUe9f+OwOA2IIwEDrntGYXGB9HPIEwC62fSWjNguuSS4mr+7KOQViO
                        UW8bfKbQ6oTVSnx5aBVb59H0Hryq6JqtgnW3GHpvAiC2+NL4qla1osEY0TbC2RbCKLZ+jvmAjO1q
                        WbWadZx8vTP8ogosoRUHVXcgQWd1y0Pu44VX9p6ZrWJV0fXRCK+P0V/hMjIeALHFp0ZWJ766kwiz
                        bYSzs1vn4RVtIcxWtC45lzUasSW0et9enQrX+Tx4ztj6/d/rffLlezO4ume3AEBs8emBtXcSYXaR
                        cXSv1s8gtH6Ov6cRzrYPZhcTV6G1Z8qg0OoF1sfCj48exnms91UVXNuhF9vY+h2E1za43kc81XDl
                        XBcAiC0+NcCqS42rLYTVBcbZ6lZ0Vus1ia3tlsFDI7TGeM7VrM5D8uqlsx+N4OqsMHjgFVvbbYT/
                        F1a/gvDaRli2ypXd2TU27/c9fz4AxBakgZV9LFrVyoZjROe23hqhFU0g7F5OfK3hF48aWp27sFbD
                        Kvqyiq8xetsKuf/oqrYRnjbRdB5Tv85es9DarnjNwmslsrwHARBbXDWwqpWfzoCMbBthdbFxdJFx
                        dE6rezarO8q9iiyhlYdVtIJwyXhuHi+0VmLrPYitKrqyiYWXTCYEALHFxdE1mqH1kryi0IqCKvt6
                        dk5rJbS2kbUSWocneB+shNYssqppcKvnZjzoPlZszSImutj4Tyidn9H6lQRXFV6r4+EBQGzxacGV
                        ndPKVreqbYRRUM22DWb3ac22Dna2DY7xvKtZ0UNw9fAbhdbs9V58uzusIHpY9xD8OO+9bGVrO9Z9
                        tpXw3yK4zrcUduN/TzwCILagHRDVvVqrd2zNxr9nK17RGa23EZ/T2n5+3SmDndA6PNl7IjrHEoVW
                        dOfRe/L9lwSXB97Hjq3srq3ZVsJ/z16dLYXvY9/Fx7YUAiC2uHp0jSS6uqGV3beV3Z3VvUtrG1md
                        IRidyHqW0Mqi5jQJro8krmbfzkZyd87QeMh9vMgao3/XVjQCfhtb25WuKLr2nN/y3gNAbHFxYEVn
                        mDqXGR83oTW71HgbXLMthq8jv7j4OHpTB7tbBjuh+WwPxN0R71FYRasJ0QW0nXNcHnofP7hWtxL+
                        3gRWFlzvSXB1J2NGfw7vSQCxBe3oumQC4cuO4MruznpNfv3t9sHzz2+MeutgFlSPHlor56Cy7V0f
                        k8CqvqyGFVSrDB5sH+89191KOBuU8bsIrW1wrYS+9xwAYotPDa7VwRizyHotgmu2yrUNrehOr8OY
                        r2qNYQDGJQ/BY8RbCDvnabZbt6qR3CsrDR5+H+89d8l7rRNc1VbC7e85homEAIgtrhhX28gaozcY
                        o7uq9ZqE1evk57wUr2r7oMja/xC8MhwjCq3ZQ+6vzY/LgsuwjOeKrmwCZrW6Fd29FW0lzFZWs/Na
                        4gsAscVVo2sk0bV3QEZ3+EU1BGM2DENoXf7Qmz1gRg++2dau7O6j7OH3FDz8ds/Q8DjB9TH6K6m/
                        JuGVbSXce9eW9xoAYoulwMou/Y22E74UoRXF18uoV7OOk99j9cJikbUWJbOg6QRXNiWuunR2ewfS
                        3tUt7uu9thJb3XOCs+DK3m8rgzIu/TMCILYQXWl8Rata2zDaBtXsEuKV7YOzM1rRGbLRDC0rWfGD
                        4mz74HYL4SmIrdkdSP8W4ZU9/GarWx5yHyu8Vle3quD6vRhap1Gvpnq/ASC22BVYK4MxrrWFMDub
                        dUwia/uxWSBWEUnvwTgbxT0b+/67CK5/J7G13VL4kTwEj2FK3CNHV+fOrezKgSy6qhWtjyLsvd8A
                        EFtcHGCdwRiHkQ/GmEVUN7i28Zatas3CcCUw6T8Md8/PzEJre+lsFlyd1a1ZcHkIfqz3XBRbnQu1
                        u9cPrF6ofSo+VwDEFrQCpHt5cbSqNdtCmJ3j6qxsdQZhjLF2Xov8gbG6zHj20BsNKfh38poF12xY
                        RrWV0EPvY8b9WHjvzaJ/5YLtjx2RBQBii1ZgRatD2VCMbNtgZyVrFmLHJLSyVa0xetsHqR94TwsP
                        vtXK1u8guP4Z83Nc3cmEIwguD8KPF1x7V7g+irBa2UbY+YcJAMQWlNEVBda1x72vrGitBFf3z8h6
                        eJ1/Wd21dR5d2VbCzupWtZXQw+/jRdYYvWEZ1SrXRxJX1dnA7kRC7z0AxBZpfERb8PZEVrZNsBqK
                        MRvxHoXfLLKsan1NeO293LhzfiuLre7qFo8VW2PMV7i2cVS93otvz95brhoAQGxxtQDr3qs1G/ne
                        2UI4O8+VBVc17n0WXFVYsv9Bd+Xc1mpwZYMyVifFeSh+rPdk9/6tUxBPnVd0JnAkn4f3GQBiizKw
                        oujqRFZ0mfHKuPfXILI6lxVb1fr8B97V6HovgiuLrmwM/J6VLQ/CzxtcnQA7JaEVbR/0ngJAbLEU
                        WIfG6zjWpxBG8TUb8/6yEFwrQSW8eg+yK9HVvXcrmwgXBddsK+Hv0dvqJbSeI7bGiKcFfizEV3U2
                        y+opAGKLq0bX9mPbu7Wy1a3ZalU0DCPaOpgNxchWtox3/7oQu2Q7YXTJ7O8ktmYXHHsYFl2dfwCo
                        Amz7sdF4b3k/ASC2WAqsajBGFVnVvVrV2PdoEuH2946CqxuOXDe8PiO4tvG1XdkSW96DIwmg0xVe
                        YyG0vLcAEFu0A2zvYIzVs1pRZFUrW8cR3//F1zzsrry6l81utwvOXsa/C6xLomvsiCvvJwDEFhcH
                        VhRdeyKrO+49WsmKLjGendPqDMYQYdcLrNUI60yBm0XXexBas5UtsfWcsRUF1xj59sJOVK1clO19
                        BoDYogysSwZjZHdnZePes5Wt7RbCKrj4nIfbU+P796xszS6V7QzTiO7aqrYReiB+/ADrrnRVQXUq
                        fi3vKwDEFruja/uxbDDGy8hXtrrbB6Nx79VgjGgiofj6nIfZUTzcXmNbYXTx7Hvy48SW9+gl0VX9
                        HKEFgNjiosDaOxhje4lxtIWwc04r20Z4GPF2wpVw5DoPt6fGt6tpcB8L8bX90jZC78Hu93UjKvp5
                        px2fAwCILaZRsmcC4XHUWwhnEbb9vu2vmW0hzMa98/0R1g2t2erUx46XC2fFVje4xqjPeVW/j/cV
                        AGKLdmBF0fUZUwhfigBbuVsrWp2znfDr42r2ILp3YmF0yWwWWtHKlgfj546uMXrb/7rvF+8lAMQW
                        y4F1rcEYl2whPCbBFQ3HEFO399B7jbuNPhrxNYuxzj1b3H88XePXWz1/5b0EgNji4uga4zqDMfZs
                        IXwZf58Bq6YQWsm6jYfh7qS2S4Ms2jK4cqmxB2fv2ZX3gfcKAGKLiwLrksEY2dj37hbCalUrG/e+
                        Eo58zgNr9uNX7jm69ktsccn/d+8RAMQWVw2wLLS6AzKqS4yrCYTRFEKDMW7rYfVUhEy1mrU3usbC
                        j/fQLKi+8ucCgNjir8CKPrZnIEb3fFZ1gXF1n5bBGPcRYN0LY0+jHtleRVf263iIRmABILb4lsA6
                        JMFyyYCMamWrE1zRVsIxrGrdYmh1f8ypCLTR/P7uuG4P03gvACC2+NYA65zVigZkZFsIu1sHO5MH
                        rWrdx0PpafQuh822FFY/1sM1/v8CILa4u+iKgqu7shVtH4y+HsVXNupdTN3Pg/DqqlS1spX9Hp2z
                        Wh7OAYAvdfSf4KnDahZaY1x2Zita2dpeXDxb3ZqtpGUDMsTX7cZVFERVKK1sScyCTWgBAGKLbw2s
                        vVsIV6Oru4Uwu1vLuPf7Cq9ulHVXv05FcO39fAAAxBZfGmUrd2xF0fWaRNZsKMahCK4xDMa4xaDq
                        jHrPznFVv8fpgs9NaAEAYoubCqwouj5jVSu6U+s45lsbt5/zGLYTfldk7QmZzjkucQQAiC3uOqyq
                        b69uJezE13HkI96zrYMHMXUzgRUFUbV61Zku2B2MAQAgtrj5wKomEHa3El4SXNvVrJXgsqr1eUF1
                        6a/VCafTN3xuAABiiy8PsE50VVsJj82vZ4MxOitawuo+o60zsXBPtAEAiC1uOro657VWV7hmZ7Oi
                        +7Rm0bX9/ETWY0RYZxx8J9gEGAAgtrir4KqiqzOdMBqAcUxCa/VOLVsIbyei9m4TPO34Nbu/NgCA
                        2OJbomoUwbJn/PtsdSs6o3XJFkLuI8Bm4bS6jRAAQGxxV4E1+/5rDMp4KSLskMTV6hZCAfY9AbX3
                        suIqxgAAxBYPE1/Z+afDuN50wmgFayWuqsgSXrcXZZ2PW+ECAMQWTxdh229XZ6w6q1jd6OrEFY8T
                        Yt1hGAIMABBb3GVgjSCyzr9+GPn0wFlUHUY8/OL8x2S/bxSBYuw2wqk7xOK0+GtFFySLLgBAbHG3
                        wbUyMCO7jLgaohFNHRzC6iGjbOXbAABii4eOr5XzWtVq194XzxNgAABii7uPqOr7oqmEWYhFK1vV
                        PVrR7935fHnM4LJVEAAQWzxkfGXntzorXdn5rGzsexZc2ecsxm47pLrTBwEAxBYPEVSz7z80Pn5p
                        cGVbBQ+N2IM9gQcAILb40viaBcxhZ2QdR32uqzMMo1rhElzfGzG3FEqiCgAQW9xliHUjKwquzhmt
                        MXrDMASWmAMAEFvcdVzt2S7YuUtrZeJgdKlxJwwRVgAAYoubDq5qIuE1z2zNImsUwSWwAAAQW9xs
                        VK3E12hE17Xu0hJSnDsFXwIAiC1uPrj2jnc/jv1ntrLfMwouEfa4IbUaXAAAYoubjKtt5Iyxb7x7
                        58xWZzth9DnuuXsLAADEFjcXYtmq03ESTscRr3bt2VI4iz4AABBb3FVYzUJrjPXBF8fx9+rWbLWr
                        e9fW7PMUXwAAiC3uJrAORWBlK1nH4HVIoqu70nXpnw0AAMQWXx5anRWkzkrWoYiu40JoZb+3C44B
                        ABBb3E1oZeekOkMw9ryqLYTVkAwAABBb3GRoZSGzJ7Je/nvNPl6tbFXbCQUWAABii7sJrWi73hjx
                        uPZOZL1sXsfJl9EqVxVas88ZAADEFjcXWtn5qGrwRRRdL0VwrZ7fqu7UElwAAIgtbjK0tkFzbITW
                        y4WvS4ZmCCwAAMQWdxNa1cTBbmS9NkNrG12z3y+LQgAAEFvcTWgdk9DqRNZrElyvY76yFQVXNhzD
                        ZccAADyMV/8J7jqyOqE1G4JRDb44j6zXSXBtP9bZStidRmiVCwCAh2Bl6/FDa2XwxWvxeksi7BrB
                        ZRULAACxxc3E12eG1tvk69cMrllkAQCA2OLLw2o1tLbR1d0uuI2rtx3BNTu3lU0iFFwAAIgt7ia0
                        opWs7nbBt80rC66XRnBl4ZX9WcUYAABii5sLrZdGcL1NXj+Cj78VwTXbRngY/SEZogoAALHF3YTW
                        amT9CILrxyS4oq2E1fj3MVxsDACA2OIBQivbMpitbP3YBNhbElwvk+DKtg8KLAAAxBYPFVpZYFWv
                        aCthdsHx6lbC7OsAACC2uPnQ+rH4qrYSVsMxZsFV/TcAAACxxV2FVhZdPzdfZsE1O7NVndcy9h0A
                        ALHFw4bWLLB+TkIrCq7Z6tbLJriyVa0xelsIAQBAbHFToZVNH5ytYm2jKwqtaFWrc2Zr5ZyW8AIA
                        QGxx9dAaSWgdmqG1vYD4RxJas1Wtn0GQvRXBVZ3Zqla1AABAbPFpodWJrOP4+7LildCabR+cRVYV
                        WttthLPLlFdWtWwnBABAbPGpoTULryiytpcWn4dQ54zWzyK6uqE120J4GPk9W4IKAACxxZeGVrWi
                        NYusWWh1V7O6wRUNxshCK7tbawgvAADEFl8dWsfF0Hr9hND6OXqDMbIphNG9WoeF/1YAACC2+NTQ
                        mp3T6l5YfGloRRcaRwMxsjNbs6mLAAAgtviy0DqMeFVr5cLia4ZWZwLhbFR9d/ug8AIAQGzxLaG1
                        co/WZ4TW25jfrRWtaFV/bqEFAIDY4stDa3uP1sr2wZ+L0dVd0XoJQisbjrH9MwMAwEN79Z/gy0Nr
                        9uU1tg7+GPU5rR/jOlsHXxdDq3tOS4gBACC2uDi0zr8ehVZ3NeuSM1o/hBYAAIitRwqt2T1a3dC6
                        5IzWj0lkCS0AABBbdxNZe0NrdkYriqxs+2AWXrPI+q7QAgAAscWnhVZ2aXG2mtXZOph9/BZCS3wB
                        APCQTCO8z9DKJg92V7K+e+ug0AIAQGxxc6EVjXfvrGTNVrWEFgAAiC2hNepzWasj3oUWAABcmTNb
                        14+vLLSOQWztDa3Vke6zwIoiS2gBAIDY+rawujS0tpMHV0OrE16drYNvQgsAAMTWI4bW68gvLY5C
                        a2XqoK2DAADwhZzZur/QWr0/6+cksH6chdab0AIAALF1ywF2GL2BGJeG1s+x/6zWj01cvU0iS2gB
                        AIDY+paomn17ZepgNhDj0tDqTh3MIktoAQCA2Pr28IoCYxsonzHevVrZ2q5mbVe1zlfVZsEltAAA
                        QGx9WVyN0b9La7Z9sBta2+haiaxqEEZ2Rus4iUShBQAAO5hGuBZaoxlane2D3S2E0WrVj9E/o9XZ
                        Pvgy+XxXQ0tkAQDAf6xs7Q+vbPLgoRlY3ciqzmWtnNHabh+chdZBaAEAgNj6qriqPraNrGwbYbaq
                        tbJ9MFvFis5oZcMwsnNaQgsAAMTWp4fXYfTPamWhFUVW97U63v118rkILb7ayX8CAEBsiavRCI1Z
                        YHW2Eb5tguvHWLvEuBqIkZ3Ris5nCS3Og+i0+OO6PwcAQGwxDYtZiHQmEGbntbLQirYM/hzx1sFq
                        xPv59sHsfJbQYiXOPvPHAwCIrQcLq9nXq+2Dh/H3Wai9lxhn2wa3P+dtEnPVlsHt5zyLSGHFNpJu
                        LayEGwAgth4kvqrw6tytdb76lJ3b+lnE19vItw5Gq1nZ9sFOaIkvRBAAgNi6enBFWwhX79WKQutt
                        5KtX2y9nK1qzVa3OePdOSAktrhVcYgwAEFtPGlWzsMjOaZ1/fbuatBpa2bbCbWhtV7TOf7/uMIzZ
                        ny/780MVWCdhBQCILVbiqwquamWrc7/WWzOqtmPdXzZf334e1dRBofXccZRF0Sn4cdcOKtMMAQCx
                        9SRhFQ3GGCMeitE5r1Wd2cq2FGZns7Ktg9EqnNBiT5DNAumUhJvR8ACA2CKNrzF6UwhXo+t1xOPb
                        Z3EVndF6Hfk9Wt2zWkJLRGUrXZ1giuLrkl8TAEBsPWhwZfdqde7X6obW7GPRalgVWZ2BGEKLLLKq
                        4RYrK1enka96AQCIrQePqioyoq2F0SrSbFhFdmbrNfl6dknxdhhHdp+W0GIshs4pCaTsPNcpiKwq
                        tE6NWAMAuHmv/hO04msbJdvI6qxuzQZZVGe5ZoMwZsF13BFZQktkjSKaquA6NcJqNL8v+zoAgNh6
                        0OC6xhbClyKyoriqhmBk0waryBJaIiv6+Knx6vy8TqRVn1v2ZxFjAIDYupOoqmKjE1rVcIzuZMJq
                        NasahjFb1RqT6OJ5AyuLpejHRFsFP5qBNguxLMxEFQAgth48vmYxtrK61dk+WL22wXYc+WXFBmKw
                        GlmjiKBtXH1sQutjEl8fizE2+xyu+ecEABBbNxRc0arQ6qpWFFqdMe7RHVpZcEWRJbSeN7CyyBpF
                        WHVXsboR1gmwUQQhAIDYesDwuuTMVmd1qwqs1fuzRhCLQktkzSKmiqjzb29fne/vRlY0NENwAQBi
                        685CKouO1XHv1apWZ2vhbGR8Fl7d7YM8T2itXFYcbRnsBNT56/2/V+fH7hnAAQAgth4gvrIphJ1x
                        73vHv2cDMLqDMGwfFFmdb2dnpLqR9R5E1vvmy0vDa2VIhkADAMTWHcfX6h1b1arW7MuXIriqlaxu
                        TAmt54iszrbBMeKtg9uoek8+9p6E2PuItxZ+jN7WQqteAIDYuqOQysLjMNbOa3Xu2ZqtakXBtbqq
                        Ncba9EEeL7QujazTJIKiqPq/1+/J139Pvi9b5YrOhs0iawguAEBs3W98VQMmosA6jnooRrSatRJc
                        K6ta3dDkPkNrJaw6oZVtH8xC63cjtKIVsM52wio2AQDE1o1HVie+qimEK5cZd4ZhWNViJbSqLXed
                        c1Hb7X2z7YL/F1K/ziJr5TXbgtg9xyW4AACxdaeB1bm4eGUKYedsVrSV8FqrWoZiiKxOaM3uxopW
                        tc7D6dcmun5NPpateG0HamRbCqs/FwCA2LqDADs0gusw1u7Vqka8R1sHs/u0OqtaPE9orUTWx6jP
                        aM0mC/4JpV+buPr3v9evyWu7CtbZThhF1mh+HQBAbN1QYGUf23u3VnYuqwqv2Rh5q1pCq/qyM/Qi
                        Wsk6JZH1Mf4+n/UnoKLIila5fifh1RkF3/3vJr4AALF1I4G1926tbBjGnvu0ZitbL8Oq1jOH1t6J
                        gt3Imo14z85qRbH17/jfFa5/i/CKthSuXnwMACC27iS6oviqVraq6IrOaHUHY1jVer7IykJr5RzW
                        bOhFZ8vgbALh7LzWryS4ttFVbSn8CD5XcQUAiK07Day9gzH2rmpld2xVwXXJqpbQus/Q2ju2PQur
                        0yRustD6XcTWNrT+GfEqV7Sd8KMZXIZjAABi6w4DLBuMEd2r1blbq9pCuP1yNhCjWtWaXc4srh43
                        tPZMFOysYnXv06piaxZc2XbCzr1bs9DM/hsCAIitb4iqkcRIFFnn344uMH5deM22EG7jbWUCYRVX
                        wuu+Q2t16MVKWG3vu9oG1vbS4u12wO00wii4ou2E2ZCMaBvhygXPAABi6xvjqxqOsXpWayW8qsEY
                        VrWE1vbrne2C2aCLj0ncvCeRtf0yiq1fRXDNthPOhmR0phICAIitG4+s6GOd0LpkVSubSLjdomhV
                        6zlCKxuEUW0ZPP/6ytbA98XI2r7Oo2k2EOPfyavaRtiZSjjEFwAgtm4/sK457r0bXbMzWtHKllUt
                        odWNrCisPoqYyuJqu31wO/J9dm4rCq7t17P7tjqj30fjvyEAgNi6geiK4qu7srU6gTCbPjgbjmFV
                        6/FDqxqEMRvj/lGEVne1qhtZs5WtLLi22wazla3fQWRVq1oAAGLrBgPr0nHvx0k07dlCuP31XpLg
                        sqr13KGVTRX8E1vdrYBRRFVbBzvBVQVYdt9W51Lj7L8pAIDYuqEA6457j7YMzsa4V+ezsuCqVrWy
                        4KoCk/sKrWyU+/ZMVjQ58PeO1+rP+5V8Oft6NonwPLqye7WibYPiCwAQW98cWNHHqrNa5+G1cmlx
                        NnkwGooRrWxtI3GMfKWL+w+t2SXEs9WsKJZ+Fd++5utX4+uzVbTsPjCrWgCA2LqjwMpWiDpbCC8Z
                        9b6Nr2MQXNnWxjGJLnH1uKHV3TLYCZ9fjQj6rBWwWWR1VrSyrYRWtQAAsXWj0TXG2lCMvYMxZiPe
                        s8EY0dbBEURX58/JfYdWdh9WN66iM1PRyld1rqs6C1YN4Zjd/xWtalX/bQEAxNYNBFa0/e4QhM61
                        VrW257yqwRhZcM0+fx4ztKKzWVFodQdURCtdWWx1JhhmI+ajy4u7gzGsagEAYutOAiy7wLgzHCMa
                        krHn3JZVrecIrXFBaG1XtLoj2P8d65MBO1MKq/u6slcUWNu7w6LQElYAgNi6wcCKouuSLYRVaM1+
                        bDYMw6rWY0fY3tD63Qitf0d8sXAUYNHqVnXGaiWquitZK6FlVQsAEFs3FliHhdd5YGWj3y/ZQrhd
                        3bKq9RhBNfv2aRJdl4TWNpT+Xfyys7pVrWJlURWF1fsksKrIykILAEBs3Vh0bT82i6xZcB3HZata
                        1WAMq1qPHVqdy4qr0JptGTwPqX+Lb29/TrayVa1gfYx81SobetGNrCq0hBcAILZuILCywRjdyIrO
                        a2XTCbc/trpHy6rWc4TWadTj3c+DJzqXNQur2Stb3eqsalWRlQVWFFedMe9ZUAktAEBs3ViARYMx
                        ogEZK4Mxou/PBmx0wmsEocj9hFcUWadJZG3PRnVXs85f/4x8lSuKrfcktqpzV6srWB9BWEWhJa4A
                        ALF1I1E1kii5ZDBG98zWLLiOo17dOg6rWvceV9vIysIr2ko4G4SxGlnZKle1qhWtaHVWr2ZxtbKK
                        1TmjJbwAALF1Q/F17cEYWXhlK1rnv3bn85lFlbi6/fA6JYG1Xd2KLizurGb9M/n6P83Q+jXy7YMf
                        RWh1tgd2z2Nl95AJLQBAbN1oZGUfu+ZgjGoLYbaqNVvh2n6OK39Gvj6uou9b2UL4MfLpg1Fo/TMJ
                        rX9Gfm5rNhjjPPRmodW9E2slsFZHugstAEBs3VBgdQdjbLcMVoMxulsIt6H1MuIzWrPPcfa5c9vh
                        dWqG12wwxmz64K9JbG1D658gtP7Z/LyV7YOzLYOrkwSrVaxT87+f0AIAxNYNB1g1GOMw+ue0qo/P
                        fkznjNZqUAmv2w6vbDVnNn1wtoUwO6/1TxFbsyEZK+e0OitZH6O/ctXZKmg1CwAQWzccVVmIXDoY
                        I7tbK7tT6zjWpg9G57bE1e0F1UjCIQqvaNz779EfjPFP8spC69cVQ+vSc1idSYNCCwAQWzccX6uD
                        MaLI6l5i3BnxPhsxn00d7H6M24qwWXzMzjdFI99nAzJm2wRnsbXdQhgNxeiEVraaNUZ+/qoKUpEF
                        AIitO4ys7GPRYIzO/VrZ6zUIrGhFa7ayNUZv3Dv3EVzbGJkNxfiYRNZ2G2E25j1b1cpCK7tHq3sB
                        8Rj7tgiKLABAbN1xYHUHY0Tj3mfR1R2MMYuuzmCM7rh3EXZbMRV9LNtqt/ci4+perWgKYWf74Oq2
                        wTHqVSyRBQCIrQfVGYyRBddXD8YQU/cfXt2hGNGQjNl5rSq4OpcYb4diXDu0otgUWQCA2HqwwIqi
                        67sGY2T3aUUDMaxkPU6EVWPf3xeDayW6Zitavy8IrSqyTs2YElkAgNi608A6FN83i67ZilZ0b9bL
                        WBuM8TIMxnjm0BoLoVUFV3RRcXQ+63xV630TW9E9WrPYGqN/L9ap8d8FAEBs3XmAHYrAmq1odS8z
                        NhiDKiI6FxlHoZVdbLyNr19JZG1Xs85Xtc5jqzPWfYz1s1gCCwAQWw8UWFF0dbcSVpG1dzBGdYGx
                        wRiPEVzZma1qK2G0shVdcvzrgtCarWhVFxSLLACAJ4utzjbBvWe19o58z85pZcHFfQZW9X1RaK0E
                        168guH4ngbV6Tqt7Riv7cwssAIAHiq1uiHXu1No77v3SwRhjzLcQirD7C6wsSrKthB8j30r43oip
                        KrC6AzHG6G0dFFgAAE8SW9k2vEunEK6ualWDMaLgyiJLeN1fkFVbCTvnt94bofU+CbMqsLLtg2PU
                        Y91FFgDAg8dWtoUwCq2Vs1qrK1vdwRjHYRXrmaIrC65TEFxVeM0i7P0KoXXJOHcAAB4otrJQOQQR
                        FkXWyrmt1zEfD59tI8wGYxiG8XhxFX2ss7qVhVb1+mhEVje0rGYBADxpbHXu1spWtQ5jbQvhbPpg
                        tH1wFlndwRi2ED5meJ3G2upWFl8fYz6+/aMZWavDMEQWAMBOxzsPrdkK1hj51sEqtLoXF3dWtLLB
                        GNm5LR4nuE4L8RWFVvTt1dUsoQUAILZaoZUFV7Sa1RmQ8boYX9uzWtFgjGMRV7YTPnZ0jVGvcM3C
                        q7PytTewhtACABBbs/DorGqtrmZlgzGudbdWNu6dxwirU+P7V6KrCq5ZoK28hBYAwBPHVjbafUzi
                        5TMuMu7crfUy6guMD80/D88VZ1VonZKoWoms6HMQWgAATxhbVZh0z2odgziqVqy2kfU61se9d+/T
                        Wvl+HiOyOtF16WuMeCtjFV4AADxobB0a365Ws6LoOv/6dtJgNRwj20IYndGKthKKK9F1Sj42i6Qs
                        2DpfRnEltAAAniS2Ome0Vi4t7mwdXL3EeLaF8JgEn3HvdOKrE0+nRpwJKAAAsbUrtLbfnm3dmwVR
                        Z3tg50Lj2fTBalVrDIMxuCzCspWt7OeeFn8OAAAPGFt7pg5mFxZXAzGyLYSdLYXVRcZjxAMwbCfk
                        M4MsG3whuAAAniy29obWsXjt3Ta4GlrRRcZZcMFXBhcAAF/k9Q5CK5o+OJv21x3r/jrWQ2sbXdlZ
                        rWoghpWsx9XdIlqtdnqfAADcuVtZ2boktD5jFWsWWtFZrWpVa2X0uwfq5wuzznvh0Aw5ZwEBAMTW
                        p4RWNHEwiqi34tt7z2pVkwc9DAus7L1xGPEdct348j4DABBbV13RyiYObqPqbfP1t8n3de/b2rOy
                        ZTvh44bUKP4/d8IoC66Vs3+iCwDgiWNrJbSOo7d1MNsS+DaJrrcgurLgmsXVbBKhh93HD6qV93Pn
                        CoMqsjq/9qWfOwAAdx5bh4UH1Nk9Vp1x7tVqVhZab2NtVWsWWdndWh58nzfWVl9RjI0i4KqPAwDw
                        gLHVmcAW3aO1d9vg/71+bL6swmtldes4epcXG4zxnIHVCaRs++xohJi4AgAQW+mD6Bi9YRjd1ay3
                        heD6kQRXNY1wdfIgjxNR3fd09Y8JncCKfl0AAMTW0gNoNnUwCq0sss5f0cdmWwqr8e/dbWDDw/LT
                        BVhnu2wWWWPEq197VricJQQAeODYyh4890wdzELrx8KrGpIRrWptP8dq9DvPGV3daOqseDkDCAAg
                        ttIH0Ohf9fee0VoNrZ/j71Wu7MzWSxFc3cEYPGd4VSu6Y6yd2eoEHAAATxRb0cPm9sHxOImuS0Lr
                        Z/HtWXBtI2sWXIfRv9TYeZvHD6pOZF0SWNXo+OzzAADggWMri4/Oqtb56taeFa2fZ68ourKJhNkd
                        W9tA9JArtLo/rzNhsDNAIwu3Max2AQA8dGzNHkyrsyrR5MEouKrI+hlE1za2si2EWXBlD8Di63mj
                        a3U0e+fMVvTeOnivAQA8V2wdGt9eXdGKJg9W2wWzARl7VrcOY99gDA/Djx1dK9sKVy8yjuILAIAn
                        jK1RPCzOHh47gzE657T2rGx179iabR/0EEwntDsXec9+fPVzAQB4othaWdVaDa3XC0Pr54hXs97G
                        fDUrCq3u9q7hofghA2oU/++z1anq70X092T111z9swAAcOOxNZIHwtmD5J7QioKrE1rbla3ZZcbZ
                        FsLOAzBE8ZUFVhVq2a9pxQsA4MFja3VVa+95rU5grU4hPB/3Ht2rFW0hjB6IYSSRtRpP3l8AAE8c
                        W9mD5fbhcRsx2QTC88jqXmK8er/W7KzWbArh6sh3D8aPF0orP27lrqzO9tTP+nwBALiT2Kq2TGUr
                        W9tLhd/GfNx7ZyvhNrhmofVWxFY1rj57uOb5Iqyzta9arerevzX7tUfxcQAA7jC2qi2DY8SrWitT
                        CLP7tVZGvc9CK9pGeB5e1YNxFZ08bmhV/9+7K1udXyd7H17yjyIAANxgbHUfNKNVregC4+25rdmq
                        1nYa4ex8VmdF6xiEVhaOkL33u4FerWx5rwEAPGlsZf+yn23Bq7YRVitb3bNb3a2D3UuMO0MLPBwT
                        /X2IQqxa2VrZRggAwBd7/eIHzGrUe7Z98GX8Pfa92k64XcWaXVwstPjq9/9IAmnPylZ2PvBQvB9P
                        /tcAAHyOrx79PkY9YKKzlfAtia1ZeEUTBz8jtODSvy97VrYAAHiC2Kq2EEbR1Vndqu7a2m4pnEVY
                        NeL90tCyqiWWsiCqxrpf40yXEAMAeNDYGsUDZzSNsFrRmq1uZatcUVhVkSW0uCS0Dgs/dhShtXqd
                        gFVWAIAnia2Vu7U6Z7ei0FoJr05wCS0++x8cVv/+ZO857zMAgCeJrZW7taLgmq00RVsIX0dvBcuK
                        FrcaX4fiPbZ6KfLKP34AAHBHsdWNscP4+86q6szWSxJcs+jaBtjL5MtZZAktrhlT3Y9ncdRd2arO
                        blkJAwB4gNhamUJ4LF6z8e9RcG0/tv3x0UrWi9DiBuKsiqNuNDm7BQDwYLG1dwphd1Ur2k6YbRPM
                        Jg1uA+sgtLjwHxSuEVfZ35mxM74AALjz2IoeKLN/pe9uJczOWVURVp3NOgbRJbS49j88dN431TbB
                        LL4AALghr1/48LnnIuOVVa2XxqsKrGMRWtXDMYxGaFVnuQ47g94KFwDADfnqS43H6J/dell8zQZh
                        HIvIyla1xBSZ0xX/flTnr7LthdGPOVzwOQEAcEOxlQVVFlgrAzKyla7oTNbqlsGVaPSQyqV/ZzqD
                        ZGY/vruN0EoXAMADxNbqA2ZnVWu7KrW60nUMomu2ZTB6yHUuhluJr1ngZ2PeRRcAwBPEVmdVKzq7
                        tY2llfNY0Tj3zqoWZE6f8PdjJBE1Rr2y5T0MAPDgsbV3/Ht3C2H3YyuhNcb+Va2Tt5Dw2vFe6Axc
                        qe7auubfUwAAPsE1phFW/yr/WWe3ZitY0UpZtpJVPXieBNe3ubUoOF3447KzVivnBjtfZtsJvWcB
                        AO4ktroPyZ2thNE2wJckvrJhGJ3zWdnDaTe4+N64+e7P7/zL046/K9Ukwc5Ww2ttJxRjAABX8lWX
                        GkdbCGdBFAVVNjgj2i54vOBh9DT5todQuiE421648h5auQi5G3IAAHyh1y/8vQ5BaB0vfB2K0MrO
                        Y20fjP/8q/5h8vHuQzZf9366hcjKzmxFK16z6OqEkaEYAABPGlvVcIzO61rhVZ3JOhUf30bW6cYe
                        +Pn+6D0lUXVKfk4UXVGAVX+/9q5e2S4IAHDjsbUyHGP28Sy6sgDr/LzOxa+n5AHUw+jj60TKnu2C
                        2/CqVrZOV/qzZH/vssmH3ucAADcYW90H2Ch8oiEZ0eCMwyS6jo2wygYZXBJVHlKvFzW3ajW2tnFV
                        RdYp+f1OT/bfGgBAbC0+9K1sJ5wFVPT1vXdibbcKfoz//Rf+7LwWXx+lhxv9vKIwOo+tj9Ff2aq2
                        FAIAILbC4Fo9w3VshFZnZPvs9TH+dxLjafx9B5EtVl+ru9XzO6Ks+pxOxfstiq/TyFfCxth3aTIA
                        AA8UW4eFH3etV/T7Vw+747/Q+tj8erOVLKta3x9bX/XzrxFc56ulf95v569tcH2M+epXFGCCCwDg
                        CWMre/C9ZlxFh/5n26+i0Przfcfi1/7uh3n2/bf/qv9P0RbCLLZm8XWa/Phqxcs2QwCAB4+t1UmE
                        I/j+vcFVhdWf1/vkIfk4/nfrYGc1S2zdbmgdPunXzQIrCq3ofVhFV7XFsDr7Jb4AAB4otroPsLP4
                        6qx8rTwAZw+32xWwKLRsH7zNkOr82HuIrff/Xh9nX66ufGXRNYYVLwCAh46tzoNtFFWz+JmF1+xh
                        dhZa72N+luvPcIxskqHYuq3Y2rva+FWTDGfBtX1f/omt32dff29GWGelyzZDAIAnia0spqroqh5w
                        oxWE/3tQfRn/u3XwcPZjoguRo+D6qod2Lgura694fXZsZdG1XQFbCa8sssQXAMADxdZoRNZIQucQ
                        PMhm27Next+rWWP8/22D2zu8hti6+9i69v+vzj1t0ceze7Y+gtD6HcTX+Xt7drar2lZYfc4AANxJ
                        bK2OfZ99Oxqq0R068H4WWuc//2P8/9WuPataIuv2Iuuw8+fdQmx9nEXVr/++/msSX9tVr9VthQZn
                        AADccWx1t27tjZXTWFspOP73gLr9+dvQWl3VElv3GVufNTBjJbhmZwnP37N/IutPcJ1/OwqulfDq
                        /h0TYwAANxZb0YNqNHkw20aYPdCeigfWPw+lsxWxj7MQO4+tbmiJre8NrcOF3752dJ0W3q9j/D3S
                        /TyYfgehNVvtyla4ZtEV/YPFEFcAAPcZW50H284gjGo1azbZbTva/c/WwZez0IouMD40P3e+7j3S
                        /fatxtZI3rvbfyQ4j61/x98rXNtXFF7dsfDVnwUAgBuNrWs5NR9Wz2Nr+4D7fhZbs+2DxrzfXmxV
                        sbQSWl+1JXR1IuH5ytb7Jrai12xr4cqWQgAAHjS2qkuMo8iKQuv8YfU4+bl/zmedr2plQzHE1u3F
                        V3c16ytWufYEV7a6tR2SMVvd2q5wbYMrG5pxjegSaAAANxxb3Wlxswe8WXBttw0ex3zqYBRax03k
                        iazHDa2V996l//9PxXt4bMJn9g8Gs9WtWXBdsp1w9ndLYAEA3EFsZYMlDo2PZQ+r3a2DH//9Od6D
                        0HI+636CqxNbl24n/KzYGiOfohmdOTxf3fp9FltRdG23E2ZbCcUUAMCdxdZnxkrn4bQ6o7U3tDyQ
                        fn1cXSOyLgmuve/nU/GPBbPY6qxu/fnyPLSi4JqtblVbCb3HAQBuPLauGVYjeSg8j6zjJrTGiCcP
                        RqF16cM0nxPme7cK3uKQjDHqc1vRam02nTDaUrh3SIbwAgC4w9jqPsxWqwDbVa3snNb5XVrRiPdL
                        gspD6ee8B/ZMH9xzbuuzImvlPT3bGhttJ5yd4aqGZaye3fLeBgC4k9iKpgtW3zeC0DoloXU4+7Gz
                        rYOd388D520G2d5VrUu3EV47trJ/RMima26nE87GwndDKzq/dfJ3AQDgvmLr0gfU6vLi4yS0/mwf
                        fB//u21w9jB+aj5cetC8jdBaDay90whXP89T8/0cxdZpxJdzv4/8DNfvJLoMyQAAEFvpg2n0IHqY
                        hNPpv7iarXpFoZVtofJAKrQOO963e4ProwiuaFvhpdsIxzAoAwDg7mOr2sp3Gr17tY6b6Brjf+/T
                        qgZhRA+93dDyQPp5gdWNrM8KrWttLTztCK6PILhmZ7hm4TW7b+v81ziN3qAM728AgDuMre7D6TZ+
                        ZmdatqtUx01sdVezTgvR5WH0MYLr2mF1jfd4tF02OsM1O8/1PvmyWtkao95a6P0OAHBDsXXN1YFs
                        G+H5j+kMwsgeMrPQ8i//9x1b0e/zlbHVGQPfDa7oPNf2253hGN7bAAB3EFvXeHA9jfxurfPQev/v
                        4y//ffln6+Dsczk1fv0quDyIfk947Ymu6vu+I7ai91K2unUqgiuKr+32wW1kfYz+qhYAAF/04Nv9
                        8edb+M5fx83r5ezL1/H/LyF+3by237+9rHg2DKMTWdXAALF127F1jeD6ivjKtqJmq1vVOa4swGY/
                        Nlvdct8WAMCDxdZxE0+z4JqF1nmoRcMwskEbVWx1Hzo9iH7e++qSVa7Ot28ltsaIzyhm2wo7ATbb
                        Rhi977efh/c4AMCDxVYUXVFoRStaY9QrWVl0jdEblOFh9PPeU5fG1t7g+gqd7YTVtsJOgH0EgfUx
                        6sEw3tsAAA8aW9lr+/OjqYOdh9Y9WwmF1vcGVzeibjW09gRX9f79SGKsWsG1qgUA8OCx1Ymu2YpW
                        NhAj2obVCa4huG7uPXVpbN1acGVj1rOx8Cv/eFBFlvOJAAAPHlud4IpCq7ocOdt61YktZ7a+9311
                        WPy+W5k6eGl0VdcTVAG2/dgY66u33tsAAHcaW4dJQL0E0ZWF1qEZWtF2q2sMyeDr33+HK338lmNr
                        jPUrC7pbBYUWAMCDxtZ2hSsLru33VxcXR3dzVWdbxNZjxNbK+/Y7A6wznbATXWNHXFXva+9xAIA7
                        ja3uVsJZZFXTB8fO0No7IMND6fe/zx4ptjoBdBr1VsPqx1Vx5X0NAPCAsTULrGr7YHan1se4zsqW
                        2Lqv2PrukLpWgHVXuqqgOhW/lvc0AMADxtahCK1LVrW6sdVd2fIgel/vycOd/vku2V44ivetfzwA
                        AHiS2KpWuGaRtecC42sNx/Ager/vy1sPsdPC93UjKvp5ri8AAHjw2MpWt7qhdQgeJGf3DK2e1bKy
                        JbZuJbaq4Mreo92zWN7XAAAPGFudVa4otLKzWqt3bFnV8j6+h+iKfkw3vkQWAMCDxtYoQuuwGFrX
                        iK1LLjP2wPo8QbT3c7v2e2NlZcp7FgDggWMrCq1ucB1GPoHwkti65kXGHlwfP7ZuySVbAb1XAQAe
                        LLZmoXWYRFQWW7MVrdXY6oaWs1rcc3SJLAAAsdVa5Tr//rEjti4NLcH12O/XRwoqgQUA8AQPr91z
                        W9nqVndVqxNbl4aWh1aeIc4AALiz2KpC61DE1TH4uWMxtk5j3/RBD68IKwAAbjq2ZrFUhVZnVWts
                        QmvsiKyV0PKA+9zvbfEEAMBNx9ZohlU3tEYQWmMhsoQWAABw87EVBdcl0bX9NQ+TAFrZTjgawSW0
                        AACAu4itvdE1xtrK1mhGVvRzhBYAAHCXsbUSXVFoHZIwioKrCq1ZWAktAADgpmKrCq5OfHVXtUYS
                        Tp1VLKEFAAA8TGyNsbbaVX0+1dmt0QwuoQUAANx8bO0NrtXYikKps11QbAEAAA8VW6vhdWlsCS0A
                        AOChYuvS4Lo0tkYzuMQWAABw97FVRdWhGWpVbFXBVf1cAACAm46tTjTtDa29wSW0AACAh4ytKqYO
                        Oz6PTnBlYSW2AACAu4utbnDtDa1uVJ2aPw8AAOCuY6v6vj2//+qqldACAADuOrY6v97e6Nq7YiW0
                        AACAh4it7q956e97utKPAQAAuJvYWv21LzmzJbIAAICni629v8dhZzSJLAAA4Kli67N/L5EFAAA8
                        dWxd+/cUWQAAgNi64u8tsgAAALF1hc9HXAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                        AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQNf/E2AAsJz3lYg5vRQAAAAASUVORK5CYII=" transform="matrix(1 0 0 1 49.25 60.9814)">
                        </image>
                      </g>
                        <path fill="#333333" d="M587.003,182.774c0,0-0.003-0.014-0.003-0.016C586.99,182.766,587.003,182.774,587.003,182.774z"/>
                        <path fill="#7C7C7C" d="M768.921,175.538c-0.058-0.011-0.098-0.019-0.098-0.019S768.878,175.538,768.921,175.538z"/>
                        <path fill="#7C7C7C" d="M739.323,160.872c-0.002,0.005-0.004,0.009-0.006,0.014C739.32,160.947,739.321,160.929,739.323,160.872z"/>
                        <path fill="#7C7C7C" d="M739.323,160.872c0.027-0.07,0.045-0.154,0.035-0.271C739.332,160.266,739.327,160.71,739.323,160.872z"/>
                        <path fill="#7C7C7C" d="M632.852,108.34c-0.096,0.024-0.17,0.039-0.17,0.039S632.773,108.383,632.852,108.34z"/>
                        <path fill="#7C7C7C" d="M583.718,173.868c-0.016,0-0.026,0-0.026,0S583.703,173.873,583.718,173.868z"/>
                        <path fill="#7C7C7C" d="M657.42,154.615c-0.001,0-0.003,0.001-0.003,0.001C657.384,154.632,657.396,154.626,657.42,154.615z"/>
                        <path fill="#7C7C7C" d="M506.896,457.813c-0.016,0.112-0.028,0.206-0.028,0.253C506.869,458.14,506.88,458.004,506.896,457.813z"/>
                        <path fill="#7C7C7C" d="M606.784,404.733c0.001-0.005,0-0.019,0.001-0.026C606.775,404.74,606.762,404.807,606.784,404.733z"/>
                        <path fill="#7C7C7C" d="M735.139,101.468c0,0,0.013-0.022,0.024-0.041C735.129,101.421,735.139,101.468,735.139,101.468z"/>
                        <path fill="#7C7C7C" d="M581.276,259.94C581.276,259.948,581.276,259.945,581.276,259.94L581.276,259.94z"/>
                        <path fill="#7C7C7C" d="M506.896,457.813c0.023-0.159,0.059-0.366,0.106-0.604C506.977,456.892,506.928,457.45,506.896,457.813z"/>
                        <path fill="#7C7C7C" d="M575.535,254.001c0,0,0.012,0.009,0.013,0.01C575.585,254.01,575.535,254.001,575.535,254.001z"/>
                        <path fill="#7C7C7C" d="M598.842,206.329c0.005,0,0.021,0.006,0.024,0.005C598.881,206.329,598.862,206.327,598.842,206.329z"/>
                        <path fill="#7C7C7C" d="M85.471,409.392c0.203-0.207,0.398-0.37,0.577-0.499C85.83,409.042,85.638,409.209,85.471,409.392z"/>
                        <path fill="#7C7C7C" d="M325.363,678.562c-0.125,0.041-0.244,0.073-0.351,0.087C324.307,678.737,325.638,678.605,325.363,678.562z"
                          />
                        <path fill="#7C7C7C" d="M749.657,324.198c-0.008-0.004-0.015-0.009-0.023-0.012C749.487,324.113,749.86,324.659,749.657,324.198z"/>
                        <path fill="#7C7C7C" d="M574.115,312.245C574.166,312.238,574.192,312.215,574.115,312.245L574.115,312.245z"/>
                        <path fill="#7C7C7C" d="M451.549,404.753C451.78,404.766,452.598,404.24,451.549,404.753L451.549,404.753z"/>
                        <path fill="#7C7C7C" d="M524.815,335.928c-0.006,0.003-0.011,0.003-0.018,0.006C524.614,336.033,524.789,335.945,524.815,335.928z"
                          />
                        <path fill="#7C7C7C" d="M553.559,340.554C553.56,340.55,553.56,340.542,553.559,340.554L553.559,340.554z"/>
                        <path fill="#BFBFBF" d="M617.826,298.693c0,0,0.039-0.012,0.095-0.029C617.961,298.572,617.826,298.693,617.826,298.693z"/>
                        <path fill="#BFBFBF" d="M636.044,289.444C635.983,289.517,636.028,289.475,636.044,289.444L636.044,289.444z"/>
                        <path fill="#D8D8D8" d="M617.117,202.007c0.001,0.004,0.002,0.007,0.003,0.011C617.2,202.257,617.167,202.001,617.117,202.007z"/>
                        <path fill="#AAAAAA" d="M645.584,186.352c-0.001-0.002-0.005-0.011-0.005-0.011S645.581,186.351,645.584,186.352z"/>
                        <g display="none" opacity="0.4">
                        <image display="inline" overflow="visible" width="258" height="233" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQIAAADpCAYAAADPuzmlAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAJt5JREFUeNrsXYtu67gOpGx3//9v
                        95zGti4WqHFVlo+h/EickkCQPtI2tcXRcEiRRGlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlp
                        aWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWk/rOQlSLt4jdW8
                        JAkEabmWJEtwSCBIe/O1U4IOn6CQQLD7feUieu69KQfes7yXvxQIzngvuZjOv0el417WBIQEgrN2
                        l5qAcNl9in7u3Y/o52lvBASRnaQcRC1zQe27T5rDl+CaqsGP8969IRAgAFB2AEFNQDidBRTnWbtn
                        ntNrz3nf3gwIkMV11g6TC2s/C5AcPwIG/N5Ijp9g8OZAsHeHQRaWt8O8+sJ6dvGNR/05AKCAYN0X
                        /rEFCgkGJ9n0ogusd4fZnosREhT2+vKExVUOeF294P5ozq99zbp3GghU8oXeks7/HkDggUBxPrec
                        wtplegDhDFDodfwa/J31gPeFsID2MTgMgYRwAHlYYJDAcEMgKCAIlOAOg+wy7QJCAeEIJysXvKYe
                        GOpJjCACAINz36oDBGvzTAZjSwC4qUYQBYEBAAWLEUiLqzqx6FUxaDno+h9VL+GFA+01H4T7NLB7
                        NhhAQI7zb8+r8j2J7aVWcOPQQAOBAdxlULq5MiawCouoMNaghQlHMoISeF0Nfq92AAsK1JLTD8Ln
                        7Wu8+7Q296llAqujMSQruBkQFGC3QRdXBAjWr59bGShoDMFbWHXH7t2TLkX0gqOcoQDhgAYCI7tn
                        EhAUBwT+eyzKvV0BQE5QuKFGUEAQGIwFpjlIVehlywyKETIURy+oB4Jhb71EdbSNiNjZwwQGBQRG
                        4V61j5bWrwoILMZ7XYX/JwHg5qEBKYvNW1waGFg7DX8UBgxS/HmEk0WcDQEEtFYiGiKUIFDz+zMK
                        H1v3qQXoxQCBFpw5E0zB8GZAUAzHLwYLsBbYoCwMCwQWBxg0MZF2OhkZjn9UrQSB7xkNCRAQ4Pdm
                        dO4Td+7tniCvJQYIGggkMNyAEaCAMAKPQdEK2t1mYSAwOIBgAcHeqrbixN4aKHihgVU3Yb3fSAbH
                        Aun2MQngzRkBB+qNDcwKAIwGK0h94OYagSVE8YU2CYtMAgNSYs+FLTgLENpFSuTXuiOgUMD/PVor
                        Ib2/nrQaAgLFYQDaPZJ2+SqEBLPBBOrX76gKIEQBOe0FNQILBNoF96EstnahkbHQtMcAsIIe+l0N
                        ENAEuEgFpVWWixzUQcXbAjCBid2bCQCCFqRnJyTgegK/Rhr4JjC8GBCUTp2gXVjbgwOCt9D4rtM+
                        tw8PCLyd1gIFpGpyAJgBOaEAAl5RIOgBAc4K2tCAWNg2C2AuaTwjfU8DazpBAsANQwP++aBoBC0I
                        fDAwaBebBQTz18+0zxoYeFWIqEjngV6kYKoYYUEPcB0REkzKo2VtEmNr70vLHDgITOw+Ds2zJBpm
                        eHBTsdDLT0sg8E8DBJPACqzQYG4eEhisChhQkH4jjEAryuHft0KDyGGdejAbaJ3+IwAELUjPCghU
                        xgR4VgEND9JuoBFYQuHoMAIOBqOiEyyMEcwsPGg/XgVWIImGUTBAHU0ry7UO65DBXhAwiGgDI8gG
                        JoetSWxAEnoX9rrFYExaeJAA8UJA4DUjRTWCFgT+UUIEacFJQDAbeoEEBIgwFwUCq1pycFhBFZiP
                        dbgqygi00mEpQzAJjICLha3DVsbQHoaIuJBck8BZQYYHN2IESAotohFsgMBZARnKtAYGPToBCgjR
                        vLx2poJTYOvoLnKeH9EuvLDAYwSDAATt/RgNEJiYmGixgrSbhQbFyBwMZNcRSKyAhwiSTqBpBBIY
                        IGnECDBIu672f2oMwcqXV4W97AUCRCQcA0Ag0X7OBlamHUwNWIzGNdGKi9JukjUggxUMACvgYMDD
                        A61yTdMJeoHAU+nJ0EK8MxUWEHiMAAkPigFSvUDA07qDkC2w2MD8dT9n0ouT2vBAYpg1dYJ7iYXo
                        TjSBrICLhpZOYNUT1E4gqAAQWId2IkCAMIKV7ANUkWzBQHIFYW+2gLMBDtbt75sDbCmzCDcBghLY
                        LZHsQasVjE7cKbGAmSnUrwYEA6gReCFClBFYVZ4SEEggMNDPswWLco+2+/FQQgztfAlnlNLZgwSG
                        JwNBpKLQ25Umhxlo4YFWaixlCxbC2mJ5Ip3ldIPjaNbOR0Z4cCYQWIfAJBDQqglX+l5OTEIW4eML
                        DEYnLLAyCJTZg/uEBuSo6YX0Y8hSFuGjAYOiiIbW2QP0FOJeICgOCIwAEFjpw9VhKNH6BosVjAoI
                        WCXfI2MKqwACWj1CJDxIe1EgsBpvoILa6GgGPHtgHXldO0RCOgEIjmIEUTZAQSDQQHk0whrOBhYF
                        BJZGIPwg+xCTBJRSyXGGBzdiBIXiYYIVp2qiodYSaw2GBGcBgaQXFAAIiPalDhHRdnD0DO19kxEW
                        cKa2KGxgMgBnaf7WCgiraS8oFpYAKAwOQ9BOJkqlq17rMq8Xgfb5SnjOHqkjQIEAAQMiv7ZBEzOj
                        vQn5+63M4SVwnhsm8EFypSLS+SiPJt9cI/DERHQ31QpaSFiUVt98y4k8rcArKioUKyoqAUbQc+DI
                        AgJJr/EqIQflfS7C91cWEkhswNMIrOaoeTT5ZqFBhEEgHY2syjZkJ0ePHEfThwigaW3AkYNH6KEo
                        CwQ8Nlac9zkIjteeIHyQXPotsTpLI8izB2+aNeh9vSW+adVtRLGzAp7jEcUZgXf6UAMCclgBEV7p
                        KAEBKSHJ4ACDxVraxrD861OjDXwQ1t/ACw28fobJDl4UCOrO11slyloHI2+3l/4OMrkXOXhEAP32
                        HMzTCiQA8BiBJxxaE6isMuht5+cgsBB+eAlhBIMAOOn0NwGC6izunio+azYCsrtaX0OZgeV4KAXX
                        HKxQrJ25VUOghV9IFgedNqWxgYXkcmXu+JpOgDCDMwbURNhsTSCIA4KVF18BYa8GwaDsAC1vB/ZU
                        +j1ThJH3RKBQ6LECFBjIYAMSCHhHmi1tIHIa0Wp3joJBORgoagKBvYCJ7Om43sNiCB4Y9IKCl1no
                        Fees91cc9oLOXvBYAQIK5LABDrgrAwLL0UcABJBQKjoIpex0dM/pb1PjMF0AAsWJt63CH+uxGuzA
                        EuOoAxR6mph6A05KwNki4BoRX733SaRXiVYDCLZBJbzrUK/zW+EUEZ5KLAc4fC8jeOmsxlWhgXeK
                        blUAwOolIHUZIkNMHHY4HhqPU9DRLIeLai5HzWSkAGBq5xvaMG0h//wCoglEGRSSViwHg4Glz9RX
                        BoTpRMdH6uVX0mcSeA+rr0AEDJCJxOjwUcvh0DmI3kKs4NciQOABBAH3UwICq1LRO9/ggQAiGBbC
                        xtqXHQBRg6DwkoBwJiNob0QVRCQtBOAO//h6bB9/kN6DcALExKOYAXoTCxCbo4vx6EVTOkBCurd8
                        /sBA9ilTpGpwICyFqQmGhbChteg1QH7eEycrvegMx+lEAJA+trSB2QAB6cHV57YTrqUdIHnxEqTh
                        FQQBZLfdEx7siWfRXVFavNphIC9L4hVZRbMY0fCqdIBgAZiZ5PDVCFeeDgbTSQAQDQmksGBz9s3x
                        P8kvSNHGmWli4hFiXRQI0IV2JhiUToCInmyMpCVRhy+AFtPDAAoYIqH6kcaIyQhd6jsAgXehJBop
                        iYMj2/FbEPhwWMHYAMJIdhFSoX3pxbrD+fY6/1U/G70WniBKgEPvARai75OUPcDrCduKoxshXa9f
                        DgzO1gg4ldzoo8YENrGoZQSf7NkrUd1+j8YK0AVbgEV/BiW/0nrPflTAsaPOh+7AHmtAWU9v+tRi
                        A1ahHKKlPQ0MrsoaSOJS28Vme24ZgdaURDuw0oqIXDPwAAEdT94j4pUDHfHZoFBBDSXCJJCMDJF/
                        XJ3IbyhrAUDpWBNoc9lCdiHc08FgugAA+MfthSn0/fx6ywoejfN/kj9kY2MQ1uyCgbCjw9EFXSiW
                        p351UIj+n8j/gJZBo+9DEiUr2a3cPTYY0SYkIJB6XxSBCb8cM3jGoaMWJUvDDEoDBkiL80nQDSb6
                        Pg5dmm8YFfZQxbjc3NkjB7T2iqmRvhBE9ii5arCBXudHQg+NCfBHu86J+YAHBrcODazJM0W5cBsQ
                        cBB4MAD4ZEDw8fW19pz7LIQII2EtxvYUllwdr18NEMhOVYEwQKvMjHRZ0sICKxyInrL0hGQ0E9au
                        77Zj0yCAw9NqDK48ayCxAmouUltPYDUw5VkEDQyk8EDbiVDB6ohqsN/UituKiYns/g4IAFjg1OP0
                        yMlQEnZ2abz70oS+23NrK9lVkJeGCNPFACAtEI6YbXggaQVSSDA3z9bU45X8Tr+I8/7GvvrRBYmG
                        A8j92AsCA+D0SCWjt4Z5FqzVvrRrs5Jdufk2GoFWZdUOteRZBC4cSgVG/OFNPfYWYKUcnHG1VoSE
                        FVpXqkp2jYLXh1FrLGuBgcQG+GTnFgRmQEAtQPh1OihccdYgGiJIYMDLjucACKBDTa7UA97dwb12
                        bugxbs2hx+bnBuFnkLMNhbDjztLxdW2QTjve/UHYsBoOAERvVEfQGyJI9QXaQSTkVKKnEWiLOZ3/
                        WiESUfVbwVfbNa3Bsz0PbTCtBARzAwLRqVVDsxG+pVjIQwMkRFgaRdUaZuqNPJdAwJpqlHaMUyNA
                        6lF6qf1cWzbO03FEers6r9eB1uJOa4LCB7mswiY1GD8jFRtZmYm30QgQhtBelBYERvI7Fc1kDzi1
                        QCDtfEDwdnuNqks1JNSEj9UBAW18GgIK0ilIYgIfZwMPJhAWh/W2WgciDp7KDqYnA4AVImhtzDSn
                        R7UA6+9nSHAOIFgggAzBbUOCoWEG1HyNg4DXI9Eb66bNmuBzHNvBLZ8GE5DERWuW41ukD5EQgX8N
                        KdCwhptWgAVQhgWHOro1dwJ1fr5bSydJWxBY2L0rBoPQ2qaj7ECb4cDThA+Sp0NLm9lIPzNkT5/c
                        ND1xIWnAgLY7t74WmQ+YYLAfDCKj6qxpVfwQ2co0pIUBQxGAQGqTLs1O0FqjWUNped1AW8E6Gq9r
                        QWCkn/Mhe9vu314jqArdIooPPIkWqaTjXwMQGhvQzo9wEGh7URaDDRTg91mTlCw2oA3W1dhAUVjD
                        Qt9PxEqguLL/6dIJz9OTF4ynHRDZZaoV/Bvp/NeECN7MR23MfVsevghMYKDvh8hICQskQLEmLnvt
                        07VZDavCBrQWfO1hOHQK9qVlxtMLLCSt4/HRu5MmYqXt1wfQzIC1c/8jaD7tjr8wRsBZhgUCHzuA
                        gAS6v2WqHoYmwBmD9DcjHZnp3YEAVZ+RdlfI9yiB4VCB0AoJBtIV/baZzCI4OtH3ClOJKfCw4IN+
                        nk5t/xY6ZNWrHWjLiAtjA0sDEpyJoMzj7TWCqPMToEL3nikvCQKH3aeqsAItHFgELUAaUtOeNVlI
                        nlshMQwLECTB0NIGNJFwpJ9Hi1sB8aMBA2uW40DYLMe3BwJvV0fOkSNDTDzkTVDYzxT4fVnpe2Ug
                        B4FVAQJO+WdFH0CA4EMRDAfHMS2RcKSfWQIuIGraBAICe1jZLYHAKjohwopPrPrwAWQCCQLH6ATV
                        CQ1W+n+BkHY0nGsK/BBZFAjaZ62ewFovJND+kb43ROHi4dQZgkjPlwiG0wstqt7dPwoKRH3db9N0
                        ACAFBCoABBYITIo+oL3WAgMvLNDYANHPbIGUJmxDAkQb0ITJIgDr6YLh9IRFpIl1UnzpOf8IfM0C
                        gwwPzrm3Uu0A7+bjjabjE6wQIPA6Xe9hA1LLsdqEOlLRkpehiIavb6kReNVohbBhmdGcsBZ6JCDs
                        ZwdEemfhzbnrl6Nq66HtTCVNr9KAgIMBzxRMQZpOgj4wMHFwdcDG+3teHcFlhUWvIhZGilC8gySR
                        i+85fwJCLDywwGBkFLcaIDArYYH1M5JWYIEAygba6VxSvUD0cNNIevekpxUWTRcvHiL9mGrkSKpH
                        wdCJuy+Rw30jUGjj2oE5FDFA4GtiYGGB1m7OAwLtoNEeNrCFBZJ4iPw9r5T56YVF0xMXTxEWQiHs
                        XPqoIL6Xs00AOJcVVAXoN1AYld/F7/dC+lBbTVMYCWeNSIkvDws4G0AZKSoWDs9ck9OFi8YSCbWQ
                        4EgQ8KYfJzAcxwp4HO/9LG8v5rWZ05iEpx15a4IUIKAGyFq9AP17Hggh5can6gTTkxYNkiK0wgHv
                        hBlCxTyASutnBaQwPktHaHtUak1miOQDTlopM9p0xNMH2q9pv9vSBKQNrgTY6uk6wXTRYrHYgJUW
                        9I6qWufNJVEIHVyRgNAPClLn6rbKUAKCVWAEUoMZbVOxGpYivQitcWYcBLx0tcUI0NCEs9TTdYLp
                        IhAgZZdAmYB1rNRL3bzkIY9fIBZKOkA1gGBonH8kv/N0UUILpF15ORAIvBoXtJOy1cT07TQCidJp
                        bau0NFBbP/5B/rnzSD1B2nmbQAsIbRdi6XwC70Cl9Zq02qAVIxQYlI3J+xsD+SluDwy0Dkje+rxt
                        ZSHKBhCBkB8e+TBAAM0Xpz5wLivQ1gDPy/Pu1QP9rD70gIAIm2dYHCqu6R5Wittaw+hgFVQfuDUj
                        QNmA17hCAoAPilV0ofQrAeE8MGjDBN68tv14IKz9fHF2bgQAeNqwAOI2eggOqXYdgixVmxPyckCA
                        dLNFioZah7ceWheaDAteFwyk7tVFYQFSs9kCak/oPdd6aZYAGPQejHuqPnClRoCIO9Zx0qkTBCKM
                        IMHgHDAg0pvWSqBAFJ9GpZ0dsT7WQhcywMwbsa7VB6BFTB5LvVVlYY82oDEBjxFYx0zHV0PdXwoG
                        BIJAMYCABEagATni+B4A8Pe1N1RAwxXrvd+WEXiTbhBt4AgQSDB4HTAgBRAK+TMyo1qUBwAIKFkF
                        Uh476G2jp/0ft+5HgKCnljJEAcHqUCvRNHJ2B6Icf3b0ZuABggUOkpjnbTiRj9E1jG5wPf0znx6e
                        Tifd+NKpD/SwAq92YCC//wApYJD6wbWAgMTFBfxbHkhQ4G/2aBEIA32Z4rarS4wjoYHk7B4AoJkC
                        afevDkN4GfR+U0A4iomdlRIuAeCx+mS+ZJbqbI3AAgGpNnxyGMG0QyD0QKCA1JOCr0vDAEELAc5y
                        YALvaw8DpoOd/lYFRdG25BYj8E4aRoVBbZJSARgBygZqAsJhgIDeh6NBIOqMRzHF2vn1lz6GbAk0
                        Vici6cSh1X4KbUBCCvWsBy3ckoBw+CYScbDqOFjZ6YBIdWN1ftb6fS8xmfvMykJESEGPH0e7zGhn
                        y5E0TEQkLCfHu78ZGI5yitr5em+idnWYQnRoL1I3cUuNwIqnkDChp0RTuyHtSTapH1x1dv6owl2S
                        HVwCBvVgEJCAQHsgr4n8DAIktwcCTyfordG2qKXUYcY64YWEOFqFnNWUI9nB8Ts56iR1x9/UHFaa
                        zdALCBHGcGtG4JVneiCBNhrlN2ptdn8rZNGAwEsJFcLLZhMMzhPm6kngUI01pYGC9Jo1ACIRTeLW
                        oQGiI6AnA60b1U6l4a+NlJx6xSMcDJDKuASD/QBQnbi6Bxy80GDtfFgg4oUIl7KD6UCn9mLhsnNx
                        oM7PR1Jtba8Gwg+foEJnZHptgkFsh66g83vPPVpC+zv4+pIeq/CxNOkZBYTLQ4bpBRdEBZ2ez6qf
                        BSo+MBDwmIAFAPzcQiVsbFVNMOiO/xFnt04s9irx2vrTgGBWgCHCErS/fYlgOD3x5ks3fAUdf24A
                        YCR5HFU7wz7SxtwDAC5yVvZ1RC9IAMB3ZG2TIPJV+T0MwQKCmT0W4Xsac/BYQQ943pYRaHGYRcXa
                        C/+gn0VERN+74CJFRgUEASuz0bbWItJ7+NMvZQVR5/d2/N50XY8Iqa3HbQ1uz4/m81lYrx5T6AGE
                        lxyCanWg8VIy0q7Pd///LvIH/X9Cbrvbtw0xtwvOmcJA/hn1yFj2tvBJa7ONsIN3BoMjYn/uGCvp
                        6TwpZYywg4hYyIHgkwHBg4HE3MEKSHnvt9YIpD50Gtquxu4/fV107uDSjZoJb1EWAYHW+dcGBLav
                        EWMGHAx+Q4hwBPW3dv+V9FQckt9H9QK+RmvjxO3a/GweD/bxwwgfoozgrcRCCwC0MGADgUnRAioD
                        AK9xKZF/RNQ7A9GWP68kD/bkPfgsJvAu4BDJ86Ox/2qEjtUQ4axcPXpuANEINsf/+/X4FMDgYYQJ
                        XjbhMptOXhTFiPMQJiB1GuKiIBcPJ9IHSVgsIDp1af169hbWQHIJ828DAETxr4BuVIUwEgUEDwg0
                        aq6t0wcDAg8MtDABKS56i9DAEwalC2zt6tbPRBqXSiGB1zBl+7sfzo2S+s29WwlyDQIAKvxpDr0Y
                        epJV1IOECHuAgIPBXwYGMxAmRATDWwCBtMj5RR3YxR2+LtDwdeEGhwW0N2RrWsLZwAAwAi8kkHoi
                        fJA8hYeU378KzKD8QgDw6kSqQf0Xxfm9Ih4tTOgFgtUAgg0M/hiA8FDCg9V5j6cDw3QiAJBwUdfG
                        OTgQLA0YWCCwCiCAtisjig9i5Z2SJBSXAGBhWQ1LM3gHEEAFvx4AkJzfq+7zmAH6/6zCBtRmDlBW
                        4ImHCHO5ZUFRVcQzLvKVhhFI3YYlYXBRxEQ0LEDnLLRt0WbhppGhM7Rz/aSxXiUApHdgAT2036vj
                        1wBgpnhlXzQ80NbrKmhZEhj8ccIEK53osYB6FyDQYmCpJwA/IyBV/Um07IPizUs1INheK7VWl5jA
                        qgABDy+k/gd31AcQFiClho9w/pU5zuw8o2k6CoCBlt16KCHCZ0doUJVN5pYagbTIpYu7KhTaYgJS
                        fGbNMkCBQNIGuCbwj0DjLADQqg8r6QVI7wACyBFdz/ktBsCptfS5pcyvweyB9L9I4YEGBp8NGFgZ
                        BI+1vG0dQQsGmjNUQxdoU4V81qFUGoxqAxIbsEBAqzloC49Wkif7vvpgFRQAiORz9+3iXoKOrwGA
                        lGLWXsP/hrbjIiGPlLlYlBCBFxa1oCBlDyKVhrfMGmhtwNoS0G3RLwoIaKkbr49hZK6cNYj1H0Eb
                        IPLrDZZGBB0EMHj1UuMeFmAxAEvpl+L8WQECKRX3AFmBVVOAMFjtFOIshAktIEglyLMiFCKhQb0L
                        EGg7nDTocgVjs/ai8zShBAIDxSbRtLt5ywbmLzBYmRMXsguOtPhPAgO6EQigh8VQpX926L/2eBjA
                        gJbzekBg/Z+cFSzGe5POIKDv7fYFRZZY2AqAVvjQXqBtl92cbSZ97DmaMiT6OWilZQMSEyCDPcyM
                        sWzvtyrhwTtpARGlH4n3Ued/AKxAAuSoRoD2JpgDDy99eDoLuFojsNqIr0YKalAUWwkAIiCgpQ2l
                        CsKVhTFFeN2DgcHkxH6kZA/uBAIWC+iJ8T3n13Za7XdIIYgXGlhtyT3gQwBvoRc+fDRdAAAoGGjV
                        iAMDgaETBCw2INUOtDenBY1JYAJeXtgSgJ5ZTxCtDfB0AITiezt6xPmjoUGUEXgguJDfvUgSL5GN
                        4jI28CyNQPrnVpJPFWoOLzn/ALAAK2MwGkygnc34yQAg2o1GYwRXM4S9gqAVAmiUXmvm8Qg4vQcC
                        WiOQGgACJDuCpkAl59fSmtHj0rcMDYh+ltiSAgg8NBiUtKA3e97qRyiJfosjDD4aEXF22ABazfYq
                        ABAVBKMAoKnoPaBghQRS6nAl/LyBlT2IHopCDkRFD0bdFgg8NkDM6Xib8LZR6BoEAPS04dIwgvZG
                        tExAWnyLkaqKHIG9CgyOFASlUMBy/k8BDD4dQECc37ofR8TfkZRpJay1eaVY3cDbFRQhmkElfW4A
                        UhdAAUbQhh1SsVCbpUAEH7Rl9auIgb1pQS9tJjm/180HAQILALzegD2FOpGDVKsDDhVcF29RYnwU
                        GEigQM7O77UoJwVMRvp5RLgIusGyg+ZZinR5EgjsSQtKYYBUWYc8rDBBY2FoWXEkLIj2MdSAE/3c
                        a8n+VmLhHs1AqsDzHD86uWgDgFEQBpE4r4K7DtFrMYEj0oIWAPz3cXvgRvsYbQAaAQDkME+kiWkP
                        O4gMQiV6kkD4bCAgwgqOJDCwKvLQ+YXEQKD9XWujF1i7v3WSzaoMu4r2nZEWXAIs4K/zbLECCwQW
                        IwxYQJaGAoEnHBLg3Ehr9aeDwDOBgMgeIW5pB9rrIhON28xECwJWnBeldM+6qUelBbUS2tkJA1qn
                        1z62QgNEBJTCAC8l13uQp7cDc8Txn84eX2HkmXZ0uYBqrvQ67WtSNsKbeOupuMhNKy8AAnvSgtah
                        Gg0ApG49fwE2gGQCvGEhR7Q072UInrO/FAC8EhCQQvW1zr/Rm1UMfQKJ6b3d3huoSgIYnQ0CPYLg
                        YmQFOAh8BkHgrxMWRFKzSKPSFVDj6w6ARTeGnlkKvxoIPAfWgGHPBUREHDLESW946tmOvzcU2JsW
                        jACA1uob6fLrZWtWR5nfW7YbHdiKajUvAQCvCgQoKCAXUAsP+PQlj8pr6Uf+uVbncGZ40BMK8GYh
                        vB1YjyAYBQFkAEg0XeuxgKNoeD356wkEwYtfwJ/RxMgCUH3U4T2GcEaY4IEAEgpE0oJSSlB7/FFE
                        wscBIIAU5uyZhNzLDo74fgLBwTclcpgHYRZaMxO04vFoVhDVA9C6gL0s4M8OcdArD0Zr888CgSPE
                        RUogeK74iDAAMhhAhBVYP7cXDHoKhJBzAl5GIAICn8FwwGokgpRrR52/XrDubmfvCgQaG0Bag3kl
                        yVEQ8P4G8r4jesAKhgJnsoBIrYDXqAOt4yC6rjinvpujvDsQ9Fr07ILHLs4QpY4IBTan/FS0AAsE
                        pNFe/JlrAkjfAPTQVq/z11zeCQQR50fFQwK0gaN3IuSswBIIBSJhwB/aXyy0vRe0KEhjACgApPMn
                        EMAgQA4IaK8tBzu6lyqNVAgiacHeMEADgUhmoH2vkiCICIDp/AkETxUir1pwVv+83lbbnwoIbA79
                        pyMUQPr4z8J79Ho4oCJgAkACwWniD9JPQPvY2r1qQBREQ4HIaUFtTp/m+H+AUGD7vbwa0WoaYqUF
                        IwCQzp9AcCgYeJ1tvaOmaJqrBQGkrBo9NowKgjwUQBjAn52CYIQFvPQBnQSC92QBeyr0vDJX5FGA
                        3c5jAkiFoJQR0Jz/Dx1TKmyFAl5qMAEggeBwhy8ODfd2eqQRJdLAJNqfDmECXlZAOijkAYAnCvYI
                        gpFrkgCQQHApOER2X6RSbw2AQjsGzQtX0G7CSFYABYA/FGsmgk7yWRMAEgheWRvw0nLoVBukhVbb
                        JKWeBAKfAAigTOCo2oCrDgelJRB0iYNE+wZ7coeUAGEUgKAVCYsBBKgoyJmApAf8CYQDSCjgnRW4
                        8ohwWgLBIYCgCXGrsvtKrb3br22DUbZmqNJ8Rg8IrAYinAl4esAfkA1IRUK8uWjvUM9kAQkEL+P4
                        RPLQ1Z523pJDfjAwWOj7ENeFvadC+hDYaGYABQGNCXggED02jLYLSxBIILhMHNR6FloxuTXfT6Lk
                        22NijGAwdv5iAJPFBBAQ+AOwAUkT4K3EHuS3EUPbhWUokEDwskKhd3QXme7zIQDBSN8nOEtOL32t
                        BwS4JhABAZ4e9JiAd04gWUACwa0BISrMbQDwQf8fmT45QND+TYkp8GyFlRl4ULw+QAMBqUrwQf3N
                        Q5IF3MTGX/S/Wm3H+QSk9nmknwNTh8bB+TN/FMHZLT2Ai5PakWEtHbg9/m2e/2Vf4zqBVSeAjhpf
                        lZArWUAygpfXCYjwfP1s7MrTFyPw2AAJ9F9jCu0xYi8c2FMtiIqC6DShZAHJCG7HCqyehIPCBLzH
                        qDCLaGZAOzBkMYF/FUagsYC/hNUH7A0FEgASCG4THrTPgwEKCEhYAMCdw2Ifkg7wSXIqUAMCJBT4
                        JL93QE/3oASBDA1uFx4UIVYfGqfYdvvxy3G2j6fm41HRDCTq3/6Ngb0XiRl4wqB2dBg5L4DUB0RD
                        gQSABIJbAQOP2UvzvDS7OweEDQz+CiAwACDwwV5PjCEsii6gpQh7WokdVSWYIJBAcHt2wD9fG3bA
                        nXJz2gfhmQOtRmD5uv7ta/jfbDUCr2AInTeo6QFWlSDSRzBBIIHg9gAgxe1FYAWzIRAOHSCgAYEU
                        Fnilw0grMWnycLSDUIYCCQS/BhQqA4M2np8NEBhJHoVGwm7PgYC/ZqbvGYPI0FGvlyA6XARtppIg
                        kEDwdqyAx/ItK9BSi9bHkj4wM42AVxVyfQAZPBoRBJFmolKRULKABIJfAQo8e1AV4XAmPX1YBOeu
                        iuYwKoxgYYwAmTvwCYQCSJXgnm7CaQkEtwcAou9dhdfmtW2IMJM+FdkrJW5p/wQAgcUIvGGjViiw
                        t0owQSCB4NeHCKQ4vzYmvSpOLgHB6jCCz2AosOfAUGYFEgiSIdB3FZ+Yc8+kT0HW+g6sChCUACPg
                        zi+1EtNCAUsQRFKDCQAJBL86RCAGCMRovzYSnYywYAOCAWAEUiPSSEPRDAXSEggODBE4M1gMVmDp
                        A61Q2IYGlWSxUOpF6BUIHdk7IEEggeBXg0JltH6gn/UFi8MItGzBxBgBKaGBNq0oOmw0DwylJRDs
                        0Aj4LrkKuz0aGrSHiXivAgkIpLMG2sOqEsxQIC2B4CC9wAKEBfid2478Qd/PGLRiocYeZpKzAVqR
                        kNVFKA8MpSUQnKQXSMyAMwGphmAwGAEHAt4+3SsV1hqKZiiQlkDQqRN4eoHFDKrg4CPJVYVSCKE1
                        LtVmDXqZgQwF0hIIDgwXpHQiEhpso8+kpiVaxyI+PWkhv1w4QSAtgeBCvYCXIUu/ow0NeAOTogBB
                        ZQ4+kz5vMQICGQqkJRCcoBcQ/Typp32v3eX5ISXv9doQ1p5CoQSAtASCg/UCckIESSxETil6YICe
                        HEwQSEsgOBkUEDBoHXIQgCAyBVly/gSBtASCJ+oFRXEyadpPCwQSCBSARWiOb2kCCQJpsI15CUJW
                        gp9LzugNXo06f3T8eFqau7DT8GumTU3SehRo/QosRsDBolK8ZDhBIC1Dg4v0AqnoiANEJexcggUG
                        GgCk86clI3jydbOYgXdM2QMCDxSyWCgtgeAGYEAdIOCBASUIpCUQvD4YkOH02rMEAhYgUIJAWgLB
                        fcCAOkCADMeuxtcpgSAtgeC1riMCCNrrNadG6wMSBNISCF4UDCzm4FmkQChBIC2B4EWvZ9l5zeuO
                        r6WlJRC84HXde70TANISCN7s+pZOx08ASEsgyOucAJCWQPBbr3s6f1paWlpaWlpaWlpaWlpaWlpa
                        WlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpaWlpa
                        WlpaWlpa2uX2PwEGALEkxMLShrT4AAAAAElFTkSuQmCC" transform="matrix(1 0 0 1 396.25 279.9814)">
                        </image>
                        </g>
                        <path fill="none" d="M336.987,689.765l-22.322-0.07c0,0-4.105,2.573-6.283,2.542h-3.843l-2.957-0.282c0,0-1.543-0.11-2.481-0.989
                        c0,0-0.749-0.537-1.215-0.777l-1.061-0.565c0,0-0.316-0.965-4.154-2.066"/>
                        <g>
                        <path fill="#8D83C6" d="M522.348,389.906c-0.006,0.003-0.011,0.003-0.018,0.006C522.147,390.011,522.321,389.923,522.348,389.906z"
                          />
                        <path fill="#8D83C6" d="M482.808,279.488c-0.02,0.02-0.04,0.041-0.06,0.061c0.013-0.012,0.019-0.017,0.034-0.031
                          C482.792,279.505,482.798,279.5,482.808,279.488z"/>
                        <path class="jiha" id="Casablanca-Settat" fill="#D2DBE0" d="M485.847,281.948c0.344,0.371,3.213,4.325,3.637,5.014c0.424,0.689,1.81,1.977,1.863,2.48
                        c0.053,0.503,0.318,0.742,0.371,1.165c0.053,0.424-0.371,0.583-0.98,1.245c-0.609,0.662,0,0.635,0,0.953
                        c0,0.318,0.318,0.953,0.397,1.827c0.079,0.874,0.556,0.371,0.635,0.424c0.079,0.053,0.609,0.185,0.609,0.185
                        s0.159,0.159,0.503,0.53c0.344,0.371,0.132,0.132,0.424,0.609c0.291,0.477,0.556,0.742,1.086,1.245
                        c0.53,0.503,0.291,0.503,0.371,0.715c0.079,0.212,0.768,0.344,0.768,0.344s0.291-0.053,0.45-0.159
                        c0.159-0.106,0.609-0.159,1.536-0.397c0.927-0.238,0.609-0.053,1.218-0.106c0.609-0.053,0.768,0.132,1.112,0.212
                        c0.344,0.08,0.132,0.212,0.132,0.212s0.9,0.027,2.357,0.053c1.456,0.026,0.424-0.132,0.98-0.477
                        c0.556-0.344,0.609-0.132,0.847-0.185c0.238-0.053,1.668,0.132,1.748,0.185c0.079,0.053,0.53,0.238,2.092,1.96
                        c1.562,1.721,0.503,0.9,0.715,1.457c0.212,0.556,0.847,0.953,0.847,0.953s0.397,0.344,0.424,0.424
                        c0.026,0.079-0.609,1.139-0.636,1.218c-0.026,0.079-0.053,1.536,0,1.986c0.053,0.45,0.662,0.45,1.059,0.794
                        c0.397,0.344,0.159,0.688,0.265,0.927c0.106,0.238,0.794,0.636,0.9,0.715c0.106,0.079,0.45,0.291,0.45,0.291
                        s-0.079,0.477-0.635,1.35c-0.556,0.874-0.079,0.159,1.006-0.423c1.086-0.583,0.503-0.609,0.609-0.848
                        c0.106-0.238,0.98-0.212,1.324-0.291c0.344-0.079,0.424-0.053,1.801-0.556c1.377-0.503,0.742-0.159,1.059-0.212
                        c0.318-0.053,1.562,0.08,2.118-0.079c0.556-0.159,0.185-0.344,0.583-1.139c0.397-0.795-0.053-0.265,0-1.165
                        c0.053-0.9,0.291-0.291,0.556-0.556c0.265-0.265,0.159,0,0.159,0s1.642-0.026,2.039-0.212c0.397-0.185,0.185-0.08,0.238-0.424
                        c0.053-0.344,0.106-0.45,0.185-0.636c0.079-0.185,0.238-0.185,0.583-0.45s0.689-0.344,1.033-0.583s0.212-0.238,0.9-0.53
                        c0.688-0.291,0.344,0,0.635-0.053c0.291-0.053,0.742-0.106,0.742-0.106s0.53-0.238,1.774-1.086c0.236-0.16,0.397-0.159,1.139-0.635
                        c0.742-0.477,0.477-0.344,0.821-0.742c0.344-0.397,0.609-0.768,1.059-1.351c0.45-0.582,0.53-0.582,0.847-1.165
                        c0.318-0.583,0.265-0.477,1.218-1.642c0.953-1.165,0.106-0.318,0.132-0.794c0.027-0.477-0.106-0.477-0.106-0.477
                        s-1.165-1.192-1.35-2.145c-0.185-0.953,0-0.265,0.185-1.112c0.185-0.847,0.133-0.371,0.45-1.509
                        c0.318-1.139,0.212-0.397,0.609-1.139c0.397-0.741,0.212-0.344,0.358-0.609c0.146-0.265-0.066-0.265,0.013-1.271
                        c0.079-1.006-0.053-0.477,0-0.9c0.053-0.424,0.106-0.477,0.238-0.821c0.132-0.344,0.318-0.265,0.662-0.556
                        c0.344-0.291,0.318-0.344,0.583-0.715c0.265-0.371,0,0,0.106-0.159c0.106-0.159,0.45-0.026,1.536-0.053
                        c1.086-0.026,0.927,0.079,1.562,0.079c0.636,0,0.503,0.689,0.503,0.689s0.688,0.927,0.847,1.377
                        c0.159,0.45,0.424,0.847,0.609,1.351c0.185,0.503,0.265,0.689,0.636,1.986c0.371,1.298,0.874,0.927,1.324,1.88
                        c0.45,0.953,0.847,0.026,1.562,0c0.715-0.027,0.847,0.344,1.298,0.662c0.45,0.318,0.874,0.715,1.033,0.874
                        c0.159,0.159,0,0.424,0,0.662c0,0.238,0.953,0.026,1.854,0.053c0.9,0.026,1.377,0.874,1.377,0.874s0.212,0.318,0.424,0.874
                        c0.212,0.556,0.344,0.583,0.45,0.847c0.106,0.265,0,0.768,0.53,2.701c0.53,1.933,1.006,0.874,1.297,0.874
                        c0.291,0,0.477,0.556,0.607,0.715c0.13,0.159,0.029,0.53,0.003,0.874c-0.027,0.344,0.159,0.424,0.185,0.53
                        c0.027,0.106,1.669,0.662,1.669,0.662s0.53,0.344,1.774,1.139c1.245,0.794,0.371,0,0.741,0.053
                        c0.371,0.053,0.132,0.079,0.953,0.503c0.821,0.424,0.318,0,0.635-0.159c0.318-0.159,0.344-0.185,0.583-0.344
                        c0.238-0.159-0.053-0.344,0-1.006c0.053-0.662,1.033,0.238,1.351,0.53c0.318,0.291,0.026,0.794,2.013,1.297
                        c1.986,0.503,1.059-0.106,2.013-0.185c0.953-0.08,1.43-0.503,1.88-0.583c0.45-0.079,0.662,0.662,1.192,1.562
                        c0.53,0.901,0.397,0.609,1.006,1.218c0.609,0.609,0.503,0.53,0.688,0.583c0.185,0.053,0.821,0.397,1.456,0.953
                        c0.636,0.556,1.245,0.874,1.589,0.9c0.131,0.01,0.177,0.011,0.199,0.01c0.076,0.058,1.976,1.531,2.132,1.817
                        c0.159,0.291,0.265,0.503,0.344,0.794c0.079,0.291,1.033,0.318,2.145,0.265c1.112-0.053,0.9-0.026,0.985-0.185
                        c0.085-0.159,0.18-0.741,0.789-1.271c0.609-0.53,0.768-0.715,0.847-0.715c0.079,0,0.609-1.906,0.821-2.542
                        c0.212-0.636,0.185-0.424,0.291-0.689c0.106-0.265,0.212-0.291,0.662-1.112c0.45-0.821,0.741-1.377,0.741-1.377
                        s0.159-0.477,0.768-1.907c0.609-1.43,0.053-0.397,0.106-0.689c0.053-0.291,0.053-0.291,0-0.503
                        c-0.053-0.212-0.503-1.086,0.265-2.966c0.768-1.88,0.424-0.874,0.477-1.351c0.053-0.477-0.159-0.583-0.238-0.874
                        c-0.079-0.291-0.053-0.159-0.424-0.715c-0.371-0.556-0.371-0.53-0.847-1.298c-0.477-0.768-0.344-0.424-1.059-1.483
                        c-0.715-1.059,0-0.344,0-0.609c0-0.265-0.026-0.45,0.053-0.715c0.079-0.265,0.238-1.96,0.344-2.436
                        c0.106-0.477,0.556-0.53,0.583-0.9c0.026-0.371,0.106-0.556,0.106-1.642c0-1.086,0.159-0.556,0.45-1.615
                        c0.291-1.059,0.132-0.715,0.238-2.092c0.106-1.377,0.132-0.715,0.318-1.351c0.185-0.635,0.053-0.291,0.45-1.615
                        c0.397-1.324-0.185-0.45-0.45-1.245c-0.265-0.794,0.106-0.794,0.424-1.43c0.318-0.636,0-0.397,0-0.662c0-0.265,0.424,0,0.953-0.026
                        c0.53-0.026,0.344,0.026,0.953,0.238c0.609,0.212,0.477,0.08,0.583-0.027c0.106-0.106,0.159-0.265,0.344-1.086
                        c0.186-0.821,0.08-0.45,0.424-0.874s0.609-0.477,0.609-0.477s-0.106-0.265-0.503-1.351c-0.397-1.086-0.079-0.371,0.901-0.98
                        c0.98-0.609-0.026-0.238-0.212-0.688c-0.185-0.45,0.238-1.562,0.318-1.669c0.08-0.106,0.371,0,0.927-0.238
                        c0.556-0.238,0.132-0.318,0.291-1.43c0.159-1.112,0.106-0.477,0.318-1.35c0.212-0.874,0.053-0.265,0.132-1.139
                        c0.079-0.874,0.026-0.344,0.106-1.006c0.079-0.662,0.185-0.212,0.583-0.583c0.397-0.371,0.185-0.212,0.212-0.424
                        c0.026-0.212,0.026-0.159,0.238-0.397c0.212-0.238,0.874-0.847,0.874-0.847s0-0.45-0.053-1.457
                        c-0.053-1.006-0.185-0.397-0.265-1.033c-0.079-0.635-0.106-0.424-0.477-1.933c-0.371-1.51,0.053-0.371,0.132-0.715
                        c0.08-0.344,0.344-0.635,0.477-0.741c0.132-0.106,0.238-0.477,0.238-0.768c0-0.291,0.026-0.238,0.026-0.874
                        c0-0.635-0.026-0.847-0.079-1.483c-0.053-0.635,0.053-0.371,0.291-0.821c0.239-0.45,0.159-0.159,0.344-0.45
                        c0.185-0.291,0.08-0.265-0.159-1.298c-0.238-1.033-0.106-0.212-0.371-0.927c-0.265-0.715-0.08-0.238-0.159-0.741
                        c-0.08-0.503,0.132-0.371,0.238-0.768c0.106-0.397,0.106-0.212,1.192-0.874c1.086-0.662,0.424-0.185,0.795-0.344
                        c0.371-0.159,0.291-0.45,0.185-0.662c-0.106-0.212-0.529-0.186-1.112-0.318c-0.582-0.132-1.748-0.371-1.748-0.371
                        s-0.344-0.185-1.059-1.351c-0.715-1.165-1.192-0.344-1.827-0.371c-0.636-0.027-1.404-0.053-1.748,0
                        c-0.344,0.053-0.742-0.212-1.96-0.45c-1.218-0.238-0.371-0.238-0.82-1.271c-0.449-1.033-0.08-0.556-0.398-1.589
                        c-0.318-1.033-0.265-0.768-0.556-2.163c-0.291-1.395-0.159-0.988-0.397-2.207c-0.238-1.218-0.079-0.556-0.238-1.536
                        c-0.159-0.98-0.026-0.583-0.079-1.086c-0.053-0.503-0.027-0.371-0.08-0.662c-0.053-0.291-0.635-0.45-1.059-0.795
                        c-0.424-0.344-0.609-0.238-1.43-1.033c-0.821-0.795-2.913-4.767-3.178-5.19c-0.265-0.424-1.404-1.43-1.748-1.933
                        c-0.344-0.503-2.304-4.316-2.171-4.449c0,0-8.739,5.031-10.646,6.62c0,0-2.277-0.636-2.86,0.583
                        c-0.583,1.218-6.25,5.826-7.891,5.508c-1.642-0.318-3.866-0.816-4.714,0.016c-0.847,0.832-5.349,4.963-5.932,4.751
                        c-0.583-0.212-1.854-0.514-2.383,0.008c-0.53,0.522-19.808,9.843-20.708,9.208c-0.901-0.635-2.489,0.212-2.966,1.006
                        c-0.477,0.794-5.385,9.374-8.209,5.914c-2.824-3.46-6.709,5.014-6.709,5.014s1.2,3.425,0.53,3.107
                        c-0.438-0.208-7.948,9.645-17.24,19.214c0.015-0.016,0.026-0.024,0.042-0.043C483.805,278.451,485.503,281.577,485.847,281.948z"/>
                      <path class="jiha" id="Rabat-Salé-Kénitra" fill="#D2DBE0" d="M576.802,221.464c0,0,2.699,2.888,2.858,3.55c0.116,0.482,1.628,2.819,1.591,2.832
                        c0.12,0,0.673-0.003,1.351-0.026c0.768-0.027,0.318,0.45,0.556,0.9c0.238,0.45,0.556,0.53,1.496,1.509
                        c0.94,0.98,0.093,0.98,0.013,1.51c-0.079,0.529,0.212,0.688,0.368,1.324c0.156,0.636,0.135,0.874,0.135,1.483
                        c0,0.609-0.45,0.106,0.292,1.033c0.741,0.927,0.132,0.768,0.132,1.174c0,0.406,0,0.468,0,0.574c0,0.106,0.768,1.96,0.847,2.039
                        c0.079,0.079,0.397,0.238,1.059,0.635c0.662,0.397,0.583,0.185,0.715,0.265c0.132,0.079,0.9,0.318,1.271,0.397
                        c0.371,0.08,1.165-0.026,1.165-0.026s0.874,0.159,1.324,0.318c0.45,0.159,0.159,0.132,0.371,0.318
                        c0.212,0.185,0.931,1.271,0.931,1.271s0.658,0,1.506-0.159c0.848-0.159,0.874-0.08,1.192-0.159c0.318-0.08,0.503,0.397,0.53,0.503
                        c0.027,0.106,0.742,0.768,0.847,1.006c0.106,0.238-0.159,0.874-0.159,1.059c0,0.185-0.53,1.218-0.848,1.748
                        c-0.318,0.53-0.583,0.715-0.927,0.768c-0.344,0.053-0.583,0.132-0.9,0.185c-0.318,0.053-0.371,0.847-0.371,1.086
                        c0,0.238,1.112,0.874,1.218,0.927c0.106,0.053,0.424,0.583,0.424,0.583s0.583,0.662,0.318,1.404
                        c-0.265,0.741-0.344,0.238-0.53,0.715c-0.185,0.477-0.927,1.457-1.086,1.774c-0.159,0.318-0.847,2.012-1.165,2.542
                        c-0.318,0.53,1.006,2.277,1.139,2.595c0.132,0.318,0,0.45,0,0.45s1.738,0.72,1.909,0.736c-0.084,0.007-0.19,0.083,2.142,0.297
                        c2.887,0.265,5.985,1.986,6.223,2.039c0.238,0.053,1.298,0.847,1.642,0.98c0.344,0.132,0.185-0.053,0.344-0.212
                        c0.159-0.159,0.741-0.106,1.006-0.45c0.265-0.344,1.854-0.688,2.013-0.927c0.159-0.238,0.159-0.609,2.039-1.165
                        c1.88-0.556,0.45-0.027,0.742-0.742c0.291-0.715,0.026-0.344,0.238-0.953c0.212-0.609,0.053-0.159,0.026-0.636
                        c-0.026-0.476-0.318-0.529-0.535-1.562c-0.217-1.033,0.005-0.371,0.455-0.953c0.45-0.583,0.185-0.106-0.053-0.636
                        c-0.238-0.53-0.159-0.318-0.344-1.165c-0.185-0.847,0.079-0.291,0.715-1.245c0.636-0.953,0.715-0.45,1.006-1.033
                        c0.292-0.583,0.265-0.477,0.292-0.715c0.026-0.238-0.132-0.291,0-1.324c0.132-1.033,0.238-0.98,0.371-1.695
                        c0.132-0.715,0.053-0.291,0.265-0.768c0.212-0.477,0.265-0.291,0.45-0.503c0.185-0.212,0.265-0.08,1.35-0.53
                        c1.086-0.45,0.768,0.583,0.768,0.689c0,0.106,1.827,0.556,2.198,0.768c0.371,0.212,0.874,0.238,0.874,0.238l0.795,0.238
                        c0,0,1.35,0.344,2.065,0.583c0.715,0.238,0.238,1.112,0.265,1.748c0.026,0.636-0.291,0.874-0.424,2.304
                        c-0.132,1.43-0.053,0.636-0.053,0.715c0,0.079,0.609,0.397,0.609,0.397s1.006,0.424,1.112,0.424c0.106,0,0.424-0.556,0.424-0.556
                        s0.503,0.265,2.436,1.165c1.933,0.9,0.265,0.238,2.145,1.351c1.88,1.112,0.371,0.026,0.503,0.026c0.133,0,0.556,0.159,1.642-0.397
                        c1.086-0.556,0.953-0.477,1.086-0.689c0.133-0.212,1.006-0.053,1.589-0.08c0.583-0.026,0.794,0.212,1.536,0.318
                        c0.742,0.106,0.45,0.08,0.662,0.053c0.212-0.027,2.463,0.477,3.098,0.53c0.636,0.053,0.768-0.265,0.53-0.503
                        c-0.238-0.238-0.371-0.344-0.291-1.404c0.079-1.059,0.371-0.424,0.556-1.059c0.185-0.635-0.185-0.609-0.503-1.192
                        c-0.318-0.582-0.159-0.503-0.212-1.404c-0.053-0.9,0.106-0.98,0.583-1.668c0.477-0.688,0.212-0.397,0.291-0.768
                        c0.08-0.371-0.106-0.45-0.291-0.9c-0.185-0.45-0.159-0.238-0.265-1.324c-0.106-1.086,0.635-0.53,0.741-1.218
                        c0.106-0.689,0.371-0.424,0.874-1.298c0.503-0.874-0.053-0.344-0.583-1.271c-0.53-0.927-0.53-0.397-0.318-1.006
                        c0.212-0.609,0.238-0.715,0.424-1.456c0.185-0.742,0.106-1.35,0.053-2.542c-0.053-1.192,0.186-0.503,0.583-1.324
                        c0.397-0.821,1.165-1.377,1.165-1.377s0.318-0.477,0.397-0.794c0.079-0.318,0.079-0.371,0.344-1.562
                        c0.265-1.192,0.079-0.662,0.079-1.245c0-0.583,0.053-0.397,0.159-0.688c0.106-0.291-0.265-0.053-1.562-0.953
                        c-1.297-0.9-0.053-0.636,0-1.112c0.053-0.477,0.027-0.238-0.053-0.477c-0.08-0.238-1.033-1.351-1.033-1.351
                        s-0.424-0.688-0.636-1.483c-0.212-0.794,0.583-0.397,0.609-0.874c0.027-0.477,0.027-0.344,0.053-0.927
                        c0.026-0.583,0.185-0.609,0.529-1.43c0.344-0.821,0-0.265,0.133-0.741c0.132-0.477,0-0.212-0.053-0.715
                        c-0.053-0.503-0.318-0.45-0.556-0.821c-0.238-0.371-0.741-0.371-2.013-1.721c-1.271-1.35-0.185-0.344-0.424-1.138
                        c-0.238-0.794,0.397-0.371,0.768-0.768c0.371-0.397-0.265-0.265-0.847-1.324c-0.583-1.059-0.768-1.112-0.768-1.112l-0.847-1.086
                        c0,0-0.053-0.477-0.106-1.059c-0.053-0.583-0.477-1.298-0.477-1.298s0.556-0.132,0.98-0.291c0.424-0.159,0.768-0.133,1.43-0.53
                        c0.662-0.397,0.424-0.212,0.45-2.039c0.026-1.827,1.006-0.715,1.615-1.245c0.609-0.53,2.198,0.53,2.198,0.53
                        s0.927,0.371,1.907,0.715c0.98,0.344,0.318,0.45,0.847,0.874c0.53,0.424,0.53,0.927,0.741,1.986c0.212,1.059,0,0.45,0.027,0.609
                        c0.026,0.159,0.265,0.238,0.477,0.132c0.212-0.106,0.53-0.185,1.006-0.424c0.477-0.238,2.701,0.026,3.257,0.106
                        c0.556,0.08,0.397,0.318,0.636,0.212c0.238-0.106,0.424-0.741,0.583-1.139c0.159-0.397,0.159-0.106,1.245-0.583
                        c0.868-0.381,0.523-0.206,0.428-0.16c0.165-0.078,0.899-0.079,1.399-0.184c0.503-0.106,0.291,0.132,0.424-0.133
                        c0.132-0.265-0.079-0.159-0.291-0.609c-0.212-0.45-0.185-0.238-0.344-0.609c-0.159-0.371-0.159-0.291-0.291-0.953
                        c-0.132-0.662,0-0.344,0.9-1.35c0.901-1.006,0.503-0.238,1.192-0.53c0.688-0.291,0.185-0.238,0.556-0.742
                        c0.371-0.503-0.291-0.953-0.477-1.351c-0.185-0.397,0.265-0.424,0.265-0.424s-0.212-0.027-1.404-0.053
                        c-1.192-0.026-1.589-1.006-1.854-1.351c-0.265-0.344-0.265-0.768-0.265-0.768s-0.132-0.265-0.556-1.483
                        c-0.424-1.218-0.106-0.344-0.079-0.927c0.026-0.583,0.132-0.212,0.477-0.715c0.344-0.503,0.397-0.08,0.768-0.238
                        c0.371-0.159,0.636-0.185,0.953-0.424c0.318-0.238,0.238-0.079,1.298-0.636c1.059-0.556,0.424-0.132,0.662-0.238
                        c0.238-0.106,0.953-0.503,1.245-1.509c0.291-1.006,0.344-0.212,0.477-0.291c0.133-0.079,1.192-0.318,1.245-0.397
                        c0.053-0.08,0.212-0.238,0.9-1.695c0.688-1.457,0.212-0.291,0.529-0.53c0.318-0.238-0.026-1.112-0.079-1.245
                        c-0.053-0.132-0.741,0-1.218,0c-0.477,0-0.159-0.027-2.065-0.291c-1.907-0.265-0.185-0.212-0.397-0.715
                        c-0.212-0.503-0.106-0.159-0.397-0.636c-0.291-0.477-0.159-0.212-0.185-0.768c-0.026-0.556,0.212-0.318,0.636-0.662
                        c0.424-0.344,0.238-0.132,0.053-0.927c-0.185-0.795,0,0-0.636-0.795c-0.636-0.794-0.079-0.371-1.854-0.476
                        c-1.774-0.106-0.265-0.106-0.318-0.397c-0.053-0.291-0.609-0.318-0.609-0.318s-1.245-0.397-1.562-0.794
                        c-0.318-0.397-0.265-0.291-0.583-0.689c-0.318-0.397-0.106-0.477-0.106-1.112c0-0.635-0.371-0.132-0.45-0.212
                        c-0.079-0.079-0.371-0.318-0.503-0.503c-0.132-0.185,0,0-0.53-0.424c-0.53-0.424-2.277-1.165-2.41-1.483
                        c-0.132-0.318-0.53-0.53-0.821-0.159c-0.291,0.371,0.185,0.371,0.265,1.086c0.079,0.715-0.08,0.397-0.053,1.324
                        c0.026,0.927-0.556,0.397-1.457,0.53c-0.9,0.132-0.768,0.212-1.668-0.477c-0.9-0.689-0.159-0.212-1.006-0.689
                        c-0.847-0.477-0.344-0.477-0.583-0.953c-0.238-0.477-0.159-0.291-0.847-0.45c-0.689-0.159-0.953-1.483-1.139-1.695
                        c-0.185-0.212-0.238-0.45,0-0.847c0.238-0.397,0.371-0.45,0.132-0.9c-0.238-0.45-0.212-0.583-0.185-1.404
                        c0.026-0.821,0.106-0.45,0.026-1.086c-0.079-0.636-0.238-0.53-0.397-1.403c-0.159-0.874,0.133-0.45,0.159-0.689
                        c0.027-0.238,0.106-0.424,0.583-1.536c0.477-1.112,0.159-0.556,0.132-1.112c-0.026-0.556,0.026-0.927-0.265-1.536
                        c-0.291-0.609-0.874,0-0.874,0s-2.118,0.079-2.939,0.159c-0.821,0.079-1.43-0.556-1.43-0.556s-0.185-0.026-0.953-0.212
                        c-0.768-0.185-0.9-0.185-1.165-0.636c-0.265-0.45-1.827-1.404-1.907-1.483c-0.079-0.079-0.159-0.053-0.159-0.053l-1.748,0.45
                        c0,0-1.112-0.08-1.562-0.106c-0.45-0.027-0.344-0.186-0.318-0.397c0.026-0.212-0.715-0.98-1.059-1.192
                        c-0.344-0.212-0.291-0.9-0.768-0.847c-0.477,0.053-0.344,0.503-0.609,0.795c-0.265,0.291-0.344,0.556-0.609,0.9
                        c-0.265,0.344-1.51,0.556-1.51,0.556s-1.96,0.053-2.092,0.027c-0.132-0.027-5.137-2.224-5.376-2.383
                        c-0.238-0.159-3.176-2.001-3.149-2.213c0-0.001,0.001-0.003,0.001-0.005c-5.292,12.64-11.449,24.879-18.001,33.165
                        c0,0-3.133,15.462-22.082,25.441c0.128-0.063,0.262-0.13,0.426-0.216C574.99,217.206,576.802,221.464,576.802,221.464z"/>
                      <path fill="#8D83C6" d="M308.575,743.868c-0.13,0.041-0.255,0.073-0.367,0.087C307.469,744.043,308.862,743.911,308.575,743.868z"
                        />
                      <path class="jiha" id="Marrakech-Safi" fill="#D2DBE0" d="M452.604,384.908c0.556,0.291,1.192,1.774,1.192,2.066c0,0.291,1.139,2.145,1.589,3.204
                        s0.132,0.794,0.45,1.642c0.318,0.847,0.477,2.039,0.477,2.039s0.927-0.344,1.324-0.344c0.397,0,0.185,0,0.715-0.318
                        c0.53-0.318-0.027-0.344,0-0.583c0.026-0.238,0.424-0.053,0.741-0.159c0.318-0.106,0.026-0.159-0.212-1.801
                        c-0.238-1.642,0.715-0.424,2.251-0.874c1.536-0.45,0.424,0.371,0.662,0.371c0.238,0,0.185-0.08,0.344-0.185
                        c0.159-0.106,0-0.159,0-0.159s0.98-1.774,2.807-2.092c1.827-0.318,0.265,0.397,0.344,0.556c0.079,0.159,0.132,0.53,0.609,1.51
                        c0.477,0.98,0.212,0.159,0.9,0.662c0.689,0.503,1.589,0.635,1.589,0.635l0.291-0.026c0,0,0.424-0.53,1.721-1.695
                        c1.298-1.165,0.742,0.212,1.298,0.53c0.556,0.318,0.662,0.265,0.741,0.212c0.079-0.053,0.053-0.291,0.185-0.45
                        c0.132-0.159,0.98-0.794,1.377-0.9c0.397-0.106,0.794,0.371,1.112,0.556c0.318,0.185,0.609,0.556,0.847,1.139
                        c0.238,0.583,0.689,1.112,1.51,2.728c0.821,1.615,0,0,1.774-0.344c1.774-0.344,0.662-0.477,0.848-0.556s1.139,0.185,1.43,0.268
                        c0.291,0.083,1.96,0.103,3.098-0.056c1.139-0.159,2.595,0.185,3.647,0c1.052-0.185,0.669,0.238,0.907-0.344
                        c0.238-0.582,0.026-0.212,0.371-1.006c0.344-0.794,0.318-0.424,0.291-1.509c-0.026-1.086,0.132-0.424,0.344-0.688
                        c0.212-0.265,0.53-0.265,0.927-0.794c0.397-0.53,0.9-0.291,1.536-0.768c0.635-0.477,0.609-0.291,0.9-0.45
                        c0.291-0.159,1.112-0.477,1.88-1.165c0.768-0.689-0.132-1.457,2.066-1.271c2.198,0.185,4.105,3.602,4.369,4.158
                        c0.265,0.556,0.026,1.059-0.477,1.642c-0.503,0.583,0,0.874,0,0.874s0.318,0.026,0.583,0c0.265-0.027,0,0,0.688-0.609
                        c0.689-0.609,0.503-0.079,1.165-0.185c0.662-0.106,0.609-0.026,1.562-0.106c0.953-0.08,3.098-0.583,3.813-0.98
                        c0.715-0.397,0.212-0.159,1.43,0.821s0.53,0.397,1.059,0.424c0.53,0.026,0.424-0.238,0.583-0.344c0.159-0.106,0.9,0.053,1.35,0.053
                        c0.45,0,0.371,0.583,0.609,0.794c0.238,0.212,0.397-0.106,0.583-0.265c0.185-0.159,0.529-0.503,0.9-0.742
                        c0.371-0.238-0.106-0.291,1.615,0.344c1.721,0.635,0.397,0.265,1.271,0.821c0.874,0.556,0,0,0.239-0.132
                        c0.238-0.132,0.635-0.212,1.033-0.344c0.397-0.132,0.662,0.08,1.854-0.503c0.558-0.273,0.65-0.312,0.627-0.297
                        c0.331-0.168,0.496,0.001,1.042-0.259c0.556-0.265,0.503-0.371,0.847-0.741c0.344-0.371,1.483,0.053,1.933-0.027
                        c0.45-0.079,0.741-0.424,1.404-1.192c0.662-0.768,1.774-0.821,1.774-0.821s0.583,0.397,0.953,0.662
                        c0.371,0.265,0.106,0.689,0.291,0.768c0.185,0.079,0.9,0.291,1.88,0.371c0.98,0.079,1.827,0.371,2.198,0.424
                        c0.371,0.053,0.397,0.397,0.583,0.265c0.185-0.133,0,0,0.768-0.768c0.768-0.768,0.132-0.212,0.132-0.212s-0.635-1.509,0.45-2.198
                        c1.086-0.689,0.079-0.742,0.291-1.589c0.212-0.847,0.185-0.318,0.397-1.006c0.212-0.689,0.133-0.53,0.583-1.668
                        c0.45-1.138,0.318-0.132,1.218-0.741c0.9-0.609,0.768-0.53,1.801-1.615c1.033-1.086,0.238-0.265,0.609-0.715
                        c0.371-0.45,1.456-1.324,2.251-1.668c0.794-0.344,0.53-0.159,0.662-0.344c0.132-0.185,0.079-0.344,0.847-1.668
                        c0.768-1.324,0.132-0.106,0.132-0.106s0.212,0.026,1.245-0.053c1.033-0.08,0.45-0.08,1.192-0.238
                        c0.741-0.159,0.768,0.477,1.033,0.715c0.265,0.238,0.609,0.768,1.43,0.583c0.821-0.185,0.477-0.397,1.43-1.35
                        c0.953-0.953,0.397-0.503,1.271-1.271c0.874-0.768,0.715-0.477,1.615-1.112c0.901-0.636,0.821-0.927,0.901-1.165
                        c0.079-0.238,1.695,0.106,1.933,0.133s1.112,0,2.992-0.53c1.88-0.53,0.503-0.927,0.503-0.927s0.503,0,0.927-0.132
                        c0.424-0.133,0.132-0.053,1.88-1.059c1.748-1.006,0.503,0.106,0.847,0.185c0.344,0.079,0.9,0.159,1.615,0.132
                        c0.715-0.026,0.318,0.027,1.112-0.397c0.794-0.424,1.059-0.477,1.351-0.715c0.291-0.238,0.291-0.053,1.986-1.086
                        c0.62-0.378,0.891-0.506,0.99-0.545c-0.063,0.008-0.161-0.01-0.142-0.196c0.053-0.53,0.079-0.397,0.503-0.847
                        c0.424-0.45-0.026-0.503,0.106-1.403c0.132-0.9,0.424-0.344,0.848-0.635c0.423-0.292,0.397-0.159,0.609-0.265
                        c0.212-0.106,0.424-0.027,1.139-0.212c0.715-0.185,0,0-0.027-0.503c-0.026-0.503,0.053-0.662,0.265-0.821
                        c0.212-0.159,0.424-0.265,0.688-0.874c0.265-0.609-0.159-0.397-0.583-1.801c-0.424-1.404,0.318,0.026,0.583-0.132
                        c0.265-0.159,0.239,0.026,0.424,0c0.185-0.027,0.424-0.159,0.927-1.986c0.503-1.827-0.238-0.503-0.688-0.98
                        c-0.45-0.477-0.185-0.053-0.609-0.371c-0.424-0.318,0,0-1.43-0.397c-1.43-0.397-0.397-0.212-0.503-0.424
                        c-0.106-0.212-0.212-1.351-0.98-1.351c-0.768,0-0.662-0.291-1.192-1.192c-0.53-0.9-0.026-0.238-0.265-1.165
                        c-0.238-0.927-0.08-0.291-1.88-1.774c-1.801-1.483-0.344-0.238-0.794-1.112c-0.45-0.874-0.795-0.318-1.377-0.847
                        c-0.583-0.53,0.027-0.265,0.159-0.636c0.132-0.371,0.609-0.371,1.721-2.172c1.112-1.801,1.192-0.026,2.065-0.238
                        c0.874-0.212,0.636-0.45,1.059-0.768c0.424-0.318,1.271-0.344,2.754-0.371c1.483-0.027,0.344,0.132,0.477,0.238
                        c0.132,0.106,1.615,0.424,1.615,0.424s2.436-0.185,3.787-0.397c1.35-0.212,0.45-0.159,0.424-0.318
                        c-0.026-0.159-0.026-0.53,0.424-1.88c0.45-1.351,0.397-0.45,1.112-1.006c0.715-0.556,0.106-0.212-0.027-0.556
                        c-0.132-0.344-0.238-0.371-1.827-1.615c-1.589-1.245-0.185-0.609-0.106-1.112c0.079-0.503,0.318-0.185,0.212-0.45
                        c-0.106-0.265-0.133-0.689-0.106-1.748s-0.026-1.271,0.556-1.748c0.582-0.477-0.027-0.344-0.874-1.245
                        c-0.847-0.9-0.424-0.742-0.556-1.006c-0.133-0.265-0.53-0.556-1.006-1.192c-0.477-0.635-0.477-0.635-0.477-0.635
                        s-0.291-0.583-0.53-2.039c-0.238-1.456-0.133-0.53-0.133-1.43c0-0.9,0.291-0.768,0.265-2.012c-0.027-1.245,0-0.609,0-1.854
                        c0-1.245,0-0.371,0.053-0.742c0.053-0.371,0.424-0.847,0.635-1.271c0.212-0.424,0.159-0.238,0.265-1.536
                        c0.106-1.298-0.265-0.662-0.477-1.006c-0.212-0.344-0.291-1.165-0.08-2.171c0.131-0.624,0.151-0.545,0.153-0.522
                        c0-0.014,0-0.061,0.006-0.193c0.027-0.53-0.079-0.397-0.424-0.609c-0.344-0.212-0.953-0.265-1.668-0.556
                        c-0.715-0.292-0.742,0.159-1.933-0.053c-1.192-0.212-0.45-0.318-0.715-0.768c-0.265-0.45-0.238-0.689-0.53-1.245
                        c-0.291-0.556-0.45-0.424-0.45-0.424s0,0-1.615-0.344c-1.615-0.344-0.291-0.503-0.318-0.953c-0.027-0.45,0,0-0.133-0.079
                        c-0.132-0.079-0.874-0.291-1.562-0.715c-0.688-0.424-1.456-0.212-1.456-0.212s-0.397-0.291-0.477-0.476
                        c-0.079-0.186-0.371-0.821-0.371-0.821s-0.371-0.583-0.847-1.88c-0.477-1.297-0.424,0.238-1.218,0.715
                        c-0.794,0.477-0.556,0.424-0.794,0.53c-0.238,0.106-0.689-0.185-0.689-0.185s-0.635-0.265-0.98-0.424
                        c-0.344-0.159-0.133,0.079-0.424,0.477c-0.291,0.397-0.715-0.053-1.165-0.344c-0.45-0.291-0.238,0.027-0.318-0.053
                        c-0.08-0.079-0.212-0.186-0.768-0.609c-0.556-0.424-0.9,0.874-0.9,0.874l-0.689-0.053c0,0-0.159-0.132-0.45-0.927
                        c-0.291-0.794-0.768,0.344-1.165,0.053c-0.397-0.291-0.344-0.159-1.907-0.503c-1.562-0.344-1.112-0.212-1.377-0.53
                        c-0.265-0.318-0.212-0.291-0.556-0.741c-0.344-0.45-0.662-0.424-1.218-1.351c-0.556-0.927,0.079-0.344-0.026-0.9
                        c-0.106-0.556-0.318-0.291-1.192-0.794c-0.874-0.503-0.503-0.636-0.821-1.589c-0.318-0.953-0.08-0.318-0.185-1.377
                        c-0.106-1.059-0.079-0.212-0.371-0.689c-0.291-0.477-0.424-0.874-0.768-1.801c-0.344-0.927-0.821-0.132-1.351-0.132
                        c-0.53,0-1.695-0.291-2.198-0.927c-0.503-0.636-0.238-0.344-0.424-0.662c-0.185-0.318-0.318-0.53-0.318-0.53
                        s-2.542-0.185-2.648-0.503c-0.106-0.318-0.583-0.662-0.583-0.662s-0.503-0.742-0.821-1.245c-0.318-0.503-0.344-0.689-0.503-0.98
                        c-0.159-0.291-0.185-0.689-0.609-1.933c-0.424-1.245-0.371-0.927-1.96-2.277c-1.589-1.35-0.609,0.053-1.165,0.318
                        c-0.556,0.265-0.106,0.424-0.212,1.298c-0.106,0.874,0.477,0.503,0.53,0.715c0.053,0.212,0,0.238-0.768,2.542
                        c-0.768,2.304-0.291,0.583-0.768,0.953c-0.477,0.371,0,1.351,0,1.668c0,0.318,0.344,0.556,1.086,0.741
                        c0.742,0.185,0.133,0.397,0.106,0.9c-0.026,0.503-0.079,0.688-0.106,1.483c-0.026,0.794-0.026,1.218-0.026,1.218
                        s-0.159,0.212-0.768,0.821c-0.609,0.609-1.245,1.43-2.065,2.357c-0.821,0.927-0.927,1.006-1.483,1.748
                        c-0.556,0.742-0.927,0.715-0.927,0.715s-2.648,1.377-2.807,1.457c-0.159,0.079-0.397,0.238-0.794,0.583
                        c-0.397,0.344-0.344,0.079-1.112-0.292c-0.768-0.371-0.371,0.079-0.768,0.212c-0.397,0.132,0,0.265,0,1.006
                        c0,0.742-0.371,0.583-0.371,0.583s-0.821,0.371-1.43,0.742c-0.609,0.371-1.642,0-1.642,0s0.026,0.159,0.053,0.423
                        c0.027,0.265,0.027,0.794,0.027,1.324c0,0.53-1.616,0.821-2.066,0.953c-0.45,0.132-1.112,0.477-3.363,0.847
                        c-2.251,0.371-1.033,0.424-1.88,0.635c-0.847,0.212-0.688,0.556-1.721,1.695c-1.033,1.139-1.43,1.112-2.489,0.715
                        c-1.059-0.397-0.318-0.291-0.503-0.953c-0.185-0.662-0.053-0.371-0.132-1.112c-0.079-0.741,0.344-0.583,0.583-1.006
                        c0.238-0.424-0.318-0.662-0.583-1.192c-0.265-0.53-0.794-0.9-0.953-1.298c-0.159-0.397-0.556-1.351-0.636-1.509
                        c-0.079-0.159-0.291-0.371-0.238-0.715c0.053-0.344,0.132-0.503,0.291-1.006c0.159-0.503,0.027-0.397,0-0.609
                        c-0.026-0.212-0.159-0.318-0.635-0.98c-0.477-0.662-0.477-0.662-0.768-1.43c-0.291-0.768-0.344-0.477-1.562-1.668
                        c-1.218-1.192-0.185,0.027-0.185,0.027s-0.371,0.212-0.768,0.556c-0.397,0.344-0.318,0.477-1.986,0.159
                        c-1.668-0.318-0.238,0.079-0.583,0.265c-0.344,0.185-0.265,0.212-0.794,0.318c-0.53,0.106-0.291-0.053-0.45-0.133
                        c-0.159-0.079-0.397,0-1.192-0.583c-0.794-0.582-0.45,0.053-1.033,0.08c-0.583,0.026-0.318,0.132-1.086,0.397s-0.715,0.079-1.43,0
                        c-0.715-0.079-0.953-0.132-1.192-0.291c-0.239-0.159-0.186-0.318-0.265-0.503c-0.079-0.185,0,0-1.218-0.927
                        c-1.218-0.927-0.477-0.635-2.569-2.727c-2.092-2.092-0.212-0.291-0.503-1.218c-0.292-0.927-0.265-0.662-0.371-1.271
                        c-0.106-0.609-0.424-0.582-0.662-1.006c-0.238-0.424,0.106-0.344,0.318-0.874c0.212-0.53,0.132-0.291,0.238-0.635
                        c0.106-0.344,0.583-0.344,0.98-0.636c0.397-0.291-2.577-3.963-3.372-5.234c-0.794-1.271-4.024-4.368-4.474-5.109
                        c0.018-0.019,0.028-0.029,0.044-0.047c-4.594,4.641-9.558,9.112-14.283,12.218c0,0-0.689,1.483,3.072,4.819
                        c0.967,1.303-3.443,5.614-3.443,5.614s-0.265,2.277,3.019,4.184c0,0-2.26,2.613-0.988,4.096c1.271,1.483-0.389,3.601-0.706,3.213
                        c-0.318-0.388-3.884,5.472-3.743,6.779c0.141,1.307-16.277,20.055-16.277,20.055l-0.265,5.102c0,0-4.767,5.191-4.82,5.349
                        c-0.053,0.159-0.265,3.337-0.265,3.337l-3.443,3.178l2.066,2.542c0,0,1.007,5.914,0.018,6.409
                        c-0.989,0.495-0.565,5.014-0.565,5.014s-1.836,1.907-1.518,2.471c0.318,0.565,1.589,3.531,1.589,3.531s0.015,0.188,0.036,0.474
                        c0.001,0,5.446,2.783,5.578,3.048C447.493,381.703,452.454,384.829,452.604,384.908z"/>
                      <path fill="#8D83C6" d="M654.953,208.593c-0.001,0-0.004,0.001-0.004,0.001C654.917,208.61,654.929,208.604,654.953,208.593z"/>
                      <path fill="#8D83C6" d="M441.863,379.612c0-0.037-0.015-0.255-0.031-0.498C441.843,379.274,441.853,379.442,441.863,379.612z"/>
                      <path fill="#8D83C6" d="M766.454,229.516c-0.058-0.011-0.098-0.019-0.098-0.019S766.411,229.516,766.454,229.516z"/>
                      <path class="jiha" id="Tanger-Tétouan-Al-Hoceïma" fill="#D2DBE0" d="M620.126,160.769c0.151,0.057,3.337,0.503,4.158,0.821c0.821,0.318,0.847-0.291,1.192-0.636
                        c0.344-0.344,0.159-0.026,0.741-0.715c0.583-0.689,0.397-0.371,0.397-0.371s1.297-0.132,1.509-0.238
                        c0.212-0.106,1.139,0.688,1.139,0.688s0.318,0.318,0.953,1.192c0.395,0.543,0.299,0.738,0.17,0.808
                        c0.171-0.043,0.44-0.126,0.678-0.278c0.371-0.238,0.344-0.132,1.695-0.927c1.351-0.795,1.059,0.371,1.721,0.794
                        c0.662,0.424,0.609,0.609,0.98,0.768c0.371,0.159,0.45,0.874,0.45,0.874s1.298,0.132,1.669,0.185
                        c0.371,0.053,0.291,0.503,0.291,0.503s0.556,0.344,2.94-0.132c2.383-0.477,0.821,0.079,1.006,0.079c0.185,0,1.006,0.318,1.96,0.794
                        c0.953,0.477,1.192,0.609,1.192,0.609s-0.053,0.98-0.424,1.509c-0.371,0.53,0.079,0.9,0,1.615
                        c-0.079,0.715-0.053,0.847-0.185,1.271c-0.133,0.424-0.291,0.159-0.794,0.821c-0.503,0.662,0,0,0.026,0.424
                        c0.026,0.423,0,1.827,0,1.827l0.185,0.212c0,0,0.556,0.583,0.635,2.304c0.079,1.721-0.238,0.98-0.185,1.112
                        c0.053,0.132-0.159,0.106,0.847,0.424c1.006,0.318,0.185,0.212,0.424,0.689c0.238,0.477,0.132,0.238,0.874,0.583
                        c0.742,0.344,0.159-0.027,0.291-0.636c0.132-0.609,0.106-0.371,0.159-0.741c0.053-0.371,0.635-0.45,1.139-0.821
                        c0.503-0.371,1.536,0.265,1.774,0.344c0.238,0.08,1.377,0.212,1.536,0.185c0.159-0.027,0.953,0.397,1.668,0.927
                        c0.715,0.53,0.185,0.503,0.185,0.609s0.159,0.159,1.827,0.847c1.668,0.689,0.026,0.132,0.821,1.827
                        c0.795,1.695,0.53,0.688,0.874,0.953c0.344,0.265,0.927,0.106,1.774,0.185c0.847,0.079,0.556,0.344,1.377,1.192
                        c0.821,0.847,0.741,0.768,1.033,1.139c0.291,0.371,0.371,0.397,0.953,1.483c0.583,1.086-0.397,0.371-1.351,0.874
                        c-0.953,0.503-0.106,0.397,0.185,0.9c0.291,0.503,0,0,0.238-0.132c0.238-0.133,0.344-0.027,1.298-0.265
                        c0.953-0.238,1.033,0.53,1.192,0.556c0.159,0.027,0.821,0.953,0.953,1.006c0.132,0.053,0.397,0.08,1.774,0.027
                        c1.377-0.053,0.344-0.953,0.397-1.88c0.053-0.927,0.397-0.344,0.9-0.609c0.503-0.265,0.953,0.106,1.139,0.106
                        c0.185,0,0.212,0.026,1.748-0.238c1.536-0.265,0,0-0.768-0.848c-0.768-0.847-0.027-0.53,0.132-1.297
                        c0.159-0.768,0.45-0.265,0.556-0.318c0.106-0.053,0.159-0.185,0.053-1.509c-0.106-1.324-0.291-0.503-0.291-0.503
                        s-0.053-0.794,0-1.483c0.053-0.689,0.053-0.265,0.133-0.98c0.079-0.715,0-0.45,0.132-1.244c0.132-0.795-0.027-0.45,0-0.847
                        c0.026-0.397,0.132-0.265,0.688-1.059c0.556-0.794,0.344-0.397,0.742-1.059c0.397-0.662,0.45-0.477,0.715-0.847
                        c0.265-0.371,0.556-0.291,0.927-0.477c0.371-0.186,2.066-0.847,2.41-1.086c0.344-0.238,0.371-0.45,0.689-0.741
                        c0.318-0.291,1.695,0.318,2.013,0.318c0.318,0,0.715,0.238,1.139,0.45c0.424,0.212,0.344-0.027,1.854-0.636
                        c1.509-0.609,0.609-0.318,1.351-0.953c0.742-0.636,1.986,0.185,3.045,0.159c1.059-0.026,0.185-0.079,0.397-0.503
                        c0.212-0.424,0.768-0.477,1.721-0.742c0.953-0.265,0.556,0.424,0.927,0.98c0.371,0.556,0.901,1.192,1.006,1.271
                        c0.106,0.079,0.397,0.9,0.397,1.589c0,0.689,0.371,0.98,0.556,1.51c0.185,0.53,0.265,0.344,1.059,1.324
                        c0.794,0.98,0.768,0.079,1.986,0.159c1.218,0.079,0,0,0.079,0.027c0.08,0.026,0.795,0.132,2.542,0
                        c1.748-0.132,1.509,0.212,2.224,0.53c0.715,0.318,0.291,0.953,0.291,0.953l1.43,0.106c0,0,0.344-0.027,0.53-0.185
                        c0.185-0.159,2.039-0.027,3.416,1.827c1.377,1.854,0.291-0.291,0.794-0.874c0.503-0.583,0.291-0.556,0.185-1.059
                        c-0.106-0.503,1.536-0.53,1.801-0.689c0.265-0.159,1.244,0.106,2.251,0.212c1.006,0.106,0.238-0.106,0.503-0.159
                        c0.265-0.053,0.45-0.159,0.768-0.397c0.318-0.238,0.53-0.238,0.98-1.165c0.45-0.927,0.186-0.371,0.212-0.45
                        c0.027-0.079,0.503-1.271,0.715-1.562c0.212-0.291,1.139-2.119,1.43-2.436c0.291-0.318,1.006,0.662,1.006,0.662l0.424,1.033
                        c0,0,0,0.53,0,0.715c0,0.185,1.351,1.192,1.615,1.351c0.265,0.159,0.742,0.159,0.847,0.212c0.106,0.053,1.192,0.106,1.192,0.106
                        s0.212-0.026,0.318-0.053c0.106-0.027,1.748-0.9,1.986-1.245c0.238-0.344,0.53-0.344,1.43-1.112
                        c0.901-0.768,0.583-0.609,0.874-1.377c0.291-0.768,0.106-0.371,0.307-0.742c0.201-0.371,0.62-0.291,0.832-0.45
                        c0.212-0.159,0.424-0.371,0.635-0.477c0.212-0.106,0.636,0.079,2.675-0.212c2.039-0.291,0.688-0.079,0.874-0.238
                        c0.185-0.159,1.324-0.371,2.145-0.556c0.821-0.186,0.741-0.397,2.039-1.006c1.298-0.609,0.371-0.742,0.45-1.139
                        c0.08-0.397-0.265-0.582-0.265-0.582s-0.132-0.689,0.106-1.112c0.238-0.424,0.662-1.165,0.662-1.165l0.079-0.847
                        c0,0,0.106-1.96-0.026-2.489c-0.132-0.53-0.132-0.185-0.027-1.35c0.106-1.165,0.212-0.318,0.133-1.192
                        c-0.079-0.874,0.106-0.689,0.106-0.689s-0.159-0.265-0.98-1.351c-0.5-0.661-0.664-0.8-0.718-0.809
                        c0.117-0.198,0.806-1.385,0.903-1.919c0.106-0.582,0.9-1.536,0.927-1.615c0.026-0.079-1.598-2.604-2.048-3.319
                        s-1.306-2.569-2.578-3.813c-1.271-1.245-0.168-6.029-0.035-7.909l-11.581,1.766l-2.33,1.977c0,0-10.239,2.119-11.722,0.989
                        c-1.483-1.13-17.866-1.13-19.067-7.697c0,0-6.674-2.277-7.628-5.667l-2.383-1.059l-5.879-7.309l-2.754-0.265l-1.854-8.315
                        l-2.331-0.371l-1.165-8.156l2.684-2.383l0.053-1.43c0,0-1.835,1.483-2.895,0.424c-1.059-1.059-4.449-2.683-6.921-0.847
                        c-2.472,1.836-4.236,4.802-4.943,4.52c-0.707-0.283-7.415-1.271-8.404,1.483c-0.989,2.754-2.189,1.977-2.824,0.847
                        c-0.635-1.13-5.651-1.413-6.215,1.341c-0.365,1.783-7.123,26.818-17.052,50.846c0.002-0.002,0.004-0.008,0.006-0.01
                        C614.766,157.353,618.325,160.08,620.126,160.769z"/>
                      <path fill="#8D83C6" d="M630.385,162.318c-0.096,0.024-0.17,0.04-0.17,0.04S630.306,162.361,630.385,162.318z"/>
                      <path class="jiha" id="Dakhla-Oued-Ed-Dahab" fill="#D2DBE0" d="M305.916,746.215c-2.587-0.07-3.843,0-3.843,0s-0.591,0-2.957-0.282c-2.365-0.283-1.774-0.777-3.696-1.765
                        c-1.922-0.989-0.517-0.283-1.33-0.918c-0.813-0.636-2.07-0.777-3.178-1.412c-1.109-0.636-0.443,0-1.478-0.424
                        c-1.035-0.424-1.922-0.071-4.878-0.565c-2.957-0.494-8.943,0.07-9.904,0.07c-0.961,0-1.035,0.07-2.809,0.494
                        c-1.774,0.424-2.218,0.353-3.843,0.424c-1.626,0.071-1.183,0.494-3.4,1.271c-2.218,0.777-1.035,0.353-1.626,0.565
                        c-0.591,0.212-1.256,0.565-2.365,0.777c-1.109,0.212-1.331,0.635-1.552,0.706c-0.222,0.071-5.913,0.283-6.726,0.283
                        c-0.813,0-2.07-0.071-3.622-0.212c-1.552-0.141-1.774-0.071-2.513-0.141c-0.739-0.071-3.326-0.353-4.73-0.777
                        c-1.404-0.424-1.774-0.212-3.622-1.059c-1.848-0.847-1.478-0.706-3.252-0.918c-1.774-0.212-2.217-1.13-2.587-1.271
                        c-0.37-0.141-1.035,0-3.4,0c-2.365,0-0.37,0.212-0.37,0.212s-1.035,0.848-2.661,1.766c-1.626,0.918-1.33,0.07-1.7,0
                        c-0.37-0.07-2.439,0.212-2.439,0.212l-0.37,0.07c0,0-1.404,0-3.917,0.071c-2.513,0.071-1.257,0.283-1.996,0.494
                        c-0.739,0.212-0.739,0.353-2.217,0.918c-1.478,0.565-2.365,1.412-2.365,1.412s-2.956-0.282-4.213-0.918
                        c-1.257-0.635-0.813-0.212-1.922-0.565c-1.109-0.353-0.887-0.918-1.109-1.906c-0.222-0.989-0.074-0.706-0.961-1.977
                        c-0.887-1.271-0.148-0.494-1.109-2.189c-0.961-1.695-0.148-0.565-0.517-1.201c-0.37-0.635-1.626-0.353-2.291-0.494
                        c-0.665-0.141-2.661-0.565-3.917-0.636c-1.257-0.071-1.035-0.847-1.331-0.989c-0.267-0.128-0.95-1.657-0.916-1.977
                        c-1.463,0.619-4.279,2.327-4.9,6.468c0,0-11.228,3.882-14.829,13.133l-12.57,12.535v2.33c0,0-15.677,3.072-21.291,21.927
                        c0,0-0.458,4.167,2.154-2.119c2.613-6.285,9.463-12.004,11.228-12.146c1.765-0.141,0.282,1.907,0.282,1.907
                        s-1.341,2.541-0.141,2.895c1.2,0.353-11.369,15.465-11.369,15.465l-0.283,3.319l-4.378,5.932c0,0-1.483,3.036-1.483,3.248
                        c0,0.212-0.918,2.19-0.918,2.19l-1.059,3.036l-3.249,3.248l-0.953,2.313c0,0,9.745,2.913-2.701,9.745l-1.907,1.271l0.583,3.548
                        l-2.489,2.33c0,0,3.019,10.593-3.76,13.029c0,0-1.907,19.173-11.122,13.135c-4.449-4.237-11.864,19.384-11.864,19.384l-0.53,2.33
                        c0,0-2.437,2.648-2.648,3.178c-0.212,0.53,0,3.813,0,3.813s0.659,1.165-0.094,2.012c-0.753,0.847-5.943,39.934-5.943,39.934v8.262
                        l0.635,2.119l2.895-15.395c0,0,2.754-3.812,2.754-4.095c0-0.283,1.271-7.628,1.271-8.122c0-0.494,0.142-2.824,0.142-2.824
                        l190.525,0.424l-3.107-63.839c0,0-5.084-16.101-0.212-21.185c4.873-5.085,25.21-21.397,25.21-21.397l11.016-1.059
                        c0,0,14.829-8.898,17.16-7.627l0.169-54.275l-22.308-0.07C312.199,743.673,308.503,746.285,305.916,746.215z"/>
                      <path fill="#8D83C6" d="M615.359,352.671c0,0,0.039-0.012,0.095-0.029C615.493,352.55,615.359,352.671,615.359,352.671z"/>
                      <path class="jiha" id="Béni-Mellal-Khénifra" fill="#D2DBE0" d="M666.768,277.711c-0.6-0.777,0-0.459-1.095-1.307c-1.095-0.847-1.518-1.059-1.518-1.059
                        s0.353-1.377,0.459-1.589c0.106-0.212,0.282-0.212,0.141-0.459c-0.141-0.247-0.494-1.059-0.494-1.589
                        c0-0.53-0.282-0.953-0.035-1.695c0.247-0.742,0.035-0.847,0.742-1.412c0.706-0.565,1.13-1.024,1.13-1.024s1.024-0.141-0.106-0.459
                        c-1.13-0.318-1.73-0.6-2.118-0.565c-0.389,0.035,0,0.035-1.024,0.071c-1.024,0.035-3.39-0.071-3.531-0.035
                        c-0.141,0.035-0.812-0.038-0.812-0.038s0.212,0.915-0.424,0c-0.635-0.915-0.741-1.127-0.847-1.233
                        c-0.106-0.106-0.389-0.318-0.636-0.424c-0.247-0.106-0.706-0.388-0.706-0.388s0.071-0.388,0.141-0.565
                        c0.071-0.176,0.459,0.106,0.424-0.847c-0.035-0.953-0.812-1.659-0.812-1.659l-0.742-0.777c0,0,0-0.424,0.212-1.059
                        c0.212-0.635,0.424-0.777,0.494-1.236c0.071-0.459,0.071-0.459,0.071-0.459l-0.53-0.883c0,0,1.201,1.059-0.494-0.494
                        c-1.695-1.553-2.648-2.083-2.683-2.189c-0.035-0.106,0.953-0.353-0.318-0.353c-1.271,0-3.001-0.388-3.637-0.388
                        c-0.636,0-1.306,0.141-1.589-0.141c-0.283-0.283-0.459-0.071-0.812-0.636c-0.353-0.565-0.53-0.494-0.812-0.988
                        c-0.283-0.494-0.777-0.918-0.883-1.095c-0.106-0.177-0.777-0.6-0.918-0.671c-0.141-0.07-0.883-0.635-0.918-0.141
                        c-0.035,0.494,0,1.412,0,1.73c0,0.318,0.035,1.059,0.035,1.059s0.459,1.165,0.459,1.448c0,0.283-0.424-0.247,0.212,0.671
                        c0.635,0.918,0.459,1.483,0.459,1.483s-1.024,1.271-1.448,1.589c-0.424,0.318,0.283,0.494-0.777,0.53
                        c-1.059,0.035-1.483,0.106-2.401-0.141c-0.918-0.247-0.706-0.282-1.554-0.494c-0.847-0.212-1.342-0.53-1.836-0.53
                        c-0.494,0,0.848-0.494-1.2,0c-2.048,0.494-0.883,0.847-2.26,0.847s-1.165-0.07-1.977-0.07c-0.812,0-2.26-0.389-2.26-0.389
                        s0.282-0.141-0.388-0.706c-0.671-0.565-0.177-0.812-1.412-0.847c-1.236-0.036-0.565,0.106-1.412-0.071
                        c-0.848-0.177-1.271-0.389-1.448-0.459c-0.177-0.07-1.412,1.236-1.589-0.6c-0.177-1.836-0.177-4.061-0.212-4.343
                        c-0.035-0.283,0.212-0.706-0.388-0.565c-0.6,0.141-1.412-0.342-1.412-0.342s-1.907-0.929-2.013-0.929
                        c-0.106,0-2.048-0.671-1.589,0.318c0.459,0.989,0.777,1.307,0.671,1.66c-0.106,0.353-0.106,0.035-0.212,0.777
                        c-0.106,0.742,0.353-0.176-0.424,1.377c-0.777,1.553-0.741,1.165-0.989,1.801c-0.245,0.629-0.212,0.844-0.074,1.26
                        c-0.039,0.004-0.087,0.163-0.103,0.824c-0.035,1.518,0.353,1.024,0.177,1.836c-0.177,0.812-0.106,0.494-0.282,1.554
                        c-0.177,1.059-0.283,1.518-0.283,1.518s-0.141,0.636-0.671,0.918c-0.53,0.283-0.424,0.106-0.848,0.318
                        c-0.424,0.212-0.212-0.071-0.883,0.247c-0.671,0.318-0.953,0.141-1.13,0.424c-0.177,0.282,0.53,0-0.459,0.565
                        c-0.989,0.565-0.989,0-1.271,0.706c-0.283,0.706-0.247,0.953-0.388,1.201c-0.141,0.247,0.247,0.247-0.389,0.459
                        c-0.635,0.212,0.353,0.423-0.883,0.212c-1.236-0.212-1.412,0.247-1.836-0.53c-0.424-0.777-0.706-1.236-0.706-1.236
                        s-1.306-0.989-1.412-1.13c-0.106-0.141-1.271-0.883-1.412-0.883c-0.141,0-1.342-0.318-1.342-0.318s-0.989,0.212-1.271,0.176
                        c-0.283-0.035-2.048-0.6-2.048-0.6l-3.954-0.635l0.247,0.212c0,0,0.424,0.565,0.212,0.777c-0.212,0.212-0.671-0.141-0.918,0.424
                        c-0.247,0.565-0.106,0.388-0.353,0.918c-0.247,0.53-0.247-0.247-0.459,0.953c-0.212,1.201-0.212,1.836-0.212,1.836
                        s0.141-0.141-0.389,1.165c-0.53,1.306-0.635,1.059-0.706,1.907c-0.07,0.848-0.212,0.318-0.07,1.236
                        c0.141,0.918,0.353,0.953,0.212,1.412c-0.141,0.459-0.318,0.177-0.671,0.742c-0.353,0.565-0.388,0.212-0.777,0.988
                        c-0.388,0.777-0.141,0.706-0.459,1.271c-0.318,0.565-0.494,0.883-0.494,0.883s0.565-0.106-0.282,0.283
                        c-0.847,0.388-1.554,0.494-1.66,0.918c-0.106,0.424-0.106,0.071-0.177,0.847c-0.071,0.777-0.212,0.953-0.282,1.447
                        c-0.071,0.494,0.141-0.388-0.177,0.918c-0.318,1.306-0.388,1.412-0.565,2.295c-0.176,0.883-0.106,0.636-0.424,2.154
                        c-0.318,1.518-0.424,2.189-0.424,2.189l-0.176,1.412c0,0-0.071,0.177-0.071,1.377c0,1.2-0.106,1.165,0.141,1.448
                        c0.247,0.283,0.247,0.035,0.565,0.565c0.318,0.53-0.141-0.318,0.424,0.706c0.565,1.024,0.459,0.353,0.706,1.836
                        c0.247,1.483,0.459,1.342,0.212,2.154c-0.247,0.812-0.494,0.671-0.529,1.095c-0.036,0.424,0.459,0.247,0.212,1.13
                        c-0.247,0.883-0.494,1.342-0.6,1.977c-0.106,0.636-0.035,0.812-0.141,0.953c-0.106,0.141-0.353,1.271-0.494,1.448
                        c-0.141,0.176-0.318-0.106-0.6,0.529c-0.282,0.636,0.318-0.706-0.565,1.095c-0.883,1.801-1.024,1.12-1.059,2.379
                        c-0.035,1.258-0.071,1.152-0.071,1.788c0,0.635,0.353,0.494-0.106,0.812c-0.459,0.318-0.353,0.07-0.706,0.494
                        c-0.353,0.424-0.247-0.212-0.742,0.918c-0.494,1.13-0.953,0.424-0.494,1.624c0.459,1.2,0.6,0.671,0.459,1.483
                        c-0.141,0.812-0.53,0.247-0.318,1.306c0.212,1.059,0.389,1.059,0.459,1.589c0.071,0.53,0.247,1.271,0.247,1.271l-0.495,0.953
                        l-0.706,1.624c0,0-0.106,0.106-0.071,1.307c0.035,1.2-0.141,0.247-0.071,2.224c0.071,1.977-1.342,0.071,0.141,2.613
                        c1.483,2.542,1.236,2.33,1.483,2.542c0.247,0.212,0.812,0.6,1.342,0.918c0.53,0.318,0.53,0.318,0.53,0.318s0.671,0.247,0.53,0.6
                        c-0.141,0.353,0.035,0-0.353,0.671c-0.388,0.671-0.565,0.212-0.706,0.953c-0.141,0.741-0.459-0.177-0.035,1.059
                        c0.424,1.236,0.459,0.565,0.283,1.342c-0.177,0.777-0.353,1.2,0.07,1.483c0.424,0.282,0.177-0.283,0.777,0.459
                        c0.6,0.741,0.212,0.176,0.777,1.095c0.565,0.918,0.6,0.741,0.777,1.13c0.177,0.388-0.071,0.918-0.071,0.918
                        s-0.565,0.459-1.13,0.635c-0.565,0.177-0.812-0.176-0.742,0.177c0.071,0.353,0.318,0.494,0.388,1.13
                        c0.071,0.635,0.318,0.141-0.424,0.847c-0.741,0.706,0.671,0.6-1.024,0.706c-1.695,0.106-0.989-0.106-2.013,0.035
                        c-1.024,0.141-1.448,0.176-2.154,0.318c-0.706,0.141-0.918,0.318-0.918,0.318s-0.318,0.071-1.095,0.035
                        c-0.777-0.035-0.035,0.141-1.13-0.283c-1.095-0.424-1.765-0.035-2.118,0.141c-0.353,0.176,0.07-0.282-0.777,0.353
                        c-0.847,0.635-1.377,0.918-1.518,1.024c-0.141,0.106-1.024-0.635-0.212,0.318c0.812,0.953,1.095,1.13,1.095,1.13l0.635,0.812
                        c0,0,0-0.212,0.636,1.024c0.636,1.236,0.812,1.342,0.812,1.342s0.282-0.353,0.777,0.6c0.494,0.953,0.459,0.53,0.565,1.13
                        c0.106,0.6-0.6,0.388,0.388,0.741c0.989,0.353,0.918,0.247,1.236,0.247s0.635-0.53,1.271-0.282
                        c0.636,0.247,0.812-0.106,0.989,0.353c0.176,0.459,0.035-0.07,0.212,0.847c0.176,0.918,0.212,0.424-0.141,1.377
                        c-0.353,0.953-0.282,0.07-0.459,1.165c-0.177,1.095,0,0.671-0.282,1.589c-0.282,0.918-0.424,1.201-0.424,1.201s0.071,0-0.035,0.459
                        c-0.106,0.459-0.106,0.459-0.247,0.6c-0.141,0.141-0.459,0.353-0.459,0.459c0,0.106-0.247,0.424-0.247,0.424
                        c0.706,0.636,1.765,2.754,2.048,2.683c0.282-0.071,1.059-0.283,1.554-0.283c0.494,0,1.836,0.141,2.048-0.141
                        c0.212-0.283,0.212-2.472,0.847-0.565c0.636,1.907,0.424,1.624,0.918,2.331c0.494,0.706,9.657,0.318,9.657,0.318
                        s1.677-2.931,1.907-3.76c0.229-0.83,0.282-0.547,0.388-1.66c0.106-1.112,0.159-1.642,0.159-1.642s-0.159-0.724-0.088-0.848
                        c0.07-0.124,0.406-1.624,0.794-1.801c0.388-0.177-0.177-1.13,0.812-0.247c0.989,0.883,0.741,1.059,1.659,1.13
                        c0.918,0.07-1.2,0.53,2.013-0.035c3.213-0.565,6.214-1.624,6.32-2.012c0.106-0.389-0.636-0.318,0.247-0.742
                        c0.883-0.424,1.095-0.777,1.412-0.671c0.318,0.106,1.024,0.388,1.095,0.494c0.071,0.106-0.741,1.165,0.318,0.212
                        c1.059-0.953,1.907-1.766,1.907-1.766s0.141,0,0.883-0.883c0.741-0.883,1.448-1.483,1.448-1.483s9.463-2.789,10.169-2.966
                        c0.706-0.176,1.024-0.247,1.554-0.565c0.53-0.318,0.388-0.07,1.13-0.847c0.742-0.777,1.024-1.271,2.083-2.189
                        c1.059-0.918,1.695-1.483,2.613-2.401c0.918-0.918,0.989-1.448,1.766-1.554c0.777-0.106,2.789-0.636,2.789-0.636
                        s1.201-0.071,1.624-0.706c0.424-0.636,0.565-0.424,0.706-0.848c0.141-0.423,0-1.412,0.318-2.154
                        c0.318-0.742,0.353-0.812,0.459-1.201c0.106-0.388,0.388-0.989-0.177-1.342c-0.565-0.353-0.176-0.424-1.094-0.353
                        c-0.918,0.071-0.742,0.127-1.095-0.025c-0.353-0.152-0.282-0.187-0.53-0.293c-0.247-0.106-0.459-0.141-0.53-0.247
                        c-0.071-0.106-0.282,0.035-0.177-0.53c0.106-0.565,0.283-3.99,0.283-3.99s0.424-0.671,1.165-1.412
                        c0.741-0.742,1.342-1.059,1.342-1.059s0.635-0.176,1.448-0.6c0.812-0.424,1.448-0.918,2.013-1.165
                        c0.565-0.247,0.812,0.141,1.66-0.953c0.847-1.095,0.883-1.095,0.989-1.306c0.106-0.212,0.424-0.071,0.635-1.024
                        c0.212-0.953,0.071-1.165,0.459-1.342c0.388-0.177,0-0.212,0.848-0.565c0.847-0.353,0.989-0.353,2.013-0.494
                        c1.024-0.141,2.048-0.177,2.436-0.53c0.388-0.353,0.141-0.953,1.342-0.953c1.2,0,1.2-0.07,1.659,0.141
                        c0.459,0.212,0.53-0.424,0.353-0.742c-0.177-0.318-0.565-0.282-0.53-1.024c0.035-0.742,0.141-1.024,0.035-1.236
                        c-0.106-0.212-0.636-0.283-0.212-0.671c0.424-0.388,1.059-0.706,0.106-0.777c-0.954-0.07-0.777-0.141-1.412-0.494
                        c-0.636-0.353-1.271-0.283-1.412-0.777c-0.141-0.494-0.53-0.177-0.141-0.777c0.389-0.6,1.095-1.483,1.271-1.73
                        c0.177-0.247,0.424-2.189,0.424-2.189s0-0.918,1.236-1.2c1.236-0.283,1.412-0.318,1.412-0.318s2.013,0.141,2.083-0.071
                        c0.07-0.212,0.057-0.424,0.435-1.201c0.377-0.777,0.625-1.024,0.66-1.624c0.035-0.6-0.141-0.706,0-1.236
                        c0.141-0.53-0.318-0.565,0.388-0.777c0.706-0.212,0.459-0.706,0.953-0.141c0.494,0.565,0.565,0.883,0.777,0.883
                        c0.212,0,0.53,0.671,0.565-0.671c0.035-1.342-0.035-1.342,0.141-1.801c0.176-0.459,0.742-0.389,0.847-1.413
                        c0.106-1.024,0.141-0.565,0.459-1.801c0.318-1.236,0.812-0.636,0.6-2.613c-0.212-1.977-0.883-3.284-0.953-3.495
                        c-0.071-0.212-0.636-0.53-0.283-0.953c0.353-0.424,0.495-0.6,0.495-0.6s0.455-0.353,0.793-1.306s0.196-1.377,0.69-1.659
                        c0.494-0.283,0.6,0.176,1.165-0.918c0.565-1.095,0.706-1.518,1.236-1.977c0.53-0.459,1.765,0.212,0.918-1.412
                        S667.369,278.488,666.768,277.711z"/>
                        <path class="jiha" id="Oriental" fill="#D2DBE0" d="M846.383,269.766c0,0,4.661-4.237,3.602-7.097c-1.059-2.86-9.745-10.805-9.745-10.805l2.754-13.664
                          c0,0,2.436-10.381-4.449-10.593c-6.885-0.212,1.165-5.826,1.165-5.826l-1.271-5.402c0,0,3.919-13.665,1.271-16.948
                          c-2.648-3.284-1.695-8.368-1.695-8.368l-3.178-4.767l3.072-3.919l-6.25-8.898l4.131-7.415l-11.228-8.792l-4.131-2.118l-3.813-2.648
                          l-2.754-3.495l-0.847-2.648v-0.636l-9.004-3.283c0,0-6.779,6.673-14.936,1.801c0,0-6.885,5.614-10.169-6.25v-3.283
                          c0,0-2.119-0.741-1.801-2.013c0.318-1.271,1.059-6.779,1.059-6.779l-1.377,0.106c0,0-4.555,11.228-7.097,8.58l-3.036,3.778
                          l-5.014,0.282c0,0-1.482,1.907-1.765,2.119c-0.283,0.212-13.418-1.835-16.878-6.214c-1.322-1.366-3.884,0.424-3.884,0.424
                          s-0.845,8.066-8.211,2.65c0.137,0.137,0.202,0.21,0.336,0.246c0.291,0.079-1.253,4.713-0.246,5.401
                          c1.006,0.688,2.63,5.208,3.036,5.367c0.406,0.159,2.119,2.066,2.436,2.436c0.318,0.371-0.177,1.042-0.494,1.607
                          c-0.318,0.565-0.177,0.459-0.265,0.759c-0.088,0.3-0.265,0.635-0.441,0.812c-0.177,0.177-0.106,0.106,0,1.236
                          c0.106,1.13,0.353,0.741,0.565,1.024c0.212,0.282,0.194,0.353,0.3,0.759c0.106,0.406-0.053,0.371-0.282,0.989
                          c-0.23,0.618,0.176,0.971,0.388,1.518c0.212,0.547,0.159,0.424,0.371,1.448c0.212,1.024-0.477,0.423-0.477,0.494
                          c0,0.071,0.018,0.176,0.194,2.154c0.177,1.977-0.441,0.671-0.936,1.483c-0.494,0.812,0.212,0.53,0.229,0.671
                          c0.018,0.141-0.053,0.918-0.053,0.918s0.653,0.212,1.024,0.353c0.371,0.141,0.318,0.212,0.812,0.335
                          c0.494,0.124,0.512,0.177,1.96,0.124c1.448-0.053,0.3,0.212,0.3,0.3c0,0.088,0.759,0.53,0.883,0.583
                          c0.124,0.053,1.377,0.353,1.377,0.353s0.936-0.053,1.112-0.088c0.177-0.035,3.001,0.706,3.248,0.953
                          c0.247,0.247,0.671,0.671,1.024,1.183c0.353,0.512-0.106,0.335-0.583,0.812c-0.477,0.477,0.512,0.953,0.53,1.059
                          c0.018,0.106,0.318,1.324,0.512,1.783c0.194,0.459-0.159,0.565-0.529,1.024c-0.371,0.459-1.059,0.618-1.059,0.83
                          c0,0.212,0.406,0.53,1.042,1.395c0.636,0.865,0.053,0.141,0,1.024c-0.053,0.883-0.159,0.265-0.282,0.6s-1.854,0.547-1.854,0.547
                          s0.229,0.159,0.247,0.741c0.018,0.583-0.318,0.9-0.724,1.677c-0.406,0.777-0.3,0.53-0.529,1.049
                          c-0.229,0.52-0.336,0.398-0.706,0.681c-0.371,0.282-0.83,0.159-1.501,0.106c-0.671-0.053-0.777-0.953-0.989-0.759
                          c-0.212,0.194-0.636,0.494-0.989,1.095c-0.353,0.6-0.035,0.441-0.088,1.147c-0.053,0.706,0.141,0.371,0.212,1.024
                          c0.07,0.653,0.018,1.006,0.018,1.501c0,0.494-0.053,0.989-0.141,1.607c-0.088,0.618-0.388,0.424-0.847,0.741
                          c-0.459,0.318-0.212,0.565-0.3,1.183c-0.088,0.618-0.724,0.318-1.024,0.565c-0.3,0.247-0.088,0.194-1.624,0.795
                          c-1.536,0.6-0.071,0.141-0.177,0.353c-0.106,0.212-0.318,0.53-0.318,0.636s0.335,0.371,0.565,0.724
                          c0.23,0.353,0.106,0.495,0.071,1.448c-0.035,0.953-0.018,0.583-0.123,0.883c-0.106,0.3-0.124,0.547-0.194,0.865
                          c-0.071,0.318,0.23,0.23,0.512,0.9c0.282,0.671-0.141,1.024-0.424,1.448c-0.282,0.424-0.353,0.441-0.636,1.041
                          c-0.282,0.6-0.388,0.636-1.112,0.883c-0.724,0.247-0.847,0.353-1.006,0.583c-0.159,0.229-0.177,0.529-0.035,0.565
                          c0.141,0.035,0.759,0.706,1.042,1.2c0.282,0.494,0.177,0.353,0.229,1.095c0.053,0.741,0.335,0.353,0.335,0.353
                          s1.13-0.282,1.801-0.088c0.671,0.194,0.459,0.883,0.6,1.359c0.141,0.477,0.071,0.6,0.035,1.059
                          c-0.035,0.459-0.441,1.218-0.441,1.218s-0.053,0.653,0,3.601c0.017,0.954,0.025,1.338,0.03,1.45
                          c-0.134,0.315-0.569,0.214-0.612,0.387c-0.053,0.212-0.053,1.094,0.388,1.518c0.442,0.424,0.247,0.212,0.265,1.483
                          c0.018,1.271-0.265,0.83-0.618,1.854c-0.353,1.024-1.306,0.459-2.489,0.741c-1.183,0.283-0.124,0.247-0.247,0.724
                          c-0.124,0.477,0.177,0.671-0.141,1.112c-0.318,0.441-0.018,0.565,0,0.777c0.018,0.212,0.106,0.265,0.282,0.9
                          c0.176,0.636,0.071,0.371,0.018,2.242c-0.053,1.871-0.441,0.565-0.971,1.165c-0.53,0.6-1.412,1.783-1.712,2.154
                          c-0.3,0.371-0.318,0.759-0.336,1.306c-0.018,0.547,0.388,0.547,0.671,1.147c0.282,0.6,0.176,0.759,0.318,1.236
                          c0.141,0.477-0.247,0.353-1.165,1.165c-0.918,0.812-1.766,0.918-1.907,0.918s-0.865,0.106-0.953,0.265
                          c-0.088,0.159,0.141,0.335,0.353,0.83c0.212,0.494-0.494,0.688-1.042,0.918c-0.547,0.23-1.377,0.23-2.493,0.512
                          c-1.116,0.283,0.057,0.794,0.004,1.218c-0.053,0.424,0.459,0.689,0.865,2.101c0.406,1.412-0.177,0.406-0.547,1.165
                          c-0.371,0.759-0.053,0.812,0,0.9c0.053,0.088,0.123,0.071,1.412,0.847c1.289,0.777,0.688,0.124,0.936,0.124
                          c0.247,0,0.953,0.159,1.43,0.53c0.477,0.371,0.706,0.812,1.801,0.212c1.095-0.6,0.318-0.265,0.671-0.635
                          c0.353-0.371,0.247-0.071,0.547-0.159c0.3-0.088,0.847-0.865,1.095-1.094c0.247-0.23,0.247-0.088,1.324-0.424
                          c1.077-0.335,0.265,0.265,0.565,0.812c0.3,0.547,0.088,0.547,0.883,0.883c0.794,0.335,0.035-0.106,0.936-0.83
                          c0.9-0.724,0.035-0.406,0.018-0.477c-0.018-0.071-0.371-0.106-1.077-0.582c-0.706-0.477-0.159-0.159-0.265-0.83
                          c-0.106-0.671,0.053-0.459,0.176-0.971c0.124-0.512,0.071-0.229,0.336-0.6c0.265-0.371,0.265-0.23,0.636-0.653
                          c0.371-0.424,0.106-0.176,0.229-0.53c0.124-0.353-0.018-0.247-0.053-0.565c-0.035-0.318,0-0.106,0.247-0.459
                          c0.247-0.353,0.442-0.512,1.095-1.112c0.653-0.6,0.035-0.106,0.777-0.424c0.742-0.318,0.159-0.018,0.9-0.212
                          c0.741-0.194,0.265-0.229,0.477-0.512c0.212-0.283,0.071-0.088,0.424-0.653c0.353-0.565,0.071-0.176,0.124-0.353
                          c0.053-0.177,0.035-0.282,0.406-0.742c0.371-0.459,0.071-0.335,0.071-0.494c0-0.159,0.583-1.024,1.342-1.201
                          c0.759-0.177,0.3,0.018,0.918-0.388c0.618-0.406,0.265-0.176,0.671-0.706c0.406-0.529,0.141-0.282,0.53-0.9
                          c0.388-0.618,0.176-0.3,0.335-0.653c0.159-0.353,0.124-0.318,0.442-0.759c0.318-0.441,0.212-0.3,0.424-0.777
                          c0.212-0.477,0.424-0.865,0.424-0.865s0.265-0.353,0.565-0.653c0.3-0.3,0.847-0.671,1.148-1.077c0.3-0.406,0.759-0.618,0.847-0.936
                          c0.088-0.318,0.318-0.865,0.406-1.13c0.088-0.265,0.265-0.6,0.6-0.9c0.335-0.3,1.024-0.442,1.253-0.442
                          c0.23,0,0.618,0.318,0.759,0.353c0.141,0.035,0.388,0.088,0.847,0.335c0.459,0.247,1.112,0.265,2.754,0.724s1.042,0.706,1.059,0.83
                          c0.018,0.124,0,0,1.218,0.618c1.218,0.618,0.371,0.3,0.494,0.512c0.124,0.212,0.212,0.918,0.194,1.2
                          c-0.018,0.283,0.141,0.442,0.141,0.442s1.13,0.388,2.948,1.024c1.818,0.636,0.6,0,0.936,0.159c0.335,0.159,0.989,0.353,1.342,0.406
                          c0.353,0.053,0.371-0.229,0.953-0.565c0.583-0.335,0.865-0.053,1.624,0.636c0.5,0.453,0.463,0.53,0.38,0.531
                          c0.35,0.067,1.592,0.304,1.879,0.334c0.335,0.035,1.342,0.229,2.03,0.353c0.688,0.124,0.618,0.371,2.242,0.3
                          c1.624-0.071,0.742,0.23,0.83,0.353c0.088,0.124,0.353,0.194,1.518,0.971c1.165,0.777,0.265,0.653,0.3,0.936
                          c0.035,0.283,0.018,0.547-0.565,0.971c-0.583,0.424-1.006,1.006-1.218,1.271c-0.212,0.265-0.106,0.265-0.265,0.989
                          c-0.159,0.724-0.3,0.706-0.424,1.147c-0.124,0.441-3.813,3.301-4.025,3.602c-0.212,0.3-0.335,0.812-0.318,1.183
                          c0.018,0.371-0.441,1.148-1.995,1.465c-1.554,0.318-1.148,0.371-2.03,1.059c-0.883,0.689,0.3,0.83,0.3,0.83l-0.124,0.424
                          c0,0,0.565,0.265,1.165,0.671c0.6,0.406,0.883,0.035,1.359,0.035s0.689,0.212,0.953,0.459c0.265,0.247,0.794,0.777,0.989,1.006
                          c0.194,0.229,0.177,0.141,1.112,0.724c0.936,0.583,1.165,0.635,2.101,1.306c0.936,0.671,0.565,0.335,0.936,0.565
                          c0.371,0.229,0.724,0.159,1.501,0.441c0.777,0.282,0.618,0.9,0.494,1.201c-0.124,0.3-0.565,0.9-0.6,1.147
                          c-0.035,0.247,1.077,0.088,2.313,0.177c1.236,0.088,0.371,0.265,0.671,0.83c0.3,0.565,0.247,1.148,0.265,1.377
                          c0.018,0.23,0.6,0.441,1.095,0.954c0.494,0.512,0.494,0.618,0.918,1.607c0.424,0.988,0.406,1.359,0.547,2.207
                          c0.141,0.847,0.512,0.812,1.377,1.854c0.865,1.042,0.3,0.371,0.812,0.689c0.512,0.318,0.724,0.459,0.883,0.741
                          c0.159,0.283-0.053,0.83-0.336,1.289c-0.282,0.459-0.282,0.477-0.547,0.689c-0.265,0.212-3.16,0.088-4.361,0.547
                          c-1.201,0.459-0.477,0.3-0.9,0.759c-0.424,0.459-0.459,0.477-1.165,0.865c-0.706,0.388-0.653,0.371-2.436,0.812
                          c-1.783,0.441-1.536-0.212-1.942-0.176c-0.406,0.035-0.742,0.212-1.412,0.53c-0.671,0.318-0.494,0.353-2.154,0.971
                          c-1.659,0.618-0.671,0.176-2.33,0.229c-1.659,0.053-1.042,0.159-1.818,0.282c-0.777,0.124-0.759,0.212-1.13,0.353
                          c-0.371,0.141-0.794,0.053-0.794,0.053s-1.183,0.441-2.948,0.512s-1.483-0.124-1.642-0.141c-0.159-0.018-0.106,0-2.013,0.229
                          c-1.907,0.23-0.636,0.212-1.042,0.247c-0.406,0.035-0.3-0.388-1.2-0.9c-0.9-0.512-0.441-0.071-0.689,0.053
                          c-0.247,0.124-0.141,0.247-0.441,0.388c-0.3,0.141-0.159,0.176-0.689,0.247c-0.53,0.071-0.247,0-1.042-0.3
                          c-0.794-0.3-0.353-0.777-1.43-1.095c-1.077-0.318-1.13,0.547-1.218,0.847c-0.088,0.3-0.388,0.477-0.777,1.059
                          c-0.388,0.583-0.124,0.565-1.077,1.059c-0.953,0.494-0.336,0.494-0.812,1.042c-0.477,0.547-0.724,0.865-1.236,1.501
                          c-0.512,0.635-0.547,1.448-0.936,1.907c-0.388,0.459-0.247,0.918-0.635,1.271c-0.388,0.353-1.395,1.077-1.677,1.536
                          c-0.282,0.459-0.247,0.688-0.441,1.571c-0.194,0.883-1.2,1.077-1.695,1.73c-0.494,0.653-1.483,0.688-1.536,0.812
                          c-0.053,0.124,0.141,1.218-0.018,1.677c-0.159,0.459-0.353,0.653-0.759,1.077c-0.406,0.424-0.618,0.494-0.671,0.688
                          c-0.053,0.194,0.159,0.194,0.194,1.271c0.035,1.077-0.247,0.494-0.318,0.618c-0.071,0.124-3.107,2.93-3.743,3.478
                          c-0.635,0.547-0.177,0.494-0.688,1.289c-0.512,0.795-0.018,0.212,0.07,2.26c0.089,2.048-0.247,0.406-0.494,0.971
                          c-0.247,0.565,0.247,0.759,0.53,1.148c0.282,0.388,0.618,0.689,1.889,1.659c1.271,0.971,0.388,0.812,0.388,1.307
                          c0,0.494,0.053,1.077,0.124,1.748c0.071,0.671,0.247,0.3,0.971,1.271c0.724,0.971,0.547,0.724,1.218,1.677
                          c0.671,0.953,0.689,0.565,1.165,0.953c0.477,0.388,0.83,1.112,1.042,1.465c0.212,0.353,1.059,1.448,1.324,2.472
                          c0.265,1.024,0.283,0.618,0.953,1.942c0.671,1.324,0.424,1.995,0.424,1.995s0.106,0.106,0.989,0.565
                          c0.883,0.459,0.141,0.123,0.371,0.565c0.229,0.441,0.353,0.794,0.477,1.483c0.124,0.688-0.053,0.936,0.176,1.836
                          c0.23,0.9,0,0,0.918-0.237c0.918-0.237,0.883-0.31,1.73,0c0.848,0.31,0.283,0.555,0.512,1.349c0.229,0.794,0.053,0.671,0.071,0.918
                          c0.018,0.247-0.388,1.483-0.636,2.295c-0.247,0.812,0,0,1.13-0.176c1.13-0.177,1.342-0.088,2.189-0.053
                          c0.847,0.035,0.229-0.335,0.229-0.335s0.194-0.124,0.759-0.371c0.565-0.247,0.706-0.3,1.006-1.306
                          c0.3-1.006,0.071-0.194,0.088-1.289c0.018-1.094,0.159-0.194,1.412-0.777c1.253-0.583,0.177,0.141,0.583,0.618
                          c0.406,0.477,1.465,0.512,2.948,0.741c1.483,0.23,1.448,0.353,3.16,0.742c1.713,0.388,0.3,0.459,0.459,0.671
                          c0.159,0.212-0.141,0.335,0.247,0.141c0.388-0.194,0.212-0.088,0.565-0.6c0.353-0.512,0.459,0.106,1.518,0.159
                          c1.059,0.053,1.377-0.035,1.642-0.318c0.265-0.283,0.035-0.459,0.194-0.848c0.159-0.388,1.077,0.124,1.995,0.247
                          c0.918,0.124,1.148-0.159,1.607-0.477c0.459-0.318,0.388-0.512,0.953-1.13c0.565-0.618,0.953,0.335,1.13,0.812
                          c0.177,0.477,0.018,0.406-0.141,1.112c-0.159,0.706-0.141,0.689-0.441,1.695c-0.3,1.006-1.042,1.042-1.236,1.112
                          c-0.194,0.07-0.071,0-0.636,0c-0.565,0-0.794,0.212-1.289,0.918c-0.494,0.706-0.088,0.388-0.282,1.218
                          c-0.194,0.83,0.124,1.024,0.088,1.289c-0.035,0.265-0.177,0.618-0.3,1.024c-0.123,0.406-0.282,0.847-0.512,1.236
                          c-0.229,0.389-0.635,0.583,0,0.495c0.636-0.088,0.6-0.388,1.483-1.024c0.883-0.636,0.618-0.194,1.977-0.247
                          c1.359-0.053,1.006,0.441,1.107,0.777c0.101,0.336-0.013,1.006,0,1.271c0.013,0.265-0.701,1.165-1.708,1.942
                          c-1.006,0.777-0.018,0.318,0,0.741c0.018,0.424,0.794,0.848,1.059,1.412c0.265,0.565,0.3,1.165,0.3,1.165l0.452,0.798
                          c7.621-1.774,13.902-3.252,13.902-3.252s-10.593-19.067-2.542-18.219c8.05,0.847,14.688-0.283,14.688-0.283
                          s17.231-1.553,18.361-0.565c1.13,0.988,11.298-1.836,11.157-2.966c-0.141-1.13,31.919,10.027,39.546,4.378
                          c2.824-1.553-3.813-1.553-3.813-1.553s-1.236-2.578-0.919-3.001c0.318-0.424,0.907-11.334,5.432-12.076
                          c4.525-0.741,7.703-5.614,7.703-5.614l-17.372-11.546L846.383,269.766z"/>
                          <path class="jiha" id="Fès-Meknès" fill="#D2DBE0" d="M731.983,290.978c0.847-1.033,0.477-0.609,1.059-1.642c0.582-1.033,0.397-0.662,0.98-1.801
                          c0.583-1.139,0.371-0.636,0.715-1.589c0.344-0.953,0.212-0.45,0.794-1.536c0.583-1.086,0.318-0.477,0.848-1.351
                          c0.53-0.874,0.689-0.768,1.218-1.536c0.53-0.768,0.132-0.238,0.238-0.583s0.688-0.397,0.688-0.397s0.344-0.238,1.086-1.006
                          c0.741-0.768,0.477-0.556,1.112-1.774c0.636-1.218,0.397-0.689,1.139-1.854c0.741-1.165,0.291-0.53,0.821-1.509
                          c0.53-0.98,0.265-0.424,0.9-1.191c0.636-0.768,0.397-0.424,0.953-1.351c0.556-0.927,0.238-0.45,0.45-1.218
                          c0.212-0.768,0.847-0.636,1.403-1.245c0.556-0.609,0.794-0.159,1.933-0.741c1.139-0.583,0.715-0.238,2.198-0.662
                          c1.483-0.424,0,0,0.477,0.344c0.477,0.344,0.874,0.344,1.642,0.662c0.768,0.318,1.192,0.265,1.43,0.477
                          c0.238,0.212,2.754,0.026,3.416-0.026c0.662-0.053,1.245-0.027,1.245-0.027s0.238,0,2.887-0.715
                          c2.648-0.715,1.43-0.053,1.827-0.132c0.397-0.08,3.84-0.689,4.317-0.874c0.477-0.186,3.204-1.139,3.443-1.298
                          c0.238-0.159,2.198,0.053,3.813-0.212c1.615-0.265,0.821-0.794,1.033-1.139c0.212-0.344,1.403-0.159,3.469-0.291
                          c2.066-0.132,1.245-0.159,1.033-0.768c-0.212-0.609-0.529-0.901-0.794-1.404c-0.265-0.503-0.45-0.583-0.9-1.351
                          c-0.45-0.768-0.45-0.556-0.662-0.98c-0.212-0.424-0.106-0.847-0.53-1.668c-0.424-0.821-0.185-0.291-0.556-0.9
                          c-0.371-0.609-0.291-0.609-0.609-1.192c-0.318-0.583-0.424-0.609-0.662-1.059c-0.238-0.45-0.45-0.397-0.45-0.397
                          s-1.324-0.927-1.483-1.192c-0.159-0.265,0,0-0.847-1.059c-0.847-1.059-0.212-0.238-1.271-1.006
                          c-1.059-0.768-0.371-0.238-1.139-0.715c-0.768-0.477-1.43-0.768-2.092-1.324c-0.662-0.556-0.291-0.344-0.9-0.927
                          c-0.609-0.583-0.503-0.159-1.006-0.344c-0.503-0.186-0.927-0.291-1.589-0.609c-0.662-0.318-0.953-0.106-1.324-0.132
                          c-0.371-0.026-0.794-1.907-1.059-2.383c-0.265-0.477-0.053-0.291,0.079-0.741c0.132-0.45,0.424-0.874,0.424-0.874
                          s0.106-0.238,0.265-0.53c0.159-0.291,0.53-0.583,0.848-0.9c0.318-0.318,0.45-0.132,2.277-1.218c1.827-1.086,0.08-0.132,0.106-0.424
                          c0.026-0.291,0.212-0.424,0.794-1.139c0.583-0.715,0.318-0.238,0.662-0.53c0.344-0.291,0.45-0.371,1.165-1.006
                          c0.715-0.636,0.662-0.45,1.536-1.298c0.874-0.847,0.477-0.556,0.874-1.192c0.397-0.635,0.45-1.059,0.45-1.059s-0.026-0.424,0-0.901
                          c0.026-0.477,0.477-0.874,0.424-1.218c-0.053-0.344-0.424-0.212-0.424-0.212l-0.953-0.503c0,0-0.662-0.026-1.51-0.026
                          c-0.847,0-1.271-0.212-2.304-0.397c-1.033-0.185-0.953-0.371-1.404-0.636c-0.45-0.265-1.086-0.079-1.907-0.159
                          c-0.821-0.079-0.9-0.132-1.43-0.185c-0.53-0.053-1.483-0.344-2.33-0.53c-0.847-0.185-0.503-0.053-1.615-0.238
                          c-1.112-0.185-0.689-0.027-2.145-0.635c-1.456-0.609-0.185-0.556-0.212-1.668c-0.026-1.112-0.371-0.53-0.98-1.086
                          c-0.609-0.556-0.742-0.45-2.092-1.086c-1.35-0.636-0.874-0.159-1.695-0.477c-0.821-0.318-0.794-0.026-0.794-0.026
                          s-0.344,0.635-0.556,1.112c-0.212,0.477-0.424,0.238-0.9,0.715c-0.477,0.477-1.192,1.642-1.457,1.774
                          c-0.265,0.132-0.583,0.582-1.218,1.298c-0.635,0.715-0.371,0.53-0.98,1.668c-0.609,1.139-0.98,1.165-1.351,1.483
                          c-0.371,0.318-0.583,0.583-1.536,1.43c-0.953,0.847-0.185,0.953-0.291,1.748c-0.106,0.795-0.635,1.112-0.847,1.377
                          c-0.212,0.265-3.072,1.774-3.072,1.774s-0.08,0.238-0.291,1.006c-0.212,0.768-0.238,0.583-0.635,1.218
                          c-0.397,0.636,0.106,0.291,0.715,1.139c0.609,0.847,0.159,0.821,0.106,1.748c-0.053,0.927-0.212,0.874-0.688,2.012
                          c-0.477,1.139-0.53,0.927-1.006,1.642s-0.609,0.45-1.404,1.006c-0.794,0.556-0.556,0.291-1.43-0.053
                          c-0.874-0.344-0.477-0.583-0.45-1.139c0.027-0.556,0.106-0.556,0.265-0.927c0.159-0.371-0.185-0.45-0.609-1.191
                          c-0.424-0.742-0.159,0.238-0.397,0.715c-0.238,0.477-0.715,0.45-1.695,0.98c-0.98,0.53-0.424,0.238-0.847,0.318
                          c-0.424,0.079-0.609,0.132-1.218,0.132c-0.609,0-0.768-0.318-1.218-0.635c-0.45-0.318-0.318-0.265-0.583-0.503
                          c-0.265-0.238-1.165-0.079-1.774-0.159c-0.609-0.08-1.218-0.186-1.854-0.9c-0.636-0.715-0.212-0.344-0.556-0.9
                          c-0.344-0.556,0-0.212-0.106-0.953c-0.106-0.741-0.053-0.609-0.106-1.059c-0.053-0.45,0.133-0.344,0.344-0.689
                          c0.212-0.344,0.133-0.583-0.159-1.403c-0.291-0.821-0.053-0.159,0.079-1.456c0.132-1.298,0.106-0.583,0.212-1.006
                          c0.106-0.424,0.079-0.503,0.159-0.794c0.079-0.291,0,0,0.132-0.106c0.132-0.106,0.927-0.344,1.642-0.397
                          c0.715-0.053-0.238-0.371-0.238-0.662c0-0.292,0.291-0.397,0.821-1.006c0.53-0.609,0.185-0.212,0.371-0.424
                          c0.185-0.212,0.874-0.662,1.059-0.874c0.186-0.212,0.265,0.08,0.794,0.239c0.53,0.159,0.556-0.053,0.927-0.397
                          c0.371-0.344,0.159-0.318,0.053-0.45c-0.106-0.132-0.503-0.424-0.609-1.139c-0.106-0.715,0.291-0.662,0.715-1.43
                          c0.424-0.768,0.583-1.139,0.927-1.933s0.265-0.424,0.847-1.324c0.583-0.9,0.98-1.298,0.98-1.298s-0.027-0.397-0.185-1.139
                          c-0.159-0.742-0.159-0.847,0.08-1.721c0.238-0.874,0.132-0.609,0.212-1.51c0.079-0.9,0-0.371-0.08-1.033
                          c-0.079-0.662,0.424-0.397,0.688-0.635c0.265-0.238,0.318-0.291,0.689-0.556c0.371-0.265,1.589-1.086,1.509-1.218
                          c-0.079-0.132-0.371-0.424-0.424-1.033c-0.053-0.609-0.053-1.324-0.053-1.827c0-0.503,0.291-0.715,0.609-1.139
                          c0.318-0.424,0.026-0.556-0.159-1.165c-0.185-0.609,0.08-0.821,0.106-1.324c0.027-0.503-0.026-0.953-0.053-1.562
                          c-0.026-0.609,0.265-0.768,0.583-1.351c0.318-0.583-0.265-0.238-0.53-0.53c-0.265-0.291-0.636-0.265-0.874-0.609
                          c-0.238-0.344-1.006-0.556-1.192-0.689c-0.185-0.132-0.768-0.132-1.139-0.927c-0.371-0.795,0.159-0.132,0.106-0.371
                          c-0.053-0.238-0.185-0.424-0.397-0.874c-0.212-0.45-0.027-0.477,0.132-1.033c0.159-0.556,0-0.291,0-0.688
                          c0-0.397-0.291-0.477-0.344-1.139c-0.053-0.662,0.98-0.265,1.801-0.583c0.821-0.318,0.503,0,0.609-0.238
                          c0.106-0.238,0.371-0.397,0.953-0.847c0.583-0.45,0.027-0.212-0.238-0.821c-0.265-0.609-0.424-0.768-0.397-0.9
                          c0.026-0.132-0.318,0.053,0.212-1.139c0.53-1.192,0.106-0.583,0.106-0.953c0-0.371-0.185-0.424-0.609-1.218
                          c-0.424-0.795-0.106-0.53,0.027-0.9c0.132-0.371,0.318-0.45,0.397-0.636c0.079-0.185,0,0-0.53-0.556
                          c-0.53-0.556,0.662-0.582,0.662-0.582s0.794-0.371,1.192-0.689c0.397-0.318,0.556-0.344,0.874-0.556
                          c0.318-0.212,0.371-0.291,0.98-0.927c0.609-0.636,0.212-0.212,0.344-0.424c0.133-0.212,0.397-1.483,0.397-1.483
                          s0.185-0.45,0.185-0.53c0-0.08-0.265-1.509-0.132-2.224c0.132-0.715,0.212-0.212,0.185-0.556c-0.027-0.344-0.424-0.953-0.741-1.404
                          c-0.318-0.45,0.371-0.768,0.371-0.768s0.662,0.026,1.218-0.238c0,0-0.079-0.583-0.159-1.298c-0.08-0.715,1.721,0.053,2.304,0.053
                          c0.583,0,0.265,0.159,0.265,0.159s0.212,0.371,0.424,0.821c0.212,0.45,1.112,0.159,1.112,0.159s0,0,0.159-0.794
                          c0.159-0.794,0.132-0.688,0.132-1.086c0-0.397-0.106-1.059-0.106-1.059s0.106-0.424,0.212-0.556
                          c0.106-0.132,0.185-0.027,1.033-0.397c0.847-0.371,0.477-0.609,0.477-0.609l-0.397-1.139l0.238-0.847l0.768-0.9
                          c0,0,0.08-0.371,0-1.033c-0.079-0.662-0.026-0.662-0.821-1.801c-0.794-1.139,0.026-0.344,0.185-1.165
                          c0.159-0.821-0.371-0.185-0.477-0.291c-0.106-0.106-1.536-0.212-2.33-0.212c-0.794,0-1.377-0.212-1.377-0.212
                          s-2.092,0.238-2.304,0.106c-0.212-0.132-0.9-0.503-1.271-0.689c-0.371-0.185-0.768-0.291-1.086-0.265
                          c-0.318,0.026-1.827,0.53-1.827,0.53s-0.583,0.159-0.953,0.318c-0.371,0.159-1.933,0.371-2.595,0.662
                          c-0.662,0.291-0.583,0.106-1.933,0.45c-1.351,0.344-0.794,0.159-1.907,0.318c-1.112,0.159-0.609,0.238-0.768,0.344
                          c-0.159,0.106-0.927,0.212-1.112,0.662c-0.185,0.45-0.609,1.351-0.609,1.351s-0.689,0.45-1.139,1.006
                          c-0.45,0.556-0.45,0.371-1.192,1.059c-0.741,0.689-0.45,0.344-0.53,0.397c-0.079,0.053-0.715,0.397-0.9,0.424
                          c-0.185,0.026-1.059,0.132-1.51,0.185c-0.45,0.053-1.244-0.397-1.562-0.397c-0.318,0-1.51,0.424-1.51,0.424
                          s-0.662-1.271-0.768-2.012c-0.106-0.742-0.847-0.371-1.139-0.371c-0.291,0-0.238,0.424-0.477,0.821
                          c-0.238,0.397-0.344,0.98-0.344,0.98s-0.238,0.609-0.397,0.98c-0.159,0.371-0.265,0.768-0.609,1.668
                          c-0.344,0.9-0.874,0.318-0.874,0.318s-0.741-0.08-1.165-0.08s-2.039,0.238-2.33,0.477c-0.291,0.238-0.265,0.847-0.265,0.847
                          s-0.847,0.768-1.536,1.086c-0.689,0.318-1.033,0.424-1.165,0.371c-0.133-0.053-0.397-0.185-0.953-0.741
                          c-0.556-0.556-0.424-0.238-1.059-0.715c-0.636-0.477-0.847-0.371-1.404-0.556c-0.556-0.185-0.9,0.768-1.059,1.006
                          c-0.159,0.238-0.636-0.026-0.927-0.318c-0.291-0.291-0.874-0.662-1.509-1.377c-0.636-0.715-0.397-0.477-0.768-0.662
                          c-0.371-0.186-0.874,0.079-1.509,0.291c-0.635,0.212-0.874-0.053-1.271-0.159c-0.397-0.106-0.556-0.318-1.192-0.556
                          c-0.635-0.238-0.424,0.291-1.006,0.212c-0.583-0.08-0.742,0.026-1.086,0.053c-0.344,0.027-0.318-0.477-0.318-0.477
                          s-0.609-0.715-1.033-1.271c-0.424-0.556-0.689-0.583-1.006-1.483c-0.318-0.9-0.079-1.324-0.079-1.324s-1.059-1.562-1.324-1.589
                          c-0.265-0.027-0.821-0.079-1.324-0.079c-0.503,0-1.668,0.291-1.907,0.397c-0.238,0.106-0.847,0.583-1.033,0.688
                          c-0.185,0.106-1.96,0.45-2.118,0.503c-0.159,0.053-0.45,0.238-0.742,0.45c-0.291,0.212-1.218,0.424-1.271,0.318
                          c-0.053-0.106-0.318-0.556-0.662-0.874c-0.344-0.318-0.768-0.079-1.457,0.186c-0.688,0.265-0.53,0.371-1.589,0.874
                          c-1.059,0.503-0.874,0.371-1.351,0.53c-0.477,0.159-0.344,0.265-0.927,1.43c-0.583,1.165-0.715,1.245-0.715,1.245
                          s0,0.185-0.12,2.489c-0.12,2.304-0.013,1.086,0,1.218c0.013,0.132-0.039,2.119-0.009,2.383c0.031,0.265-0.031,0.344-0.004,0.821
                          c0.027,0.477-0.079,0.609-0.212,1.059c-0.132,0.45-0.159,0.344-0.318,0.768c-0.159,0.424-0.265,0.768-0.9,0.98
                          c-0.635,0.212-0.741,0-1.059,0s-0.159,0.027-0.821,0.027c-0.662,0-0.503,0.079-0.636,0.318c-0.132,0.238-0.106,0.556-0.53,1.192
                          c-0.424,0.635-0.662,0.794-1.086,1.086c-0.424,0.291-0.662,0.132-1.059,0.265c-0.397,0.133-0.556-0.026-0.953,0
                          c-0.397,0.027,0,1.324,0,1.324s-0.132,0.371-0.397,1.165c-0.265,0.794-1.377,0.821-1.377,0.821s-1.139,0.689-1.483,1.006
                          c-0.344,0.318-1.536,0.953-1.536,0.953s-0.98,0.265-1.404,0.503c-0.424,0.238-1.218,0.847-1.218,0.847l-0.53,0.609l0.477,0.9
                          c0,0,0.609,0.424,1.192,0.821c0.583,0.397,0.291,0.212,0.847,0.689c0.556,0.477,0.45,1.138,0.45,1.138s0,0,0.106,0.212
                          c0.106,0.212,0.212,0.397,0.397,1.059c0.185,0.662-0.397,1.165-0.397,1.165s-0.45,0.609-0.847,1.139
                          c-0.397,0.53-0.344,0.583-0.344,1.086c0,0.503,0.053,0.45,0.185,1.086c0.132,0.635,0.132,0.689,0.079,1.245
                          s-0.185,0.424-0.477,1.006c-0.291,0.583-0.688,0.318-1.086,0.45c-0.397,0.132-1.006,0.159-1.404,0.265
                          c-0.397,0.106-0.397,0.689-0.556,1.006c-0.159,0.318-0.503,0.344-1.271,0.9c-0.768,0.556-0.9,0.371-0.98,0.371
                          c-0.08,0-0.927-0.186-1.854-0.609c-0.927-0.424-0.292-0.212-1.483-0.609c-1.192-0.397-0.9,0.344-1.245,0.397
                          c-0.344,0.053-1.483,0.159-1.721,0.186c-0.238,0.026-0.397-0.026-1.192-0.768c-0.794-0.742-0.106-0.397-0.106-0.636
                          c0-0.238,0.08-0.397,0.212-0.503c0.132-0.106-0.159-0.318-0.344-0.583c-0.185-0.265-0.636-0.583-0.953-0.821
                          c-0.318-0.238-0.609-0.53-1.43-1.033c-0.821-0.503-0.53,0.662-0.556,0.742c-0.026,0.079-0.212,0.794-0.636,1.271
                          c-0.424,0.477-0.424,0.609-0.477,0.742c-0.053,0.132-0.689,0.079-1.668,0.477c-0.98,0.397,0.741,0.45,0.874,0.556
                          c0.133,0.106,0.344,0.424,0.583,1.086c0.238,0.662,0.159,0.847,0.185,1.165c0.026,0.318,0.238,0.635,0.424,1.059
                          c0.186,0.424,0.318,0.53,0.477,0.98c0.159,0.45,0.159,0.98,0.185,1.112c0.027,0.132,0.106,0.556,0.185,0.874
                          c0.079,0.318,0.344,0.424,0.688,0.742c0.344,0.318,0.477,0.424,1.483,1.165c1.006,0.742,0.159,0.953,0.159,1.033
                          c0,0.079,0.027,1.695-0.079,1.721c-0.106,0.026-0.662,1.086-0.689,1.35c-0.027,0.265-0.874,1.404-0.874,1.404l0.291,0.265
                          l1.112,0.132l0.185,0.98l0.132,1.324c0,0,0.609,0.318,0.689,0.397c0.079,0.079,0.424,0.53,0.768,1.165
                          c0.344,0.636,0.159,0.874,0.159,1.192c0,0.318-0.133,0.689-0.133,0.689l-0.344,0.636c0,0-0.08,0.291-0.53,2.145
                          c-0.45,1.854-0.159,0.556-0.239,0.794c-0.079,0.238-0.424,0.635-0.794,1.218c-0.371,0.583-1.377,1.404-1.377,1.404
                          s-0.106,0.397-0.132,0.556c-0.027,0.159,0.212,0.768,0.212,1.589c0,0.601-0.014,0.676-0.022,0.673
                          c0.026,0.062,0.475,1.134,0.578,1.366c0.106,0.238,0.371,0.556,0.609,0.874c0.238,0.318,0,0,0,0.529
                          c0,0.53-0.238,0.768-0.318,1.113c-0.079,0.344-0.265,0.583-0.371,0.9c-0.106,0.318-0.079,0.662-0.424,1.006
                          c-0.344,0.344-0.424,0.477-0.556,0.715c-0.132,0.238,0.133,0.9,0.133,0.9l0.344,0.689c0,0,0.953,0.397,1.165,0.477
                          c0.212,0.079,0.133,0.291,0.133,0.291s0.953,0.556,1.139,0.715c0.185,0.159,0,0.768,0,0.874c0,0.106,1.139,0.397,1.483,0.503
                          c0.344,0.106,0.503,0.477,0.662,0.877c0.159,0.4,1.033,0.103,1.404,0.023c0.371-0.079,1.509,0.053,2.516,0.265
                          c1.006,0.212,1.086,0.106,1.404,0.08c0.318-0.026,0.927,0.688,0.927,0.688s1.933,1.642,2.383,2.225
                          c0.45,0.583,0.265,0.821,0.318,1.059c0.053,0.238,0.529,0.609,0.529,1.96s-0.053,0.265-0.238,0.953
                          c-0.186,0.689-0.291,0.847-0.291,0.927s1.509,2.331,1.509,2.331s-0.053,0.477-0.185,0.741c-0.132,0.265,0,0.689,0,0.689
                          l1.218,1.086l7.124,0.212c0,0,1.721,2.595,0.741,3.469c-0.98,0.874-0.503,0.477-1.059,0.874c-0.556,0.397-0.185,0.768-0.503,1.351
                          c-0.318,0.582,0.424,0.662,0.794,1.112c0.371,0.45,0.45,1.748,0.45,1.748l-0.742,1.112l3.999,3.098l-0.424,1.906l0.159-0.053
                          c0,0,0.397-0.424,0.794-0.742c0.397-0.318,0.318-0.079,0.794-0.318c0.477-0.238,0.477-0.212,0.662-0.45
                          c0.185-0.238,1.509-0.291,1.986-0.45c0.477-0.159,0.477-0.582,0.583-0.874c0.106-0.292,1.615-1.589,2.013-2.119
                          c0.397-0.53,0-0.212-0.238-0.874c-0.238-0.662-0.079-0.371,0.027-0.689c0.106-0.318,0.344-1.721,0.344-1.721
                          s2.304-2.304,2.383-2.357c0.08-0.053,2.119,0.344,3.363,0.212c1.245-0.133,1.536,0.159,1.642,0.132
                          c0.106-0.026,0.212-1.192,0.212-1.192s1.695-0.821,2.013-0.874c0.318-0.053,0.874,0.689,1.192,1.192
                          c0.318,0.503,1.112,1.112,1.774,1.933c0.662,0.821,0.9,0.318,0.9,0.318s1.536,2.807,2.542,4.422
                          c1.006,1.616-0.583,1.827-0.583,1.827s-0.132,1.006-0.238,1.668c-0.106,0.662,0.185,0.477,0.424,1.086
                          c0.238,0.609,0.424,0.079,0.503,0.079s1.695,0.318,2.198,0.291c0.503-0.026,1.668-0.132,2.145-0.132
                          c0.477,0,1.483,0.212,1.668,0.159c0.185-0.053,0.874-0.079,1.165-0.212c0.291-0.132,1.033-0.026,1.748-0.185
                          c0.715-0.159,0.556,0.026,0.901-0.265c0.344-0.291,1.509,0.106,1.589,0.185c0.079,0.08,1.827,1.006,1.827,1.006
                          s0.662,0.794,0.768,1.059c0.106,0.265-0.053,0.874,0,0.953c0.053,0.08,1.801,0.848,1.88,0.927c0.08,0.079,0.821,0.477,1.218,0.9
                          c0.397,0.424,0.715,0.795,0.953,1.324c0.238,0.529,0.715,0.689,0.741,0.768c0.027,0.08,0.794,2.781,0.794,2.781
                          s1.43,0.662,1.642,1.165c0.212,0.503,0.477,0.583,1.112,1.589c0.635,1.006,0.291,1.748,0.291,2.012c0,0.265,0.636,0.98,0.9,1.51
                          c0.265,0.529,0.715,0.529,1.112,0.953c0.397,0.424,0.503,0.291,1.006,0.741c0.503,0.45,0.503,0.106,1.033,0
                          c0.53-0.106,1.562-0.662,2.489-1.271c0.927-0.609,0.662-0.212,1.695-0.715c1.033-0.503,0.53-0.265,1.086-0.477
                          c0.556-0.212,0.583,0.397,0.688,0.635c0.106,0.238,0.741,0.318,0.927,0.344c0.185,0.027,0.503,0.053,0.927-0.185
                          s0.503-0.424,0.503-0.424l1.297,0.424l0.583-2.198c0,0,0.08-0.318,0.98-1.509C731.586,291.19,731.136,292.011,731.983,290.978z"/>
                        <path fill="#8D83C6" d="M729.865,136.829c0.362,0.304,0.706,0.568,1.041,0.814C730.743,137.482,730.48,137.231,729.865,136.829z"/>
                        <path fill="#8D83C6" d="M193.094,733.073l-0.015-0.318c0,0-0.035,0.152-0.07,0.342
                          C193.041,733.088,193.072,733.079,193.094,733.073z"/>
                        <path fill="#8D83C6" d="M573.201,217.863c0.285-0.144,0.555-0.294,0.833-0.44C573.551,217.661,573.305,217.758,573.201,217.863z"/>
                        <polygon fill="#8D83C6" points="441.864,379.615 441.864,379.615 441.863,379.612   "/>
                        <path fill="#8D83C6" d="M441.782,378.391c0,0,0.027,0.385,0.05,0.724C441.815,378.839,441.797,378.591,441.782,378.391
                          L441.782,378.391z"/>
                        <path fill="#8D83C6" d="M482.808,279.488c0.222-0.226,0.444-0.451,0.664-0.677C483.228,279.067,483.139,279.086,482.808,279.488z"
                          />
                        <path fill="#8D83C6" d="M482.3,280.005c0.15-0.152,0.299-0.304,0.448-0.456C482.416,279.852,482.75,279.529,482.3,280.005z"/>
                        <path fill="#8D83C6" d="M614.117,158.816c0.18-0.431,0.359-0.863,0.538-1.295C614.543,157.697,614.147,158.601,614.117,158.816z"/>
                        <polygon fill="#8D83C6" points="334.52,743.743 334.52,742.054 334.512,742.054 334.507,743.743   "/>
                        <path fill="#8D83C6" d="M768.03,337.806l0.897-0.209l0,0c-0.474,0.11-0.954,0.222-1.437,0.334L768.03,337.806z"/>

                          <rect x="496.246" y="613.129" transform="matrix(0.0071 1 -1 0.0071 1106.7092 111.6735)" fill="#8D83C6" width="1.749" height="0"/>
                        <path fill="#8D83C6" d="M193.079,732.755c0,0-0.139,0.437-0.767,0.537c-0.021,0.003-0.025,0.037-0.029,0.071
                          c0.322-0.136,0.573-0.221,0.726-0.265C193.045,732.907,193.079,732.755,193.079,732.755z"/>
                        <path fill="#8D83C6" d="M193.175,733.052c-0.032-0.088-0.046-0.188-0.072-0.28c-0.005-0.003-0.023-0.017-0.023-0.017l0.015,0.318
                          C193.142,733.06,193.175,733.052,193.175,733.052z"/>
                        <path fill="#8D83C6" d="M192.954,733.827c0.074,0.212-0.05,1.371,0.246,1.513l-0.105-2.267c-0.022,0.006-0.053,0.015-0.085,0.024
                          C192.96,733.362,192.911,733.704,192.954,733.827z"/>
                        <path fill="#8D83C6" d="M308.575,743.868c0.288,0.043-1.106,0.175-0.367,0.087C308.319,743.942,308.444,743.909,308.575,743.868
                          c-0.173-0.026-0.954-0.019-3.176,0.087c-5.913,0.282-5.618,0.483-6.504,0.03c-0.887-0.453-0.887-0.453-1.922-0.877
                          c-1.035-0.424-5.174-2.119-5.174-2.119s-1.626-1.341-4.509-1.341c-2.882,0-7.317-0.071-7.317-0.071s-4.952-0.071-5.543-0.071
                          s-4.805-0.282-5.396,0.141c-0.591,0.424,0.074,0.424-1.922,1.059c-1.996,0.636-4.582,0.847-5.174,1.13
                          c-0.591,0.283-6.356,2.219-7.096,2.416c-0.739,0.197-3.104,0.227-4.065,0c-0.961-0.227-0.369-0.227-2.956-0.58
                          c-2.587-0.353-3.696-0.494-4.805-0.706c-1.109-0.212-2.143-0.777-2.809-0.989c-0.665-0.212-1.626-0.918-2.513-1.13
                          c-0.887-0.212-4.435-1.412-4.656-1.412c-0.222,0-1.331-0.141-1.922-0.141c-0.591,0-3.326-0.07-3.991,0.141
                          c-0.665,0.212-1.257,0.636-1.7,1.059c-0.444,0.424-2.291,0.777-2.883,0.777c-0.591,0,0.222-0.353-1.33-0.141
                          c-1.552,0.212-2.143,0.141-2.439,0.283c-0.296,0.141,0.222,0.071-0.887,0.141c-1.109,0.071-1.626-0.635-2.735-0.212
                          s-0.37,0-2.365,0.847c-1.996,0.847-2.587,0.706-3.03,1.201c-0.444,0.494-1.331,0.565-1.552,0.424
                          c-0.222-0.141-0.37-0.212-1.035-0.353c-0.665-0.141-0.739,0.282-1.331-0.282c-0.591-0.565-1.035-0.283-1.109-0.989
                          c-0.074-0.706-0.222-0.706-0.665-1.907c-0.443-1.201-0.665-1.765-1.626-2.683c-0.961-0.918-0.961-2.401-3.031-2.754
                          c-2.07-0.353-2.513,0.212-3.252,0.141c-0.739-0.07-0.665,0.071-1.109-0.282c-0.443-0.353-0.813-0.283-1.183-0.989
                          c-0.339-0.648-0.703-0.905-0.762-0.944c0.026,0.092,0.04,0.193,0.072,0.28c0,0-0.032,0.008-0.08,0.021l0.105,2.267
                          c0.296,0.141,0.074,0.918,1.331,0.989c1.256,0.071,3.252,0.494,3.917,0.636c0.665,0.141,1.922-0.141,2.291,0.494
                          c0.369,0.635-0.444-0.494,0.517,1.201c0.961,1.695,0.222,0.918,1.109,2.189c0.887,1.271,0.739,0.989,0.961,1.977
                          c0.222,0.989,0,1.553,1.109,1.906c1.109,0.353,0.665-0.07,1.922,0.565c1.257,0.636,4.213,0.918,4.213,0.918
                          s0.887-0.847,2.365-1.412c1.478-0.565,1.478-0.706,2.217-0.918c0.739-0.212-0.518-0.424,1.996-0.494
                          c2.513-0.071,3.917-0.071,3.917-0.071l0.37-0.07c0,0,2.07-0.282,2.439-0.212c0.37,0.07,0.074,0.918,1.7,0
                          c1.626-0.918,2.661-1.766,2.661-1.766s-1.996-0.212,0.37-0.212c2.365,0,3.03-0.141,3.4,0c0.369,0.141,0.813,1.059,2.587,1.271
                          c1.774,0.212,1.404,0.071,3.252,0.918c1.848,0.847,2.217,0.635,3.622,1.059c1.404,0.424,3.991,0.706,4.73,0.777
                          c0.739,0.07,0.961,0,2.513,0.141c1.552,0.141,2.809,0.212,3.622,0.212c0.813,0,6.504-0.212,6.726-0.283
                          c0.222-0.07,0.444-0.494,1.552-0.706c1.109-0.212,1.774-0.565,2.365-0.777c0.591-0.212-0.591,0.212,1.626-0.565
                          c2.217-0.777,1.774-1.2,3.4-1.271c1.626-0.071,2.069,0,3.843-0.424c1.774-0.424,1.848-0.494,2.809-0.494
                          c0.961,0,6.948-0.565,9.904-0.07c2.956,0.494,3.844,0.141,4.878,0.565c1.035,0.424,0.37-0.212,1.478,0.424
                          c1.109,0.635,2.365,0.777,3.178,1.412c0.813,0.635-0.592-0.071,1.33,0.918c1.922,0.988,1.33,1.483,3.696,1.765
                          c2.365,0.282,2.957,0.282,2.957,0.282s1.256-0.07,3.843,0c2.587,0.071,6.283-2.542,6.283-2.542l22.308,0.07l0.005-1.689
                          l-22.757-0.076C311.755,741.978,309.819,743.478,308.575,743.868z"/>
                        <path fill="#8D83C6" d="M193.199,735.34c-0.296-0.141-0.172-1.301-0.246-1.513c-0.043-0.123,0.007-0.465,0.056-0.73
                          c-0.152,0.045-0.404,0.129-0.726,0.265C192.249,733.682,192.932,735.212,193.199,735.34z"/>
                        <path fill="none" d="M630.385,162.318c-0.096,0.024-0.17,0.04-0.17,0.04S630.306,162.361,630.385,162.318z"/>
                        <path fill="none" d="M766.454,229.516c-0.058-0.011-0.098-0.019-0.098-0.019S766.411,229.516,766.454,229.516z"/>
                        <path fill="none" d="M654.953,208.593c-0.001,0-0.004,0.001-0.004,0.001C654.917,208.61,654.929,208.604,654.953,208.593z"/>
                        <path fill="none" d="M615.359,352.671c0,0,0.039-0.012,0.095-0.029C615.493,352.55,615.359,352.671,615.359,352.671z"/>
                        <path fill="none" d="M596.363,359.238c0,0-0.159-0.724-0.088-0.848c0.07-0.124,0.406-1.624,0.794-1.801
                          c0.388-0.177-0.177-1.13,0.812-0.247c0.989,0.883,0.741,1.059,1.659,1.13c0.918,0.07-1.2,0.53,2.013-0.035
                          c3.213-0.565,6.214-1.624,6.32-2.012c0.106-0.389-0.636-0.318,0.247-0.742c0.883-0.424,1.095-0.777,1.412-0.671
                          c0.318,0.106,1.024,0.388,1.095,0.494c0.071,0.106-0.741,1.165,0.318,0.212c1.059-0.953,1.907-1.766,1.907-1.766
                        s0.141,0,0.883-0.883c0.741-0.883,1.448-1.483,1.448-1.483s9.463-2.789,10.169-2.966c0.706-0.176,1.024-0.247,1.554-0.565
                        c0.53-0.318,0.388-0.07,1.13-0.847c0.742-0.777,1.024-1.271,2.083-2.189c1.059-0.918,1.695-1.483,2.613-2.401
                        c0.918-0.918,0.989-1.448,1.766-1.554c0.777-0.106,2.789-0.636,2.789-0.636s1.201-0.071,1.624-0.706
                        c0.424-0.636,0.565-0.424,0.706-0.848c0.141-0.423,0-1.412,0.318-2.154c0.318-0.742,0.353-0.812,0.459-1.201
                        c0.106-0.388,0.388-0.989-0.177-1.342c-0.565-0.353-0.176-0.424-1.094-0.353c-0.918,0.071-0.742,0.127-1.095-0.025
                        c-0.353-0.152-0.282-0.187-0.53-0.293c-0.247-0.106-0.459-0.141-0.53-0.247c-0.071-0.106-0.282,0.035-0.177-0.53
                        c0.106-0.565,0.283-3.99,0.283-3.99s0.424-0.671,1.165-1.412c0.741-0.742,1.342-1.059,1.342-1.059s0.635-0.176,1.448-0.6
                        c0.812-0.424,1.448-0.918,2.013-1.165c0.565-0.247,0.812,0.141,1.66-0.953c0.847-1.095,0.883-1.095,0.989-1.306
                        c0.106-0.212,0.424-0.071,0.635-1.024c0.212-0.953,0.071-1.165,0.459-1.342c0.388-0.177,0-0.212,0.848-0.565
                        c0.847-0.353,0.989-0.353,2.013-0.494c1.024-0.141,2.048-0.177,2.436-0.53c0.388-0.353,0.141-0.953,1.342-0.953
                        c1.2,0,1.2-0.07,1.659,0.141c0.459,0.212,0.53-0.424,0.353-0.742c-0.177-0.318-0.565-0.282-0.53-1.024
                        c0.035-0.742,0.141-1.024,0.035-1.236c-0.106-0.212-0.636-0.283-0.212-0.671c0.424-0.388,1.059-0.706,0.106-0.777
                        c-0.954-0.07-0.777-0.141-1.412-0.494c-0.636-0.353-1.271-0.283-1.412-0.777c-0.141-0.494-0.53-0.177-0.141-0.777
                        c0.389-0.6,1.095-1.483,1.271-1.73c0.177-0.247,0.424-2.189,0.424-2.189s0-0.918,1.236-1.2c1.236-0.283,1.412-0.318,1.412-0.318
                        s2.013,0.141,2.083-0.071c0.07-0.212,0.057-0.424,0.435-1.201c0.377-0.777,0.625-1.024,0.66-1.624c0.035-0.6-0.141-0.706,0-1.236
                        c0.141-0.53-0.318-0.565,0.388-0.777c0.706-0.212,0.459-0.706,0.953-0.141c0.494,0.565,0.565,0.883,0.777,0.883
                        c0.212,0,0.53,0.671,0.565-0.671c0.035-1.342-0.035-1.342,0.141-1.801c0.176-0.459,0.742-0.389,0.847-1.413
                        c0.106-1.024,0.141-0.565,0.459-1.801c0.318-1.236,0.812-0.636,0.6-2.613c-0.212-1.977-0.883-3.284-0.953-3.495
                        c-0.071-0.212-0.636-0.53-0.283-0.953c0.353-0.424,0.495-0.6,0.495-0.6s0.455-0.353,0.793-1.306s0.196-1.377,0.69-1.659
                        c0.494-0.283,0.6,0.176,1.165-0.918c0.565-1.095,0.706-1.518,1.236-1.977c0.53-0.459,1.765,0.212,0.918-1.412
                        s-0.812-1.271-1.412-2.048c-0.6-0.777,0-0.459-1.095-1.307c-1.095-0.847-1.518-1.059-1.518-1.059s0.353-1.377,0.459-1.589
                        c0.106-0.212,0.282-0.212,0.141-0.459c-0.141-0.247-0.494-1.059-0.494-1.589c0-0.53-0.282-0.953-0.035-1.695
                        c0.247-0.742,0.035-0.847,0.742-1.412c0.706-0.565,1.13-1.024,1.13-1.024s1.024-0.141-0.106-0.459
                        c-1.13-0.318-1.73-0.6-2.118-0.565c-0.389,0.035,0,0.035-1.024,0.071c-1.024,0.035-3.39-0.071-3.531-0.035
                        c-0.141,0.035-0.812-0.038-0.812-0.038s0.212,0.915-0.424,0c-0.635-0.915-0.741-1.127-0.847-1.233
                        c-0.106-0.106-0.389-0.318-0.636-0.424c-0.247-0.106-0.706-0.388-0.706-0.388s0.071-0.388,0.141-0.565
                        c0.071-0.176,0.459,0.106,0.424-0.847c-0.035-0.953-0.812-1.659-0.812-1.659l-0.742-0.777c0,0,0-0.424,0.212-1.059
                        c0.212-0.635,0.424-0.777,0.494-1.236c0.071-0.459,0.071-0.459,0.071-0.459l-0.53-0.883c0,0,1.201,1.059-0.494-0.494
                        c-1.695-1.553-2.648-2.083-2.683-2.189c-0.035-0.106,0.953-0.353-0.318-0.353c-1.271,0-3.001-0.388-3.637-0.388
                        c-0.636,0-1.306,0.141-1.589-0.141c-0.283-0.283-0.459-0.071-0.812-0.636c-0.353-0.565-0.53-0.494-0.812-0.988
                        c-0.283-0.494-0.777-0.918-0.883-1.095c-0.106-0.177-0.777-0.6-0.918-0.671c-0.141-0.07-0.883-0.635-0.918-0.141
                        c-0.035,0.494,0,1.412,0,1.73c0,0.318,0.035,1.059,0.035,1.059s0.459,1.165,0.459,1.448c0,0.283-0.424-0.247,0.212,0.671
                        c0.635,0.918,0.459,1.483,0.459,1.483s-1.024,1.271-1.448,1.589c-0.424,0.318,0.283,0.494-0.777,0.53
                        c-1.059,0.035-1.483,0.106-2.401-0.141c-0.918-0.247-0.706-0.282-1.554-0.494c-0.847-0.212-1.342-0.53-1.836-0.53
                        c-0.494,0,0.848-0.494-1.2,0c-2.048,0.494-0.883,0.847-2.26,0.847s-1.165-0.07-1.977-0.07c-0.812,0-2.26-0.389-2.26-0.389
                        s0.282-0.141-0.388-0.706c-0.671-0.565-0.177-0.812-1.412-0.847c-1.236-0.036-0.565,0.106-1.412-0.071
                        c-0.848-0.177-1.271-0.389-1.448-0.459c-0.177-0.07-1.412,1.236-1.589-0.6c-0.177-1.836-0.177-4.061-0.212-4.343
                        c-0.035-0.283,0.212-0.706-0.388-0.565c-0.6,0.141-1.412-0.342-1.412-0.342s-1.907-0.929-2.013-0.929
                        c-0.106,0-2.048-0.671-1.589,0.318c0.459,0.989,0.777,1.307,0.671,1.66c-0.106,0.353-0.106,0.035-0.212,0.777
                        c-0.106,0.742,0.353-0.176-0.424,1.377c-0.777,1.553-0.741,1.165-0.989,1.801c-0.245,0.629-0.212,0.844-0.074,1.26
                        c-0.039,0.004-0.087,0.163-0.103,0.824c-0.035,1.518,0.353,1.024,0.177,1.836c-0.177,0.812-0.106,0.494-0.282,1.554
                        c-0.177,1.059-0.283,1.518-0.283,1.518s-0.141,0.636-0.671,0.918c-0.53,0.283-0.424,0.106-0.848,0.318
                        c-0.424,0.212-0.212-0.071-0.883,0.247c-0.671,0.318-0.953,0.141-1.13,0.424c-0.177,0.282,0.53,0-0.459,0.565
                        c-0.989,0.565-0.989,0-1.271,0.706c-0.283,0.706-0.247,0.953-0.388,1.201c-0.141,0.247,0.247,0.247-0.389,0.459
                        c-0.635,0.212,0.353,0.423-0.883,0.212c-1.236-0.212-1.412,0.247-1.836-0.53c-0.424-0.777-0.706-1.236-0.706-1.236
                        s-1.306-0.989-1.412-1.13c-0.106-0.141-1.271-0.883-1.412-0.883c-0.141,0-1.342-0.318-1.342-0.318s-0.989,0.212-1.271,0.176
                        c-0.283-0.035-2.048-0.6-2.048-0.6l-3.954-0.635l0.247,0.212c0,0,0.424,0.565,0.212,0.777c-0.212,0.212-0.671-0.141-0.918,0.424
                        c-0.247,0.565-0.106,0.388-0.353,0.918c-0.247,0.53-0.247-0.247-0.459,0.953c-0.212,1.201-0.212,1.836-0.212,1.836
                        s0.141-0.141-0.389,1.165c-0.53,1.306-0.635,1.059-0.706,1.907c-0.07,0.848-0.212,0.318-0.07,1.236
                        c0.141,0.918,0.353,0.953,0.212,1.412c-0.141,0.459-0.318,0.177-0.671,0.742c-0.353,0.565-0.388,0.212-0.777,0.988
                        c-0.388,0.777-0.141,0.706-0.459,1.271c-0.318,0.565-0.494,0.883-0.494,0.883s0.565-0.106-0.282,0.283
                        c-0.847,0.388-1.554,0.494-1.66,0.918c-0.106,0.424-0.106,0.071-0.177,0.847c-0.071,0.777-0.212,0.953-0.282,1.447
                        c-0.071,0.494,0.141-0.388-0.177,0.918c-0.318,1.306-0.388,1.412-0.565,2.295c-0.176,0.883-0.106,0.636-0.424,2.154
                        c-0.318,1.518-0.424,2.189-0.424,2.189l-0.176,1.412c0,0-0.071,0.177-0.071,1.377c0,1.2-0.106,1.165,0.141,1.448
                        c0.247,0.283,0.247,0.035,0.565,0.565c0.318,0.53-0.141-0.318,0.424,0.706c0.565,1.024,0.459,0.353,0.706,1.836
                        c0.247,1.483,0.459,1.342,0.212,2.154c-0.247,0.812-0.494,0.671-0.529,1.095c-0.036,0.424,0.459,0.247,0.212,1.13
                        c-0.247,0.883-0.494,1.342-0.6,1.977c-0.106,0.636-0.035,0.812-0.141,0.953c-0.106,0.141-0.353,1.271-0.494,1.448
                        c-0.141,0.176-0.318-0.106-0.6,0.529c-0.282,0.636,0.318-0.706-0.565,1.095c-0.883,1.801-1.024,1.12-1.059,2.379
                        c-0.035,1.258-0.071,1.152-0.071,1.788c0,0.635,0.353,0.494-0.106,0.812c-0.459,0.318-0.353,0.07-0.706,0.494
                        c-0.353,0.424-0.247-0.212-0.742,0.918c-0.494,1.13-0.953,0.424-0.494,1.624c0.459,1.2,0.6,0.671,0.459,1.483
                        c-0.141,0.812-0.53,0.247-0.318,1.306c0.212,1.059,0.389,1.059,0.459,1.589c0.071,0.53,0.247,1.271,0.247,1.271l-0.495,0.953
                        l-0.706,1.624c0,0-0.106,0.106-0.071,1.307c0.035,1.2-0.141,0.247-0.071,2.224c0.071,1.977-1.342,0.071,0.141,2.613
                        c1.483,2.542,1.236,2.33,1.483,2.542c0.247,0.212,0.812,0.6,1.342,0.918c0.53,0.318,0.53,0.318,0.53,0.318s0.671,0.247,0.53,0.6
                        c-0.141,0.353,0.035,0-0.353,0.671c-0.388,0.671-0.565,0.212-0.706,0.953c-0.141,0.741-0.459-0.177-0.035,1.059
                        c0.424,1.236,0.459,0.565,0.283,1.342c-0.177,0.777-0.353,1.2,0.07,1.483c0.424,0.282,0.177-0.283,0.777,0.459
                        c0.6,0.741,0.212,0.176,0.777,1.095c0.565,0.918,0.6,0.741,0.777,1.13c0.177,0.388-0.071,0.918-0.071,0.918
                        s-0.565,0.459-1.13,0.635c-0.565,0.177-0.812-0.176-0.742,0.177c0.071,0.353,0.318,0.494,0.388,1.13
                        c0.071,0.635,0.318,0.141-0.424,0.847c-0.741,0.706,0.671,0.6-1.024,0.706c-1.695,0.106-0.989-0.106-2.013,0.035
                        c-1.024,0.141-1.448,0.176-2.154,0.318c-0.706,0.141-0.918,0.318-0.918,0.318s-0.318,0.071-1.095,0.035
                        c-0.777-0.035-0.035,0.141-1.13-0.283c-1.095-0.424-1.765-0.035-2.118,0.141c-0.353,0.176,0.07-0.282-0.777,0.353
                        c-0.847,0.635-1.377,0.918-1.518,1.024c-0.141,0.106-1.024-0.635-0.212,0.318c0.812,0.953,1.095,1.13,1.095,1.13l0.635,0.812
                        c0,0,0-0.212,0.636,1.024c0.636,1.236,0.812,1.342,0.812,1.342s0.282-0.353,0.777,0.6c0.494,0.953,0.459,0.53,0.565,1.13
                        c0.106,0.6-0.6,0.388,0.388,0.741c0.989,0.353,0.918,0.247,1.236,0.247s0.635-0.53,1.271-0.282
                        c0.636,0.247,0.812-0.106,0.989,0.353c0.176,0.459,0.035-0.07,0.212,0.847c0.176,0.918,0.212,0.424-0.141,1.377
                        c-0.353,0.953-0.282,0.07-0.459,1.165c-0.177,1.095,0,0.671-0.282,1.589c-0.156,0.506-0.267,0.814-0.337,0.993h18.394
                        C596.343,359.44,596.363,359.238,596.363,359.238z"/>
                      <path fill="none" d="M779.756,262.59c-0.265-0.503-0.45-0.583-0.9-1.351c-0.45-0.768-0.45-0.556-0.662-0.98
                        c-0.212-0.424-0.106-0.847-0.53-1.668c-0.424-0.821-0.185-0.291-0.556-0.9c-0.371-0.609-0.291-0.609-0.609-1.192
                        c-0.318-0.583-0.424-0.609-0.662-1.059c-0.238-0.45-0.45-0.397-0.45-0.397s-1.324-0.927-1.483-1.192c-0.159-0.265,0,0-0.847-1.059
                        c-0.847-1.059-0.212-0.238-1.271-1.006c-1.059-0.768-0.371-0.238-1.139-0.715c-0.768-0.477-1.43-0.768-2.092-1.324
                        c-0.662-0.556-0.291-0.344-0.9-0.927c-0.609-0.583-0.503-0.159-1.006-0.344c-0.503-0.186-0.927-0.291-1.589-0.609
                        c-0.662-0.318-0.953-0.106-1.324-0.132c-0.371-0.026-0.794-1.907-1.059-2.383c-0.265-0.477-0.053-0.291,0.079-0.741
                        c0.132-0.45,0.424-0.874,0.424-0.874s0.106-0.238,0.265-0.53c0.159-0.291,0.53-0.583,0.848-0.9c0.318-0.318,0.45-0.132,2.277-1.218
                        c1.827-1.086,0.08-0.132,0.106-0.424c0.026-0.291,0.212-0.424,0.794-1.139c0.583-0.715,0.318-0.238,0.662-0.53
                        c0.344-0.291,0.45-0.371,1.165-1.006c0.715-0.636,0.662-0.45,1.536-1.298c0.874-0.847,0.477-0.556,0.874-1.192
                        c0.397-0.635,0.45-1.059,0.45-1.059s-0.026-0.424,0-0.901c0.026-0.477,0.477-0.874,0.424-1.218
                        c-0.053-0.344-0.424-0.212-0.424-0.212l-0.953-0.503c0,0-0.662-0.026-1.51-0.026c-0.847,0-1.271-0.212-2.304-0.397
                        c-1.033-0.185-0.953-0.371-1.404-0.636c-0.45-0.265-1.086-0.079-1.907-0.159c-0.821-0.079-0.9-0.132-1.43-0.185
                        c-0.53-0.053-1.483-0.344-2.33-0.53c-0.847-0.185-0.503-0.053-1.615-0.238c-1.112-0.185-0.689-0.027-2.145-0.635
                        c-1.456-0.609-0.185-0.556-0.212-1.668c-0.026-1.112-0.371-0.53-0.98-1.086c-0.609-0.556-0.742-0.45-2.092-1.086
                        c-1.35-0.636-0.874-0.159-1.695-0.477c-0.821-0.318-0.794-0.026-0.794-0.026s-0.344,0.635-0.556,1.112
                        c-0.212,0.477-0.424,0.238-0.9,0.715c-0.477,0.477-1.192,1.642-1.457,1.774c-0.265,0.132-0.583,0.582-1.218,1.298
                        c-0.635,0.715-0.371,0.53-0.98,1.668c-0.609,1.139-0.98,1.165-1.351,1.483c-0.371,0.318-0.583,0.583-1.536,1.43
                        c-0.953,0.847-0.185,0.953-0.291,1.748c-0.106,0.795-0.635,1.112-0.847,1.377c-0.212,0.265-3.072,1.774-3.072,1.774
                        s-0.08,0.238-0.291,1.006c-0.212,0.768-0.238,0.583-0.635,1.218c-0.397,0.636,0.106,0.291,0.715,1.139
                        c0.609,0.847,0.159,0.821,0.106,1.748c-0.053,0.927-0.212,0.874-0.688,2.012c-0.477,1.139-0.53,0.927-1.006,1.642
                        s-0.609,0.45-1.404,1.006c-0.794,0.556-0.556,0.291-1.43-0.053c-0.874-0.344-0.477-0.583-0.45-1.139
                        c0.027-0.556,0.106-0.556,0.265-0.927c0.159-0.371-0.185-0.45-0.609-1.191c-0.424-0.742-0.159,0.238-0.397,0.715
                        c-0.238,0.477-0.715,0.45-1.695,0.98c-0.98,0.53-0.424,0.238-0.847,0.318c-0.424,0.079-0.609,0.132-1.218,0.132
                        c-0.609,0-0.768-0.318-1.218-0.635c-0.45-0.318-0.318-0.265-0.583-0.503c-0.265-0.238-1.165-0.079-1.774-0.159
                        c-0.609-0.08-1.218-0.186-1.854-0.9c-0.636-0.715-0.212-0.344-0.556-0.9c-0.344-0.556,0-0.212-0.106-0.953
                        c-0.106-0.741-0.053-0.609-0.106-1.059c-0.053-0.45,0.133-0.344,0.344-0.689c0.212-0.344,0.133-0.583-0.159-1.403
                        c-0.291-0.821-0.053-0.159,0.079-1.456c0.132-1.298,0.106-0.583,0.212-1.006c0.106-0.424,0.079-0.503,0.159-0.794
                        c0.079-0.291,0,0,0.132-0.106c0.132-0.106,0.927-0.344,1.642-0.397c0.715-0.053-0.238-0.371-0.238-0.662
                        c0-0.292,0.291-0.397,0.821-1.006c0.53-0.609,0.185-0.212,0.371-0.424c0.185-0.212,0.874-0.662,1.059-0.874
                        c0.186-0.212,0.265,0.08,0.794,0.239c0.53,0.159,0.556-0.053,0.927-0.397c0.371-0.344,0.159-0.318,0.053-0.45
                        c-0.106-0.132-0.503-0.424-0.609-1.139c-0.106-0.715,0.291-0.662,0.715-1.43c0.424-0.768,0.583-1.139,0.927-1.933
                        s0.265-0.424,0.847-1.324c0.583-0.9,0.98-1.298,0.98-1.298s-0.027-0.397-0.185-1.139c-0.159-0.742-0.159-0.847,0.08-1.721
                        c0.238-0.874,0.132-0.609,0.212-1.51c0.079-0.9,0-0.371-0.08-1.033c-0.079-0.662,0.424-0.397,0.688-0.635
                        c0.265-0.238,0.318-0.291,0.689-0.556c0.371-0.265,1.589-1.086,1.509-1.218c-0.079-0.132-0.371-0.424-0.424-1.033
                        c-0.053-0.609-0.053-1.324-0.053-1.827c0-0.503,0.291-0.715,0.609-1.139c0.318-0.424,0.026-0.556-0.159-1.165
                        c-0.185-0.609,0.08-0.821,0.106-1.324c0.027-0.503-0.026-0.953-0.053-1.562c-0.026-0.609,0.265-0.768,0.583-1.351
                        c0.318-0.583-0.265-0.238-0.53-0.53c-0.265-0.291-0.636-0.265-0.874-0.609c-0.238-0.344-1.006-0.556-1.192-0.689
                        c-0.185-0.132-0.768-0.132-1.139-0.927c-0.371-0.795,0.159-0.132,0.106-0.371c-0.053-0.238-0.185-0.424-0.397-0.874
                        c-0.212-0.45-0.027-0.477,0.132-1.033c0.159-0.556,0-0.291,0-0.688c0-0.397-0.291-0.477-0.344-1.139
                        c-0.053-0.662,0.98-0.265,1.801-0.583c0.821-0.318,0.503,0,0.609-0.238c0.106-0.238,0.371-0.397,0.953-0.847
                        c0.583-0.45,0.027-0.212-0.238-0.821c-0.265-0.609-0.424-0.768-0.397-0.9c0.026-0.132-0.318,0.053,0.212-1.139
                        c0.53-1.192,0.106-0.583,0.106-0.953c0-0.371-0.185-0.424-0.609-1.218c-0.424-0.795-0.106-0.53,0.027-0.9
                        c0.132-0.371,0.318-0.45,0.397-0.636c0.079-0.185,0,0-0.53-0.556c-0.53-0.556,0.662-0.582,0.662-0.582s0.794-0.371,1.192-0.689
                        c0.397-0.318,0.556-0.344,0.874-0.556c0.318-0.212,0.371-0.291,0.98-0.927c0.609-0.636,0.212-0.212,0.344-0.424
                        c0.133-0.212,0.397-1.483,0.397-1.483s0.185-0.45,0.185-0.53c0-0.08-0.265-1.509-0.132-2.224c0.132-0.715,0.212-0.212,0.185-0.556
                        c-0.027-0.344-0.424-0.953-0.741-1.404c-0.318-0.45,0.371-0.768,0.371-0.768s0.662,0.026,1.218-0.238c0,0-0.079-0.583-0.159-1.298
                        c-0.08-0.715,1.721,0.053,2.304,0.053c0.583,0,0.265,0.159,0.265,0.159s0.212,0.371,0.424,0.821
                        c0.212,0.45,1.112,0.159,1.112,0.159s0,0,0.159-0.794c0.159-0.794,0.132-0.688,0.132-1.086c0-0.397-0.106-1.059-0.106-1.059
                        s0.106-0.424,0.212-0.556c0.106-0.132,0.185-0.027,1.033-0.397c0.847-0.371,0.477-0.609,0.477-0.609l-0.397-1.139l0.238-0.847
                        l0.768-0.9c0,0,0.08-0.371,0-1.033c-0.079-0.662-0.026-0.662-0.821-1.801c-0.794-1.139,0.026-0.344,0.185-1.165
                        c0.159-0.821-0.371-0.185-0.477-0.291c-0.106-0.106-1.536-0.212-2.33-0.212c-0.794,0-1.377-0.212-1.377-0.212
                        s-2.092,0.238-2.304,0.106c-0.212-0.132-0.9-0.503-1.271-0.689c-0.371-0.185-0.768-0.291-1.086-0.265
                        c-0.318,0.026-1.827,0.53-1.827,0.53s-0.583,0.159-0.953,0.318c-0.371,0.159-1.933,0.371-2.595,0.662
                        c-0.662,0.291-0.583,0.106-1.933,0.45c-1.351,0.344-0.794,0.159-1.907,0.318c-1.112,0.159-0.609,0.238-0.768,0.344
                        c-0.159,0.106-0.927,0.212-1.112,0.662c-0.185,0.45-0.609,1.351-0.609,1.351s-0.689,0.45-1.139,1.006
                        c-0.45,0.556-0.45,0.371-1.192,1.059c-0.741,0.689-0.45,0.344-0.53,0.397c-0.079,0.053-0.715,0.397-0.9,0.424
                        c-0.185,0.026-1.059,0.132-1.51,0.185c-0.45,0.053-1.244-0.397-1.562-0.397c-0.318,0-1.51,0.424-1.51,0.424
                        s-0.662-1.271-0.768-2.012c-0.106-0.742-0.847-0.371-1.139-0.371c-0.291,0-0.238,0.424-0.477,0.821
                        c-0.238,0.397-0.344,0.98-0.344,0.98s-0.238,0.609-0.397,0.98c-0.159,0.371-0.265,0.768-0.609,1.668
                        c-0.344,0.9-0.874,0.318-0.874,0.318s-0.741-0.08-1.165-0.08s-2.039,0.238-2.33,0.477c-0.291,0.238-0.265,0.847-0.265,0.847
                        s-0.847,0.768-1.536,1.086c-0.689,0.318-1.033,0.424-1.165,0.371c-0.133-0.053-0.397-0.185-0.953-0.741
                        c-0.556-0.556-0.424-0.238-1.059-0.715c-0.636-0.477-0.847-0.371-1.404-0.556c-0.556-0.185-0.9,0.768-1.059,1.006
                        c-0.159,0.238-0.636-0.026-0.927-0.318c-0.291-0.291-0.874-0.662-1.509-1.377c-0.636-0.715-0.397-0.477-0.768-0.662
                        c-0.371-0.186-0.874,0.079-1.509,0.291c-0.635,0.212-0.874-0.053-1.271-0.159c-0.397-0.106-0.556-0.318-1.192-0.556
                        c-0.635-0.238-0.424,0.291-1.006,0.212c-0.583-0.08-0.742,0.026-1.086,0.053c-0.344,0.027-0.318-0.477-0.318-0.477
                        s-0.609-0.715-1.033-1.271c-0.424-0.556-0.689-0.583-1.006-1.483c-0.318-0.9-0.079-1.324-0.079-1.324s-1.059-1.562-1.324-1.589
                        c-0.265-0.027-0.821-0.079-1.324-0.079c-0.503,0-1.668,0.291-1.907,0.397c-0.238,0.106-0.847,0.583-1.033,0.688
                        c-0.185,0.106-1.96,0.45-2.118,0.503c-0.159,0.053-0.45,0.238-0.742,0.45c-0.291,0.212-1.218,0.424-1.271,0.318
                        c-0.053-0.106-0.318-0.556-0.662-0.874c-0.344-0.318-0.768-0.079-1.457,0.186c-0.688,0.265-0.53,0.371-1.589,0.874
                        c-1.059,0.503-0.874,0.371-1.351,0.53c-0.477,0.159-0.344,0.265-0.927,1.43c-0.583,1.165-0.715,1.245-0.715,1.245
                        s0,0.185-0.12,2.489c-0.12,2.304-0.013,1.086,0,1.218c0.013,0.132-0.039,2.119-0.009,2.383c0.031,0.265-0.031,0.344-0.004,0.821
                        c0.027,0.477-0.079,0.609-0.212,1.059c-0.132,0.45-0.159,0.344-0.318,0.768c-0.159,0.424-0.265,0.768-0.9,0.98
                        c-0.635,0.212-0.741,0-1.059,0s-0.159,0.027-0.821,0.027c-0.662,0-0.503,0.079-0.636,0.318c-0.132,0.238-0.106,0.556-0.53,1.192
                        c-0.424,0.635-0.662,0.794-1.086,1.086c-0.424,0.291-0.662,0.132-1.059,0.265c-0.397,0.133-0.556-0.026-0.953,0
                        c-0.397,0.027,0,1.324,0,1.324s-0.132,0.371-0.397,1.165c-0.265,0.794-1.377,0.821-1.377,0.821s-1.139,0.689-1.483,1.006
                        c-0.344,0.318-1.536,0.953-1.536,0.953s-0.98,0.265-1.404,0.503c-0.424,0.238-1.218,0.847-1.218,0.847l-0.53,0.609l0.477,0.9
                        c0,0,0.609,0.424,1.192,0.821c0.583,0.397,0.291,0.212,0.847,0.689c0.556,0.477,0.45,1.138,0.45,1.138s0,0,0.106,0.212
                        c0.106,0.212,0.212,0.397,0.397,1.059c0.185,0.662-0.397,1.165-0.397,1.165s-0.45,0.609-0.847,1.139
                        c-0.397,0.53-0.344,0.583-0.344,1.086c0,0.503,0.053,0.45,0.185,1.086c0.132,0.635,0.132,0.689,0.079,1.245
                        s-0.185,0.424-0.477,1.006c-0.291,0.583-0.688,0.318-1.086,0.45c-0.397,0.132-1.006,0.159-1.404,0.265
                        c-0.397,0.106-0.397,0.689-0.556,1.006c-0.159,0.318-0.503,0.344-1.271,0.9c-0.768,0.556-0.9,0.371-0.98,0.371
                        c-0.08,0-0.927-0.186-1.854-0.609c-0.927-0.424-0.292-0.212-1.483-0.609c-1.192-0.397-0.9,0.344-1.245,0.397
                        c-0.344,0.053-1.483,0.159-1.721,0.186c-0.238,0.026-0.397-0.026-1.192-0.768c-0.794-0.742-0.106-0.397-0.106-0.636
                        c0-0.238,0.08-0.397,0.212-0.503c0.132-0.106-0.159-0.318-0.344-0.583c-0.185-0.265-0.636-0.583-0.953-0.821
                        c-0.318-0.238-0.609-0.53-1.43-1.033c-0.821-0.503-0.53,0.662-0.556,0.742c-0.026,0.079-0.212,0.794-0.636,1.271
                        c-0.424,0.477-0.424,0.609-0.477,0.742c-0.053,0.132-0.689,0.079-1.668,0.477c-0.98,0.397,0.741,0.45,0.874,0.556
                        c0.133,0.106,0.344,0.424,0.583,1.086c0.238,0.662,0.159,0.847,0.185,1.165c0.026,0.318,0.238,0.635,0.424,1.059
                        c0.186,0.424,0.318,0.53,0.477,0.98c0.159,0.45,0.159,0.98,0.185,1.112c0.027,0.132,0.106,0.556,0.185,0.874
                        c0.079,0.318,0.344,0.424,0.688,0.742c0.344,0.318,0.477,0.424,1.483,1.165c1.006,0.742,0.159,0.953,0.159,1.033
                        c0,0.079,0.027,1.695-0.079,1.721c-0.106,0.026-0.662,1.086-0.689,1.35c-0.027,0.265-0.874,1.404-0.874,1.404l0.291,0.265
                        l1.112,0.132l0.185,0.98l0.132,1.324c0,0,0.609,0.318,0.689,0.397c0.079,0.079,0.424,0.53,0.768,1.165
                        c0.344,0.636,0.159,0.874,0.159,1.192c0,0.318-0.133,0.689-0.133,0.689l-0.344,0.636c0,0-0.08,0.291-0.53,2.145
                        c-0.45,1.854-0.159,0.556-0.239,0.794c-0.079,0.238-0.424,0.635-0.794,1.218c-0.371,0.583-1.377,1.404-1.377,1.404
                        s-0.106,0.397-0.132,0.556c-0.027,0.159,0.212,0.768,0.212,1.589c0,0.601-0.014,0.676-0.022,0.673
                        c0.026,0.062,0.475,1.134,0.578,1.366c0.106,0.238,0.371,0.556,0.609,0.874c0.238,0.318,0,0,0,0.529
                        c0,0.53-0.238,0.768-0.318,1.113c-0.079,0.344-0.265,0.583-0.371,0.9c-0.106,0.318-0.079,0.662-0.424,1.006
                        c-0.344,0.344-0.424,0.477-0.556,0.715c-0.132,0.238,0.133,0.9,0.133,0.9l0.344,0.689c0,0,0.953,0.397,1.165,0.477
                        c0.212,0.079,0.133,0.291,0.133,0.291s0.953,0.556,1.139,0.715c0.185,0.159,0,0.768,0,0.874c0,0.106,1.139,0.397,1.483,0.503
                        c0.344,0.106,0.503,0.477,0.662,0.877c0.159,0.4,1.033,0.103,1.404,0.023c0.371-0.079,1.509,0.053,2.516,0.265
                        c1.006,0.212,1.086,0.106,1.404,0.08c0.318-0.026,0.927,0.688,0.927,0.688s1.933,1.642,2.383,2.225
                        c0.45,0.583,0.265,0.821,0.318,1.059c0.053,0.238,0.529,0.609,0.529,1.96s-0.053,0.265-0.238,0.953
                        c-0.186,0.689-0.291,0.847-0.291,0.927s1.509,2.331,1.509,2.331s-0.053,0.477-0.185,0.741c-0.132,0.265,0,0.689,0,0.689
                        l1.218,1.086l7.124,0.212c0,0,1.721,2.595,0.741,3.469c-0.98,0.874-0.503,0.477-1.059,0.874c-0.556,0.397-0.185,0.768-0.503,1.351
                        c-0.318,0.582,0.424,0.662,0.794,1.112c0.371,0.45,0.45,1.748,0.45,1.748l-0.742,1.112l3.999,3.098l-0.424,1.906l0.159-0.053
                        c0,0,0.397-0.424,0.794-0.742c0.397-0.318,0.318-0.079,0.794-0.318c0.477-0.238,0.477-0.212,0.662-0.45
                        c0.185-0.238,1.509-0.291,1.986-0.45c0.477-0.159,0.477-0.582,0.583-0.874c0.106-0.292,1.615-1.589,2.013-2.119
                        c0.397-0.53,0-0.212-0.238-0.874c-0.238-0.662-0.079-0.371,0.027-0.689c0.106-0.318,0.344-1.721,0.344-1.721
                        s2.304-2.304,2.383-2.357c0.08-0.053,2.119,0.344,3.363,0.212c1.245-0.133,1.536,0.159,1.642,0.132
                        c0.106-0.026,0.212-1.192,0.212-1.192s1.695-0.821,2.013-0.874c0.318-0.053,0.874,0.689,1.192,1.192
                        c0.318,0.503,1.112,1.112,1.774,1.933c0.662,0.821,0.9,0.318,0.9,0.318s1.536,2.807,2.542,4.422
                        c1.006,1.616-0.583,1.827-0.583,1.827s-0.132,1.006-0.238,1.668c-0.106,0.662,0.185,0.477,0.424,1.086
                        c0.238,0.609,0.424,0.079,0.503,0.079s1.695,0.318,2.198,0.291c0.503-0.026,1.668-0.132,2.145-0.132
                        c0.477,0,1.483,0.212,1.668,0.159c0.185-0.053,0.874-0.079,1.165-0.212c0.291-0.132,1.033-0.026,1.748-0.185
                        c0.715-0.159,0.556,0.026,0.901-0.265c0.344-0.291,1.509,0.106,1.589,0.185c0.079,0.08,1.827,1.006,1.827,1.006
                        s0.662,0.794,0.768,1.059c0.106,0.265-0.053,0.874,0,0.953c0.053,0.08,1.801,0.848,1.88,0.927c0.08,0.079,0.821,0.477,1.218,0.9
                        c0.397,0.424,0.715,0.795,0.953,1.324c0.238,0.529,0.715,0.689,0.741,0.768c0.027,0.08,0.794,2.781,0.794,2.781
                        s1.43,0.662,1.642,1.165c0.212,0.503,0.477,0.583,1.112,1.589c0.635,1.006,0.291,1.748,0.291,2.012c0,0.265,0.636,0.98,0.9,1.51
                        c0.265,0.529,0.715,0.529,1.112,0.953c0.397,0.424,0.503,0.291,1.006,0.741c0.503,0.45,0.503,0.106,1.033,0
                        c0.53-0.106,1.562-0.662,2.489-1.271c0.927-0.609,0.662-0.212,1.695-0.715c1.033-0.503,0.53-0.265,1.086-0.477
                        c0.556-0.212,0.583,0.397,0.688,0.635c0.106,0.238,0.741,0.318,0.927,0.344c0.185,0.027,0.503,0.053,0.927-0.185
                        s0.503-0.424,0.503-0.424l1.297,0.424l0.583-2.198c0,0,0.08-0.318,0.98-1.509c0.9-1.192,0.45-0.371,1.297-1.404
                        c0.847-1.033,0.477-0.609,1.059-1.642c0.582-1.033,0.397-0.662,0.98-1.801c0.583-1.139,0.371-0.636,0.715-1.589
                        c0.344-0.953,0.212-0.45,0.794-1.536c0.583-1.086,0.318-0.477,0.848-1.351c0.53-0.874,0.689-0.768,1.218-1.536
                        c0.53-0.768,0.132-0.238,0.238-0.583s0.688-0.397,0.688-0.397s0.344-0.238,1.086-1.006c0.741-0.768,0.477-0.556,1.112-1.774
                        c0.636-1.218,0.397-0.689,1.139-1.854c0.741-1.165,0.291-0.53,0.821-1.509c0.53-0.98,0.265-0.424,0.9-1.191
                        c0.636-0.768,0.397-0.424,0.953-1.351c0.556-0.927,0.238-0.45,0.45-1.218c0.212-0.768,0.847-0.636,1.403-1.245
                        c0.556-0.609,0.794-0.159,1.933-0.741c1.139-0.583,0.715-0.238,2.198-0.662c1.483-0.424,0,0,0.477,0.344
                        c0.477,0.344,0.874,0.344,1.642,0.662c0.768,0.318,1.192,0.265,1.43,0.477c0.238,0.212,2.754,0.026,3.416-0.026
                        c0.662-0.053,1.245-0.027,1.245-0.027s0.238,0,2.887-0.715c2.648-0.715,1.43-0.053,1.827-0.132c0.397-0.08,3.84-0.689,4.317-0.874
                        c0.477-0.186,3.204-1.139,3.443-1.298c0.238-0.159,2.198,0.053,3.813-0.212c1.615-0.265,0.821-0.794,1.033-1.139
                        c0.212-0.344,1.403-0.159,3.469-0.291c2.066-0.132,1.245-0.159,1.033-0.768C780.338,263.384,780.021,263.093,779.756,262.59z"/>
                      <path fill="#8D83C6" d="M783.481,263.693c-0.159-0.282-0.371-0.424-0.883-0.741c-0.512-0.318,0.053,0.353-0.812-0.689
                        c-0.865-1.042-1.236-1.006-1.377-1.854c-0.141-0.847-0.124-1.218-0.547-2.207c-0.424-0.989-0.424-1.095-0.918-1.607
                        c-0.495-0.512-1.077-0.724-1.095-0.954c-0.018-0.229,0.035-0.812-0.265-1.377c-0.3-0.565,0.565-0.742-0.671-0.83
                        c-1.236-0.088-2.348,0.071-2.313-0.177c0.035-0.247,0.477-0.847,0.6-1.147c0.124-0.3,0.282-0.918-0.494-1.201
                        c-0.777-0.282-1.13-0.212-1.501-0.441c-0.371-0.23,0,0.106-0.936-0.565c-0.936-0.671-1.165-0.724-2.101-1.306
                        c-0.936-0.583-0.918-0.494-1.112-0.724c-0.194-0.23-0.724-0.759-0.989-1.006c-0.265-0.247-0.477-0.459-0.953-0.459
                        s-0.759,0.371-1.359-0.035c-0.6-0.406-1.165-0.671-1.165-0.671l0.124-0.424c0,0-1.183-0.141-0.3-0.83
                        c0.883-0.688,0.477-0.742,2.03-1.059c1.553-0.318,2.012-1.095,1.995-1.465c-0.018-0.371,0.106-0.883,0.318-1.183
                        c0.212-0.3,3.902-3.16,4.025-3.602c0.124-0.441,0.265-0.424,0.424-1.147c0.159-0.724,0.053-0.724,0.265-0.989
                        c0.212-0.265,0.636-0.847,1.218-1.271c0.583-0.424,0.6-0.689,0.565-0.971c-0.035-0.282,0.865-0.159-0.3-0.936
                        c-1.165-0.777-1.43-0.847-1.518-0.971c-0.088-0.124,0.794-0.424-0.83-0.353c-1.624,0.071-1.554-0.176-2.242-0.3
                        c-0.689-0.124-1.695-0.318-2.03-0.353c-0.288-0.03-1.53-0.267-1.879-0.334c-0.043,0-0.098-0.019-0.098-0.019
                        s0.04,0.007,0.098,0.019c0.083-0.001,0.12-0.077-0.38-0.531c-0.759-0.689-1.042-0.971-1.624-0.636
                        c-0.582,0.336-0.6,0.618-0.953,0.565c-0.353-0.053-1.006-0.247-1.342-0.406c-0.335-0.159,0.883,0.477-0.936-0.159
                        c-1.818-0.635-2.948-1.024-2.948-1.024s-0.159-0.159-0.141-0.442c0.018-0.282-0.071-0.988-0.194-1.2
                        c-0.123-0.212,0.724,0.106-0.494-0.512c-1.218-0.618-1.201-0.494-1.218-0.618c-0.018-0.124,0.583-0.371-1.059-0.83
                        s-2.295-0.477-2.754-0.724c-0.459-0.247-0.706-0.3-0.847-0.335c-0.141-0.035-0.53-0.353-0.759-0.353
                        c-0.229,0-0.918,0.141-1.253,0.442c-0.335,0.3-0.512,0.635-0.6,0.9c-0.088,0.265-0.318,0.812-0.406,1.13
                        c-0.088,0.318-0.547,0.53-0.847,0.936c-0.3,0.406-0.847,0.777-1.148,1.077c-0.3,0.3-0.565,0.653-0.565,0.653
                        s-0.212,0.388-0.424,0.865c-0.212,0.477-0.106,0.336-0.424,0.777c-0.318,0.441-0.283,0.406-0.442,0.759
                        c-0.159,0.353,0.053,0.035-0.335,0.653c-0.389,0.618-0.124,0.371-0.53,0.9c-0.406,0.53-0.053,0.3-0.671,0.706
                        c-0.618,0.406-0.159,0.212-0.918,0.388c-0.759,0.177-1.342,1.042-1.342,1.201c0,0.159,0.3,0.035-0.071,0.494
                        c-0.371,0.459-0.353,0.565-0.406,0.742c-0.053,0.177,0.229-0.212-0.124,0.353c-0.353,0.565-0.212,0.371-0.424,0.653
                        c-0.212,0.282,0.265,0.318-0.477,0.512c-0.741,0.194-0.159-0.106-0.9,0.212c-0.742,0.318-0.123-0.177-0.777,0.424
                        c-0.653,0.6-0.847,0.759-1.095,1.112c-0.247,0.353-0.282,0.141-0.247,0.459c0.035,0.318,0.177,0.212,0.053,0.565
                        c-0.124,0.353,0.141,0.106-0.229,0.53c-0.371,0.424-0.371,0.283-0.636,0.653c-0.265,0.371-0.212,0.088-0.336,0.6
                        c-0.123,0.512-0.282,0.3-0.176,0.971c0.106,0.671-0.441,0.353,0.265,0.83c0.706,0.477,1.059,0.512,1.077,0.582
                        c0.018,0.071,0.883-0.247-0.018,0.477c-0.9,0.724-0.141,1.165-0.936,0.83c-0.794-0.335-0.583-0.335-0.883-0.883
                        c-0.3-0.547,0.512-1.147-0.565-0.812c-1.077,0.335-1.077,0.194-1.324,0.424c-0.247,0.229-0.794,1.006-1.095,1.094
                        c-0.3,0.088-0.194-0.212-0.547,0.159c-0.353,0.371,0.424,0.035-0.671,0.635c-1.095,0.6-1.324,0.159-1.801-0.212
                        c-0.477-0.371-1.183-0.53-1.43-0.53c-0.247,0,0.353,0.653-0.936-0.124c-1.289-0.777-1.359-0.759-1.412-0.847
                        c-0.053-0.088-0.371-0.141,0-0.9c0.371-0.759,0.953,0.247,0.547-1.165c-0.406-1.412-0.918-1.677-0.865-2.101
                        c0.053-0.424-1.12-0.935-0.004-1.218c1.116-0.282,1.946-0.282,2.493-0.512c0.547-0.23,1.253-0.424,1.042-0.918
                        c-0.212-0.494-0.441-0.671-0.353-0.83c0.088-0.159,0.812-0.265,0.953-0.265s0.989-0.106,1.907-0.918
                        c0.918-0.812,1.306-0.688,1.165-1.165c-0.141-0.477-0.035-0.636-0.318-1.236c-0.283-0.6-0.689-0.6-0.671-1.147
                        c0.018-0.547,0.035-0.936,0.336-1.306c0.3-0.371,1.183-1.554,1.712-2.154c0.53-0.6,0.918,0.706,0.971-1.165
                        c0.053-1.871,0.159-1.606-0.018-2.242c-0.177-0.635-0.265-0.689-0.282-0.9c-0.018-0.212-0.318-0.335,0-0.777
                        c0.318-0.441,0.018-0.635,0.141-1.112c0.124-0.477-0.936-0.441,0.247-0.724c1.183-0.282,2.136,0.283,2.489-0.741
                        c0.353-1.024,0.635-0.583,0.618-1.854c-0.018-1.271,0.177-1.059-0.265-1.483c-0.441-0.424-0.441-1.306-0.388-1.518
                        c0.043-0.173,0.478-0.072,0.612-0.387c-0.005-0.112-0.013-0.496-0.03-1.45c-0.053-2.948,0-3.601,0-3.601s0.406-0.759,0.441-1.218
                        c0.035-0.459,0.106-0.583-0.035-1.059c-0.141-0.477,0.071-1.165-0.6-1.359c-0.671-0.194-1.801,0.088-1.801,0.088
                        s-0.282,0.388-0.335-0.353c-0.053-0.742,0.053-0.6-0.229-1.095c-0.282-0.494-0.9-1.165-1.042-1.2
                        c-0.141-0.036-0.123-0.336,0.035-0.565c0.159-0.23,0.282-0.336,1.006-0.583c0.724-0.247,0.83-0.283,1.112-0.883
                        c0.282-0.6,0.353-0.618,0.636-1.041c0.282-0.424,0.706-0.777,0.424-1.448c-0.282-0.671-0.583-0.583-0.512-0.9
                        c0.071-0.318,0.088-0.565,0.194-0.865c0.106-0.3,0.088,0.07,0.123-0.883c0.035-0.953,0.159-1.095-0.071-1.448
                        c-0.229-0.353-0.565-0.618-0.565-0.724s0.212-0.424,0.318-0.636c0.106-0.212-1.359,0.247,0.177-0.353
                        c1.536-0.6,1.324-0.547,1.624-0.795c0.3-0.247,0.936,0.053,1.024-0.565c0.088-0.618-0.159-0.865,0.3-1.183
                        c0.459-0.318,0.759-0.124,0.847-0.741c0.088-0.618,0.141-1.112,0.141-1.607c0-0.494,0.053-0.847-0.018-1.501
                        c-0.071-0.653-0.265-0.318-0.212-1.024c0.053-0.706-0.265-0.547,0.088-1.147c0.353-0.6,0.777-0.9,0.989-1.095
                        c0.212-0.194,0.318,0.706,0.989,0.759c0.671,0.053,1.13,0.177,1.501-0.106c0.371-0.283,0.477-0.161,0.706-0.681
                        c0.229-0.52,0.123-0.273,0.529-1.049c0.406-0.777,0.742-1.095,0.724-1.677c-0.018-0.583-0.247-0.741-0.247-0.741
                        s1.73-0.212,1.854-0.547s0.229,0.282,0.282-0.6c0.053-0.883,0.636-0.159,0-1.024c-0.635-0.865-1.042-1.183-1.042-1.395
                        c0-0.212,0.688-0.371,1.059-0.83c0.371-0.459,0.724-0.565,0.529-1.024c-0.194-0.459-0.494-1.677-0.512-1.783
                        c-0.018-0.106-1.006-0.583-0.53-1.059c0.477-0.477,0.936-0.3,0.583-0.812c-0.353-0.512-0.777-0.936-1.024-1.183
                        c-0.247-0.247-3.072-0.989-3.248-0.953c-0.177,0.035-1.112,0.088-1.112,0.088s-1.253-0.3-1.377-0.353
                        c-0.124-0.053-0.883-0.494-0.883-0.583c0-0.088,1.147-0.353-0.3-0.3c-1.448,0.053-1.465,0-1.96-0.124
                        c-0.494-0.123-0.441-0.194-0.812-0.335c-0.371-0.141-1.024-0.353-1.024-0.353s0.07-0.777,0.053-0.918
                        c-0.018-0.141-0.724,0.141-0.229-0.671c0.494-0.812,1.112,0.494,0.936-1.483c-0.177-1.977-0.194-2.083-0.194-2.154
                        c0-0.071,0.689,0.53,0.477-0.494c-0.212-1.024-0.159-0.901-0.371-1.448c-0.212-0.547-0.618-0.9-0.388-1.518
                        c0.229-0.618,0.388-0.583,0.282-0.989c-0.106-0.406-0.088-0.477-0.3-0.759c-0.212-0.282-0.459,0.106-0.565-1.024
                        c-0.106-1.13-0.177-1.059,0-1.236c0.177-0.177,0.353-0.512,0.441-0.812c0.088-0.3-0.053-0.194,0.265-0.759
                        c0.318-0.565,0.812-1.236,0.494-1.607c-0.318-0.371-2.03-2.277-2.436-2.436c-0.406-0.159-2.03-4.678-3.036-5.367
                        c-1.006-0.689,0.538-5.322,0.246-5.401c-0.133-0.036-0.199-0.11-0.336-0.246c-0.335-0.246-0.678-0.51-1.041-0.814
                        c-0.132,1.88-1.236,6.665,0.035,7.909c1.271,1.245,2.127,3.098,2.578,3.813s2.074,3.24,2.048,3.319
                        c-0.027,0.079-0.821,1.033-0.927,1.615c-0.097,0.534-0.786,1.721-0.903,1.919c0.054,0.009,0.218,0.148,0.718,0.809
                        c0.821,1.086,0.98,1.351,0.98,1.351s-0.185-0.185-0.106,0.689c0.079,0.874-0.026,0.026-0.133,1.192
                        c-0.106,1.165-0.106,0.821,0.027,1.35c0.132,0.53,0.026,2.489,0.026,2.489l-0.079,0.847c0,0-0.424,0.742-0.662,1.165
                        c-0.238,0.424-0.106,1.112-0.106,1.112s0.344,0.185,0.265,0.582c-0.079,0.397,0.848,0.53-0.45,1.139
                        c-1.298,0.609-1.218,0.821-2.039,1.006c-0.821,0.185-1.96,0.397-2.145,0.556c-0.185,0.159,1.165-0.053-0.874,0.238
                        c-2.039,0.291-2.463,0.106-2.675,0.212c-0.212,0.106-0.424,0.318-0.635,0.477c-0.212,0.159-0.63,0.079-0.832,0.45
                        c-0.201,0.371-0.016-0.027-0.307,0.742c-0.291,0.768,0.027,0.609-0.874,1.377c-0.9,0.768-1.192,0.768-1.43,1.112
                        c-0.238,0.344-1.88,1.218-1.986,1.245c-0.106,0.026-0.318,0.053-0.318,0.053s-1.086-0.053-1.192-0.106
                        c-0.106-0.053-0.583-0.053-0.847-0.212c-0.265-0.159-1.615-1.165-1.615-1.351c0-0.185,0-0.715,0-0.715l-0.424-1.033
                        c0,0-0.715-0.98-1.006-0.662c-0.291,0.318-1.218,2.145-1.43,2.436c-0.212,0.291-0.688,1.483-0.715,1.562
                        c-0.026,0.079,0.238-0.477-0.212,0.45c-0.45,0.927-0.662,0.927-0.98,1.165c-0.318,0.238-0.503,0.344-0.768,0.397
                        c-0.265,0.053,0.503,0.265-0.503,0.159c-1.006-0.106-1.986-0.371-2.251-0.212c-0.265,0.159-1.907,0.186-1.801,0.689
                        c0.106,0.503,0.318,0.477-0.185,1.059c-0.503,0.583,0.583,2.728-0.794,0.874c-1.377-1.854-3.231-1.986-3.416-1.827
                        c-0.185,0.159-0.53,0.185-0.53,0.185l-1.43-0.106c0,0,0.424-0.635-0.291-0.953c-0.715-0.318-0.477-0.662-2.224-0.53
                        c-1.748,0.132-2.463,0.026-2.542,0c-0.079-0.027,1.139,0.053-0.079-0.027c-1.218-0.08-1.192,0.821-1.986-0.159
                        c-0.794-0.98-0.874-0.794-1.059-1.324c-0.185-0.53-0.556-0.821-0.556-1.51c0-0.688-0.291-1.509-0.397-1.589
                        c-0.106-0.079-0.636-0.715-1.006-1.271c-0.371-0.556,0.027-1.245-0.927-0.98c-0.953,0.265-1.51,0.318-1.721,0.742
                        c-0.212,0.424,0.662,0.477-0.397,0.503c-1.059,0.027-2.304-0.794-3.045-0.159c-0.741,0.636,0.159,0.344-1.351,0.953
                        c-1.509,0.609-1.43,0.847-1.854,0.636c-0.424-0.212-0.821-0.45-1.139-0.45c-0.318,0-1.695-0.609-2.013-0.318
                        c-0.318,0.291-0.344,0.503-0.689,0.741c-0.344,0.238-2.039,0.9-2.41,1.086c-0.371,0.185-0.662,0.106-0.927,0.477
                        c-0.265,0.371-0.318,0.185-0.715,0.847c-0.397,0.662-0.185,0.265-0.742,1.059c-0.556,0.794-0.662,0.662-0.688,1.059
                        c-0.027,0.397,0.132,0.053,0,0.847c-0.132,0.794-0.053,0.53-0.132,1.244c-0.079,0.715-0.079,0.291-0.133,0.98
                        c-0.053,0.689,0,1.483,0,1.483s0.185-0.821,0.291,0.503c0.106,1.324,0.053,1.457-0.053,1.509c-0.106,0.053-0.397-0.45-0.556,0.318
                        c-0.159,0.768-0.9,0.45-0.132,1.297c0.768,0.848,2.304,0.583,0.768,0.848c-1.536,0.265-1.562,0.238-1.748,0.238
                        c-0.185,0-0.636-0.371-1.139-0.106c-0.503,0.265-0.848-0.318-0.9,0.609c-0.053,0.927,0.98,1.827-0.397,1.88
                        c-1.377,0.053-1.642,0.026-1.774-0.027c-0.132-0.053-0.794-0.98-0.953-1.006c-0.159-0.026-0.238-0.794-1.192-0.556
                        c-0.953,0.238-1.059,0.132-1.298,0.265c-0.238,0.132,0.053,0.635-0.238,0.132c-0.291-0.503-1.139-0.397-0.185-0.9
                        c0.953-0.503,1.933,0.212,1.351-0.874c-0.583-1.086-0.662-1.112-0.953-1.483c-0.291-0.371-0.212-0.291-1.033-1.139
                        c-0.821-0.847-0.53-1.112-1.377-1.192c-0.848-0.079-1.43,0.079-1.774-0.185c-0.344-0.265-0.079,0.741-0.874-0.953
                        c-0.794-1.695,0.847-1.139-0.821-1.827c-1.668-0.689-1.827-0.742-1.827-0.847s0.53-0.079-0.185-0.609
                        c-0.715-0.53-1.509-0.953-1.668-0.927c-0.159,0.027-1.298-0.106-1.536-0.185c-0.238-0.079-1.271-0.715-1.774-0.344
                        c-0.503,0.371-1.086,0.45-1.139,0.821c-0.053,0.371-0.027,0.132-0.159,0.741c-0.132,0.609,0.45,0.98-0.291,0.636
                        c-0.742-0.344-0.635-0.106-0.874-0.583c-0.238-0.477,0.583-0.371-0.424-0.689c-1.006-0.318-0.794-0.291-0.847-0.424
                        c-0.053-0.132,0.265,0.609,0.185-1.112c-0.08-1.721-0.635-2.304-0.635-2.304l-0.185-0.212c0,0,0.026-1.404,0-1.827
                        c-0.026-0.424-0.53,0.238-0.026-0.424c0.503-0.662,0.662-0.397,0.794-0.821c0.132-0.424,0.106-0.556,0.185-1.271
                        c0.079-0.715-0.371-1.086,0-1.615c0.371-0.53,0.424-1.509,0.424-1.509s-0.238-0.132-1.192-0.609
                        c-0.953-0.477-1.774-0.794-1.96-0.794c-0.185,0,1.377-0.556-1.006-0.079c-2.383,0.477-2.94,0.132-2.94,0.132s0.08-0.45-0.291-0.503
                        c-0.371-0.053-1.669-0.185-1.669-0.185s-0.079-0.715-0.45-0.874c-0.371-0.159-0.318-0.344-0.98-0.768
                        c-0.662-0.424-0.371-1.589-1.721-0.794c-1.351,0.794-1.324,0.688-1.695,0.927c-0.237,0.153-0.506,0.235-0.678,0.278
                        c-0.079,0.043-0.17,0.04-0.17,0.04s0.073-0.015,0.17-0.04c0.129-0.07,0.225-0.265-0.17-0.808c-0.636-0.874-0.953-1.192-0.953-1.192
                        s-0.927-0.794-1.139-0.688c-0.212,0.106-1.509,0.238-1.509,0.238s0.185-0.318-0.397,0.371c-0.582,0.688-0.397,0.371-0.741,0.715
                        c-0.344,0.344-0.371,0.953-1.192,0.636c-0.821-0.318-4.007-0.764-4.158-0.821c-1.801-0.689-5.359-3.416-5.465-3.257
                        c-0.001,0.002-0.004,0.007-0.006,0.01c-0.178,0.432-0.357,0.864-0.538,1.295c0,0.001-0.001,0.003-0.001,0.005
                        c-0.026,0.212,2.911,2.054,3.149,2.213c0.238,0.159,5.243,2.357,5.376,2.383c0.132,0.027,2.092-0.027,2.092-0.027
                        s1.245-0.212,1.51-0.556c0.265-0.344,0.344-0.609,0.609-0.9c0.265-0.291,0.132-0.742,0.609-0.795
                        c0.477-0.053,0.424,0.636,0.768,0.847c0.344,0.212,1.086,0.98,1.059,1.192c-0.026,0.212-0.132,0.371,0.318,0.397
                        c0.45,0.026,1.562,0.106,1.562,0.106l1.748-0.45c0,0,0.079-0.026,0.159,0.053c0.079,0.079,1.642,1.033,1.907,1.483
                        c0.265,0.45,0.397,0.45,1.165,0.636c0.768,0.185,0.953,0.212,0.953,0.212s0.609,0.635,1.43,0.556
                        c0.821-0.08,2.939-0.159,2.939-0.159s0.583-0.609,0.874,0c0.291,0.609,0.238,0.98,0.265,1.536c0.026,0.556,0.344,0-0.132,1.112
                        c-0.477,1.112-0.556,1.298-0.583,1.536c-0.026,0.238-0.318-0.185-0.159,0.689c0.159,0.874,0.318,0.768,0.397,1.403
                        c0.08,0.636,0,0.265-0.026,1.086c-0.026,0.821-0.053,0.953,0.185,1.404c0.238,0.45,0.106,0.503-0.132,0.9
                        c-0.238,0.397-0.185,0.636,0,0.847c0.185,0.212,0.45,1.536,1.139,1.695c0.688,0.159,0.609-0.026,0.847,0.45
                        c0.238,0.477-0.265,0.477,0.583,0.953c0.847,0.477,0.106,0,1.006,0.689c0.9,0.689,0.768,0.609,1.668,0.477
                        c0.9-0.133,1.483,0.397,1.457-0.53c-0.027-0.927,0.132-0.609,0.053-1.324c-0.08-0.715-0.556-0.715-0.265-1.086
                        c0.291-0.371,0.689-0.159,0.821,0.159c0.132,0.318,1.88,1.059,2.41,1.483c0.53,0.424,0.397,0.238,0.53,0.424
                        c0.132,0.185,0.424,0.424,0.503,0.503c0.08,0.079,0.45-0.424,0.45,0.212c0,0.636-0.212,0.715,0.106,1.112
                        c0.318,0.397,0.265,0.291,0.583,0.689c0.318,0.397,1.562,0.794,1.562,0.794s0.556,0.026,0.609,0.318
                        c0.053,0.291-1.456,0.291,0.318,0.397c1.774,0.106,1.218-0.318,1.854,0.476c0.636,0.795,0.45,0,0.636,0.795
                        c0.185,0.794,0.371,0.583-0.053,0.927c-0.424,0.344-0.662,0.106-0.636,0.662c0.026,0.556-0.106,0.292,0.185,0.768
                        c0.291,0.477,0.185,0.133,0.397,0.636c0.212,0.503-1.509,0.45,0.397,0.715c1.907,0.265,1.589,0.291,2.065,0.291
                        c0.477,0,1.165-0.132,1.218,0c0.053,0.132,0.397,1.006,0.079,1.245c-0.318,0.238,0.159-0.927-0.529,0.53
                        c-0.689,1.457-0.848,1.615-0.9,1.695c-0.053,0.079-1.112,0.318-1.245,0.397c-0.132,0.079-0.185-0.715-0.477,0.291
                        c-0.291,1.006-1.006,1.404-1.245,1.509c-0.238,0.106,0.397-0.318-0.662,0.238c-1.059,0.556-0.98,0.397-1.298,0.636
                        c-0.318,0.238-0.583,0.265-0.953,0.424c-0.371,0.159-0.424-0.265-0.768,0.238c-0.344,0.503-0.45,0.132-0.477,0.715
                        c-0.026,0.582-0.344-0.291,0.079,0.927c0.424,1.218,0.556,1.483,0.556,1.483s0,0.424,0.265,0.768
                        c0.265,0.344,0.662,1.324,1.854,1.351c1.192,0.026,1.404,0.053,1.404,0.053s-0.45,0.026-0.265,0.424
                        c0.185,0.397,0.847,0.847,0.477,1.351c-0.371,0.503,0.132,0.45-0.556,0.742c-0.689,0.291-0.291-0.477-1.192,0.53
                        c-0.9,1.006-1.033,0.688-0.9,1.35c0.132,0.662,0.132,0.583,0.291,0.953c0.159,0.371,0.132,0.159,0.344,0.609
                        c0.212,0.45,0.424,0.344,0.291,0.609c-0.132,0.265,0.079,0.027-0.424,0.133c-0.5,0.105-1.234,0.106-1.399,0.184
                        c-0.024,0.011-0.036,0.017-0.004,0.001c0,0,0.003-0.001,0.004-0.001c0.095-0.046,0.44-0.221-0.428,0.16
                        c-1.086,0.477-1.086,0.185-1.245,0.583c-0.159,0.397-0.344,1.033-0.583,1.139c-0.238,0.106-0.079-0.132-0.636-0.212
                        c-0.556-0.079-2.78-0.344-3.257-0.106c-0.477,0.238-0.794,0.318-1.006,0.424c-0.212,0.106-0.45,0.026-0.477-0.132
                        c-0.027-0.159,0.185,0.45-0.027-0.609c-0.212-1.059-0.212-1.562-0.741-1.986c-0.53-0.424,0.132-0.53-0.847-0.874
                        c-0.98-0.344-1.907-0.715-1.907-0.715s-1.589-1.059-2.198-0.53c-0.609,0.53-1.589-0.583-1.615,1.245
                        c-0.026,1.827,0.212,1.642-0.45,2.039c-0.662,0.397-1.006,0.371-1.43,0.53c-0.424,0.159-0.98,0.291-0.98,0.291
                        s0.424,0.715,0.477,1.298c0.053,0.583,0.106,1.059,0.106,1.059l0.847,1.086c0,0,0.185,0.053,0.768,1.112
                        c0.583,1.059,1.218,0.927,0.847,1.324c-0.371,0.397-1.006-0.026-0.768,0.768c0.238,0.794-0.847-0.212,0.424,1.138
                        c1.271,1.351,1.774,1.351,2.013,1.721c0.238,0.371,0.503,0.318,0.556,0.821c0.053,0.503,0.185,0.238,0.053,0.715
                        c-0.133,0.477,0.212-0.08-0.133,0.741c-0.344,0.821-0.503,0.847-0.529,1.43c-0.026,0.583-0.026,0.45-0.053,0.927
                        c-0.026,0.477-0.821,0.08-0.609,0.874c0.212,0.795,0.636,1.483,0.636,1.483s0.953,1.112,1.033,1.351
                        c0.079,0.238,0.106,0,0.053,0.477c-0.053,0.477-1.297,0.212,0,1.112c1.298,0.9,1.669,0.662,1.562,0.953
                        c-0.106,0.291-0.159,0.106-0.159,0.688c0,0.583,0.185,0.053-0.079,1.245c-0.265,1.192-0.265,1.245-0.344,1.562
                        c-0.079,0.318-0.397,0.794-0.397,0.794s-0.768,0.556-1.165,1.377c-0.397,0.821-0.635,0.132-0.583,1.324
                        c0.053,1.192,0.133,1.801-0.053,2.542c-0.185,0.741-0.212,0.847-0.424,1.456c-0.212,0.609-0.212,0.079,0.318,1.006
                        c0.53,0.927,1.086,0.397,0.583,1.271c-0.503,0.874-0.768,0.609-0.874,1.298c-0.106,0.688-0.847,0.132-0.741,1.218
                        c0.106,1.086,0.079,0.874,0.265,1.324c0.185,0.45,0.371,0.53,0.291,0.9c-0.079,0.371,0.185,0.08-0.291,0.768
                        c-0.477,0.689-0.636,0.768-0.583,1.668c0.053,0.901-0.106,0.821,0.212,1.404c0.318,0.583,0.688,0.556,0.503,1.192
                        c-0.185,0.635-0.477,0-0.556,1.059c-0.079,1.059,0.053,1.165,0.291,1.404c0.238,0.238,0.106,0.556-0.53,0.503
                        c-0.636-0.053-2.886-0.556-3.098-0.53c-0.212,0.027,0.079,0.053-0.662-0.053c-0.741-0.106-0.953-0.344-1.536-0.318
                        c-0.583,0.027-1.456-0.132-1.589,0.08c-0.132,0.212,0,0.132-1.086,0.689c-1.086,0.556-1.509,0.397-1.642,0.397
                        c-0.132,0,1.377,1.086-0.503-0.026c-1.88-1.112-0.212-0.45-2.145-1.351c-1.933-0.9-2.436-1.165-2.436-1.165
                        s-0.318,0.556-0.424,0.556c-0.106,0-1.112-0.424-1.112-0.424s-0.609-0.318-0.609-0.397c0-0.079-0.079,0.715,0.053-0.715
                        c0.132-1.43,0.45-1.668,0.424-2.304c-0.026-0.635,0.45-1.509-0.265-1.748c-0.715-0.238-2.065-0.583-2.065-0.583l-0.795-0.238
                        c0,0-0.503-0.027-0.874-0.238c-0.371-0.212-2.198-0.662-2.198-0.768c0-0.106,0.318-1.139-0.768-0.689
                        c-1.086,0.45-1.165,0.318-1.35,0.53c-0.185,0.212-0.238,0.026-0.45,0.503c-0.212,0.477-0.132,0.053-0.265,0.768
                        c-0.133,0.715-0.239,0.662-0.371,1.695c-0.132,1.033,0.026,1.086,0,1.324c-0.027,0.238,0,0.132-0.292,0.715
                        c-0.291,0.583-0.371,0.079-1.006,1.033c-0.635,0.954-0.9,0.397-0.715,1.245c0.185,0.848,0.106,0.636,0.344,1.165
                        c0.238,0.53,0.503,0.053,0.053,0.636c-0.45,0.583-0.672-0.079-0.455,0.953c0.217,1.033,0.508,1.086,0.535,1.562
                        c0.026,0.477,0.185,0.026-0.026,0.636c-0.212,0.609,0.053,0.238-0.238,0.953c-0.291,0.715,1.139,0.185-0.742,0.742
                        c-1.88,0.556-1.88,0.927-2.039,1.165c-0.159,0.238-1.748,0.583-2.013,0.927c-0.265,0.344-0.847,0.292-1.006,0.45
                        c-0.159,0.159,0,0.344-0.344,0.212c-0.344-0.133-1.404-0.927-1.642-0.98c-0.238-0.053-3.337-1.774-6.223-2.039
                        c-2.332-0.214-2.227-0.289-2.142-0.297c-0.171-0.016-1.909-0.736-1.909-0.736s0.132-0.132,0-0.45
                        c-0.133-0.318-1.457-2.065-1.139-2.595c0.318-0.53,1.006-2.224,1.165-2.542c0.159-0.318,0.9-1.298,1.086-1.774
                        c0.185-0.477,0.265,0.027,0.53-0.715c0.265-0.742-0.318-1.404-0.318-1.404s-0.318-0.53-0.424-0.583
                        c-0.106-0.053-1.218-0.689-1.218-0.927c0-0.238,0.053-1.033,0.371-1.086c0.318-0.053,0.556-0.132,0.9-0.185
                        c0.344-0.053,0.609-0.238,0.927-0.768c0.318-0.53,0.848-1.562,0.848-1.748c0-0.185,0.265-0.821,0.159-1.059
                        c-0.106-0.238-0.821-0.9-0.847-1.006c-0.026-0.106-0.212-0.583-0.53-0.503c-0.318,0.079-0.344,0-1.192,0.159
                        c-0.847,0.159-1.506,0.159-1.506,0.159s-0.719-1.086-0.931-1.271c-0.212-0.185,0.079-0.159-0.371-0.318
                        c-0.45-0.159-1.324-0.318-1.324-0.318s-0.794,0.106-1.165,0.026c-0.371-0.079-1.139-0.318-1.271-0.397
                        c-0.132-0.08-0.053,0.132-0.715-0.265c-0.662-0.397-0.98-0.556-1.059-0.635c-0.079-0.08-0.847-1.933-0.847-2.039
                        c0-0.106,0-0.168,0-0.574c0-0.406,0.609-0.247-0.132-1.174c-0.742-0.927-0.292-0.424-0.292-1.033c0-0.609,0.021-0.847-0.135-1.483
                        c-0.156-0.636-0.447-0.795-0.368-1.324c0.08-0.53,0.926-0.53-0.013-1.51c-0.94-0.98-1.258-1.059-1.496-1.509
                        c-0.238-0.45,0.212-0.927-0.556-0.9c-0.678,0.023-1.231,0.026-1.351,0.026c-0.014,0.005-0.026,0-0.026,0s0.012,0.005,0.026,0
                        c0.037-0.013-1.475-2.35-1.591-2.832c-0.159-0.662-2.858-3.55-2.858-3.55s-1.812-4.258-2.342-4.258
                        c-0.164,0.087-0.299,0.153-0.426,0.216c-0.278,0.147-0.548,0.296-0.833,0.44c-0.133,0.132,1.827,3.946,2.171,4.449
                        c0.344,0.503,1.483,1.51,1.748,1.933c0.265,0.424,2.357,4.396,3.178,5.19c0.821,0.794,1.006,0.688,1.43,1.033
                        c0.424,0.344,1.006,0.503,1.059,0.795c0.053,0.291,0.027,0.159,0.08,0.662c0.053,0.503-0.08,0.106,0.079,1.086
                        c0.159,0.98,0,0.318,0.238,1.536c0.238,1.218,0.106,0.812,0.397,2.207c0.291,1.395,0.238,1.13,0.556,2.163
                        c0.318,1.033-0.051,0.556,0.398,1.589c0.449,1.033-0.398,1.033,0.82,1.271c1.218,0.238,1.615,0.503,1.96,0.45
                        c0.344-0.053,1.112-0.027,1.748,0c0.635,0.026,1.112-0.795,1.827,0.371c0.715,1.165,1.059,1.351,1.059,1.351
                        s1.165,0.238,1.748,0.371c0.583,0.133,1.006,0.106,1.112,0.318c0.106,0.212,0.185,0.503-0.185,0.662
                        c-0.371,0.159,0.291-0.318-0.795,0.344c-1.086,0.662-1.086,0.477-1.192,0.874c-0.106,0.397-0.318,0.265-0.238,0.768
                        c0.079,0.503-0.106,0.027,0.159,0.741c0.265,0.715,0.132-0.106,0.371,0.927c0.238,1.033,0.344,1.006,0.159,1.298
                        c-0.185,0.292-0.106,0-0.344,0.45c-0.238,0.45-0.344,0.185-0.291,0.821c0.053,0.636,0.079,0.848,0.079,1.483
                        c0,0.636-0.026,0.583-0.026,0.874c0,0.291-0.106,0.662-0.238,0.768c-0.133,0.106-0.397,0.397-0.477,0.741
                        c-0.079,0.344-0.503-0.794-0.132,0.715c0.371,1.509,0.397,1.297,0.477,1.933c0.08,0.636,0.212,0.027,0.265,1.033
                        c0.053,1.006,0.053,1.457,0.053,1.457s-0.662,0.609-0.874,0.847c-0.212,0.238-0.212,0.185-0.238,0.397
                        c-0.026,0.212,0.185,0.053-0.212,0.424c-0.397,0.371-0.503-0.079-0.583,0.583c-0.079,0.662-0.027,0.132-0.106,1.006
                        c-0.08,0.874,0.079,0.265-0.132,1.139c-0.212,0.874-0.159,0.238-0.318,1.35c-0.159,1.112,0.265,1.192-0.291,1.43
                        c-0.556,0.238-0.847,0.133-0.927,0.238c-0.079,0.106-0.503,1.218-0.318,1.669c0.185,0.45,1.192,0.079,0.212,0.688
                        c-0.98,0.609-1.298-0.106-0.901,0.98c0.397,1.086,0.503,1.351,0.503,1.351s-0.265,0.053-0.609,0.477s-0.238,0.053-0.424,0.874
                        c-0.185,0.821-0.238,0.98-0.344,1.086c-0.106,0.106,0.026,0.238-0.583,0.027c-0.609-0.212-0.424-0.265-0.953-0.238
                        c-0.53,0.026-0.953-0.238-0.953,0.026c0,0.265,0.318,0.027,0,0.662c-0.318,0.635-0.689,0.635-0.424,1.43
                        c0.265,0.794,0.848-0.08,0.45,1.245c-0.397,1.324-0.265,0.98-0.45,1.615c-0.185,0.636-0.212-0.026-0.318,1.351
                        c-0.106,1.377,0.053,1.033-0.238,2.092c-0.291,1.059-0.45,0.53-0.45,1.615c0,1.086-0.079,1.271-0.106,1.642
                        c-0.027,0.371-0.477,0.424-0.583,0.9c-0.106,0.477-0.265,2.171-0.344,2.436c-0.079,0.265-0.053,0.45-0.053,0.715
                        c0,0.265-0.715-0.45,0,0.609c0.715,1.059,0.583,0.715,1.059,1.483c0.477,0.768,0.477,0.742,0.847,1.298
                        c0.371,0.556,0.344,0.424,0.424,0.715c0.08,0.291,0.291,0.397,0.238,0.874c-0.053,0.477,0.291-0.53-0.477,1.351
                        c-0.768,1.88-0.318,2.754-0.265,2.966c0.053,0.212,0.053,0.212,0,0.503c-0.053,0.291,0.503-0.741-0.106,0.689
                        c-0.609,1.43-0.768,1.907-0.768,1.907s-0.291,0.556-0.741,1.377c-0.45,0.821-0.556,0.848-0.662,1.112
                        c-0.106,0.265-0.08,0.053-0.291,0.689c-0.212,0.636-0.742,2.542-0.821,2.542c-0.08,0-0.238,0.185-0.847,0.715
                        c-0.609,0.53-0.704,1.112-0.789,1.271c-0.085,0.159,0.127,0.132-0.985,0.185c-1.112,0.053-2.066,0.026-2.145-0.265
                        c-0.079-0.292-0.185-0.503-0.344-0.794c-0.156-0.285-2.056-1.758-2.132-1.817c-0.022,0.001-0.068,0-0.199-0.01
                        c-0.344-0.026-0.953-0.344-1.589-0.9c-0.636-0.556-1.271-0.9-1.456-0.953c-0.185-0.053-0.079,0.026-0.688-0.583
                        c-0.609-0.609-0.477-0.318-1.006-1.218c-0.53-0.9-0.742-1.642-1.192-1.562c-0.45,0.079-0.927,0.503-1.88,0.583
                        c-0.953,0.079-0.026,0.689-2.013,0.185c-1.986-0.503-1.695-1.006-2.013-1.297c-0.318-0.292-1.298-1.192-1.351-0.53
                        c-0.053,0.662,0.238,0.847,0,1.006c-0.238,0.159-0.265,0.186-0.583,0.344c-0.318,0.159,0.185,0.583-0.635,0.159
                        c-0.821-0.424-0.583-0.45-0.953-0.503c-0.371-0.053,0.503,0.742-0.741-0.053c-1.245-0.794-1.774-1.139-1.774-1.139
                        s-1.642-0.556-1.669-0.662c-0.026-0.106-0.212-0.186-0.185-0.53c0.026-0.344,0.127-0.715-0.003-0.874
                        c-0.13-0.159-0.315-0.715-0.607-0.715c-0.291,0-0.768,1.059-1.297-0.874c-0.53-1.933-0.424-2.436-0.53-2.701
                        c-0.106-0.265-0.238-0.291-0.45-0.847c-0.212-0.556-0.424-0.874-0.424-0.874s-0.477-0.847-1.377-0.874
                        c-0.9-0.027-1.854,0.185-1.854-0.053c0-0.238,0.159-0.503,0-0.662c-0.159-0.159-0.583-0.556-1.033-0.874
                        c-0.45-0.318-0.583-0.689-1.298-0.662c-0.715,0.026-1.112,0.953-1.562,0c-0.45-0.953-0.953-0.583-1.324-1.88
                        c-0.371-1.297-0.45-1.483-0.636-1.986c-0.185-0.503-0.45-0.9-0.609-1.351c-0.159-0.45-0.847-1.377-0.847-1.377
                        s0.132-0.689-0.503-0.689c-0.636,0-0.477-0.106-1.562-0.079c-1.086,0.027-1.43-0.106-1.536,0.053
                        c-0.106,0.159,0.159-0.212-0.106,0.159c-0.265,0.371-0.238,0.424-0.583,0.715c-0.344,0.291-0.53,0.212-0.662,0.556
                        c-0.132,0.344-0.185,0.397-0.238,0.821c-0.053,0.424,0.079-0.106,0,0.9c-0.079,1.006,0.133,1.006-0.013,1.271
                        c-0.146,0.265,0.04-0.132-0.358,0.609c-0.397,0.741-0.291,0-0.609,1.139c-0.318,1.139-0.265,0.662-0.45,1.509
                        c-0.185,0.847-0.371,0.159-0.185,1.112c0.185,0.953,1.35,2.145,1.35,2.145s0.133,0,0.106,0.477
                        c-0.026,0.477,0.821-0.371-0.132,0.794c-0.953,1.165-0.9,1.059-1.218,1.642c-0.318,0.583-0.397,0.583-0.847,1.165
                        c-0.45,0.583-0.715,0.953-1.059,1.351c-0.344,0.397-0.079,0.265-0.821,0.742c-0.741,0.477-0.903,0.475-1.139,0.635
                        c-1.245,0.848-1.774,1.086-1.774,1.086s-0.45,0.053-0.742,0.106c-0.291,0.053,0.053-0.238-0.635,0.053
                        c-0.689,0.291-0.556,0.291-0.9,0.53s-0.689,0.318-1.033,0.583s-0.503,0.265-0.583,0.45c-0.079,0.185-0.132,0.291-0.185,0.636
                        c-0.053,0.344,0.159,0.238-0.238,0.424c-0.397,0.185-2.039,0.212-2.039,0.212s0.106-0.265-0.159,0
                        c-0.265,0.265-0.503-0.344-0.556,0.556c-0.053,0.9,0.397,0.371,0,1.165c-0.397,0.794-0.026,0.98-0.583,1.139
                        c-0.556,0.159-1.801,0.026-2.118,0.079c-0.318,0.053,0.318-0.291-1.059,0.212c-1.377,0.503-1.456,0.477-1.801,0.556
                        c-0.344,0.079-1.218,0.053-1.324,0.291c-0.106,0.238,0.477,0.265-0.609,0.848c-1.086,0.582-1.562,1.298-1.006,0.423
                        c0.556-0.874,0.635-1.35,0.635-1.35s-0.344-0.212-0.45-0.291c-0.106-0.079-0.794-0.477-0.9-0.715
                        c-0.106-0.238,0.132-0.583-0.265-0.927c-0.397-0.344-1.006-0.344-1.059-0.794c-0.053-0.45-0.026-1.907,0-1.986
                        c0.026-0.08,0.662-1.139,0.636-1.218c-0.026-0.08-0.424-0.424-0.424-0.424s-0.636-0.397-0.847-0.953
                        c-0.212-0.556,0.847,0.265-0.715-1.457c-1.562-1.721-2.013-1.906-2.092-1.96c-0.079-0.053-1.51-0.238-1.748-0.185
                        c-0.238,0.053-0.291-0.159-0.847,0.185c-0.556,0.344,0.477,0.503-0.98,0.477c-1.456-0.026-2.357-0.053-2.357-0.053
                        s0.212-0.132-0.132-0.212c-0.344-0.079-0.503-0.265-1.112-0.212c-0.609,0.053-0.291-0.132-1.218,0.106
                        c-0.927,0.238-1.377,0.291-1.536,0.397c-0.159,0.106-0.45,0.159-0.45,0.159s-0.689-0.133-0.768-0.344
                        c-0.079-0.212,0.159-0.212-0.371-0.715c-0.53-0.503-0.794-0.768-1.086-1.245c-0.291-0.477-0.079-0.238-0.424-0.609
                        c-0.344-0.371-0.503-0.53-0.503-0.53s-0.53-0.132-0.609-0.185c-0.079-0.053-0.556,0.45-0.635-0.424
                        c-0.079-0.874-0.397-1.509-0.397-1.827c0-0.318-0.609-0.291,0-0.953c0.609-0.662,1.033-0.821,0.98-1.245
                        c-0.053-0.423-0.318-0.662-0.371-1.165c-0.053-0.503-1.439-1.792-1.863-2.48c-0.424-0.688-3.293-4.643-3.637-5.014
                        c-0.344-0.371-2.042-3.497-2.333-3.18c-0.017,0.018-0.027,0.027-0.042,0.043c-0.22,0.226-0.442,0.451-0.664,0.677
                        c-0.01,0.012-0.016,0.017-0.026,0.03c-0.015,0.014-0.021,0.019-0.034,0.031c-0.149,0.152-0.298,0.304-0.448,0.456
                        c-0.016,0.017-0.025,0.027-0.044,0.047c0.45,0.742,3.68,3.838,4.474,5.109c0.794,1.271,3.769,4.943,3.372,5.234
                        c-0.397,0.292-0.874,0.292-0.98,0.636c-0.106,0.344-0.026,0.106-0.238,0.635c-0.212,0.53-0.556,0.45-0.318,0.874
                        c0.238,0.424,0.556,0.397,0.662,1.006c0.106,0.609,0.079,0.344,0.371,1.271c0.291,0.927-1.589-0.874,0.503,1.218
                        c2.092,2.092,1.351,1.801,2.569,2.727c1.218,0.927,1.139,0.742,1.218,0.927c0.079,0.185,0.026,0.344,0.265,0.503
                        c0.238,0.159,0.476,0.212,1.192,0.291c0.715,0.079,0.662,0.265,1.43,0s0.503-0.371,1.086-0.397c0.583-0.027,0.238-0.662,1.033-0.08
                        c0.794,0.583,1.033,0.503,1.192,0.583c0.159,0.079-0.079,0.238,0.45,0.133c0.53-0.106,0.45-0.133,0.794-0.318
                        c0.344-0.185-1.086-0.582,0.583-0.265c1.668,0.318,1.589,0.185,1.986-0.159c0.397-0.344,0.768-0.556,0.768-0.556
                        s-1.033-1.218,0.185-0.027c1.218,1.192,1.271,0.9,1.562,1.668c0.292,0.768,0.292,0.768,0.768,1.43
                        c0.477,0.662,0.609,0.768,0.635,0.98c0.027,0.212,0.159,0.106,0,0.609c-0.159,0.503-0.238,0.662-0.291,1.006
                        c-0.053,0.344,0.159,0.556,0.238,0.715c0.079,0.159,0.477,1.112,0.636,1.509c0.159,0.397,0.689,0.768,0.953,1.298
                        c0.265,0.53,0.821,0.768,0.583,1.192c-0.238,0.424-0.662,0.265-0.583,1.006c0.079,0.742-0.053,0.45,0.132,1.112
                        c0.185,0.662-0.556,0.556,0.503,0.953c1.059,0.397,1.457,0.424,2.489-0.715c1.033-1.139,0.874-1.483,1.721-1.695
                        c0.847-0.212-0.371-0.265,1.88-0.635c2.251-0.371,2.913-0.715,3.363-0.847c0.45-0.132,2.066-0.424,2.066-0.953
                        c0-0.53,0-1.059-0.027-1.324c-0.026-0.265-0.053-0.423-0.053-0.423s1.033,0.371,1.642,0c0.609-0.371,1.43-0.742,1.43-0.742
                        s0.371,0.159,0.371-0.583c0-0.741-0.397-0.874,0-1.006c0.397-0.132,0-0.583,0.768-0.212c0.768,0.371,0.715,0.636,1.112,0.292
                        c0.397-0.344,0.636-0.503,0.794-0.583c0.159-0.08,2.807-1.457,2.807-1.457s0.371,0.027,0.927-0.715
                        c0.556-0.742,0.662-0.821,1.483-1.748c0.821-0.927,1.456-1.748,2.065-2.357c0.609-0.609,0.768-0.821,0.768-0.821
                        s0-0.424,0.026-1.218c0.027-0.794,0.08-0.98,0.106-1.483c0.026-0.503,0.636-0.715-0.106-0.9c-0.741-0.185-1.086-0.424-1.086-0.741
                        c0-0.318-0.477-1.298,0-1.668c0.477-0.371,0,1.351,0.768-0.953c0.768-2.304,0.821-2.331,0.768-2.542
                        c-0.053-0.212-0.636,0.159-0.53-0.715c0.106-0.874-0.344-1.033,0.212-1.298c0.556-0.265-0.424-1.668,1.165-0.318
                        c1.589,1.35,1.536,1.033,1.96,2.277c0.424,1.245,0.45,1.642,0.609,1.933c0.159,0.291,0.185,0.477,0.503,0.98
                        c0.318,0.503,0.821,1.245,0.821,1.245s0.477,0.344,0.583,0.662c0.106,0.318,2.648,0.503,2.648,0.503s0.132,0.212,0.318,0.53
                        c0.185,0.318-0.079,0.026,0.424,0.662c0.503,0.636,1.668,0.927,2.198,0.927c0.53,0,1.006-0.794,1.351,0.132
                        c0.344,0.927,0.477,1.324,0.768,1.801c0.291,0.477,0.265-0.371,0.371,0.689c0.106,1.059-0.132,0.424,0.185,1.377
                        c0.318,0.953-0.053,1.086,0.821,1.589c0.874,0.503,1.086,0.238,1.192,0.794c0.106,0.556-0.53-0.027,0.026,0.9
                        c0.556,0.927,0.874,0.9,1.218,1.351c0.344,0.45,0.291,0.424,0.556,0.741c0.265,0.318-0.185,0.185,1.377,0.53
                        c1.562,0.344,1.509,0.212,1.907,0.503c0.397,0.291,0.874-0.848,1.165-0.053c0.291,0.795,0.45,0.927,0.45,0.927l0.689,0.053
                        c0,0,0.344-1.298,0.9-0.874c0.556,0.424,0.689,0.53,0.768,0.609c0.079,0.079-0.133-0.238,0.318,0.053
                        c0.45,0.291,0.874,0.742,1.165,0.344c0.291-0.397,0.079-0.635,0.424-0.477c0.344,0.159,0.98,0.424,0.98,0.424
                        s0.45,0.291,0.689,0.185c0.238-0.106,0-0.053,0.794-0.53c0.794-0.477,0.742-2.013,1.218-0.715c0.477,1.298,0.847,1.88,0.847,1.88
                        s0.291,0.636,0.371,0.821c0.079,0.185,0.477,0.476,0.477,0.476s0.768-0.212,1.456,0.212c0.689,0.424,1.43,0.635,1.562,0.715
                        c0.133,0.079,0.106-0.371,0.133,0.079c0.026,0.45-1.298,0.609,0.318,0.953c1.615,0.344,1.615,0.344,1.615,0.344
                        s0.159-0.132,0.45,0.424c0.291,0.556,0.265,0.794,0.53,1.245c0.265,0.45-0.477,0.556,0.715,0.768
                        c1.192,0.212,1.218-0.239,1.933,0.053c0.715,0.291,1.324,0.344,1.668,0.556c0.344,0.212,0.45,0.079,0.424,0.609
                        c-0.007,0.132-0.007,0.18-0.006,0.193c-0.002-0.024-0.021-0.102-0.153,0.522c-0.212,1.006-0.132,1.827,0.08,2.171
                        c0.212,0.344,0.583-0.291,0.477,1.006c-0.106,1.298-0.053,1.112-0.265,1.536c-0.212,0.424-0.582,0.9-0.635,1.271
                        c-0.053,0.371-0.053-0.503-0.053,0.742c0,1.245-0.027,0.609,0,1.854c0.026,1.245-0.265,1.112-0.265,2.012
                        c0,0.901-0.106-0.026,0.133,1.43c0.238,1.456,0.53,2.039,0.53,2.039s0,0,0.477,0.635c0.477,0.635,0.874,0.927,1.006,1.192
                        c0.132,0.265-0.291,0.106,0.556,1.006c0.847,0.9,1.456,0.768,0.874,1.245c-0.583,0.477-0.53,0.689-0.556,1.748s0,1.483,0.106,1.748
                        c0.106,0.265-0.133-0.053-0.212,0.45c-0.08,0.503-1.483-0.133,0.106,1.112c1.589,1.245,1.695,1.271,1.827,1.615
                        c0.132,0.344,0.742,0,0.027,0.556c-0.715,0.556-0.662-0.344-1.112,1.006c-0.45,1.35-0.45,1.721-0.424,1.88
                        c0.026,0.159,0.927,0.106-0.424,0.318c-1.351,0.212-3.787,0.397-3.787,0.397s-1.483-0.318-1.615-0.424
                        c-0.132-0.106,1.006-0.265-0.477-0.238c-1.483,0.026-2.33,0.053-2.754,0.371c-0.424,0.318-0.186,0.556-1.059,0.768
                        c-0.874,0.212-0.953-1.562-2.065,0.238c-1.112,1.801-1.589,1.801-1.721,2.172c-0.132,0.371-0.742,0.106-0.159,0.636
                        c0.583,0.529,0.927-0.027,1.377,0.847c0.45,0.874-1.006-0.371,0.794,1.112c1.801,1.483,1.642,0.847,1.88,1.774
                        c0.238,0.927-0.265,0.265,0.265,1.165c0.53,0.9,0.424,1.192,1.192,1.192c0.768,0,0.874,1.139,0.98,1.351
                        c0.106,0.212-0.927,0.027,0.503,0.424c1.43,0.397,1.006,0.08,1.43,0.397c0.424,0.318,0.159-0.106,0.609,0.371
                        c0.45,0.477,1.192-0.848,0.688,0.98c-0.503,1.827-0.741,1.96-0.927,1.986c-0.185,0.026-0.159-0.159-0.424,0
                        c-0.265,0.159-1.006-1.271-0.583,0.132c0.195,0.645,0.386,0.943,0.514,1.143h2.344c0.07-0.179,0.181-0.487,0.337-0.993
                        c0.282-0.918,0.106-0.494,0.282-1.589c0.177-1.095,0.106-0.212,0.459-1.165c0.353-0.954,0.318-0.459,0.141-1.377
                        c-0.177-0.918-0.036-0.388-0.212-0.847c-0.177-0.459-0.353-0.106-0.989-0.353c-0.636-0.247-0.953,0.282-1.271,0.282
                        s-0.247,0.106-1.236-0.247c-0.989-0.353-0.283-0.141-0.388-0.741c-0.106-0.6-0.071-0.177-0.565-1.13
                        c-0.494-0.953-0.777-0.6-0.777-0.6s-0.177-0.106-0.812-1.342c-0.636-1.236-0.636-1.024-0.636-1.024l-0.635-0.812
                        c0,0-0.283-0.176-1.095-1.13c-0.812-0.953,0.071-0.212,0.212-0.318c0.141-0.106,0.671-0.388,1.518-1.024
                        c0.847-0.636,0.424-0.177,0.777-0.353c0.353-0.177,1.024-0.565,2.118-0.141c1.095,0.424,0.353,0.247,1.13,0.283
                        c0.777,0.035,1.095-0.035,1.095-0.035s0.212-0.177,0.918-0.318c0.706-0.141,1.13-0.177,2.154-0.318
                        c1.024-0.141,0.318,0.071,2.013-0.035c1.695-0.106,0.283,0,1.024-0.706c0.741-0.706,0.494-0.212,0.424-0.847
                        c-0.071-0.636-0.318-0.777-0.388-1.13c-0.071-0.353,0.177,0,0.742-0.177c0.565-0.176,1.13-0.635,1.13-0.635s0.247-0.53,0.071-0.918
                        c-0.177-0.388-0.212-0.212-0.777-1.13c-0.565-0.918-0.177-0.353-0.777-1.095c-0.6-0.741-0.353-0.176-0.777-0.459
                        c-0.424-0.283-0.247-0.706-0.07-1.483c0.177-0.777,0.141-0.106-0.283-1.342c-0.424-1.236-0.106-0.318,0.035-1.059
                        c0.141-0.741,0.318-0.282,0.706-0.953c0.388-0.671,0.212-0.318,0.353-0.671c0.141-0.353-0.53-0.6-0.53-0.6s0,0-0.53-0.318
                        c-0.53-0.318-1.095-0.706-1.342-0.918c-0.247-0.212,0,0-1.483-2.542c-1.483-2.542-0.071-0.636-0.141-2.613
                        c-0.071-1.977,0.106-1.024,0.071-2.224c-0.035-1.201,0.071-1.307,0.071-1.307l0.706-1.624l0.495-0.953c0,0-0.177-0.741-0.247-1.271
                        c-0.071-0.53-0.247-0.53-0.459-1.589c-0.212-1.059,0.177-0.494,0.318-1.306c0.141-0.812,0-0.283-0.459-1.483
                        c-0.459-1.201,0-0.495,0.494-1.624c0.494-1.13,0.388-0.494,0.742-0.918c0.353-0.424,0.247-0.177,0.706-0.494
                        c0.459-0.318,0.106-0.177,0.106-0.812c0-0.636,0.035-0.53,0.071-1.788c0.035-1.258,0.177-0.578,1.059-2.379
                        c0.883-1.801,0.282-0.459,0.565-1.095c0.283-0.635,0.459-0.353,0.6-0.529c0.141-0.177,0.388-1.307,0.494-1.448
                        c0.106-0.141,0.035-0.318,0.141-0.953c0.106-0.635,0.353-1.094,0.6-1.977c0.247-0.883-0.247-0.706-0.212-1.13
                        c0.035-0.424,0.282-0.283,0.529-1.095c0.247-0.812,0.035-0.671-0.212-2.154c-0.247-1.483-0.141-0.812-0.706-1.836
                        c-0.565-1.024-0.106-0.177-0.424-0.706c-0.318-0.53-0.318-0.282-0.565-0.565c-0.247-0.282-0.141-0.247-0.141-1.448
                        c0-1.201,0.071-1.377,0.071-1.377l0.176-1.412c0,0,0.106-0.671,0.424-2.189c0.318-1.518,0.247-1.271,0.424-2.154
                        c0.177-0.883,0.247-0.989,0.565-2.295c0.318-1.306,0.106-0.424,0.177-0.918c0.071-0.494,0.212-0.671,0.282-1.447
                        c0.071-0.777,0.071-0.424,0.177-0.847c0.106-0.424,0.812-0.53,1.66-0.918c0.847-0.389,0.282-0.283,0.282-0.283
                        s0.177-0.318,0.494-0.883c0.318-0.565,0.071-0.494,0.459-1.271c0.388-0.777,0.424-0.424,0.777-0.988
                        c0.353-0.565,0.53-0.283,0.671-0.742c0.141-0.459-0.07-0.494-0.212-1.412c-0.141-0.918,0-0.388,0.07-1.236
                        c0.071-0.847,0.176-0.6,0.706-1.907c0.53-1.306,0.389-1.165,0.389-1.165s0-0.635,0.212-1.836c0.212-1.201,0.212-0.424,0.459-0.953
                        c0.247-0.53,0.106-0.353,0.353-0.918c0.247-0.565,0.706-0.212,0.918-0.424c0.212-0.212-0.212-0.777-0.212-0.777l-0.247-0.212
                        l3.954,0.635c0,0,1.766,0.565,2.048,0.6c0.282,0.035,1.271-0.176,1.271-0.176s1.201,0.318,1.342,0.318
                        c0.141,0,1.306,0.741,1.412,0.883c0.106,0.141,1.412,1.13,1.412,1.13s0.283,0.459,0.706,1.236c0.424,0.777,0.6,0.318,1.836,0.53
                        c1.236,0.212,0.247,0,0.883-0.212c0.636-0.212,0.247-0.212,0.389-0.459c0.141-0.247,0.106-0.494,0.388-1.201
                        c0.282-0.706,0.282-0.141,1.271-0.706c0.989-0.565,0.282-0.283,0.459-0.565c0.177-0.283,0.459-0.106,1.13-0.424
                        c0.671-0.318,0.459-0.035,0.883-0.247c0.424-0.212,0.318-0.035,0.848-0.318c0.53-0.282,0.671-0.918,0.671-0.918
                        s0.106-0.459,0.283-1.518c0.176-1.059,0.106-0.742,0.282-1.554c0.176-0.812-0.212-0.318-0.177-1.836
                        c0.015-0.66,0.064-0.819,0.103-0.824c-0.138-0.415-0.171-0.63,0.074-1.26c0.247-0.635,0.212-0.247,0.989-1.801
                        c0.777-1.554,0.318-0.636,0.424-1.377c0.106-0.741,0.106-0.424,0.212-0.777c0.106-0.353-0.212-0.671-0.671-1.66
                        c-0.459-0.989,1.483-0.318,1.589-0.318c0.106,0,2.013,0.929,2.013,0.929s0.812,0.483,1.412,0.342
                        c0.6-0.141,0.353,0.282,0.388,0.565c0.035,0.282,0.035,2.507,0.212,4.343c0.176,1.836,1.412,0.53,1.589,0.6
                        c0.176,0.071,0.6,0.282,1.448,0.459c0.847,0.176,0.177,0.035,1.412,0.071c1.236,0.035,0.742,0.282,1.412,0.847
                        c0.671,0.565,0.388,0.706,0.388,0.706s1.448,0.389,2.26,0.389c0.812,0,0.6,0.07,1.977,0.07s0.212-0.353,2.26-0.847
                        c2.048-0.494,0.706,0,1.2,0c0.495,0,0.989,0.318,1.836,0.53c0.847,0.212,0.635,0.247,1.554,0.494
                        c0.918,0.247,1.342,0.177,2.401,0.141c1.059-0.035,0.353-0.212,0.777-0.53c0.424-0.318,1.448-1.589,1.448-1.589
                        s0.177-0.565-0.459-1.483c-0.636-0.918-0.212-0.388-0.212-0.671c0-0.282-0.459-1.448-0.459-1.448s-0.035-0.742-0.035-1.059
                        c0-0.318-0.035-1.236,0-1.73c0.035-0.494,0.777,0.071,0.918,0.141c0.141,0.071,0.812,0.494,0.918,0.671
                        c0.106,0.176,0.6,0.6,0.883,1.095c0.282,0.494,0.459,0.423,0.812,0.988c0.353,0.565,0.53,0.353,0.812,0.636
                        c0.282,0.282,0.953,0.141,1.589,0.141c0.636,0,2.366,0.388,3.637,0.388c1.271,0,0.282,0.247,0.318,0.353
                        c0.035,0.106,0.989,0.636,2.683,2.189c1.695,1.554,0.494,0.494,0.494,0.494l0.53,0.883c0,0,0,0-0.071,0.459
                        c-0.071,0.459-0.282,0.6-0.494,1.236c-0.212,0.635-0.212,1.059-0.212,1.059l0.742,0.777c0,0,0.777,0.706,0.812,1.659
                        c0.035,0.954-0.353,0.671-0.424,0.847c-0.071,0.177-0.141,0.565-0.141,0.565s0.459,0.283,0.706,0.388
                        c0.247,0.106,0.53,0.318,0.636,0.424c0.106,0.106,0.212,0.318,0.847,1.233c0.636,0.915,0.424,0,0.424,0s0.671,0.074,0.812,0.038
                        c0.141-0.035,2.507,0.07,3.531,0.035c1.024-0.035,0.635-0.035,1.024-0.071c0.388-0.035,0.989,0.247,2.118,0.565
                        c1.13,0.318,0.106,0.459,0.106,0.459s-0.424,0.459-1.13,1.024c-0.706,0.565-0.494,0.671-0.742,1.412
                        c-0.247,0.741,0.035,1.165,0.035,1.695c0,0.53,0.353,1.342,0.494,1.589c0.141,0.247-0.035,0.247-0.141,0.459
                        c-0.106,0.212-0.459,1.589-0.459,1.589s0.424,0.212,1.518,1.059c1.095,0.847,0.494,0.53,1.095,1.307
                        c0.6,0.777,0.565,0.424,1.412,2.048s-0.388,0.953-0.918,1.412c-0.53,0.459-0.671,0.883-1.236,1.977
                        c-0.565,1.094-0.671,0.635-1.165,0.918c-0.494,0.282-0.353,0.706-0.69,1.659s-0.793,1.306-0.793,1.306s-0.141,0.177-0.495,0.6
                        c-0.353,0.424,0.212,0.741,0.283,0.953c0.071,0.212,0.742,1.518,0.953,3.495c0.212,1.977-0.283,1.377-0.6,2.613
                        c-0.318,1.236-0.353,0.777-0.459,1.801c-0.106,1.024-0.671,0.953-0.847,1.413c-0.177,0.459-0.106,0.459-0.141,1.801
                        c-0.035,1.342-0.353,0.671-0.565,0.671c-0.212,0-0.282-0.318-0.777-0.883c-0.494-0.565-0.247-0.07-0.953,0.141
                        c-0.706,0.212-0.247,0.247-0.388,0.777c-0.141,0.53,0.035,0.635,0,1.236c-0.035,0.6-0.282,0.847-0.66,1.624
                        c-0.377,0.777-0.364,0.989-0.435,1.201c-0.071,0.212-2.083,0.071-2.083,0.071s-0.177,0.035-1.412,0.318
                        c-1.236,0.282-1.236,1.2-1.236,1.2s-0.247,1.942-0.424,2.189c-0.176,0.247-0.883,1.13-1.271,1.73c-0.388,0.6,0,0.282,0.141,0.777
                        c0.141,0.494,0.777,0.424,1.412,0.777c0.635,0.353,0.459,0.424,1.412,0.494c0.953,0.071,0.318,0.388-0.106,0.777
                        c-0.424,0.388,0.106,0.459,0.212,0.671c0.106,0.212,0,0.494-0.035,1.236c-0.035,0.741,0.353,0.706,0.53,1.024
                        c0.176,0.318,0.106,0.953-0.353,0.742c-0.459-0.212-0.459-0.141-1.659-0.141c-1.201,0-0.953,0.6-1.342,0.953
                        c-0.388,0.353-1.412,0.389-2.436,0.53c-1.024,0.141-1.165,0.141-2.013,0.494c-0.848,0.353-0.459,0.388-0.848,0.565
                        c-0.388,0.177-0.247,0.388-0.459,1.342c-0.212,0.953-0.53,0.812-0.635,1.024c-0.106,0.212-0.141,0.212-0.989,1.306
                        c-0.848,1.095-1.095,0.706-1.66,0.953c-0.565,0.247-1.201,0.741-2.013,1.165c-0.812,0.424-1.448,0.6-1.448,0.6
                        s-0.6,0.318-1.342,1.059c-0.742,0.741-1.165,1.412-1.165,1.412s-0.177,3.425-0.283,3.99c-0.106,0.565,0.106,0.424,0.177,0.53
                        c0.071,0.106,0.282,0.141,0.53,0.247c0.247,0.106,0.177,0.141,0.53,0.293c0.353,0.152,0.176,0.095,1.095,0.025
                        c0.918-0.07,0.53,0,1.094,0.353c0.565,0.353,0.283,0.953,0.177,1.342c-0.106,0.388-0.141,0.459-0.459,1.201
                        c-0.318,0.741-0.177,1.73-0.318,2.154c-0.141,0.424-0.283,0.212-0.706,0.848c-0.424,0.635-1.624,0.706-1.624,0.706
                        s-2.013,0.53-2.789,0.636c-0.777,0.106-0.847,0.636-1.766,1.554c-0.918,0.918-1.553,1.483-2.613,2.401
                        c-1.059,0.918-1.342,1.412-2.083,2.189c-0.741,0.777-0.6,0.53-1.13,0.847c-0.53,0.318-0.847,0.389-1.554,0.565
                        c-0.706,0.177-10.169,2.966-10.169,2.966s-0.706,0.6-1.448,1.483c-0.742,0.883-0.883,0.883-0.883,0.883s-0.847,0.812-1.907,1.766
                        c-1.059,0.953-0.247-0.106-0.318-0.212c-0.071-0.106-0.777-0.388-1.095-0.494c-0.318-0.106-0.529,0.247-1.412,0.671
                        c-0.883,0.424-0.141,0.353-0.247,0.742c-0.106,0.388-3.107,1.448-6.32,2.012c-3.213,0.565-1.094,0.106-2.013,0.035
                        c-0.918-0.071-0.671-0.247-1.659-1.13c-0.989-0.883-0.424,0.071-0.812,0.247c-0.388,0.177-0.724,1.677-0.794,1.801
                        c-0.071,0.124,0.088,0.848,0.088,0.848s-0.02,0.201-0.056,0.569h1.64c0.009-0.143-0.012-0.284-0.172-0.604
                        c-0.283-0.565,0-0.847,0-0.847s0.777,0.106,1.059,0.141c0.282,0.035,1.483,0.318,1.589,0.459c0.106,0.141,1.589,0.071,1.977,0
                        c0.388-0.071,1.589-0.282,2.86-0.777c1.271-0.494,0.847-0.141,1.271-0.318c0.424-0.177,1.66-1.448,1.907-1.467
                        c0.247-0.02,1.271-0.051,1.695-0.016c0.424,0.035,1.412,0,1.412,0s0.283-0.141,0.636-0.6c0.353-0.459,0.318-0.282,0.635-0.777
                        c0.318-0.494,0.812-0.424,1.554-0.953c0.741-0.53,0.141-0.141,0.741-0.918c0.229-0.296,0.318-0.432,0.342-0.488
                        c-0.057,0.017-0.095,0.029-0.095,0.029s0.134-0.121,0.095-0.029c0.344-0.106,1.569-0.49,1.812-0.642
                        c0.282-0.176,0.777-0.176,1.165-0.318c0.388-0.141,2.648-0.6,2.825-0.706c0.177-0.106,1.448-0.494,2.013-0.636
                        c0.565-0.141,1.236-0.424,2.083-0.847c0.847-0.424,0.883-0.777,0.883-0.777s0.706-0.212,2.083-0.565
                        c1.377-0.353,0.353-0.212,0.953-0.953c0.6-0.741,0.953-1.059,1.483-1.765c0.53-0.706,0.353-0.177,1.836-1.342
                        c0.948-0.745,1.015-0.725,0.987-0.669l0.002-0.002c0.176-0.212,1.024-0.671,1.024-0.848c0-0.177,0-0.177,0.247-0.847
                        c0.247-0.671,0.247-0.247,0.247-0.247s0.459-0.106,1.483-0.582c1.024-0.477,0.812-0.194,1.989-0.477
                        c1.177-0.283,0.165-0.177,0.271-0.247c0.106-0.07,0.353-0.141,1.483-0.671c1.13-0.529,0.424-0.176,0.6-0.565
                        c0.177-0.388,0.282-0.247,0.671-0.883c0.388-0.636,0,0-0.071-0.565c-0.071-0.565,0-0.424,0.035-1.13
                        c0.035-0.706,0.141-1.024,0.141-1.024s0.177-0.847,0.282-1.024c0.106-0.177,0-0.883-0.212-1.307
                        c-0.212-0.424-0.247-0.282-0.671-1.024c-0.424-0.742-0.565-0.141-1.554-0.141c-0.989,0-0.247-0.07-0.706-0.883
                        c-0.459-0.812-0.212-0.318-0.141-0.953c0.07-0.636-0.071-0.494,0-0.953c0.07-0.459,0.07-0.282,0.176-0.6
                        c0.106-0.318,0.071-0.176,0.177-0.847c0.106-0.671,0.106-0.283,0.247-0.6c0.141-0.318,0.494-0.247,0.989-0.459
                        c0.494-0.212,0.388-0.106,0.706-0.283c0.318-0.177,0.282-0.071,0.706-0.318c0.424-0.247,0.529-0.106,1.024-0.318
                        c0.494-0.212,1.165-0.6,1.801-0.953c0.636-0.353,0.459-0.247,0.742-0.6c0.282-0.353,0.424-0.494,0.812-0.883
                        c0.388-0.388,0.565-0.812,1.201-1.624c0.635-0.812,0.777-1.13,0.953-1.341c0.177-0.212,0,0,0.141-0.212
                        c0.141-0.212,0.177-0.247,0.318-0.459c0.141-0.212,0.847-0.106,1.306-0.247c0.459-0.141,0.565-0.106,1.024-0.353
                        c0.459-0.247,1.059-0.318,1.624-0.635c0.565-0.318,0.777-0.212,1.271-0.388c0.494-0.177,0.353-0.071,0.353-0.071l0.548,0.247
                        c0,0,1.288,0.318,1.712,0.353c0.424,0.035,0.388,0.07,1.095,0.141c0.706,0.071,0.565,0.106,0.989,0.036
                        c0.424-0.071,0.283-0.071,0.177-0.883c-0.106-0.812-0.071-0.388-0.177-0.636c-0.106-0.247,0,0-0.565-0.494
                        c-0.565-0.495-0.353-0.177-0.741-0.671c-0.388-0.494-0.035-0.388-0.035-1.165c0-0.777-0.07-0.282-0.635-0.883
                        c-0.565-0.6,0.177-0.53,0.177-0.53s0.636-0.847,0.741-1.165c0.106-0.318,0,0-0.035-0.494c-0.036-0.494-0.036-0.212-0.141-0.459
                        c-0.106-0.247-0.282-0.141-0.353-0.247c-0.071-0.106-0.459-0.212-0.459-0.212s-1.412-0.282-1.66-0.777
                        c-0.247-0.494,0.071-0.353,0.412-0.954c0.341-0.6,0.082-0.353,0.016-0.812c-0.067-0.459,0.102-0.247,0.031-0.812
                        c-0.07-0.565,0-0.424,0-0.53c0-0.106,0.247-0.035,0.53-0.106c0.283-0.071,1.518-0.459,1.518-0.459s0.636-0.177,1.589-0.768
                        s0.494-0.15,0.953-0.786c0.459-0.635,0.177-0.318,0.671-1.306c0.494-0.989,0.106-0.6,0.141-0.883
                        c0.035-0.282,0.071-0.282,0.177-0.671c0.106-0.388,0.212,0.035,0.424,0.035c0.212,0,1.059,0.177,1.059,0.177
                        s0.53-0.035,0.812-0.141c0.282-0.106,0.424-0.318,0.581-0.565c0.158-0.247,0.089-0.318,0.019-0.953
                        c-0.07-0.635,0.071-0.671,0.212-1.165c0.141-0.494,0.177-0.318,0.353-0.847c0.176-0.53,0.106-0.353,0.388-0.777
                        c0.282-0.424-0.141-0.282,0-1.201c0.141-0.918,0.071-0.247,0.388-1.13c0.318-0.883,0.141-0.671,0.212-1.412
                        c0.071-0.741,0.459-0.424,0.459-0.424s-0.141-0.141-0.035-0.6c0.106-0.459,0.071-0.424,0.035-1.13
                        c-0.035-0.706-0.106-0.53-0.141-1.342c-0.035-0.812-0.071-0.777-0.071-1.518c0-0.741,0.035-0.565,0.212-1.377
                        c0.177-0.812,0.177-0.423,0.388-0.988c0.212-0.565-0.071-0.53,0-0.989c0.071-0.459,0.141-0.424,0.353-0.777
                        c0.212-0.353,0.565-0.494,1.201-1.024c0.636-0.53,0.459-0.212,0.671-0.353c0.212-0.141,0.212-0.212,1.094-1.271
                        c0.883-1.059,0.706-0.53,1.554-1.13c0.848-0.6,1.095-0.53,1.518-0.6c0.424-0.07,1.448-0.494,1.448-0.494s0,0,0.6-0.177
                        c0.6-0.177,0.353-0.071,0.459-0.177c0.106-0.106,1.13-1.518,1.236-2.119c0.106-0.6,0.141-0.353,0.53-0.812
                        c0.388-0.459,0.636-0.388,0.742-0.494c0.106-0.106,0.247-0.176,0.575-0.423c0.328-0.247-0.045-0.141,0-0.495
                        c0.046-0.353,0.096-0.247,0.272-0.635c0.177-0.388-0.071-0.353-0.212-0.671c-0.141-0.318,0-0.459,0.071-0.741
                        c0.071-0.283,0.353-0.53,0.953-1.236c0.6-0.706,0.424-0.883,0.424-0.883l3.566-0.071c0,0,1.589-0.035,1.801-0.071
                        c0.212-0.035,0,0,0.847-0.671c0,0,0.812,0.459,1.942,1.377c1.13,0.918,0.777,0.989,1.165,1.377
                        c0.388,0.388,0.847,1.095,1.165,1.624c0.318,0.53,0.212,0.883,0.212,1.201c0,0.318,0.164,1.377,0.164,1.377
                        s0.083,0.565,0.013,0.953c-0.071,0.388,0.177,1.059,0.177,2.083c0,1.024,0.459,0.93,0.459,0.93s0.953,0.2,1.448,0.271
                        c0.494,0.071,1.624,0.353,1.977,0.388c0.353,0.035,1.624-0.106,1.907-0.212c0.282-0.106,3.036,0.424,3.036,0.424
                        s1.2-0.565,1.836-0.812c0.636-0.247,2.119,0.353,2.789,0.53c0.671,0.177,0,0.353,0,0.918s0.989,1.095,1.306,1.589
                        c0.318,0.494,0.388,0.565,0.388,0.565l1.659,0.883c0,0,1.306,1.201,1.518,1.66c0.212,0.459,0.918,0.883,1.342,1.306
                        c0.424,0.424,0.741,1.165,0.741,1.165s0.777,1.271,1.201,2.224c0.424,0.953,0.318,0.459,1.165,1.306
                        c0.847,0.847,0.141,1.377,0.141,1.66s0.989,1.412,0.989,1.412s0.6,0.635,0.883,0.847c0.283,0.212,0.6,0.388,1.13,0.883
                        c0.53,0.494,0.353,0.388,0.459,0.706c0.106,0.318,2.33,0.106,3.813,0.071c1.483-0.035,2.048-0.6,2.048-0.6s0,0,0.247-0.212
                        c0.247-0.212,0.671-0.459,1.236-0.565h1.695c0,0,0.883,0,0.989,0c0.106,0,1.448,0.283,1.942,0.918
                        c0.494,0.635,0.742,0.918,0.918,1.201c0.177,0.283,0.283,0.565,1.342,1.836c1.059,1.271,0.282,0.53,0.424,1.095
                        c0.141,0.565,0,0.847,0,1.165c0,0.318,0.918,1.589,1.201,2.436c0.282,0.848,2.119,1.801,2.26,2.013
                        c0.141,0.212,0.777,1.342,2.507,3.954c1.73,2.613,0.141,0.706,0.212,0.918c0.071,0.212,0.282,0.53,0.847,1.836
                        c0.565,1.306-0.353,0.424-0.353,0.424s-0.177,0.353,0,2.083c0.177,1.73,0.177,0.459,0.494,0.551
                        c0.318,0.092,0.706,0.049,0.883,0.014c0.177-0.035,0.918-0.035,0.883,0.388c-0.035,0.424-0.353,0.53-0.459,0.918
                        c-0.106,0.388,0.671,1.271,0.671,1.271l0.565,0.565c0,0,1.659-0.6,2.613,0.282c0.953,0.883-0.212,0.6-0.777,1.624
                        c-0.565,1.024-0.847,1.271-0.847,1.977c0,0.706,1.165,0.459,2.436,0.848c1.271,0.388,0.635,0,1.094-0.177
                        c0.459-0.177,0.777-0.106,1.271-0.247c0.494-0.141,1.73,0.353,2.719,0.176c0.989-0.176,0.177-0.247,0.53-0.741
                        c0.353-0.494,0.636-0.494,1.059-1.201c0.424-0.706,0-0.388,0-0.988c0-0.6,0.318-0.424,0.883-0.883c0.565-0.459,0.53,0,0.53,0
                        s1.801,0.459,3.037,0.53c1.236,0.071,0.318,0.318,0.424,0.742c0.106,0.424,0.423,0.671,1.024,1.2c0.6,0.53,1.095,0.318,1.095,0.318
                        s0.424-0.706,0.459-0.847c0.035-0.141,1.907,0.212,2.719,0.353c0.812,0.141,0.847-0.035,1.518-0.318
                        c0.671-0.283,0.636-0.389,0.742-0.565c0.106-0.177,0.494-0.282,2.189-0.494c1.695-0.212,0.141,0.318,0.035,0.353
                        c-0.106,0.035-1.13,0.353-1.765,0.459c-0.635,0.106-0.247,0.176-1.059,2.472c-0.812,2.295-0.141,1.801-0.494,2.542
                        c-0.353,0.742-0.635,0.353-1.13,1.13c-0.494,0.777-0.035,0.812,0,1.554c0.035,0.741,0.777,0.741,1.306,1.342
                        c0.53,0.6,0.212-0.071,0.565-0.318c0.353-0.247,0.247-0.212,0.53-0.424c0.282-0.212,2.154-0.6,2.26-0.6
                        c0.106,0-0.106,0.459-1.13,1.095c-1.024,0.635,0,0.247,0,1.165c0,0.918,0.671,1.165,1.091,1.659
                        c0.42,0.495,0.109,0.389,0.003,1.306c-0.106,0.918,0.643,1.526,0.643,1.526l0.402-0.093c0.483-0.112,0.963-0.224,1.437-0.334
                        l-0.452-0.798c0,0-0.035-0.6-0.3-1.165c-0.265-0.565-1.042-0.989-1.059-1.412c-0.018-0.424-1.006,0.035,0-0.741
                        c1.006-0.777,1.72-1.677,1.708-1.942c-0.013-0.265,0.101-0.936,0-1.271c-0.101-0.335,0.252-0.83-1.107-0.777
                        c-1.359,0.053-1.095-0.389-1.977,0.247c-0.883,0.635-0.847,0.936-1.483,1.024c-0.635,0.088-0.229-0.106,0-0.495
                        c0.23-0.388,0.389-0.83,0.512-1.236c0.124-0.406,0.265-0.759,0.3-1.024c0.035-0.265-0.282-0.459-0.088-1.289
                        c0.194-0.83-0.212-0.512,0.282-1.218c0.495-0.706,0.724-0.918,1.289-0.918c0.565,0,0.441,0.07,0.636,0
                        c0.194-0.071,0.936-0.106,1.236-1.112c0.3-1.006,0.282-0.989,0.441-1.695c0.159-0.706,0.318-0.635,0.141-1.112
                        c-0.176-0.477-0.565-1.43-1.13-0.812c-0.565,0.618-0.494,0.812-0.953,1.13c-0.459,0.318-0.688,0.6-1.607,0.477
                        c-0.918-0.124-1.836-0.636-1.995-0.247c-0.159,0.388,0.07,0.565-0.194,0.848c-0.265,0.282-0.583,0.371-1.642,0.318
                        c-1.059-0.053-1.165-0.671-1.518-0.159c-0.353,0.512-0.177,0.406-0.565,0.6c-0.388,0.194-0.088,0.071-0.247-0.141
                        c-0.159-0.212,1.253-0.282-0.459-0.671c-1.712-0.388-1.677-0.512-3.16-0.742c-1.483-0.229-2.542-0.265-2.948-0.741
                        c-0.406-0.477,0.671-1.201-0.583-0.618c-1.254,0.583-1.395-0.318-1.412,0.777c-0.018,1.094,0.212,0.283-0.088,1.289
                        c-0.3,1.006-0.441,1.059-1.006,1.306c-0.565,0.247-0.759,0.371-0.759,0.371s0.618,0.371-0.229,0.335
                        c-0.847-0.035-1.059-0.124-2.189,0.053c-1.13,0.176-1.377,0.989-1.13,0.176c0.247-0.812,0.653-2.048,0.636-2.295
                        c-0.018-0.247,0.159-0.124-0.071-0.918c-0.229-0.794,0.336-1.039-0.512-1.349c-0.847-0.31-0.812-0.237-1.73,0
                        c-0.918,0.237-0.689,1.138-0.918,0.237c-0.229-0.9-0.053-1.148-0.176-1.836c-0.124-0.689-0.247-1.042-0.477-1.483
                        c-0.229-0.441,0.512-0.106-0.371-0.565c-0.883-0.459-0.989-0.565-0.989-0.565s0.247-0.671-0.424-1.995
                        c-0.671-1.324-0.689-0.918-0.953-1.942c-0.265-1.024-1.112-2.119-1.324-2.472c-0.212-0.353-0.565-1.077-1.042-1.465
                        c-0.477-0.388-0.494,0-1.165-0.953c-0.671-0.953-0.494-0.706-1.218-1.677c-0.724-0.971-0.9-0.6-0.971-1.271
                        c-0.071-0.671-0.124-1.253-0.124-1.748c0-0.494,0.883-0.335-0.388-1.307c-1.271-0.971-1.607-1.271-1.889-1.659
                        c-0.283-0.388-0.777-0.583-0.53-1.148c0.247-0.565,0.583,1.077,0.494-0.971c-0.088-2.048-0.583-1.465-0.07-2.26
                        c0.512-0.794,0.053-0.741,0.688-1.289c0.636-0.547,3.672-3.354,3.743-3.478c0.071-0.124,0.353,0.459,0.318-0.618
                        c-0.035-1.077-0.247-1.077-0.194-1.271c0.053-0.194,0.265-0.265,0.671-0.688c0.406-0.424,0.6-0.618,0.759-1.077
                        c0.159-0.459-0.035-1.553,0.018-1.677c0.053-0.124,1.042-0.159,1.536-0.812c0.494-0.653,1.501-0.847,1.695-1.73
                        c0.194-0.883,0.159-1.112,0.441-1.571c0.282-0.459,1.289-1.183,1.677-1.536c0.388-0.353,0.247-0.812,0.635-1.271
                        c0.389-0.459,0.424-1.271,0.936-1.907c0.512-0.635,0.759-0.953,1.236-1.501c0.477-0.547-0.141-0.547,0.812-1.042
                        c0.953-0.494,0.688-0.477,1.077-1.059c0.388-0.583,0.688-0.759,0.777-1.059c0.088-0.3,0.141-1.165,1.218-0.847
                        c1.077,0.318,0.636,0.794,1.43,1.095c0.794,0.3,0.512,0.371,1.042,0.3c0.53-0.071,0.388-0.106,0.689-0.247
                        c0.3-0.141,0.194-0.265,0.441-0.388c0.247-0.124-0.212-0.565,0.689-0.053c0.9,0.512,0.794,0.936,1.2,0.9
                        c0.406-0.035-0.865-0.017,1.042-0.247c1.907-0.229,1.854-0.247,2.013-0.229c0.159,0.018-0.124,0.212,1.642,0.141
                        s2.948-0.512,2.948-0.512s0.424,0.088,0.794-0.053c0.371-0.141,0.353-0.229,1.13-0.353c0.777-0.124,0.159-0.23,1.818-0.282
                        c1.66-0.053,0.671,0.388,2.33-0.229c1.66-0.618,1.483-0.653,2.154-0.971c0.671-0.318,1.006-0.494,1.412-0.53
                        c0.406-0.035,0.159,0.618,1.942,0.176c1.783-0.441,1.73-0.424,2.436-0.812c0.706-0.388,0.741-0.406,1.165-0.865
                        c0.424-0.459-0.3-0.3,0.9-0.759c1.201-0.459,4.096-0.335,4.361-0.547c0.265-0.212,0.265-0.23,0.547-0.689
                        C783.428,264.523,783.64,263.976,783.481,263.693z M779.517,264.761c-2.066,0.132-3.257-0.053-3.469,0.291
                        c-0.212,0.344,0.583,0.874-1.033,1.139c-1.615,0.265-3.575,0.053-3.813,0.212c-0.239,0.159-2.966,1.112-3.443,1.298
                        c-0.477,0.185-3.919,0.794-4.317,0.874c-0.397,0.079,0.821-0.583-1.827,0.132c-2.648,0.715-2.887,0.715-2.887,0.715
                        s-0.583-0.026-1.245,0.027c-0.662,0.053-3.178,0.238-3.416,0.026c-0.238-0.212-0.662-0.159-1.43-0.477
                        c-0.768-0.318-1.165-0.318-1.642-0.662c-0.477-0.344,1.006-0.768-0.477-0.344c-1.483,0.424-1.059,0.079-2.198,0.662
                        c-1.139,0.583-1.377,0.132-1.933,0.741c-0.556,0.609-1.192,0.477-1.403,1.245c-0.212,0.768,0.106,0.291-0.45,1.218
                        c-0.556,0.927-0.318,0.583-0.953,1.351c-0.636,0.768-0.371,0.212-0.9,1.191c-0.53,0.98-0.08,0.344-0.821,1.509
                        c-0.742,1.165-0.503,0.636-1.139,1.854c-0.636,1.218-0.371,1.006-1.112,1.774c-0.742,0.768-1.086,1.006-1.086,1.006
                        s-0.582,0.053-0.688,0.397s0.291-0.185-0.238,0.583c-0.53,0.768-0.689,0.662-1.218,1.536c-0.53,0.874-0.265,0.265-0.848,1.351
                        c-0.583,1.086-0.45,0.582-0.794,1.536c-0.344,0.953-0.132,0.45-0.715,1.589c-0.583,1.139-0.397,0.768-0.98,1.801
                        c-0.583,1.033-0.212,0.609-1.059,1.642c-0.847,1.033-0.397,0.212-1.297,1.404c-0.9,1.192-0.98,1.509-0.98,1.509l-0.583,2.198
                        l-1.297-0.424c0,0-0.08,0.185-0.503,0.424s-0.741,0.212-0.927,0.185c-0.185-0.026-0.821-0.106-0.927-0.344
                        c-0.106-0.238-0.133-0.847-0.688-0.635c-0.556,0.212-0.053-0.027-1.086,0.477c-1.033,0.503-0.768,0.106-1.695,0.715
                        c-0.927,0.609-1.96,1.165-2.489,1.271c-0.53,0.106-0.53,0.45-1.033,0c-0.503-0.45-0.609-0.318-1.006-0.741
                        c-0.397-0.424-0.847-0.424-1.112-0.953c-0.265-0.53-0.9-1.245-0.9-1.51c0-0.265,0.344-1.006-0.291-2.012
                        c-0.636-1.006-0.9-1.086-1.112-1.589c-0.212-0.503-1.642-1.165-1.642-1.165s-0.768-2.701-0.794-2.781
                        c-0.026-0.079-0.503-0.238-0.741-0.768c-0.238-0.53-0.556-0.9-0.953-1.324c-0.397-0.424-1.139-0.821-1.218-0.9
                        c-0.079-0.079-1.827-0.847-1.88-0.927c-0.053-0.079,0.106-0.688,0-0.953c-0.106-0.265-0.768-1.059-0.768-1.059
                        s-1.748-0.927-1.827-1.006c-0.079-0.079-1.245-0.477-1.589-0.185c-0.344,0.291-0.185,0.106-0.901,0.265
                        c-0.715,0.159-1.456,0.053-1.748,0.185c-0.291,0.132-0.98,0.159-1.165,0.212c-0.185,0.053-1.192-0.159-1.668-0.159
                        c-0.477,0-1.642,0.106-2.145,0.132c-0.503,0.027-2.119-0.291-2.198-0.291s-0.265,0.53-0.503-0.079
                        c-0.238-0.609-0.53-0.424-0.424-1.086c0.106-0.662,0.238-1.668,0.238-1.668s1.589-0.212,0.583-1.827
                        c-1.006-1.615-2.542-4.422-2.542-4.422s-0.238,0.503-0.9-0.318c-0.662-0.821-1.457-1.43-1.774-1.933
                        c-0.318-0.503-0.874-1.244-1.192-1.192c-0.318,0.053-2.013,0.874-2.013,0.874s-0.106,1.165-0.212,1.192
                        c-0.106,0.027-0.397-0.265-1.642-0.132c-1.245,0.132-3.284-0.265-3.363-0.212c-0.079,0.053-2.383,2.357-2.383,2.357
                        s-0.238,1.404-0.344,1.721c-0.106,0.318-0.265,0.027-0.027,0.689c0.238,0.662,0.636,0.344,0.238,0.874
                        c-0.397,0.53-1.907,1.827-2.013,2.119c-0.106,0.291-0.106,0.715-0.583,0.874c-0.477,0.159-1.801,0.212-1.986,0.45
                        c-0.185,0.238-0.185,0.212-0.662,0.45c-0.477,0.238-0.397,0-0.794,0.318c-0.397,0.318-0.794,0.742-0.794,0.742l-0.159,0.053
                        l0.424-1.906l-3.999-3.098l0.742-1.112c0,0-0.079-1.298-0.45-1.748c-0.371-0.45-1.112-0.53-0.794-1.112
                        c0.318-0.583-0.053-0.953,0.503-1.351c0.556-0.397,0.08,0,1.059-0.874c0.98-0.874-0.741-3.469-0.741-3.469l-7.124-0.212
                        l-1.218-1.086c0,0-0.132-0.424,0-0.689c0.132-0.265,0.185-0.741,0.185-0.741s-1.509-2.251-1.509-2.331s0.106-0.238,0.291-0.927
                        c0.185-0.689,0.238,0.397,0.238-0.953s-0.477-1.721-0.529-1.96c-0.053-0.238,0.132-0.477-0.318-1.059
                        c-0.45-0.583-2.383-2.225-2.383-2.225s-0.609-0.715-0.927-0.688c-0.318,0.026-0.397,0.132-1.404-0.08
                        c-1.006-0.212-2.145-0.344-2.516-0.265c-0.371,0.079-1.245,0.377-1.404-0.023c-0.159-0.4-0.318-0.771-0.662-0.877
                        c-0.344-0.106-1.483-0.397-1.483-0.503c0-0.106,0.185-0.715,0-0.874c-0.185-0.159-1.139-0.715-1.139-0.715s0.079-0.212-0.133-0.291
                        c-0.212-0.08-1.165-0.477-1.165-0.477l-0.344-0.689c0,0-0.265-0.662-0.133-0.9c0.133-0.238,0.212-0.371,0.556-0.715
                        c0.344-0.344,0.318-0.689,0.424-1.006c0.106-0.318,0.291-0.556,0.371-0.9c0.08-0.344,0.318-0.583,0.318-1.113
                        c0-0.529,0.238-0.212,0-0.529c-0.238-0.318-0.503-0.636-0.609-0.874c-0.103-0.232-0.552-1.304-0.578-1.366
                        c-0.003-0.001-0.005-0.011-0.005-0.011s0.002,0.01,0.005,0.011c0.007,0.003,0.022-0.072,0.022-0.673
                        c0-0.821-0.238-1.43-0.212-1.589c0.026-0.159,0.132-0.556,0.132-0.556s1.006-0.821,1.377-1.404c0.371-0.583,0.715-0.98,0.794-1.218
                        c0.08-0.238-0.212,1.059,0.239-0.794c0.45-1.854,0.53-2.145,0.53-2.145l0.344-0.636c0,0,0.133-0.371,0.133-0.689
                        c0-0.318,0.185-0.556-0.159-1.192c-0.344-0.635-0.689-1.086-0.768-1.165c-0.079-0.079-0.689-0.397-0.689-0.397l-0.132-1.324
                        l-0.185-0.98l-1.112-0.132l-0.291-0.265c0,0,0.847-1.139,0.874-1.404c0.026-0.265,0.583-1.324,0.689-1.35
                        c0.106-0.027,0.079-1.642,0.079-1.721c0-0.079,0.847-0.291-0.159-1.033c-1.006-0.741-1.139-0.847-1.483-1.165
                        c-0.344-0.318-0.609-0.424-0.688-0.742c-0.08-0.318-0.159-0.742-0.185-0.874c-0.026-0.132-0.026-0.662-0.185-1.112
                        c-0.159-0.45-0.291-0.556-0.477-0.98c-0.185-0.424-0.397-0.741-0.424-1.059c-0.026-0.318,0.053-0.503-0.185-1.165
                        c-0.238-0.662-0.45-0.98-0.583-1.086c-0.132-0.106-1.854-0.159-0.874-0.556c0.98-0.397,1.615-0.344,1.668-0.477
                        c0.053-0.132,0.053-0.265,0.477-0.742c0.424-0.477,0.609-1.192,0.636-1.271c0.027-0.08-0.265-1.245,0.556-0.742
                        c0.821,0.503,1.112,0.794,1.43,1.033c0.318,0.238,0.768,0.556,0.953,0.821c0.185,0.265,0.477,0.476,0.344,0.583
                        c-0.132,0.106-0.212,0.265-0.212,0.503c0,0.239-0.688-0.106,0.106,0.636c0.794,0.742,0.953,0.794,1.192,0.768
                        c0.238-0.026,1.377-0.132,1.721-0.186c0.344-0.053,0.053-0.794,1.245-0.397c1.192,0.397,0.556,0.185,1.483,0.609
                        c0.927,0.424,1.774,0.609,1.854,0.609c0.079,0,0.212,0.185,0.98-0.371c0.768-0.556,1.112-0.583,1.271-0.9
                        c0.159-0.318,0.159-0.9,0.556-1.006c0.397-0.106,1.006-0.133,1.404-0.265c0.397-0.132,0.794,0.132,1.086-0.45
                        c0.291-0.583,0.424-0.45,0.477-1.006s0.053-0.609-0.079-1.245c-0.132-0.636-0.185-0.583-0.185-1.086
                        c0-0.503-0.053-0.556,0.344-1.086c0.397-0.53,0.847-1.139,0.847-1.139s0.583-0.503,0.397-1.165
                        c-0.185-0.662-0.291-0.847-0.397-1.059c-0.106-0.212-0.106-0.212-0.106-0.212s0.106-0.662-0.45-1.138
                        c-0.556-0.477-0.265-0.291-0.847-0.689c-0.583-0.397-1.192-0.821-1.192-0.821l-0.477-0.9l0.53-0.609c0,0,0.795-0.609,1.218-0.847
                        c0.424-0.238,1.404-0.503,1.404-0.503s1.192-0.635,1.536-0.953c0.344-0.318,1.483-1.006,1.483-1.006s1.112-0.026,1.377-0.821
                        c0.265-0.795,0.397-1.165,0.397-1.165s-0.397-1.298,0-1.324c0.397-0.026,0.556,0.133,0.953,0c0.397-0.132,0.636,0.027,1.059-0.265
                        c0.424-0.291,0.662-0.45,1.086-1.086c0.424-0.635,0.397-0.953,0.53-1.192c0.132-0.238-0.027-0.318,0.636-0.318
                        c0.662,0,0.503-0.027,0.821-0.027s0.424,0.212,1.059,0c0.636-0.212,0.742-0.556,0.9-0.98c0.159-0.424,0.185-0.318,0.318-0.768
                        c0.133-0.45,0.238-0.583,0.212-1.059c-0.026-0.477,0.035-0.556,0.004-0.821c-0.031-0.265,0.022-2.251,0.009-2.383
                        c-0.013-0.132-0.12,1.086,0-1.218c0.12-2.304,0.12-2.489,0.12-2.489s0.132-0.08,0.715-1.245c0.583-1.165,0.45-1.271,0.927-1.43
                        c0.477-0.159,0.291-0.027,1.351-0.53c1.059-0.503,0.9-0.609,1.589-0.874c0.689-0.265,1.112-0.503,1.457-0.186
                        c0.344,0.318,0.609,0.768,0.662,0.874c0.053,0.106,0.98-0.106,1.271-0.318c0.291-0.212,0.583-0.397,0.742-0.45
                        c0.159-0.053,1.933-0.397,2.118-0.503c0.185-0.106,0.794-0.583,1.033-0.688c0.238-0.106,1.403-0.397,1.907-0.397
                        c0.503,0,1.059,0.053,1.324,0.079c0.265,0.026,1.324,1.589,1.324,1.589s-0.238,0.424,0.079,1.324
                        c0.318,0.9,0.583,0.927,1.006,1.483c0.424,0.556,1.033,1.271,1.033,1.271s-0.026,0.503,0.318,0.477
                        c0.344-0.027,0.503-0.132,1.086-0.053c0.583,0.079,0.371-0.45,1.006-0.212c0.636,0.238,0.795,0.45,1.192,0.556
                        c0.397,0.106,0.636,0.371,1.271,0.159c0.635-0.212,1.139-0.477,1.509-0.291c0.371,0.185,0.132-0.053,0.768,0.662
                        c0.636,0.715,1.218,1.086,1.509,1.377c0.291,0.291,0.768,0.556,0.927,0.318c0.159-0.238,0.503-1.192,1.059-1.006
                        c0.556,0.186,0.768,0.079,1.404,0.556c0.635,0.477,0.503,0.159,1.059,0.715c0.556,0.556,0.821,0.688,0.953,0.741
                        c0.132,0.053,0.477-0.053,1.165-0.371c0.688-0.318,1.536-1.086,1.536-1.086s-0.026-0.609,0.265-0.847
                        c0.291-0.238,1.907-0.477,2.33-0.477s1.165,0.08,1.165,0.08s0.53,0.582,0.874-0.318c0.344-0.9,0.45-1.298,0.609-1.668
                        c0.159-0.371,0.397-0.98,0.397-0.98s0.106-0.583,0.344-0.98c0.238-0.397,0.185-0.821,0.477-0.821c0.291,0,1.033-0.371,1.139,0.371
                        c0.106,0.741,0.768,2.012,0.768,2.012s1.192-0.424,1.51-0.424c0.318,0,1.112,0.45,1.562,0.397c0.45-0.053,1.324-0.159,1.51-0.185
                        c0.185-0.027,0.821-0.371,0.9-0.424c0.079-0.053-0.212,0.291,0.53-0.397c0.742-0.689,0.742-0.503,1.192-1.059
                        c0.45-0.556,1.139-1.006,1.139-1.006s0.424-0.901,0.609-1.351c0.185-0.45,0.953-0.556,1.112-0.662
                        c0.159-0.106-0.344-0.185,0.768-0.344c1.112-0.159,0.556,0.026,1.907-0.318c1.351-0.344,1.271-0.159,1.933-0.45
                        c0.662-0.291,2.224-0.503,2.595-0.662c0.371-0.159,0.953-0.318,0.953-0.318s1.51-0.503,1.827-0.53
                        c0.318-0.026,0.715,0.08,1.086,0.265c0.371,0.185,1.059,0.556,1.271,0.689c0.212,0.132,2.304-0.106,2.304-0.106
                        s0.583,0.212,1.377,0.212c0.794,0,2.224,0.106,2.33,0.212c0.106,0.106,0.636-0.53,0.477,0.291c-0.159,0.821-0.98,0.027-0.185,1.165
                        c0.794,1.139,0.741,1.139,0.821,1.801c0.08,0.662,0,1.033,0,1.033l-0.768,0.9l-0.238,0.847l0.397,1.139
                        c0,0,0.371,0.238-0.477,0.609c-0.847,0.371-0.927,0.265-1.033,0.397c-0.106,0.132-0.212,0.556-0.212,0.556s0.106,0.662,0.106,1.059
                        c0,0.397,0.027,0.291-0.132,1.086c-0.159,0.794-0.159,0.794-0.159,0.794s-0.9,0.291-1.112-0.159
                        c-0.212-0.45-0.424-0.821-0.424-0.821s0.318-0.159-0.265-0.159c-0.582,0-2.383-0.768-2.304-0.053
                        c0.079,0.715,0.159,1.298,0.159,1.298c-0.556,0.265-1.218,0.238-1.218,0.238s-0.689,0.318-0.371,0.768
                        c0.318,0.45,0.715,1.059,0.741,1.404c0.026,0.344-0.053-0.159-0.185,0.556c-0.132,0.715,0.132,2.145,0.132,2.224
                        c0,0.079-0.185,0.53-0.185,0.53s-0.265,1.271-0.397,1.483c-0.132,0.212,0.265-0.212-0.344,0.424
                        c-0.609,0.636-0.662,0.715-0.98,0.927c-0.318,0.212-0.477,0.238-0.874,0.556c-0.397,0.318-1.192,0.689-1.192,0.689
                        s-1.192,0.026-0.662,0.582c0.53,0.556,0.609,0.371,0.53,0.556c-0.08,0.186-0.265,0.265-0.397,0.636
                        c-0.132,0.371-0.45,0.106-0.027,0.9c0.424,0.794,0.609,0.847,0.609,1.218c0,0.371,0.424-0.238-0.106,0.953
                        c-0.53,1.192-0.185,1.006-0.212,1.139c-0.027,0.132,0.132,0.291,0.397,0.9c0.265,0.609,0.821,0.371,0.238,0.821
                        c-0.583,0.45-0.847,0.609-0.953,0.847c-0.106,0.238,0.212-0.079-0.609,0.238c-0.821,0.318-1.854-0.079-1.801,0.583
                        c0.053,0.662,0.344,0.742,0.344,1.139c0,0.397,0.159,0.132,0,0.688c-0.159,0.556-0.344,0.583-0.132,1.033
                        c0.212,0.45,0.344,0.636,0.397,0.874c0.053,0.238-0.477-0.424-0.106,0.371c0.371,0.794,0.953,0.794,1.139,0.927
                        c0.185,0.132,0.953,0.344,1.192,0.689c0.238,0.344,0.609,0.318,0.874,0.609c0.265,0.291,0.847-0.053,0.53,0.53
                        c-0.318,0.583-0.609,0.741-0.583,1.351c0.027,0.609,0.08,1.059,0.053,1.562c-0.026,0.503-0.291,0.715-0.106,1.324
                        c0.185,0.609,0.477,0.741,0.159,1.165c-0.318,0.424-0.609,0.635-0.609,1.139c0,0.503,0,1.218,0.053,1.827
                        c0.053,0.609,0.344,0.9,0.424,1.033c0.079,0.133-1.139,0.954-1.509,1.218c-0.371,0.265-0.424,0.318-0.689,0.556
                        c-0.265,0.238-0.768-0.026-0.688,0.635c0.08,0.662,0.159,0.132,0.08,1.033c-0.08,0.9,0.026,0.636-0.212,1.51
                        c-0.238,0.874-0.238,0.98-0.08,1.721c0.159,0.741,0.185,1.139,0.185,1.139s-0.397,0.397-0.98,1.298
                        c-0.583,0.9-0.503,0.53-0.847,1.324s-0.503,1.165-0.927,1.933c-0.424,0.768-0.821,0.715-0.715,1.43
                        c0.106,0.715,0.503,1.006,0.609,1.139c0.106,0.132,0.318,0.106-0.053,0.45c-0.371,0.344-0.397,0.556-0.927,0.397
                        c-0.529-0.159-0.609-0.45-0.794-0.239c-0.185,0.212-0.874,0.662-1.059,0.874c-0.185,0.212,0.159-0.186-0.371,0.424
                        c-0.53,0.609-0.821,0.715-0.821,1.006c0,0.291,0.953,0.609,0.238,0.662c-0.715,0.053-1.509,0.291-1.642,0.397
                        c-0.132,0.106-0.053-0.185-0.132,0.106c-0.079,0.291-0.053,0.371-0.159,0.794c-0.106,0.424-0.08-0.291-0.212,1.006
                        c-0.132,1.297-0.371,0.636-0.079,1.456c0.291,0.821,0.371,1.059,0.159,1.403c-0.212,0.344-0.397,0.238-0.344,0.689
                        c0.053,0.45,0,0.318,0.106,1.059c0.106,0.741-0.238,0.397,0.106,0.953c0.344,0.556-0.079,0.185,0.556,0.9
                        c0.635,0.715,1.245,0.821,1.854,0.9c0.609,0.079,1.509-0.08,1.774,0.159c0.265,0.238,0.132,0.185,0.583,0.503
                        c0.45,0.318,0.609,0.635,1.218,0.635c0.609,0,0.794-0.053,1.218-0.132c0.424-0.08-0.132,0.212,0.847-0.318
                        c0.98-0.53,1.457-0.503,1.695-0.98c0.238-0.477-0.026-1.456,0.397-0.715c0.424,0.741,0.768,0.821,0.609,1.191
                        c-0.159,0.371-0.238,0.371-0.265,0.927c-0.026,0.556-0.424,0.794,0.45,1.139c0.874,0.344,0.635,0.609,1.43,0.053
                        c0.794-0.556,0.927-0.291,1.404-1.006s0.53-0.503,1.006-1.642c0.477-1.139,0.636-1.086,0.688-2.012
                        c0.053-0.927,0.503-0.9-0.106-1.748c-0.609-0.847-1.112-0.503-0.715-1.139c0.397-0.635,0.424-0.45,0.635-1.218
                        c0.212-0.768,0.291-1.006,0.291-1.006s2.86-1.509,3.072-1.774c0.212-0.265,0.742-0.582,0.847-1.377
                        c0.106-0.794-0.662-0.9,0.291-1.748c0.953-0.847,1.165-1.112,1.536-1.43c0.371-0.318,0.741-0.344,1.351-1.483
                        c0.609-1.139,0.344-0.953,0.98-1.668c0.636-0.715,0.953-1.165,1.218-1.298c0.265-0.132,0.98-1.298,1.457-1.774
                        c0.477-0.477,0.688-0.238,0.9-0.715c0.212-0.477,0.556-1.112,0.556-1.112s-0.026-0.291,0.794,0.026
                        c0.821,0.318,0.344-0.159,1.695,0.477c1.351,0.635,1.483,0.529,2.092,1.086c0.609,0.556,0.953-0.026,0.98,1.086
                        c0.026,1.112-1.245,1.059,0.212,1.668c1.456,0.609,1.033,0.45,2.145,0.635c1.112,0.186,0.768,0.053,1.615,0.238
                        c0.847,0.185,1.801,0.477,2.33,0.53c0.53,0.053,0.609,0.106,1.43,0.185c0.821,0.079,1.456-0.106,1.907,0.159
                        c0.45,0.265,0.371,0.45,1.404,0.636c1.033,0.185,1.456,0.397,2.304,0.397c0.848,0,1.51,0.026,1.51,0.026l0.953,0.503
                        c0,0,0.371-0.132,0.424,0.212c0.053,0.344-0.397,0.742-0.424,1.218c-0.026,0.477,0,0.901,0,0.901s-0.053,0.423-0.45,1.059
                        c-0.397,0.636,0,0.344-0.874,1.192c-0.874,0.848-0.821,0.662-1.536,1.298c-0.715,0.635-0.821,0.715-1.165,1.006
                        c-0.344,0.291-0.08-0.185-0.662,0.53c-0.583,0.715-0.768,0.848-0.794,1.139c-0.026,0.292,1.721-0.662-0.106,0.424
                        c-1.827,1.086-1.96,0.9-2.277,1.218c-0.318,0.318-0.689,0.609-0.848,0.9c-0.159,0.291-0.265,0.53-0.265,0.53
                        s-0.291,0.424-0.424,0.874c-0.132,0.45-0.344,0.265-0.079,0.741c0.265,0.477,0.688,2.357,1.059,2.383
                        c0.371,0.027,0.662-0.185,1.324,0.132c0.662,0.318,1.086,0.424,1.589,0.609c0.503,0.185,0.397-0.238,1.006,0.344
                        c0.609,0.583,0.238,0.371,0.9,0.927c0.662,0.556,1.324,0.847,2.092,1.324c0.768,0.477,0.079-0.053,1.139,0.715
                        c1.059,0.768,0.424-0.053,1.271,1.006c0.847,1.059,0.688,0.794,0.847,1.059c0.159,0.265,1.483,1.192,1.483,1.192
                        s0.212-0.053,0.45,0.397c0.238,0.45,0.344,0.477,0.662,1.059c0.318,0.583,0.238,0.583,0.609,1.192
                        c0.371,0.609,0.132,0.079,0.556,0.9c0.424,0.821,0.318,1.245,0.53,1.668c0.212,0.424,0.212,0.212,0.662,0.98
                        c0.45,0.768,0.635,0.848,0.9,1.351c0.265,0.503,0.583,0.794,0.794,1.404C780.762,264.602,781.583,264.629,779.517,264.761z"/>
                      <path fill="#CFCFD3" d="M522.348,389.906c-0.006,0.003-0.011,0.003-0.018,0.006C522.147,390.011,522.321,389.923,522.348,389.906z"
                        />
                      <path fill="#CFCFD3" d="M441.906,459.438C442.136,459.45,442.954,458.924,441.906,459.438L441.906,459.438z"/>
                      <path class="jiha" id="Drâa-Tafilalet" fill="#D2DBE0" d="M743,378.128c-1.907-0.106-5.932-1.165-5.932-1.165s-2.754-14.406,4.449-18.007
                        c0,0,0.741-15.677,0.688-15.359c-0.031,0.185,13.764-2.986,25.284-5.665l-0.402,0.093c0,0-0.749-0.608-0.643-1.526
                        c0.106-0.918,0.417-0.812-0.003-1.306c-0.421-0.494-1.091-0.741-1.091-1.659c0-0.918-1.024-0.53,0-1.165
                        c1.024-0.636,1.236-1.095,1.13-1.095c-0.106,0-1.977,0.388-2.26,0.6c-0.283,0.212-0.177,0.177-0.53,0.424
                        c-0.353,0.247-0.035,0.918-0.565,0.318c-0.53-0.6-1.271-0.6-1.306-1.342c-0.035-0.741-0.494-0.777,0-1.554
                        c0.494-0.777,0.777-0.388,1.13-1.13c0.353-0.742-0.318-0.247,0.494-2.542c0.812-2.295,0.424-2.366,1.059-2.472
                        c0.636-0.106,1.659-0.424,1.765-0.459c0.106-0.035,1.66-0.565-0.035-0.353c-1.695,0.212-2.083,0.318-2.189,0.494
                        c-0.106,0.176-0.07,0.282-0.742,0.565c-0.671,0.282-0.706,0.459-1.518,0.318c-0.812-0.141-2.683-0.494-2.719-0.353
                        c-0.035,0.141-0.459,0.847-0.459,0.847s-0.494,0.212-1.095-0.318c-0.6-0.53-0.918-0.777-1.024-1.2
                        c-0.106-0.424,0.812-0.671-0.424-0.742c-1.236-0.071-3.037-0.53-3.037-0.53s0.035-0.459-0.53,0
                        c-0.565,0.459-0.883,0.282-0.883,0.883c0,0.6,0.424,0.282,0,0.988c-0.424,0.706-0.706,0.706-1.059,1.201
                        c-0.353,0.494,0.459,0.565-0.53,0.741c-0.989,0.177-2.225-0.318-2.719-0.176c-0.494,0.141-0.812,0.071-1.271,0.247
                        c-0.459,0.177,0.177,0.565-1.094,0.177c-1.271-0.388-2.436-0.141-2.436-0.848c0-0.706,0.282-0.953,0.847-1.977
                        c0.565-1.024,1.73-0.742,0.777-1.624c-0.953-0.883-2.613-0.282-2.613-0.282l-0.565-0.565c0,0-0.777-0.883-0.671-1.271
                        c0.106-0.389,0.424-0.494,0.459-0.918c0.035-0.424-0.706-0.424-0.883-0.388c-0.177,0.035-0.565,0.078-0.883-0.014
                        c-0.318-0.092-0.318,1.179-0.494-0.551c-0.177-1.73,0-2.083,0-2.083s0.918,0.883,0.353-0.424c-0.565-1.306-0.777-1.624-0.847-1.836
                        c-0.071-0.212,1.518,1.695-0.212-0.918c-1.73-2.613-2.366-3.743-2.507-3.954c-0.141-0.212-1.977-1.165-2.26-2.013
                        c-0.282-0.847-1.201-2.118-1.201-2.436c0-0.318,0.141-0.6,0-1.165c-0.141-0.565,0.635,0.177-0.424-1.095
                        c-1.059-1.271-1.165-1.553-1.342-1.836c-0.176-0.282-0.424-0.565-0.918-1.201c-0.494-0.635-1.836-0.918-1.942-0.918
                        c-0.106,0-0.989,0-0.989,0h-1.695c-0.565,0.106-0.989,0.353-1.236,0.565c-0.247,0.212-0.247,0.212-0.247,0.212
                        s-0.565,0.565-2.048,0.6c-1.483,0.035-3.708,0.247-3.813-0.071c-0.106-0.318,0.071-0.212-0.459-0.706
                        c-0.53-0.494-0.847-0.671-1.13-0.883c-0.282-0.212-0.883-0.847-0.883-0.847s-0.989-1.13-0.989-1.412s0.706-0.812-0.141-1.66
                        c-0.847-0.847-0.741-0.353-1.165-1.306c-0.424-0.953-1.201-2.224-1.201-2.224s-0.318-0.742-0.741-1.165
                        c-0.424-0.424-1.13-0.847-1.342-1.306c-0.212-0.459-1.518-1.66-1.518-1.66l-1.659-0.883c0,0-0.071-0.071-0.388-0.565
                        c-0.318-0.494-1.306-1.024-1.306-1.589s0.671-0.741,0-0.918c-0.671-0.177-2.154-0.777-2.789-0.53
                        c-0.636,0.247-1.836,0.812-1.836,0.812s-2.754-0.53-3.036-0.424c-0.283,0.106-1.554,0.247-1.907,0.212
                        c-0.353-0.035-1.483-0.318-1.977-0.388c-0.494-0.071-1.448-0.271-1.448-0.271s-0.459,0.094-0.459-0.93
                        c0-1.024-0.247-1.695-0.177-2.083c0.071-0.388-0.013-0.953-0.013-0.953s-0.164-1.059-0.164-1.377c0-0.318,0.106-0.671-0.212-1.201
                        c-0.318-0.53-0.777-1.236-1.165-1.624c-0.388-0.388-0.035-0.459-1.165-1.377c-1.13-0.918-1.942-1.377-1.942-1.377
                        c-0.847,0.671-0.636,0.636-0.847,0.671c-0.212,0.035-1.801,0.071-1.801,0.071l-3.566,0.071c0,0,0.177,0.176-0.424,0.883
                        c-0.6,0.706-0.883,0.953-0.953,1.236c-0.071,0.282-0.212,0.424-0.071,0.741c0.141,0.318,0.388,0.282,0.212,0.671
                        c-0.177,0.388-0.227,0.283-0.272,0.635c-0.045,0.353,0.328,0.247,0,0.495c-0.328,0.247-0.469,0.318-0.575,0.423
                        c-0.106,0.106-0.353,0.035-0.742,0.494c-0.388,0.459-0.424,0.212-0.53,0.812c-0.106,0.6-1.13,2.013-1.236,2.119
                        c-0.106,0.106,0.141,0-0.459,0.177c-0.6,0.177-0.6,0.177-0.6,0.177s-1.024,0.424-1.448,0.494c-0.424,0.071-0.671,0-1.518,0.6
                        c-0.847,0.6-0.671,0.071-1.554,1.13c-0.883,1.059-0.883,1.13-1.094,1.271c-0.212,0.141-0.035-0.176-0.671,0.353
                        c-0.636,0.53-0.989,0.671-1.201,1.024c-0.212,0.353-0.282,0.318-0.353,0.777c-0.071,0.459,0.212,0.424,0,0.989
                        c-0.212,0.565-0.212,0.176-0.388,0.988c-0.177,0.812-0.212,0.636-0.212,1.377c0,0.741,0.035,0.706,0.071,1.518
                        c0.035,0.812,0.106,0.636,0.141,1.342c0.035,0.706,0.071,0.671-0.035,1.13c-0.106,0.459,0.035,0.6,0.035,0.6
                        s-0.388-0.318-0.459,0.424c-0.071,0.742,0.106,0.53-0.212,1.412c-0.318,0.883-0.247,0.212-0.388,1.13
                        c-0.141,0.918,0.282,0.777,0,1.201c-0.282,0.424-0.212,0.247-0.388,0.777c-0.177,0.529-0.212,0.353-0.353,0.847
                        c-0.141,0.494-0.282,0.53-0.212,1.165c0.071,0.636,0.139,0.706-0.019,0.953c-0.158,0.247-0.299,0.459-0.581,0.565
                        c-0.282,0.106-0.812,0.141-0.812,0.141s-0.847-0.177-1.059-0.177c-0.212,0-0.318-0.424-0.424-0.035
                        c-0.106,0.388-0.141,0.388-0.177,0.671c-0.035,0.283,0.353-0.106-0.141,0.883c-0.494,0.989-0.212,0.671-0.671,1.306
                        c-0.459,0.636,0,0.194-0.953,0.786s-1.589,0.768-1.589,0.768s-1.236,0.388-1.518,0.459c-0.282,0.071-0.53,0-0.53,0.106
                        c0,0.106-0.07-0.035,0,0.53c0.071,0.565-0.098,0.353-0.031,0.812c0.067,0.459,0.325,0.212-0.016,0.812
                        c-0.341,0.6-0.659,0.459-0.412,0.954c0.247,0.494,1.66,0.777,1.66,0.777s0.388,0.106,0.459,0.212c0.071,0.106,0.247,0,0.353,0.247
                        c0.106,0.247,0.106-0.035,0.141,0.459c0.035,0.494,0.141,0.176,0.035,0.494c-0.106,0.318-0.741,1.165-0.741,1.165
                        s-0.742-0.071-0.177,0.53c0.565,0.6,0.635,0.106,0.635,0.883c0,0.777-0.353,0.671,0.035,1.165c0.388,0.494,0.176,0.176,0.741,0.671
                        c0.565,0.494,0.459,0.247,0.565,0.494c0.106,0.247,0.071-0.176,0.177,0.636c0.106,0.812,0.247,0.812-0.177,0.883
                        c-0.424,0.07-0.282,0.035-0.989-0.036c-0.706-0.07-0.671-0.106-1.095-0.141c-0.424-0.035-1.712-0.353-1.712-0.353l-0.548-0.247
                        c0,0,0.141-0.106-0.353,0.071c-0.494,0.176-0.706,0.071-1.271,0.388c-0.565,0.318-1.165,0.388-1.624,0.635
                        c-0.459,0.247-0.565,0.212-1.024,0.353c-0.459,0.141-1.165,0.035-1.306,0.247c-0.141,0.212-0.177,0.247-0.318,0.459
                        c-0.141,0.212,0.035,0-0.141,0.212c-0.177,0.212-0.318,0.53-0.953,1.341c-0.636,0.812-0.812,1.236-1.201,1.624
                        c-0.388,0.388-0.53,0.529-0.812,0.883c-0.283,0.353-0.106,0.247-0.742,0.6c-0.635,0.353-1.306,0.741-1.801,0.953
                        c-0.495,0.212-0.6,0.071-1.024,0.318c-0.424,0.247-0.388,0.141-0.706,0.318c-0.318,0.177-0.212,0.071-0.706,0.283
                        c-0.495,0.212-0.848,0.141-0.989,0.459c-0.141,0.318-0.141-0.071-0.247,0.6c-0.106,0.671-0.071,0.53-0.177,0.847
                        c-0.106,0.318-0.106,0.141-0.176,0.6c-0.071,0.459,0.07,0.318,0,0.953c-0.071,0.635-0.318,0.141,0.141,0.953
                        c0.459,0.812-0.282,0.883,0.706,0.883c0.989,0,1.13-0.6,1.554,0.141c0.424,0.741,0.459,0.6,0.671,1.024
                        c0.212,0.424,0.318,1.13,0.212,1.307c-0.106,0.176-0.282,1.024-0.282,1.024s-0.106,0.318-0.141,1.024
                        c-0.035,0.706-0.106,0.565-0.035,1.13c0.071,0.565,0.459-0.071,0.071,0.565c-0.388,0.635-0.494,0.494-0.671,0.883
                        c-0.177,0.388,0.53,0.035-0.6,0.565c-1.13,0.53-1.377,0.6-1.483,0.671c-0.106,0.071,0.906-0.035-0.271,0.247
                        c-1.177,0.282-0.965,0-1.989,0.477c-1.024,0.477-1.483,0.582-1.483,0.582s0-0.424-0.247,0.247
                        c-0.247,0.671-0.247,0.671-0.247,0.847c0,0.177-0.847,0.636-1.024,0.848l-0.002,0.002c0.028-0.056-0.04-0.076-0.987,0.669
                        c-1.483,1.165-1.306,0.636-1.836,1.342c-0.53,0.706-0.883,1.024-1.483,1.765c-0.6,0.742,0.424,0.6-0.953,0.953
                        c-1.377,0.353-2.083,0.565-2.083,0.565s-0.035,0.353-0.883,0.777c-0.847,0.424-1.518,0.706-2.083,0.847
                        c-0.565,0.141-1.836,0.53-2.013,0.636c-0.177,0.106-2.436,0.565-2.825,0.706c-0.388,0.141-0.883,0.141-1.165,0.318
                        c-0.242,0.152-1.468,0.535-1.812,0.642c-0.024,0.056-0.113,0.192-0.342,0.488c-0.6,0.777,0,0.388-0.741,0.918
                        c-0.741,0.529-1.236,0.459-1.554,0.953c-0.318,0.494-0.282,0.318-0.635,0.777c-0.353,0.459-0.636,0.6-0.636,0.6
                        s-0.989,0.035-1.412,0c-0.424-0.035-1.448-0.004-1.695,0.016c-0.247,0.02-1.483,1.291-1.907,1.467
                        c-0.424,0.177,0-0.177-1.271,0.318c-1.271,0.495-2.472,0.706-2.86,0.777c-0.388,0.071-1.871,0.141-1.977,0
                        c-0.106-0.141-1.306-0.424-1.589-0.459c-0.282-0.035-1.059-0.141-1.059-0.141s-0.283,0.282,0,0.847
                        c0.16,0.32,0.181,0.461,0.172,0.604c-0.007,0.11-0.031,0.221-0.031,0.42c0,0.459,0.353-0.141-0.106,1.165
                        c-0.459,1.306-0.318,0.883-0.494,1.977c-0.177,1.095-0.07,0.777-0.494,1.907s-0.494,1.059-0.706,1.73
                        c-0.212,0.671-10.24,1.13-10.346,1.13c-0.106,0-0.918,0-1.377,0s-1.765-0.283-1.659-0.53c0.106-0.247,0.129-0.777-0.006-0.954
                        c-0.135-0.176-0.735-1.306-0.947-1.165c-0.212,0.141,0.282-0.035-0.459,0.318c-0.741,0.353-1.589,0.389-1.589,0.389l-1.448-0.177
                        c0,0-0.777-0.353-0.918-0.495c-0.141-0.141-0.671-0.212-0.741-0.6c-0.071-0.388-0.353-0.742-0.459-0.742
                        c-0.106,0,0.212-0.141-0.494,0.071c-0.706,0.212-1.271-0.282-1.377,0.141c-0.106,0.424,0.071,0.883,0,1.13
                        c-0.071,0.247-0.106,0.177-0.318,0.989c-0.212,0.812,0.106,0.706-0.424,1.165c-0.53,0.459-0.883,0.459-1.448,0.742
                        c-0.565,0.282-0.847,0.247-1.024,0.388s-1.095,0.565-1.342,0.635c-0.247,0.071-0.459,0.141-0.989,0.459
                        c-0.53,0.318-0.424,0.424-0.953,0.53c-0.53,0.106-1.165,0.106-1.448,0.141c-0.283,0.035-0.6-0.141-0.953,0
                        c-0.353,0.141-0.953-0.283-1.165,0c-0.212,0.282-0.282,0.353-0.918,0.671c-0.636,0.318-1.059,0.353-1.554,0.565
                        c-0.494,0.212-0.106-0.071-1.236,0.424c-1.13,0.494-2.542,0.953-3.249,0.883c-0.706-0.07-0.777-0.339-1.518,0.007
                        c-0.742,0.346-1.307,0.416-1.483,0.875c-0.177,0.459,0.247,0.07-0.53,0.953c-0.777,0.883-1.518,1.059-1.836,1.271
                        c-0.318,0.212-1.271,0.459-1.448,0.777c-0.177,0.318,0.177-0.035-0.353,0.636c-0.53,0.671-0.388,0.459-0.777,0.883
                        c-0.388,0.424-0.53,0-0.53,0.459c0,0.459-0.071,0.388-0.177,0.777c-0.106,0.388-0.141-0.141-0.106,0.388
                        c0.035,0.53-0.035,0.53,0.388,0.812c0.424,0.283,0.706,0.459,0.812,0.53c0.106,0.071,1.695,0.671,1.695,0.777
                        s-0.212,0.071-0.212,0.6c0,0.53,0.106,0.353,0,1.059c-0.106,0.706-0.636,4.449-0.671,4.555c-0.035,0.106,0.106,0.318-0.106,0.777
                        c-0.212,0.459-0.353,0.353-0.459,0.883c-0.106,0.53-0.424,0.635,0.106,1.095c0.53,0.459,0.812,0.847,1.236,0.847
                        c0.424,0,0.847-0.283,1.448-0.353c0.6-0.07,1.13-0.53,1.342-0.035c0.212,0.494,0.424,0.424,0.247,0.918
                        c-0.176,0.494-0.282,0.883-0.6,1.483c-0.318,0.6-0.53,0.883-0.53,0.883s0,0.389-0.353,1.342c-0.353,0.953-0.282,0.847-0.494,1.412
                        c-0.212,0.565-0.918,0.706-0.565,1.095c0.353,0.388,2.366,0.071,2.86,0c0.494-0.071,1.201-0.071,1.307,0
                        c0.106,0.071,0.141-0.918,0.494,0.424c0.353,1.342,0.141,3.248,0.106,3.601c-0.035,0.353-0.459-0.035,0.212,1.024
                        c0.671,1.059,1.165,1.236,1.236,1.942c0.071,0.706,0.353,1.095,0.494,1.554c0.141,0.459,0.071,0.212,0.53,0.989
                        c0.459,0.777,0.636,0.459,0.706,1.094c0.071,0.636,0.6,1.094-0.565,1.271c-1.165,0.177-1.942,0.353-2.224,0.459
                        c-0.282,0.106-0.071-0.035-0.847,0.318c-0.777,0.353-1.024,0.106-1.342,0.53s-0.318,0.635-0.636,0.847
                        c-0.318,0.212-0.565,0.212-1.024,0.6c-0.459,0.388-0.035,0.318-1.589,0.706c-1.554,0.388-1.589,0.53-1.589,0.53
                        s0.318,0.812,0.388,1.095c0.071,0.283-0.036,0.071,0.035,0.494c0.07,0.424-0.918,0.353,0.07,0.777
                        c0.989,0.424,1.907,0.741,2.154,0.424c0.247-0.318,0.353-1.165,0.636-0.53c0.282,0.635,0.282,0.742,0.424,1.342
                        c0.141,0.6-0.035,0.212,0.177,0.953c0.212,0.742,0.635,1.165,0.635,1.801c0,0.636,0.247,1.059,0.353,1.977
                        c0.106,0.918,0.282,0.883,0.106,1.624c-0.177,0.741-0.035,0.847-0.424,1.236c-0.388,0.388-0.565,0.459-0.741,0.636
                        c-0.177,0.176,3.107,0.459,3.107,0.459s1.024,0.494,1.73,0c0.706-0.494-0.353-0.953,0.706-0.494
                        c1.059,0.459,1.059,0.545,1.201,0.714c0.141,0.169,0-0.008,0.353,0.487c0.353,0.494,0.494,0.706,0.494,0.706
                        s0.494,0.388,1.73,0.388c1.236,0,1.518-1.73,1.977,0c0.459,1.73,0.635,1.73,0.635,1.73s0.812,0.494,0.953,0.671
                        c0.141,0.177,0.353-0.459,0.424-0.989c0.07-0.53,0.459-1.483,0.318-1.977c-0.141-0.494-0.6-1.342-0.177-1.518
                        c0.424-0.176,2.472-2.118,2.472-2.118l0.459-0.883c0,0,0.848-1.695,0.953-2.613c0.106-0.918-0.035-0.318,0.177-1.201
                        c0.212-0.883,0.459-1.448,0.459-1.448s-0.494-1.024,0.035-1.059c0.53-0.035,0.883-0.671,1.66-0.247
                        c0.777,0.424,0.282,0.176,1.871,0.847c1.589,0.671,2.295-0.741,3.072,0.953c0.777,1.695,0.636,2.33,1.13,2.719
                        c0.494,0.389,0.742,1.554,1.554,0.883c0.812-0.671,0.918-0.635,1.377-1.13c0.459-0.494,0.671-1.024,1.236-0.671
                        c0.565,0.353,2.754,0.918,3.107,0.777c0.353-0.141,1.73,2.366,1.059-0.459c-0.671-2.825-0.741-2.683-0.671-2.825
                        c0.071-0.141,0.565-0.459,0.671-1.094c0.106-0.635,0.282-1.024,0.318-1.13c0.035-0.106,0.353-0.918,1.165-0.671
                        c0.812,0.247,1.518,0.777,1.518,0.777l0.247,0.282c0,0,0.777-0.106,1.695-0.565c0.918-0.459,0.388-0.671,1.236-0.671
                        c0.847,0,1.871,0.071,2.26,0c0.389-0.071,0.777-0.565,1.201-0.176c0.424,0.388,0.671,0.247,0.812,0.883
                        c0.141,0.636,0.353,0.706,0.424,1.201c0.071,0.494,0.141,0.671,0.353,0.953c0.212,0.282,0.176,0.424,0.635,0.635
                        c0.459,0.212,1.624,0.741,1.624,0.741s0.847-0.635,1.236-0.247c0.388,0.389,0.424,0.141,0.565,0.742
                        c0.141,0.6,0.071,0.741,0.212,0.918c0.141,0.177,0.176-0.035,0.847,0.565c0.671,0.6,0.812,0.424,1.024,1.024
                        c0.212,0.6,0.53,0.636,0.53,1.13c0,0.495,0.141,0.954-0.071,1.13c-0.212,0.176-2.013,0.989-2.013,0.989s-0.318,0.141-0.424,0.459
                        c-0.106,0.318-0.106,0.212-0.177,0.635c-0.071,0.424,0.141,0.459-0.282,0.742c-0.424,0.282-1.66,0.635-1.695,0.918
                        c-0.035,0.283-0.212,0.035-0.035,0.53c0.177,0.494,0.141,0.424,0.53,0.918c0.389,0.494,0.53,0.177,0.847,1.095
                        c0.318,0.918,0.247,0.635,0.424,1.271c0.177,0.635,0.212,0.353,0.318,1.059c0.106,0.706,0.565,1.518,0.565,2.083
                        c0,0.565,0.141,0.671-0.035,1.377c-0.177,0.706-0.318-0.177-0.212,1.165c0.106,1.342-1.448,2.26,0.565,1.236
                        c2.013-1.024,2.33-1.165,2.33-1.165l0.353-0.176c0,0,1.2,0.282,1.942,0.741c0.741,0.459,1.554,0.6,1.695,0.847
                        c0.141,0.247,0.459-0.035,0.353,0.706c-0.106,0.742,0.106,0.318-0.706,1.412c-0.812,1.095-0.671,0.883-1.165,1.412
                        c-0.495,0.53-1.024,0.848-1.695,1.518c-0.671,0.671-0.635,0.636-1.094,1.059c-0.459,0.424-0.424,0.318-0.812,0.989
                        c-0.388,0.671-0.494,0.565-0.388,1.094c0.106,0.53-0.212,0.495,0.177,1.165c0.388,0.671,0.106,0.035,0.388,0.671
                        c0.282,0.636,0.247,0.565,0.353,0.918c0.106,0.353,0,1.377-0.035,1.483c-0.035,0.106,0-0.035-0.318,0.635
                        c-0.318,0.671-0.53,0.212-0.353,1.095c0.177,0.883,0.212-0.212,0.353,1.589c0.141,1.801,0.141,1.942,0.318,2.26
                        c0.176,0.318,0.212,1.2,0.176,2.083c-0.035,0.883-0.141,1.897-0.035,2.957c0,0-0.339,0.105-0.797,0.435
                        c3.939-2.683,15.767-0.002,15.767-0.002s20.479-5.226,23.021-1.13c2.542,4.096,5.367,6.779,6.779,4.52
                        c1.413-2.26,10.168-13.135,10.451-13.559c0.283-0.424-0.282-5.084-0.282-5.084s5.577-4.887,10.465-9.445
                        c3.667-3.42,6.947-6.655,7.189-7.503c0.565-1.977,17.796-8.898,17.796-8.898s15.96-18.925,25.564-17.513
                        c9.604,1.412,22.562-7.062,22.562-7.062s-2.013-2.86-1.907-3.178c0.106-0.318,2.966-8.05,5.296-10.487
                        C750.097,381.094,744.906,378.234,743,378.128z"/>
                      <path class="jiha" id="Laâyoune-Sakia-El-Hamra" fill="#D2DBE0" d="M497.202,624.474l-0.075-10.471c0,0-0.015,0.003-0.418-0.192c-0.74-0.357-0.247-0.035-0.918-0.247
                        c-0.671-0.212-0.883-0.388-1.73-0.812c-0.847-0.424-1.518-0.565-1.518-0.565s-0.883-0.353-1.412-0.494
                        c-0.53-0.141-0.777-0.282-0.777-0.282s-12.146-15.995-13.064-17.089c-0.918-1.094-0.389-0.706-0.883-1.448
                        c-0.494-0.741-0.565-0.777-0.847-1.236c-0.282-0.459-0.565-0.847-0.565-0.847l-0.989-1.024c0,0-1.13-0.918-2.013-1.271
                        c0,0-0.6-0.071-1.624-0.141c-1.024-0.071-0.706,0.106-1.377,0.141c-0.671,0.035-4.449,1.977-4.872,1.977
                        c-0.424,0-1.342-0.071-2.331-0.318c-0.989-0.247-1.2-0.247-1.2-0.247s-1.165-0.353-2.26-0.353s-1.377-0.212-2.224-0.247
                        c-0.847-0.035-0.883-0.388-1.342-0.635c-0.459-0.247-1.165-0.353-1.73-0.494c-0.565-0.141-1.095-0.565-1.271-0.636
                        c-0.177-0.071-4.908-4.943-5.473-5.79c-0.565-0.848-0.459-0.848-0.636-1.095c-0.177-0.247-0.918-1.165-1.448-1.801
                        c-0.53-0.635-1.13-0.565-1.13-0.565l-1.66,0.035l-3.531-0.071c0,0-1.059-0.176-2.295-0.494c-1.236-0.318-0.847-0.353-1.977-1.13
                        c-1.13-0.777-0.953-0.883-1.13-1.024c-0.177-0.141-1.165-0.141-1.412-0.141c-0.247,0-4.837-4.696-4.837-4.696l-1.13-0.989
                        l-2.083-1.095c0,0-1.024-0.53-2.225-0.706c-1.2-0.177-1.342-0.106-2.012-0.106c-0.671,0-2.578-0.035-3.178,0.035
                        c-0.6,0.07-2.436,0.635-2.436,0.635s-2.789-0.177-3.955-0.635c-1.165-0.459-0.741-0.424-0.883-0.53
                        c-0.141-0.106-0.141-0.071-0.953-0.388c-0.812-0.318-2.578,0.071-2.578,0.071s-4.52,0.177-4.978,0.212
                        c-0.459,0.035-2.224,0.353-2.224,0.353l-2.825,0.071c0,0-2.719,0.035-3.037,0.035c-0.318,0-2.577,0.459-4.555,0.989
                        c-1.977,0.53-1.977,0.141-2.719,0.212c-0.741,0.07-2.93,0.671-4.237,0.353c-1.307-0.318-0.742-0.318-1.448-0.565
                        c-0.706-0.247-0.883-0.212-2.401-0.706c-1.518-0.494-2.154-0.212-2.154-0.212s-1.412-0.635-2.648-0.883
                        c-1.236-0.247-1.589-0.565-2.33-0.847c-0.741-0.283-1.236-0.071-2.613-0.318c-1.377-0.247-1.094,0.212-1.094,0.212l-2.895-0.035
                        c0,0-1.624-2.048-1.907-2.366c-0.282-0.318-1.412-2.33-1.412-2.33s-0.883-1.483-1.836-3.496c-0.953-2.013-0.777-1.942-1.13-2.895
                        c-0.353-0.953-1.024-1.659-1.448-2.895c-0.424-1.236-1.271-2.224-1.271-2.224s-0.424-0.989-0.706-1.554
                        c-0.283-0.565-0.424-0.706-1.624-3.248c-1.201-2.542-0.6-1.801-0.671-2.366c-0.071-0.565-0.523-0.589-0.876-0.907
                        c0.099-0.044,0.257-0.116,0.433-0.196c-8.502,3.841-18.61,7.566-18.61,7.566s-23.092,7.697-37.074,7.379
                        c-0.202-0.025-0.384-0.018-0.577-0.028c-6.287-0.323-7.897,7.231-7.897,7.231s-0.247,5.227-6.214,7.733
                        c-2.624,1.559-3.496,5.967-3.496,5.967s-3.99,15.712-9.851,21.149l-4.696,18.113c0,0-3.178,7.733-6.038,8.474
                        c-2.86,0.741-17.266,12.287-19.067,13.135c-1.801,0.847-7.521,1.165-7.521,1.165s-7.733,10.063-11.334,8.156l-5.014,7.027
                        c0,0,4.237,9.04-6.779,19.35l-2.542,12.429l-4.237,5.791c0,0-5.226,12.005-2.825,19.067v9.886c0,0-4.433,7.809-3.32,11.725
                        c0.06,0.039,0.423,0.296,0.762,0.944c0.37,0.706,0.739,0.635,1.183,0.989c0.444,0.353,0.37,0.212,1.109,0.282
                        c0.739,0.071,1.183-0.494,3.252-0.141c2.07,0.353,2.07,1.836,3.031,2.754c0.961,0.918,1.183,1.483,1.626,2.683
                        c0.444,1.201,0.591,1.201,0.665,1.907c0.074,0.706,0.518,0.424,1.109,0.989c0.591,0.565,0.665,0.141,1.331,0.282
                        c0.665,0.141,0.813,0.212,1.035,0.353c0.222,0.141,1.109,0.071,1.552-0.424c0.443-0.494,1.035-0.353,3.03-1.201
                        c1.996-0.847,1.257-0.424,2.365-0.847s1.626,0.282,2.735,0.212c1.109-0.07,0.591,0,0.887-0.141
                        c0.296-0.141,0.887-0.071,2.439-0.283c1.552-0.212,0.739,0.141,1.33,0.141c0.591,0,2.439-0.353,2.883-0.777
                        c0.443-0.424,1.035-0.847,1.7-1.059c0.665-0.212,3.4-0.141,3.991-0.141c0.591,0,1.7,0.141,1.922,0.141
                        c0.222,0,3.77,1.201,4.656,1.412c0.887,0.212,1.848,0.918,2.513,1.13c0.665,0.212,1.7,0.777,2.809,0.989
                        c1.109,0.212,2.217,0.353,4.805,0.706c2.587,0.353,1.996,0.353,2.956,0.58c0.961,0.227,3.326,0.197,4.065,0
                        c0.739-0.197,6.504-2.133,7.096-2.416c0.591-0.283,3.178-0.494,5.174-1.13c1.996-0.635,1.33-0.635,1.922-1.059
                        c0.591-0.424,4.804-0.141,5.396-0.141s5.543,0.071,5.543,0.071s4.435,0.071,7.317,0.071c2.883,0,4.509,1.341,4.509,1.341
                        s4.139,1.695,5.174,2.119c1.035,0.424,1.035,0.424,1.922,0.877c0.887,0.453,0.591,0.253,6.504-0.03
                        c2.221-0.106,3.003-0.113,3.176-0.087c1.245-0.39,3.181-1.89,3.181-1.89l22.757,0.076l0.25-80.256l162.702-0.635L497.202,624.474z"
                        />
                      <path fill="#CFCFD3" d="M436.997,454.447c-0.031,0.036-0.052,0.062-0.082,0.097c0.028-0.033,0.056-0.065,0.084-0.097
                        C436.998,454.447,436.998,454.446,436.997,454.447z"/>
                      <path fill="#CFCFD3" d="M436.103,455.507C436.103,455.507,436.103,455.507,436.103,455.507c0.024-0.028,0.048-0.057,0.072-0.086
                        C436.153,455.447,436.123,455.483,436.103,455.507z"/>
                      <path fill="#CFCFD3" d="M605.064,462.871c-0.179,0.129-0.374,0.292-0.578,0.499C604.653,463.187,604.846,463.02,605.064,462.871z"
                        />
                      <path fill="#CFCFD3" d="M352.097,541.372c0.038,0.074,0.058,0.127,0.058,0.127S352.135,541.447,352.097,541.372z"/>
                      <path fill="#8D83C6" d="M491.306,609.398c-1.271-2.083-10.522-14.018-10.522-14.018s0.353,0.283-0.883-1.165
                        c-1.236-1.448-0.247-0.459-1.412-1.766c-1.165-1.306-1.271-1.165-2.189-2.613c-0.918-1.448-2.154-2.896-2.154-2.896
                        s1.977-0.07-1.024-0.671c-3.001-0.6-3.707-0.071-3.707-0.071s-1.483,0.565-1.942,0.847c-0.459,0.282-1.165,0.565-1.165,0.565
                        s-1.412,0.565-2.048,0.636c-0.635,0.071-1.412,0.035-1.765,0.106c-0.353,0.07-0.177,0.035-1.412-0.035
                        c-1.236-0.071-2.189-0.742-3.001-0.671c-0.812,0.07-2.083,0.07-2.083,0.07s-0.212,0.035-1.448-0.741
                        c-1.236-0.777-2.189-1.165-2.366-1.448c-0.177-0.283-0.777-0.706-1.2-1.271c-0.424-0.565-0.389,1.2-2.119-1.871
                        c-1.73-3.072-1.765-3.072-1.942-3.284c-0.177-0.212-1.306-0.953-1.306-0.953s-2.083-0.918-2.154-1.024
                        c-0.07-0.106-0.706-0.636-1.13-0.636s-2.401,0.071-2.401,0.071l-3.46-0.424c0,0-3.001-0.847-3.319-1.448
                        c-0.318-0.6-0.883-1.059-1.095-1.201c-0.212-0.141-2.719-2.401-3.107-2.86c-0.388-0.459-2.472-1.765-2.577-1.871
                        c-0.106-0.106-0.635-0.777-1.377-1.059c-0.742-0.283-3.248-1.271-3.919-1.271c-0.671,0-2.789-0.424-3.707-0.247
                        c-0.918,0.177-3.919,0.177-3.919,0.177s-2.401,0.106-3.036,0.141c-0.636,0.035-0.989,0-1.377-0.106
                        c-0.388-0.106,0.847,0.035-0.742-0.353c-1.589-0.388-3.778-0.247-5.438-0.212c-1.66,0.035-3.036-0.424-3.919,0
                        c-0.883,0.424-1.942,0.636-3.566,0.883c-1.624,0.247-3.601,0.141-4.555,0.141s-2.118-0.106-3.072,0.035
                        c-0.953,0.141,0.106-0.212-2.754,0.247c-2.86,0.459-3.037,0.388-3.46,0.459c-0.424,0.071-1.412-0.071-1.412-0.071l-4.025-1.589
                        c0,0-1.73-0.424-3.249-0.671c-1.518-0.247-2.754-1.412-3.919-1.271c-1.165,0.141-1.342,0.353-2.154,0.318
                        c-0.812-0.035-1.907-0.212-2.013-0.212c-0.106,0-0.459,0.071-0.741-0.035c-0.282-0.106-0.671-0.494-1.165-1.377
                        s-1.624-1.977-1.765-2.825c-0.141-0.847-2.507-3.884-2.542-4.378c-0.035-0.494-0.883-2.578-0.989-2.86
                        c-0.106-0.282-2.472-4.272-2.577-4.484c-0.106-0.212-0.812-1.553-1.059-1.871c-0.247-0.318-1.094-1.942-1.094-1.942l-0.671-2.825
                        l-2.395,0.152c0.353,0.318,0.806,0.342,0.876,0.907c0.071,0.565-0.53-0.177,0.671,2.366c1.201,2.542,1.342,2.683,1.624,3.248
                        c0.282,0.565,0.706,1.554,0.706,1.554s0.847,0.989,1.271,2.224c0.424,1.236,1.095,1.942,1.448,2.895
                        c0.353,0.953,0.176,0.883,1.13,2.895c0.953,2.013,1.836,3.496,1.836,3.496s1.13,2.013,1.412,2.33
                        c0.283,0.318,1.907,2.366,1.907,2.366l2.895,0.035c0,0-0.283-0.459,1.094-0.212c1.377,0.247,1.872,0.035,2.613,0.318
                        c0.741,0.282,1.095,0.6,2.33,0.847c1.236,0.247,2.648,0.883,2.648,0.883s0.636-0.282,2.154,0.212
                        c1.518,0.494,1.695,0.459,2.401,0.706c0.706,0.247,0.141,0.247,1.448,0.565c1.306,0.318,3.496-0.283,4.237-0.353
                        c0.742-0.07,0.742,0.318,2.719-0.212c1.977-0.53,4.237-0.989,4.555-0.989c0.318,0,3.037-0.035,3.037-0.035l2.825-0.071
                        c0,0,1.765-0.318,2.224-0.353c0.459-0.035,4.978-0.212,4.978-0.212s1.765-0.388,2.578-0.071c0.812,0.318,0.812,0.282,0.953,0.388
                        c0.141,0.106-0.283,0.07,0.883,0.53c1.165,0.459,3.955,0.635,3.955,0.635s1.836-0.565,2.436-0.635
                        c0.6-0.071,2.507-0.035,3.178-0.035c0.671,0,0.812-0.071,2.012,0.106c1.201,0.177,2.225,0.706,2.225,0.706l2.083,1.095l1.13,0.989
                        c0,0,4.59,4.696,4.837,4.696c0.247,0,1.236,0,1.412,0.141c0.177,0.141,0,0.247,1.13,1.024c1.13,0.777,0.741,0.812,1.977,1.13
                        c1.236,0.318,2.295,0.494,2.295,0.494l3.531,0.071l1.66-0.035c0,0,0.6-0.071,1.13,0.565c0.53,0.636,1.271,1.554,1.448,1.801
                        c0.177,0.247,0.071,0.247,0.636,1.095c0.565,0.847,5.296,5.72,5.473,5.79c0.177,0.071,0.706,0.494,1.271,0.636
                        c0.565,0.141,1.271,0.247,1.73,0.494c0.459,0.247,0.494,0.6,1.342,0.635c0.848,0.035,1.13,0.247,2.224,0.247s2.26,0.353,2.26,0.353
                        s0.212,0,1.2,0.247c0.989,0.247,1.907,0.318,2.331,0.318c0.424,0,4.202-1.942,4.872-1.977c0.671-0.035,0.353-0.212,1.377-0.141
                        c1.024,0.07,1.624,0.141,1.624,0.141c0.883,0.353,2.013,1.271,2.013,1.271l0.989,1.024c0,0,0.283,0.388,0.565,0.847
                        c0.282,0.459,0.353,0.494,0.847,1.236c0.494,0.742-0.035,0.353,0.883,1.448c0.918,1.094,13.064,17.089,13.064,17.089
                        s0.247,0.141,0.777,0.282c0.53,0.141,1.412,0.494,1.412,0.494s0.671,0.141,1.518,0.565c0.847,0.424,1.059,0.6,1.73,0.812
                        c0.671,0.212,0.178-0.11,0.918,0.247c0.403,0.195,0.418,0.192,0.418,0.192l-0.012-1.749c-0.001,0-4.36-1.303-4.713-1.726
                        C492.048,610.104,492.578,611.481,491.306,609.398z"/>
                      <path fill="#CFCFD3" d="M352.097,541.372c-0.115-0.227-0.391-0.661-0.737-0.448C351.725,540.757,351.987,541.157,352.097,541.372z"
                        />
                      <path fill="#CFCFD3" d="M350.66,541.244c-0.155,0.071-0.31,0.141-0.467,0.212c-0.176,0.08-0.334,0.151-0.433,0.196
                        c0.292-0.131,1.141-0.445,1.6-0.727C351.136,541.027,350.894,541.138,350.66,541.244z"/>
                      <path fill="#CFCFD3" d="M352.097,541.372c-0.111-0.216-0.372-0.615-0.737-0.448c-0.459,0.282-1.308,0.596-1.6,0.727l2.395-0.152
                        C352.155,541.499,352.135,541.447,352.097,541.372z"/>
                      <path fill="#8D83C6" d="M437.933,458.835c-0.477,0.583-1.298,0.212-0.98,1.615c0.318,1.403-0.371,0.609,0.503,1.721
                        c0.874,1.112,0.344,1.615,1.509,1.245c1.165-0.371,2.33-0.927,2.463-1.165c0.132-0.238,0.953-1.615,0.741-0.583
                        c-0.212,1.033-0.98,0.133-0.424,1.589c0.556,1.456,0.662,1.668,0.662,1.668s-0.291,0.397,0.847,1.006
                        c1.139,0.609,2.78,1.854,3.204,1.854c0.424,0,0.397,0.238,1.562-0.424c1.165-0.662,1.059-0.371,2.039-1.033
                        c0.98-0.662-0.132-3.204,1.218-0.768c1.351,2.436,0.98,2.304,1.748,2.807c0.768,0.503-0.132,1.748,1.165,0.662
                        c1.298-1.086,1.483-2.331,1.986-2.516c0.503-0.186,0.874-0.027,1.271-0.397c0.397-0.371,0.053-1.933,1.059-0.662
                        c1.006,1.271,0.953,1.536,1.483,1.695c0.53,0.159,1.642,0.265,1.907,0.106c0.265-0.159-0.212-1.165,0.503-0.609
                        c0.715,0.556,0.927,0.556,0.927,0.556l1.033-0.212c0,0,1.827-1.589,2.225-1.96c0.397-0.371,0.98-0.715,0.98-0.715
                        s0.265-0.874,0.874-0.477c0.609,0.397,0.185,0.079,0.953,0.583c0.768,0.503,0.132,0.185,1.006,0.662
                        c0.874,0.477,0.689,0.132,1.218,0.609c0.53,0.477,0.503,0.026,1.139,0.847c0.636,0.821,0.424,0.53,0.98,1.324
                        c0.556,0.795,0.318,0.106,0.821,1.404c0.503,1.298,0.794,2.171,0.794,2.171l-0.026,2.278c0,0,0.371,0.53,0.45,1.086
                        c0.079,0.556-0.265,0.662,0,1.112c0.265,0.45,0.185,0.344,0.715,1.324c0.53,0.98,0.583,0.742,0.715,1.404
                        c0.132,0.662,0.265,1.589,0.265,1.589l0.265,0.503c0,0-0.503,0.715-0.821,1.006c-0.318,0.291-2.119,1.933-2.119,1.933
                        s-0.159,0.265-0.132,0.98c0.026,0.715,0.026,0.847,0.026,0.847s-0.238-0.53-0.53-0.662c-0.291-0.132,0.106-0.742-0.609-0.265
                        c-0.715,0.477-1.112,0.689-1.483,1.059c-0.371,0.371-0.768,0.397-0.768,0.715c0,0.318,0.397,0.715,0.371,1.139
                        c-0.026,0.424-0.159,1.059-0.344,1.271c-0.185,0.212-0.291,0.079-0.371,0.662c-0.079,0.583-0.212,0.583,0.053,0.901
                        c0.265,0.318,0.212,0.741,0.689,0.821c0.477,0.08,1.139,0.583,0.953,0.848c-0.185,0.265-0.609,0.212-0.583,0.847
                        c0.026,0.636-0.079,0.609,0.371,1.033c0.45,0.424-1.218,0.265,0.609,0.768c1.827,0.503,1.88,0.318,2.198,0.477
                        c0.318,0.159,0.582,0.186,0.582,0.318c0,0.132-0.344,0.371-0.689,0.953c-0.344,0.582-0.291,0.397-0.477,0.9
                        c-0.185,0.503-0.344,0.424-0.185,1.245c0.159,0.821-0.053,0.212,0.238,1.483c0.291,1.271-0.212,0.688,0.477,1.589
                        c0.689,0.9,0.53,0.821,1.165,1.351c0.635,0.53,1.086,0.689,1.245,0.821c0.159,0.132,0.477,0.185,0.609,0.291
                        c0.132,0.106-0.53,0.53-0.185,0.9c0.344,0.371,0-0.212,0.583,0.741c0.582,0.953,0.715,1.165,1.324,1.562
                        c0.609,0.397,1.668,0.525,2.224,0.818c0.556,0.294,0.9-0.13,1.377,0.506c0.477,0.636,0.318,0.424,0.742,1.457
                        c0.424,1.033,0.185,0.424,0.53,1.615c0.344,1.192,0.133,1.324,0.45,1.96c0.318,0.635,0.689,1.086,0.689,1.086
                        s0.132,0.503,0.609,0.927c0.477,0.424,1.43,0.556,1.668,1.139c0.238,0.583-0.344-0.106,0.503,1.059
                        c0.847,1.165,1.112,1.377,2.013,2.436c0.9,1.059,0.609,0.503,1.112,1.642c0.503,1.139,0.715,0.794,1.112,1.642
                        c0.397,0.847,2.567,2.895,3.547,3.955l-0.019-2.648c-0.159-0.397-3.82-4.855-4.27-5.438c-0.45-0.583-1.297-1.218-1.456-1.536
                        c-0.159-0.318-0.185,0.053-0.689-1.165c-0.503-1.218-1.536-2.701-1.827-2.86c-0.291-0.159-0.9-0.9-0.953-1.059
                        c-0.053-0.159-0.477-0.583-0.477-0.794c0-0.212-0.318-2.357-0.477-2.595c-0.159-0.238-0.688-0.741-1.033-1.086
                        s-1.668-1.324-1.854-1.404c-0.185-0.08-1.695-0.344-2.304-0.98c-0.609-0.635-0.927-0.715-0.927-0.794s-0.053-0.636,0-1.112
                        c0.053-0.477,0.927-0.953-0.132-1.456c-1.059-0.503-1.404-0.503-1.774-0.556c-0.371-0.053-0.874-0.583-1.139-0.98
                        c-0.265-0.397-0.45-0.583-0.635-0.9c-0.185-0.318,0.053-2.648,0.212-3.045c0.159-0.397,0.53-0.609,0.689-1.033
                        c0.159-0.423,0.424-0.662,0.132-1.351c-0.291-0.688-0.079-0.768-0.477-1.006c-0.397-0.238-0.133-0.556-1.192-0.556
                        c-1.059,0-1.562,0-1.562,0s-0.556,0.079-0.344-0.609c0.212-0.688-0.159-0.238,0.291-0.821c0.45-0.583,0.344-1.509,0.238-1.562
                        c-0.106-0.053-0.079-0.159-0.291-0.212c-0.212-0.053-0.238-0.106-0.424-0.159c-0.185-0.053-0.185-0.079-0.45-0.079
                        c-0.265,0-0.397-0.027-0.397-0.027s-0.318,0,0.106-0.742c0.424-0.742-0.53-0.53,0.424-0.9c0.953-0.371,1.695-0.371,2.198-0.583
                        c0.503-0.212,0.053,0.079,1.192-0.927c1.139-1.006,0.583-1.933,0.583-1.933s0.053-0.079-0.292-0.212
                        c-0.344-0.132-2.939,0.768-0.582-0.291c2.357-1.059,2.887-0.98,2.887-1.298c0-0.318-0.133-0.688,0.053-0.953
                        c0.186-0.265,0.53,0.106,0.318-0.53c-0.212-0.636-0.371-1.059-0.53-1.351c-0.159-0.291-0.477-1.086-0.477-1.086l0.106-1.006
                        c0,0,0.053-0.053-0.397-0.821c-0.45-0.768-0.53-0.9-0.715-1.298c-0.185-0.397-0.159,1.298-0.45-1.033
                        c-0.291-2.331-0.397-3.072-0.397-3.072l-0.079-0.503l-0.159-1.112c0,0,0.318,0.371-0.212-0.874
                        c-0.53-1.245,0.768,0.132-0.927-1.907c-1.695-2.039-2.569-2.463-2.728-2.648c-0.159-0.185-1.139-1.218-1.748-1.615
                        c-0.609-0.397-0.821-0.662-1.298-0.768c-0.477-0.106-1.615-0.45-1.615-0.45s-1.112,0.291-1.43,0.636
                        c-0.318,0.344-0.583,0.556-1.139,1.245c-0.556,0.688-0.741,0.53-1.245,1.218c-0.503,0.689-0.503,0.689-0.503,0.689
                        s-1.006-0.874-1.245-0.953c-0.238-0.079,0.08-0.477-0.662-0.185c-0.741,0.291-0.847,0.053-1.351,0.424
                        c-0.503,0.371-1.377-0.265-1.642-0.609c-0.265-0.344-0.609-0.768-0.848-1.006c-0.238-0.238,1.298-2.198-0.45-0.371
                        c-1.748,1.827-2.066,2.277-2.066,2.277s0.371,0.953-0.344,0.079c-0.715-0.874-0.9-1.43-1.165-1.43c-0.265,0,0.45-0.397-0.794,0.079
                        c-1.245,0.477-1.404-0.185-1.642-0.238c-0.238-0.053-0.662-0.688-1.059-0.053c-0.397,0.636-1.695,0.768-2.066,0.927
                        c-0.371,0.159-1.35,0.45-1.774,0.715c-0.424,0.265,0,0.821-0.794,0.371s-1.192-0.609-1.483-1.165
                        c-0.291-0.556-0.847-2.701-0.715-2.834c0.132-0.132,0.371-0.636,0.371-0.636s0.344-0.847,0.053-1.456
                        c-0.291-0.609-0.053-0.556-0.609-1.165c-0.556-0.609-0.477-1.298-0.927-0.715c-0.45,0.582-0.318,0.053-0.583,0.768
                        c-0.265,0.715-0.159,0.609-0.265,0.98c-0.015,0.051,0.01,0.071,0.053,0.073c1.048-0.514,0.231,0.013,0,0
                        c-0.185,0.091-0.426,0.213-0.742,0.377c-2.436,1.271-2.807,2.41-2.436,1.271c0.371-1.139,0.662-1.907,0.662-1.907
                        s0.662,0.106,0.344-0.821c-0.318-0.927-0.291-1.086-0.503-1.43c-0.212-0.344-0.794-1.086-0.794-1.086s-1.197-1.812-1.438-1.396
                        c-0.028,0.033-0.056,0.065-0.084,0.097c-0.114,0.133-0.217,0.255-0.315,0.371c-0.076,0.09-0.152,0.18-0.228,0.271
                        c-0.07,0.084-0.139,0.165-0.197,0.236c-0.024,0.029-0.047,0.057-0.071,0.086c0.583,0.9,2.413,2.613,2.333,2.904
                        C438.357,458.703,438.41,458.253,437.933,458.835z"/>
                      <path class="jiha" id="Souss-Massa" fill="#D2DBE0"  d="M608.464,440.625c0,0-0.503-0.265-1.218-0.715c-0.715-0.45-0.715,0.212-0.9,0.265
                        c-0.185,0.053-1.165,0.636-2.013,0.9c-0.847,0.265-0.503,0.318-1.112,0.397c-0.609,0.08-0.424-0.291-0.688-0.715
                        c-0.265-0.424-0.132-0.185-0.424-0.821c-0.291-0.635-0.185-0.503-0.424-1.006c-0.238-0.503,0,0,0-1.774
                        c0-1.774,0.079-0.397,0.132-1.059c0.053-0.662,0-0.662-0.027-0.874c-0.026-0.212-0.291-1.351-0.477-2.065
                        c-0.185-0.715-0.132-0.503-0.371-0.953c-0.238-0.45-0.953-0.901-0.953-0.901s-0.238-0.529-0.53-1.695
                        c-0.291-1.165-0.106-0.424-0.159-1.218c-0.053-0.794,0.212-0.318,0.45-0.529c0.238-0.212,0.371-0.265,0.847-0.609
                        c0.477-0.344,0.265-0.185,0.874-1.192c0.609-1.006-0.053-0.424-0.344-0.583c-0.292-0.159,0,0,0-0.079
                        c0-0.08,2.622-1.377,2.622-1.377s0.265-0.238,0.132-0.477c-0.132-0.238-0.212-0.397-0.371-0.794
                        c-0.159-0.397-0.212-0.185-1.51-1.006c-1.297-0.821-0.397-0.212-0.874-0.424c-0.477-0.212-0.609-0.291-1.748-0.742
                        c-1.139-0.45-0.477,0.026-1.51-0.556c-1.033-0.583-0.291-0.318-0.583-0.9c-0.291-0.583,0-0.795-0.079-1.669
                        c-0.079-0.874-0.794-0.794-1.218-0.953c-0.424-0.159-0.212-0.053-1.748,0.503c-1.536,0.556-1.298,0.318-1.298,0.318l-2.224,1.006
                        c0,0-0.45,0.106-0.741,0.132c-0.291,0.027-0.901-0.265-0.901-0.265s0.08,0.238,0.185,0.742c0.106,0.503-0.053,1.059-0.053,1.059
                        s0.185,0.689-0.053,3.072c-0.238,2.383-0.238,0.08-0.318,0.08c-0.08,0-2.277,0.132-2.781,0.185c-0.503,0.053-2.172-0.9-2.251-0.847
                        c-0.08,0.053-1.271,0.397-1.774,0.688c-0.503,0.292-2.224,0.874-3.257,0.953c-1.033,0.079-0.318-0.212-0.371-0.742
                        c-0.053-0.529,0-1.059-0.45-1.748c-0.45-0.688-0.715-0.477-1.033-0.662c-0.318-0.185-0.953-0.344-1.351-0.636
                        c-0.397-0.291-2.648-1.324-2.648-1.324s0.053,0.397,0.079,1.033c0.026,0.636-0.265,0.821-0.662,1.483
                        c-0.397,0.662-0.344,0.635-0.689,1.324c-0.344,0.689-0.132,0.503-0.318,1.271c-0.185,0.768-0.318,1.086-0.318,1.086
                        s0.026-0.583-0.874,0.9c-0.9,1.483-0.371,0.424-0.371,0.424s0,0-0.635,0.371c-0.635,0.371-0.424,0.318-0.424,0.318l-0.291,0.344
                        c0,0-0.265,4.555-0.132,6.038c0.132,1.483-0.397,0.344-0.609,0.503c-0.212,0.159-0.318,0.185-0.847,0
                        c-0.53-0.185-0.821-0.45-1.086-0.742c-0.265-0.291,0,0-1.006-0.9c-1.006-0.9-0.503-0.821-0.847-1.298
                        c-0.344-0.477-0.636-0.688-0.741-0.821c-0.106-0.132-2.94-0.185-3.151-0.371c-0.212-0.185-0.185-0.159-0.556-0.53
                        c-0.371-0.371-0.477-0.185-0.583-0.185c-0.106,0-1.165-0.265-1.165-0.265s-0.371-0.026-1.377-0.43
                        c-1.006-0.404-0.371-0.046-1.562-0.02c-1.192,0.026-0.847,0.026-1.801,0c-0.953-0.026-0.503,0.106-1.615-0.424
                        c-1.112-0.53-0.503-0.291-0.689-0.715c-0.185-0.424,0.133-0.556,0.238-0.768c0.106-0.212,0.662-0.583,1.562-1.51
                        c0.9-0.927,0.874-0.9,0.98-1.271c0.106-0.371-0.265-0.794-0.715-1.801c-0.45-1.006-0.159-0.45-0.397-0.874
                        c-0.238-0.424-0.662-2.065-0.741-2.119c-0.079-0.053-0.132,0.053-0.45,0.265c-0.318,0.212-0.185,0.344-0.344,0.98
                        c-0.159,0.635-0.238,0-1.43-0.371c-1.192-0.371-0.318-0.106-0.397-0.159c-0.079-0.053-0.477-3.072-0.477-3.072v-1.165
                        c0,0,0-0.159,0.371-0.98c0.371-0.821,0.556-0.503,1.139-1.112c0.583-0.609,0.212-0.212,0.45-0.397
                        c0.238-0.185,0.344-0.053,2.092-0.238c1.748-0.185,0.265-0.079,0.689-0.662c0.424-0.583,0.106-0.185,0.556-0.874
                        c0.45-0.689,0.371-0.371,0.556-0.45c0.186-0.079,0.344-0.344,0.477-0.503c0.132-0.159,2.145-0.953,2.092-1.271
                        c-0.053-0.318-0.132-0.9-1.006-3.019c-0.874-2.118-0.503-0.397-1.059-1.456c-0.556-1.059,0.079-0.794-0.106-1.536
                        c-0.185-0.742-0.132-0.927-0.238-1.615c-0.106-0.689,0.027-0.503-1.059-0.9c-1.086-0.397-0.742,0.159-1.245,0.238
                        c-0.503,0.079-0.583-0.185-1.324-0.291c-0.741-0.106-0.238-0.133-1.721-0.662c-1.483-0.529-0.265,0.212-2.225,0.133
                        c-1.96-0.08-0.212-0.927-0.583-1.51c-0.371-0.583,0.901-0.556,0.98-0.715c0.079-0.159,0.132-0.185,0.291-0.432
                        c0.159-0.246,0.132,0.061,0.768-0.284c0.636-0.344,0.424-0.079,0.768-0.053c0.344,0.026,0.741,0.318,0.741,0.318
                        s0.265,0.159,0.821-0.45c0.556-0.609,0.133-0.45,0.185-0.742c0.053-0.291,0,0,0.08-0.874c0.039-0.432,0.052-0.546,0.056-0.571
                        c-0.001,0.005-0.003,0.004-0.003-0.038c0-0.159,0.265-0.477,0.53-0.741c0.265-0.265-0.344,0.053-0.794,0.026
                        c-0.45-0.026-0.265,0.133-1.271-0.344c-1.006-0.477-0.45-0.609-0.45-0.609s-0.026-0.159-0.344-0.927
                        c-0.318-0.768-0.132-0.424-0.45-1.086c-0.318-0.662-0.106-0.477-0.133-1.298c-0.026-0.821,0.106-0.238,0.212-0.662
                        c0.106-0.424,0.053-0.397,0.132-1.218c0.08-0.821,0.053-0.556,0.026-1.377c-0.026-0.821-0.079-0.291-0.132-0.794
                        c-0.053-0.503,0.53-0.741,1.033-1.324c0.503-0.583-0.106-0.318-0.397-0.768c-0.291-0.45-0.397-0.027-0.53,0
                        c-0.132,0.026-1.589-1.086-1.695-1.907c-0.106-0.821-0.132-0.688-0.132-0.688s0.079-0.556,0.185-0.768
                        c0.106-0.212,0.238-0.397,0.212-0.98c-0.026-0.583,0.132-1.059,0.662-1.907c0.53-0.847-0.424-0.053-0.874,0.265
                        c-0.45,0.318-0.688,0.503-1.006,0.768c-0.318,0.265-0.291,0.291-1.377,1.006c-1.086,0.715-0.344,0.159-1.006,0.794
                        c-0.662,0.636-1.245,0.53-1.324,0.715s-0.53,0.424-0.847,0.742c-0.318,0.318-1.006,1.006-1.006,1.006s-0.715,0.715-0.9,1.033
                        c-0.185,0.318-0.344,0.662-0.556,1.033c-0.212,0.371-0.265,0.503-0.53,1.139c-0.265,0.635,0,0.556,0.053,1.351
                        c0.053,0.794-0.318,1.165-0.397,1.827c-0.079,0.662-0.45,0.583-1.192,1.218c-0.742,0.635-0.318,0.768-0.397,1.351
                        c-0.079,0.582-0.768,0-1.986-0.583c-1.218-0.583-1.006-0.159-1.986-0.477c-0.98-0.318-0.609-0.079-1.562-0.265
                        c-0.953-0.185-1.059-0.662-1.271-0.821c-0.212-0.159-1.033,0-1.669,0.477c-0.636,0.477-0.318,0.344-1.562,0.212
                        c-1.245-0.132-0.424,0.132-1.245,0.689c-0.821,0.556-0.635,0.371-1.324,0.98c-0.688,0.609-0.53-0.106-1.933-0.053
                        c-1.403,0.053-1.298,1.457-3.548,1.589c-2.251,0.132-1.192-0.477-1.43-0.556c-0.238-0.08-0.662-0.609-1.245-0.265
                        c-0.582,0.344-0.741,0.689-1.245,0.715c-0.503,0.026-0.159-0.212-1.483-1.139c-1.324-0.927-0.344,0.689-0.635,0.953
                        c-0.292,0.265-0.715-0.026-2.172-0.874c-1.457-0.847-0.53-0.344-1.298-0.953c-0.768-0.609-0.371,0.027-1.086,0.212
                        c-0.715,0.185-2.145,0.635-2.41,0.635c-0.265,0-1.854,0.424-2.33,0.689c-0.477,0.265-0.106,0.927-0.106,1.35
                        s-0.768,0.397-0.768,0.397s-0.344,0.185-1.086-0.027c-0.741-0.212-0.344-0.371-1.748-2.781c-1.404-2.41,0.45-0.53,0.609-0.768
                        c0.159-0.238,0.424-0.662,0.503-1.192c0.079-0.53-0.424-0.53-1.086-1.748c-0.662-1.218-1.404-1.112-1.88-1.112
                        c-0.477,0-0.662,0.291-1.059,0.556c-0.397,0.265-0.583,0.609-1.033,1.139c-0.45,0.529-0.609,0.424-1.245,0.953
                        c-0.635,0.529-0.821,0.238-2.41,0.477c-1.589,0.238-0.212,1.086-0.265,1.562c-0.053,0.477-0.133,0.583-0.503,1.642
                        c-0.371,1.059-0.159,0.98-0.318,1.086c-0.159,0.106-0.847,0.265-1.774,0.265s-0.662-0.027-2.092-0.689
                        c-1.43-0.662-0.582,0.026-1.191,0.265c-0.609,0.238-1.483,0.106-2.277,0.291c-0.794,0.185-0.53-0.185-0.53-0.185
                        s-1.562-0.212-1.298,0.344c0.265,0.556-1.245,0.556-1.509,0.636c-0.265,0.079-2.648,0.556-2.86,0.185
                        c-0.212-0.371-0.583-1.139-1.059-1.536c-0.477-0.397-0.45-0.477-1.403-2.092c-0.953-1.615-0.265-0.132-0.397-0.079
                        c-0.132,0.053-0.688,0.318-0.688,0.318s-0.662,0-2.251-0.688c-1.589-0.689-0.159,0.212-0.45,0.45
                        c-0.291,0.238-0.874,0.98-1.351,1.271c-0.477,0.291-1.589-0.265-1.589-0.265s-0.794-0.133-1.218-0.477
                        c-0.424-0.344-0.318-0.238-2.383-1.695c-2.065-1.456-0.503-0.318-0.503-0.318s-0.291,0.556-0.821,1.271
                        c-0.53,0.715-0.079,0.212-1.615,0.583c-1.536,0.371-0.106,0.265-0.133,0.45c-0.026,0.185-0.079,0.529-0.397,1.43
                        c-0.318,0.901-0.768,1.642-2.834,1.642c-2.066,0-0.742,0.026-2.013-0.027c-1.271-0.053-0.556-0.503-1.033-1.245
                        c-0.477-0.742-0.238-0.477-0.53-1.351c-0.291-0.874-0.238-0.794-0.344-1.668c-0.106-0.874-0.318-0.847-0.636-1.51
                        c-0.318-0.662,0.185-0.768-0.318-1.245c-0.503-0.477-0.715-0.768-0.53-1.086c0.186-0.318-1.88-1.668-1.88-1.96
                        c0-0.291-1.695-1.245-2.383-1.456c-0.688-0.212-3.539-2.198-3.618-2.648c-0.08-0.45-2.805-1.559-2.806-1.638
                        c0.056,0.959,0.097,2.002,0.024,2.185c-0.141,0.353-1.694,1.907-1.13,3.037c0.565,1.13,0.706,5.014,0.706,5.014l0.212,2.542
                        c0,0-3.213,6.391-3.266,6.55c-0.053,0.159-0.318,3.231-0.318,3.231l0.477,1.43h4.184l8.633,12.287c0,0,3.213-1.183-2.436,18.307
                        l-5.649,13.417c0,0-3.156,3.157-6.302,6.831c0.241-0.416,1.438,1.396,1.438,1.396s0.583,0.741,0.794,1.086
                        c0.212,0.344,0.185,0.503,0.503,1.43c0.318,0.927-0.344,0.821-0.344,0.821s-0.291,0.768-0.662,1.907c-0.371,1.139,0,0,2.436-1.271
                        c0.315-0.164,0.557-0.286,0.742-0.377c-0.043-0.002-0.068-0.022-0.053-0.073c0.106-0.371,0-0.265,0.265-0.98
                        c0.265-0.715,0.132-0.185,0.583-0.768c0.45-0.583,0.371,0.106,0.927,0.715c0.556,0.609,0.318,0.556,0.609,1.165
                        c0.291,0.609-0.053,1.456-0.053,1.456s-0.238,0.503-0.371,0.636c-0.132,0.132,0.424,2.277,0.715,2.833
                        c0.291,0.556,0.689,0.715,1.483,1.165c0.794,0.45,0.371-0.106,0.794-0.371c0.424-0.265,1.404-0.556,1.774-0.715
                        c0.371-0.159,1.669-0.291,2.066-0.927c0.397-0.635,0.821,0,1.059,0.053c0.238,0.053,0.397,0.715,1.642,0.238
                        c1.245-0.477,0.53-0.079,0.794-0.079c0.265,0,0.45,0.556,1.165,1.43c0.715,0.874,0.344-0.079,0.344-0.079s0.318-0.45,2.066-2.277
                        c1.748-1.827,0.212,0.132,0.45,0.371s0.583,0.662,0.847,1.006c0.265,0.344,1.139,0.98,1.642,0.609
                        c0.503-0.371,0.609-0.132,1.351-0.424c0.742-0.291,0.424,0.106,0.662,0.185c0.238,0.079,1.245,0.953,1.245,0.953s0,0,0.503-0.689
                        c0.503-0.688,0.688-0.53,1.245-1.218c0.556-0.689,0.821-0.9,1.139-1.245c0.318-0.344,1.43-0.636,1.43-0.636s1.139,0.344,1.616,0.45
                        c0.477,0.106,0.689,0.371,1.298,0.768c0.609,0.397,1.589,1.43,1.748,1.615c0.159,0.185,1.033,0.609,2.728,2.648
                        c1.695,2.039,0.397,0.662,0.927,1.907c0.53,1.245,0.212,0.874,0.212,0.874l0.159,1.112l0.079,0.503c0,0,0.106,0.741,0.397,3.072
                        c0.291,2.33,0.265,0.636,0.45,1.033c0.185,0.397,0.265,0.53,0.715,1.298c0.45,0.768,0.397,0.821,0.397,0.821l-0.106,1.006
                        c0,0,0.318,0.794,0.477,1.086c0.159,0.291,0.318,0.715,0.53,1.351c0.212,0.636-0.132,0.265-0.318,0.53
                        c-0.185,0.265-0.053,0.636-0.053,0.953c0,0.318-0.53,0.238-2.887,1.298c-2.357,1.059,0.238,0.159,0.583,0.291
                        c0.344,0.133,0.292,0.212,0.292,0.212s0.556,0.927-0.583,1.933c-1.139,1.006-0.689,0.715-1.192,0.927
                        c-0.503,0.212-1.245,0.212-2.198,0.583c-0.953,0.371,0,0.159-0.424,0.9c-0.424,0.742-0.106,0.742-0.106,0.742
                        s0.133,0.026,0.397,0.026c0.265,0,0.265,0.026,0.45,0.079c0.185,0.053,0.212,0.106,0.424,0.159
                        c0.212,0.053,0.185,0.159,0.291,0.212c0.106,0.053,0.212,0.98-0.238,1.562c-0.45,0.583-0.08,0.133-0.291,0.821
                        c-0.212,0.689,0.344,0.609,0.344,0.609s0.503,0,1.562,0c1.059,0,0.794,0.318,1.192,0.556c0.397,0.238,0.185,0.318,0.477,1.006
                        c0.291,0.689,0.026,0.927-0.132,1.351c-0.159,0.424-0.53,0.635-0.689,1.033c-0.159,0.397-0.397,2.728-0.212,3.045
                        c0.185,0.318,0.371,0.503,0.635,0.9c0.265,0.397,0.768,0.927,1.139,0.98c0.371,0.053,0.715,0.053,1.774,0.556
                        c1.059,0.503,0.185,0.98,0.132,1.456s0,1.033,0,1.112s0.318,0.159,0.927,0.794c0.609,0.636,2.119,0.9,2.304,0.98
                        c0.185,0.079,1.509,1.059,1.854,1.404s0.874,0.847,1.033,1.086c0.159,0.238,0.477,2.383,0.477,2.595
                        c0,0.212,0.424,0.635,0.477,0.794c0.053,0.159,0.662,0.901,0.953,1.059c0.291,0.159,1.324,1.642,1.827,2.86
                        c0.503,1.218,0.53,0.847,0.689,1.165c0.159,0.318,1.006,0.953,1.456,1.536c0.45,0.583,4.111,5.04,4.27,5.438l0,0l-0.086-11.996
                        l11.298-5.855l14.971-12.223l11.581-8.333l13.275-8.333l-0.282-3.248l9.321-1.413c0,0,5.933-0.706,6.497-1.836
                        c0.564-1.13,9.463-7.203,14.83-5.932c5.367,1.271,10.31,1.836,10.31,1.836s2.543,1.13,4.944-1.13
                        c2.401-2.26,8.332,0.989,11.157-2.825c0.054-0.072,0.118-0.137,0.18-0.205c-0.016,0.016-0.031,0.029-0.048,0.046
                        c-0.155-0.061-0.441-2.799-0.229-4.017c0.127-0.732,0.12-0.764,0.107-0.715c0.03-0.237-0.296-1.408-0.451-1.536
                        c-0.159-0.132,0,0-0.371-0.503c-0.371-0.503-0.185-0.265-0.265-0.847c-0.079-0.583,0.079-0.371,0.238-1.059
                        c0.159-0.688,0-0.344-0.106-0.927c-0.106-0.583,0,0-0.556-0.45c-0.556-0.45-0.026-0.397,0.106-0.953
                        c0.133-0.556,0.212-0.238,0.742-0.662c0.53-0.424,0.238-0.265,0.265-0.53c0.027-0.265-0.026-0.185-0.053-0.742
                        c-0.026-0.556-0.026-0.397-0.291-1.059c-0.265-0.662-0.397-0.768-0.609-0.98c-0.212-0.212,0.159-1.589,0.45-2.119
                        c0.291-0.53,0.238-0.212,0.609-0.583c0.371-0.371,0.291-0.212,0.715-0.688c0.424-0.477,0.768-1.165,1.006-1.483
                        c0.238-0.318,0.635-0.635,1.112-1.059c0.477-0.424,0.662-0.318,1.165-0.689c0.503-0.371,0.079-0.212,0.079-0.874
                        C608.041,440.387,608.464,440.625,608.464,440.625z"/>
                        <path class="jiha" id="Guelmim-Oued-Noun" fill="#D2DBE0" d="M495.56,526.527L495.56,526.527c-1.036-1.056-2.304-2.343-2.598-2.971
                        c-0.397-0.847-0.609-0.503-1.112-1.642c-0.503-1.139-0.212-0.583-1.112-1.642c-0.9-1.059-1.165-1.271-2.013-2.436
                        c-0.847-1.165-0.265-0.477-0.503-1.059c-0.238-0.583-1.192-0.715-1.668-1.139c-0.477-0.424-0.609-0.927-0.609-0.927
                        s-0.371-0.45-0.689-1.086c-0.318-0.635-0.106-0.768-0.45-1.96c-0.344-1.192-0.106-0.583-0.53-1.615
                        c-0.424-1.033-0.265-0.821-0.742-1.457c-0.477-0.635-0.821-0.212-1.377-0.506c-0.556-0.294-1.615-0.421-2.224-0.818
                        c-0.609-0.397-0.742-0.609-1.324-1.562c-0.583-0.953-0.238-0.371-0.583-0.741c-0.344-0.371,0.318-0.794,0.185-0.9
                        c-0.132-0.106-0.45-0.159-0.609-0.291c-0.159-0.133-0.609-0.291-1.245-0.821c-0.636-0.53-0.477-0.45-1.165-1.351
                        c-0.688-0.9-0.185-0.318-0.477-1.589c-0.291-1.271-0.079-0.662-0.238-1.483c-0.159-0.821,0-0.741,0.185-1.245
                        c0.185-0.503,0.132-0.318,0.477-0.9c0.344-0.583,0.689-0.821,0.689-0.953c0-0.132-0.265-0.159-0.583-0.318
                        c-0.318-0.159-0.371,0.026-2.198-0.477c-1.827-0.503-0.159-0.344-0.609-0.768c-0.45-0.424-0.344-0.397-0.371-1.033
                        c-0.026-0.635,0.397-0.583,0.583-0.847c0.185-0.265-0.477-0.768-0.953-0.848c-0.477-0.079-0.424-0.503-0.689-0.821
                        c-0.265-0.318-0.132-0.318-0.053-0.901c0.08-0.583,0.186-0.45,0.371-0.662c0.185-0.212,0.318-0.847,0.344-1.271
                        c0.027-0.424-0.371-0.821-0.371-1.139c0-0.318,0.397-0.344,0.768-0.715c0.371-0.371,0.768-0.583,1.483-1.059
                        c0.715-0.477,0.318,0.133,0.609,0.265c0.291,0.132,0.53,0.662,0.53,0.662s0-0.132-0.026-0.847s0.132-0.98,0.132-0.98
                        s1.801-1.642,2.119-1.933c0.318-0.291,0.821-1.006,0.821-1.006l-0.265-0.503c0,0-0.133-0.927-0.265-1.589
                        c-0.132-0.662-0.185-0.424-0.715-1.404c-0.53-0.98-0.45-0.874-0.715-1.324c-0.265-0.45,0.079-0.556,0-1.112
                        c-0.079-0.556-0.45-1.086-0.45-1.086l0.026-2.278c0,0-0.291-0.874-0.794-2.171c-0.503-1.298-0.265-0.609-0.821-1.404
                        c-0.556-0.794-0.344-0.503-0.98-1.324c-0.635-0.821-0.609-0.371-1.139-0.847c-0.53-0.477-0.344-0.132-1.218-0.609
                        c-0.874-0.477-0.238-0.159-1.006-0.662c-0.768-0.503-0.344-0.185-0.953-0.583c-0.609-0.397-0.874,0.477-0.874,0.477
                        s-0.583,0.344-0.98,0.715c-0.397,0.371-2.224,1.96-2.224,1.96l-1.033,0.212c0,0-0.212,0-0.927-0.556
                        c-0.715-0.556-0.238,0.45-0.503,0.609c-0.265,0.159-1.377,0.053-1.907-0.106c-0.53-0.159-0.477-0.424-1.483-1.695
                        c-1.006-1.271-0.662,0.291-1.059,0.662c-0.397,0.371-0.768,0.212-1.271,0.397c-0.503,0.185-0.689,1.43-1.986,2.516
                        c-1.298,1.086-0.397-0.159-1.165-0.662c-0.768-0.503-0.397-0.371-1.748-2.807c-1.351-2.436-0.238,0.106-1.218,0.768
                        c-0.98,0.662-0.874,0.371-2.039,1.033c-1.165,0.662-1.139,0.424-1.562,0.424c-0.424,0-2.066-1.245-3.204-1.854
                        c-1.139-0.609-0.847-1.006-0.847-1.006s-0.106-0.212-0.662-1.668c-0.556-1.456,0.212-0.556,0.424-1.589
                        c0.212-1.033-0.609,0.344-0.742,0.583c-0.132,0.238-1.298,0.794-2.463,1.165c-1.165,0.371-0.636-0.133-1.509-1.245
                        c-0.874-1.112-0.185-0.318-0.503-1.721c-0.318-1.404,0.503-1.033,0.98-1.615c0.477-0.582,0.424-0.132,0.503-0.424
                        c0.079-0.291-1.75-2.004-2.333-2.904c-2.575,3.097-4.938,6.377-5.302,8.351c0,0-4.59,13.982-10.169,16.807
                        c-5.579,2.825-10.24,12.358-10.24,12.358s-14.088,13.064-29.13,17.619c0,0-18.643,20.02-19.596,23.833
                        c-0.381,1.526-5.275,4.159-11.007,6.769c0.234-0.106,0.476-0.217,0.7-0.32c0.346-0.213,0.622,0.221,0.737,0.448
                        c0.038,0.074,0.058,0.127,0.058,0.127l0.671,2.825c0,0,0.847,1.624,1.094,1.942c0.247,0.318,0.953,1.659,1.059,1.871
                        c0.106,0.212,2.471,4.202,2.577,4.484c0.106,0.282,0.953,2.366,0.989,2.86c0.035,0.494,2.401,3.531,2.542,4.378
                        c0.141,0.847,1.271,1.942,1.765,2.825c0.494,0.883,0.883,1.271,1.165,1.377c0.282,0.106,0.636,0.035,0.741,0.035
                        c0.106,0,1.201,0.177,2.013,0.212c0.812,0.035,0.989-0.177,2.154-0.318c1.165-0.141,2.401,1.024,3.919,1.271
                        c1.518,0.247,3.249,0.671,3.249,0.671l4.025,1.589c0,0,0.989,0.141,1.412,0.071c0.424-0.071,0.6,0,3.46-0.459
                        c2.86-0.459,1.801-0.106,2.754-0.247c0.953-0.141,2.118-0.035,3.072-0.035c0.953,0,2.931,0.106,4.555-0.141
                        c1.624-0.247,2.684-0.459,3.566-0.883c0.883-0.424,2.26,0.035,3.919,0c1.66-0.035,3.849-0.177,5.438,0.212
                        c1.589,0.388,0.353,0.247,0.742,0.353c0.388,0.106,0.741,0.141,1.377,0.106c0.635-0.035,3.036-0.141,3.036-0.141
                        s3.001,0,3.919-0.177c0.918-0.176,3.037,0.247,3.707,0.247c0.671,0,3.178,0.989,3.919,1.271c0.742,0.282,1.271,0.953,1.377,1.059
                        c0.106,0.106,2.189,1.412,2.578,1.871c0.388,0.459,2.895,2.719,3.107,2.86c0.212,0.141,0.777,0.6,1.095,1.201
                        c0.318,0.6,3.319,1.448,3.319,1.448l3.46,0.424c0,0,1.977-0.071,2.401-0.071s1.059,0.53,1.13,0.636
                        c0.071,0.106,2.154,1.024,2.154,1.024s1.13,0.741,1.307,0.953c0.177,0.212,0.212,0.212,1.942,3.284
                        c1.73,3.072,1.695,1.306,2.119,1.871c0.424,0.565,1.024,0.988,1.2,1.271c0.177,0.283,1.13,0.671,2.366,1.448
                        c1.236,0.777,1.448,0.741,1.448,0.741s1.271,0,2.083-0.07c0.812-0.071,1.765,0.6,3.001,0.671c1.236,0.07,1.059,0.106,1.412,0.035
                        c0.353-0.071,1.13-0.035,1.765-0.106c0.636-0.071,2.048-0.636,2.048-0.636s0.706-0.283,1.165-0.565
                        c0.459-0.282,1.942-0.847,1.942-0.847s0.706-0.53,3.707,0.071c3.001,0.6,1.024,0.671,1.024,0.671s1.236,1.448,2.154,2.896
                        c0.918,1.448,1.024,1.306,2.189,2.613c1.165,1.307,0.177,0.318,1.412,1.766c1.236,1.448,0.883,1.165,0.883,1.165
                        s9.251,11.934,10.522,14.018c1.271,2.083,0.742,0.706,1.095,1.13c0.353,0.424,4.713,1.726,4.713,1.726l-0.605-84.744l0,0
                        L495.56,526.527z"/>
                        <path fill="#CC0031" d="M815.039,718.363c-0.253-0.274-0.587-0.615-0.949-0.983v0L815.039,718.363z"/>
                        <path fill="#8D83C6" d="M575.637,360.465c-0.265,0.609-0.477,0.715-0.688,0.874c-0.212,0.159-0.291,0.318-0.265,0.821
                        c0.027,0.503,0.742,0.318,0.027,0.503c-0.715,0.185-0.927,0.106-1.139,0.212c-0.212,0.106-0.186-0.027-0.609,0.265
                        c-0.424,0.291-0.715-0.265-0.848,0.635c-0.132,0.9,0.318,0.953-0.106,1.403c-0.424,0.45-0.45,0.318-0.503,0.847
                        c-0.019,0.186,0.08,0.205,0.142,0.196c0.038-0.015,0.051-0.017,0.048-0.014c0.003-0.003-0.009-0.001-0.048,0.014
                        c-0.099,0.039-0.37,0.167-0.99,0.545c-1.695,1.033-1.695,0.847-1.986,1.086c-0.291,0.238-0.556,0.291-1.351,0.715
                        c-0.794,0.424-0.397,0.371-1.112,0.397c-0.715,0.027-1.271-0.053-1.615-0.132c-0.344-0.079,0.9-1.191-0.847-0.185
                        c-1.748,1.006-1.457,0.927-1.88,1.059c-0.424,0.132-0.927,0.132-0.927,0.132s1.377,0.397-0.503,0.927
                        c-1.88,0.53-2.754,0.556-2.992,0.53s-1.854-0.371-1.933-0.133c-0.08,0.238,0,0.53-0.901,1.165c-0.9,0.635-0.741,0.344-1.615,1.112
                        c-0.874,0.768-0.318,0.318-1.271,1.271c-0.953,0.953-0.609,1.165-1.43,1.35c-0.821,0.185-1.165-0.344-1.43-0.583
                        c-0.265-0.238-0.291-0.874-1.033-0.715c-0.741,0.159-0.159,0.159-1.192,0.238c-1.033,0.079-1.245,0.053-1.245,0.053
                        s0.636-1.218-0.132,0.106c-0.768,1.324-0.715,1.483-0.847,1.668c-0.132,0.185,0.132,0-0.662,0.344
                        c-0.794,0.344-1.88,1.218-2.251,1.668c-0.371,0.45,0.424-0.371-0.609,0.715c-1.033,1.086-0.9,1.006-1.801,1.615
                        c-0.9,0.609-0.768-0.397-1.218,0.741c-0.45,1.139-0.371,0.98-0.583,1.668c-0.212,0.688-0.185,0.159-0.397,1.006
                        c-0.212,0.847,0.794,0.9-0.291,1.589c-1.086,0.689-0.45,2.198-0.45,2.198s0.635-0.556-0.132,0.212
                        c-0.768,0.768-0.583,0.635-0.768,0.768c-0.185,0.132-0.212-0.212-0.583-0.265c-0.371-0.053-1.218-0.344-2.198-0.424
                        c-0.98-0.079-1.695-0.291-1.88-0.371c-0.185-0.08,0.079-0.503-0.291-0.768c-0.371-0.265-0.953-0.662-0.953-0.662
                        s-1.112,0.053-1.774,0.821c-0.662,0.768-0.953,1.112-1.404,1.192c-0.45,0.08-1.589-0.344-1.933,0.027
                        c-0.344,0.371-0.291,0.477-0.847,0.741c-0.546,0.26-0.711,0.09-1.042,0.259c-0.026,0.017-0.201,0.105-0.018,0.006
                        c0.007-0.004,0.011-0.003,0.018-0.006c0.023-0.015-0.069,0.025-0.627,0.297c-1.192,0.583-1.456,0.371-1.854,0.503
                        c-0.397,0.132-0.794,0.212-1.033,0.344c-0.239,0.132,0.635,0.689-0.239,0.132c-0.874-0.556,0.45-0.185-1.271-0.821
                        c-1.721-0.635-1.245-0.583-1.615-0.344c-0.371,0.238-0.715,0.583-0.9,0.742c-0.185,0.159-0.344,0.477-0.583,0.265
                        c-0.239-0.212-0.159-0.794-0.609-0.794c-0.45,0-1.192-0.159-1.35-0.053c-0.159,0.106-0.053,0.371-0.583,0.344
                        c-0.53-0.027,0.159,0.556-1.059-0.424s-0.715-1.218-1.43-0.821c-0.715,0.397-2.86,0.9-3.813,0.98c-0.953,0.079-0.9,0-1.562,0.106
                        c-0.662,0.106-0.477-0.424-1.165,0.185c-0.688,0.609-0.424,0.583-0.688,0.609c-0.265,0.026-0.583,0-0.583,0s-0.503-0.291,0-0.874
                        c0.503-0.582,0.741-1.086,0.477-1.642c-0.265-0.556-2.172-3.972-4.369-4.158c-2.198-0.186-1.298,0.582-2.066,1.271
                        c-0.768,0.689-1.589,1.006-1.88,1.165c-0.291,0.159-0.265-0.026-0.9,0.45c-0.636,0.477-1.139,0.238-1.536,0.768
                        c-0.397,0.53-0.715,0.53-0.927,0.794c-0.212,0.265-0.371-0.397-0.344,0.688c0.026,1.086,0.053,0.715-0.291,1.509
                        c-0.344,0.794-0.133,0.424-0.371,1.006c-0.238,0.583,0.145,0.159-0.907,0.344c-1.052,0.185-2.509-0.159-3.647,0
                        c-1.139,0.159-2.807,0.14-3.098,0.056c-0.291-0.083-1.245-0.348-1.43-0.268s0.927,0.212-0.848,0.556
                        c-1.774,0.344-0.953,1.96-1.774,0.344c-0.821-1.615-1.271-2.145-1.51-2.728c-0.238-0.583-0.53-0.953-0.847-1.139
                        c-0.318-0.186-0.715-0.662-1.112-0.556c-0.397,0.106-1.245,0.741-1.377,0.9c-0.132,0.159-0.106,0.397-0.185,0.45
                        c-0.079,0.053-0.185,0.106-0.741-0.212c-0.556-0.318,0-1.695-1.298-0.53c-1.297,1.165-1.721,1.695-1.721,1.695l-0.291,0.026
                        c0,0-0.9-0.132-1.589-0.635c-0.689-0.503-0.424,0.318-0.9-0.662c-0.477-0.98-0.53-1.35-0.609-1.51
                        c-0.08-0.159,1.483-0.874-0.344-0.556c-1.827,0.318-2.807,2.092-2.807,2.092s0.159,0.053,0,0.159
                        c-0.159,0.106-0.106,0.185-0.344,0.185c-0.238,0,0.874-0.821-0.662-0.371c-1.536,0.45-2.489-0.768-2.251,0.874
                        c0.238,1.642,0.53,1.695,0.212,1.801c-0.318,0.106-0.715-0.079-0.741,0.159c-0.027,0.238,0.53,0.265,0,0.583
                        c-0.53,0.318-0.318,0.318-0.715,0.318c-0.397,0-1.324,0.344-1.324,0.344s-0.159-1.192-0.477-2.039c-0.318-0.847,0-0.583-0.45-1.642
                        s-1.589-2.913-1.589-3.204c0-0.292-0.636-1.774-1.192-2.066c-0.15-0.079-5.111-3.204-5.243-3.469
                        c-0.132-0.265-5.577-3.048-5.578-3.048c0.015,0.201,0.032,0.448,0.05,0.724c0.016,0.242,0.031,0.461,0.031,0.498
                        c0,0.001,0,0.002,0,0.003c0,0.08,2.726,1.188,2.806,1.638c0.079,0.45,2.93,2.436,3.618,2.648c0.689,0.212,2.383,1.165,2.383,1.457
                        c0,0.291,2.066,1.642,1.88,1.96c-0.185,0.318,0.027,0.609,0.53,1.086c0.503,0.477,0,0.583,0.318,1.245
                        c0.318,0.662,0.53,0.635,0.636,1.51c0.106,0.874,0.053,0.794,0.344,1.668c0.291,0.874,0.053,0.609,0.53,1.351
                        c0.477,0.742-0.238,1.192,1.033,1.245c1.271,0.053-0.053,0.027,2.013,0.027c2.066,0,2.516-0.741,2.834-1.642
                        c0.318-0.9,0.371-1.245,0.397-1.43c0.026-0.186-1.403-0.08,0.133-0.45c1.536-0.371,1.086,0.132,1.615-0.582
                        c0.53-0.715,0.821-1.271,0.821-1.271s-1.562-1.139,0.503,0.318c2.066,1.456,1.96,1.35,2.383,1.695
                        c0.424,0.344,1.218,0.477,1.218,0.477s1.112,0.556,1.589,0.265c0.477-0.291,1.059-1.033,1.351-1.271
                        c0.291-0.238-1.139-1.139,0.45-0.45c1.589,0.688,2.251,0.688,2.251,0.688s0.556-0.265,0.688-0.318
                        c0.132-0.053-0.556-1.536,0.397,0.079c0.953,1.615,0.927,1.695,1.404,2.092c0.477,0.397,0.848,1.165,1.059,1.536
                        c0.212,0.371,2.595-0.106,2.86-0.185s1.774-0.079,1.509-0.636c-0.265-0.556,1.298-0.344,1.298-0.344s-0.265,0.371,0.53,0.185
                        c0.794-0.185,1.668-0.053,2.277-0.291c0.609-0.238-0.238-0.927,1.191-0.265c1.43,0.662,1.165,0.689,2.092,0.689
                        c0.927,0,1.615-0.159,1.774-0.265c0.159-0.106-0.053-0.027,0.318-1.086c0.371-1.059,0.45-1.165,0.503-1.642
                        c0.053-0.477-1.324-1.324,0.265-1.562c1.589-0.238,1.774,0.053,2.41-0.477c0.636-0.53,0.794-0.424,1.245-0.953
                        c0.45-0.53,0.636-0.874,1.033-1.139c0.397-0.265,0.583-0.556,1.059-0.556c0.477,0,1.218-0.106,1.88,1.112
                        c0.662,1.218,1.165,1.218,1.086,1.748c-0.079,0.53-0.344,0.953-0.503,1.191c-0.159,0.238-2.013-1.642-0.609,0.768
                        c1.404,2.41,1.006,2.569,1.748,2.781c0.742,0.212,1.086,0.027,1.086,0.027s0.768,0.026,0.768-0.397s-0.371-1.086,0.106-1.35
                        c0.477-0.265,2.065-0.689,2.33-0.689c0.265,0,1.695-0.45,2.41-0.635c0.715-0.185,0.318-0.821,1.086-0.212
                        c0.768,0.609-0.159,0.106,1.298,0.953c1.457,0.847,1.88,1.139,2.172,0.874c0.291-0.265-0.689-1.88,0.635-0.953
                        c1.324,0.927,0.98,1.165,1.483,1.139c0.503-0.026,0.662-0.371,1.245-0.715c0.583-0.344,1.006,0.185,1.245,0.265
                        c0.238,0.079-0.821,0.688,1.43,0.556c2.251-0.132,2.145-1.536,3.548-1.589c1.404-0.053,1.245,0.662,1.933,0.053
                        c0.689-0.609,0.503-0.423,1.324-0.98c0.821-0.556,0-0.821,1.245-0.689c1.245,0.132,0.927,0.265,1.562-0.212
                        c0.636-0.477,1.457-0.636,1.668-0.477s0.318,0.635,1.271,0.821c0.953,0.185,0.583-0.053,1.562,0.265
                        c0.98,0.318,0.768-0.106,1.986,0.477s1.907,1.165,1.986,0.583c0.08-0.583-0.344-0.715,0.397-1.351
                        c0.742-0.635,1.112-0.556,1.192-1.218c0.079-0.662,0.45-1.033,0.397-1.827c-0.053-0.794-0.318-0.715-0.053-1.351
                        c0.265-0.635,0.318-0.768,0.53-1.139c0.212-0.371,0.371-0.715,0.556-1.033c0.185-0.318,0.9-1.033,0.9-1.033
                        s0.689-0.689,1.006-1.006c0.318-0.318,0.768-0.556,0.847-0.742c0.079-0.185,0.662-0.08,1.324-0.715
                        c0.662-0.635-0.079-0.079,1.006-0.794c1.086-0.715,1.059-0.741,1.377-1.006s0.556-0.45,1.006-0.768
                        c0.45-0.318,1.404-1.112,0.874-0.265c-0.53,0.848-0.688,1.324-0.662,1.907c0.026,0.583-0.106,0.768-0.212,0.98
                        c-0.106,0.212-0.185,0.768-0.185,0.768s0.026-0.133,0.132,0.688c0.106,0.821,1.562,1.933,1.695,1.907
                        c0.133-0.027,0.238-0.45,0.53,0c0.291,0.45,0.9,0.185,0.397,0.768c-0.503,0.582-1.086,0.821-1.033,1.324
                        c0.053,0.503,0.106-0.026,0.133,0.794c0.026,0.821,0.053,0.556-0.026,1.377c-0.079,0.821-0.026,0.795-0.132,1.218
                        c-0.106,0.424-0.238-0.159-0.212,0.662c0.026,0.821-0.185,0.636,0.133,1.298c0.318,0.662,0.132,0.318,0.45,1.086
                        c0.318,0.768,0.344,0.927,0.344,0.927s-0.556,0.133,0.45,0.609c1.006,0.477,0.821,0.318,1.271,0.344
                        c0.45,0.026,1.059-0.291,0.794-0.026c-0.265,0.265-0.53,0.583-0.53,0.741c0,0.043,0.002,0.043,0.003,0.038
                        c-0.003,0.025-0.017,0.139-0.056,0.571c-0.08,0.874-0.027,0.583-0.08,0.874c-0.053,0.291,0.371,0.132-0.185,0.742
                        c-0.556,0.609-0.821,0.45-0.821,0.45s-0.397-0.291-0.741-0.318c-0.344-0.026-0.132-0.291-0.768,0.053s-0.609,0.037-0.768,0.283
                        c-0.159,0.246-0.212,0.273-0.291,0.432c-0.079,0.159-1.351,0.132-0.98,0.715c0.371,0.582-1.377,1.43,0.583,1.509
                        c1.96,0.079,0.742-0.662,2.224-0.133c1.483,0.53,0.98,0.556,1.721,0.662c0.742,0.106,0.821,0.371,1.324,0.291
                        c0.503-0.079,0.159-0.636,1.244-0.238c1.086,0.397,0.953,0.212,1.059,0.9c0.106,0.689,0.053,0.874,0.238,1.615
                        c0.185,0.742-0.45,0.477,0.106,1.536c0.556,1.059,0.185-0.662,1.059,1.456c0.874,2.119,0.953,2.701,1.006,3.019
                        c0.053,0.318-1.96,1.112-2.092,1.271c-0.133,0.159-0.291,0.424-0.477,0.503c-0.185,0.08-0.106-0.238-0.556,0.45
                        s-0.132,0.291-0.556,0.874c-0.424,0.583,1.059,0.477-0.689,0.662c-1.748,0.185-1.854,0.053-2.092,0.238
                        c-0.238,0.186,0.132-0.212-0.45,0.397c-0.583,0.609-0.768,0.291-1.139,1.112c-0.371,0.821-0.371,0.98-0.371,0.98v1.165
                        c0,0,0.397,3.019,0.477,3.072c0.079,0.053-0.794-0.212,0.397,0.159c1.192,0.371,1.271,1.006,1.43,0.371
                        c0.159-0.636,0.026-0.768,0.344-0.98c0.318-0.212,0.371-0.318,0.45-0.265c0.079,0.053,0.503,1.695,0.741,2.119
                        c0.238,0.424-0.053-0.133,0.397,0.874c0.45,1.006,0.821,1.43,0.715,1.801c-0.106,0.371-0.079,0.344-0.98,1.271
                        c-0.9,0.927-1.456,1.298-1.562,1.51c-0.106,0.212-0.424,0.344-0.238,0.768c0.185,0.424-0.424,0.185,0.689,0.715
                        s0.662,0.397,1.615,0.424c0.953,0.027,0.609,0.027,1.801,0c1.192-0.026,0.556-0.384,1.562,0.02c1.006,0.404,1.377,0.43,1.377,0.43
                        s1.059,0.265,1.165,0.265c0.106,0,0.212-0.185,0.583,0.185c0.371,0.371,0.344,0.344,0.556,0.53
                        c0.212,0.185,3.045,0.238,3.151,0.371c0.106,0.133,0.397,0.344,0.741,0.821c0.344,0.477-0.159,0.397,0.848,1.298
                        c1.006,0.9,0.741,0.609,1.006,0.9c0.265,0.291,0.556,0.556,1.086,0.742c0.53,0.185,0.635,0.159,0.847,0
                        c0.212-0.159,0.742,0.98,0.609-0.503c-0.132-1.483,0.132-6.038,0.132-6.038l0.291-0.344c0,0-0.212,0.053,0.424-0.318
                        c0.635-0.371,0.635-0.371,0.635-0.371s-0.53,1.059,0.371-0.424c0.9-1.483,0.874-0.9,0.874-0.9s0.132-0.318,0.318-1.086
                        c0.185-0.768-0.026-0.583,0.318-1.271c0.344-0.689,0.291-0.662,0.689-1.324c0.397-0.662,0.688-0.847,0.662-1.483
                        c-0.027-0.635-0.079-1.033-0.079-1.033s2.251,1.033,2.648,1.324c0.397,0.291,1.033,0.45,1.351,0.636
                        c0.318,0.185,0.583-0.027,1.033,0.662c0.45,0.689,0.397,1.218,0.45,1.748c0.053,0.53-0.662,0.821,0.371,0.742
                        c1.033-0.079,2.754-0.662,3.257-0.953c0.503-0.291,1.695-0.635,1.774-0.688c0.079-0.053,1.748,0.9,2.251,0.847
                        c0.503-0.053,2.701-0.185,2.78-0.185c0.079,0,0.079,2.304,0.318-0.08c0.238-2.383,0.053-3.072,0.053-3.072s0.159-0.556,0.053-1.059
                        c-0.106-0.503-0.185-0.742-0.185-0.742s0.609,0.291,0.901,0.265c0.291-0.026,0.741-0.132,0.741-0.132l2.224-1.006
                        c0,0-0.238,0.238,1.298-0.318c1.536-0.556,1.324-0.662,1.748-0.503c0.424,0.159,1.139,0.079,1.218,0.953
                        c0.08,0.874-0.212,1.086,0.08,1.668c0.291,0.583-0.45,0.318,0.583,0.9c1.033,0.583,0.371,0.106,1.509,0.556
                        c1.139,0.45,1.271,0.53,1.748,0.742c0.477,0.212-0.424-0.397,0.874,0.424c1.298,0.821,1.351,0.609,1.51,1.006
                        c0.159,0.397,0.238,0.556,0.371,0.794c0.132,0.238-0.132,0.477-0.132,0.477s-2.622,1.298-2.622,1.377c0,0.079-0.292-0.079,0,0.079
                        c0.291,0.159,0.953-0.424,0.344,0.583c-0.609,1.006-0.397,0.847-0.874,1.192c-0.477,0.344-0.609,0.397-0.847,0.609
                        c-0.238,0.212-0.503-0.265-0.45,0.53c0.053,0.794-0.132,0.053,0.159,1.218c0.291,1.165,0.53,1.695,0.53,1.695
                        s0.715,0.45,0.953,0.901c0.238,0.45,0.185,0.238,0.371,0.953c0.185,0.715,0.45,1.854,0.477,2.065
                        c0.027,0.212,0.08,0.212,0.027,0.874c-0.053,0.662-0.132-0.715-0.132,1.059c0,1.774-0.238,1.271,0,1.774
                        c0.238,0.503,0.132,0.371,0.424,1.006c0.291,0.636,0.159,0.397,0.424,0.821c0.265,0.424,0.079,0.794,0.689,0.715
                        c0.609-0.079,0.265-0.132,1.112-0.397c0.847-0.265,1.827-0.847,2.013-0.9c0.185-0.053,0.185-0.715,0.9-0.265
                        c0.715,0.45,1.218,0.715,1.218,0.715s-0.424-0.238-0.424,0.424c0,0.662,0.424,0.503-0.079,0.874
                        c-0.503,0.371-0.688,0.265-1.165,0.689c-0.477,0.424-0.874,0.741-1.112,1.059c-0.239,0.318-0.583,1.006-1.006,1.483
                        c-0.424,0.477-0.344,0.318-0.715,0.688c-0.371,0.371-0.318,0.053-0.609,0.583c-0.291,0.53-0.662,1.907-0.45,2.119
                        c0.212,0.212,0.344,0.318,0.609,0.98c0.265,0.662,0.265,0.503,0.291,1.059c0.027,0.556,0.08,0.477,0.053,0.741
                        c-0.026,0.265,0.265,0.106-0.265,0.53c-0.53,0.424-0.609,0.106-0.742,0.662c-0.132,0.556-0.662,0.503-0.106,0.953
                        c0.556,0.45,0.45-0.132,0.556,0.45c0.106,0.583,0.265,0.238,0.106,0.927c-0.159,0.689-0.318,0.477-0.238,1.059
                        c0.079,0.583-0.106,0.344,0.265,0.847c0.371,0.503,0.212,0.371,0.371,0.503c0.155,0.129,0.481,1.3,0.451,1.536
                        c0.014-0.049,0.021-0.017-0.107,0.715c-0.212,1.218,0.073,3.956,0.229,4.017c0.016-0.017,0.031-0.03,0.048-0.046
                        c0.203-0.207,0.399-0.37,0.578-0.499c0.458-0.33,0.797-0.435,0.797-0.435c-0.106-1.059,0-2.074,0.035-2.957
                        c0.035-0.883,0-1.765-0.176-2.083c-0.177-0.318-0.177-0.459-0.318-2.26c-0.141-1.801-0.177-0.706-0.353-1.589
                        c-0.177-0.883,0.035-0.424,0.353-1.095c0.318-0.671,0.282-0.53,0.318-0.635c0.035-0.106,0.141-1.13,0.035-1.483
                        c-0.106-0.353-0.071-0.282-0.353-0.918c-0.283-0.635,0,0-0.388-0.671c-0.388-0.671-0.071-0.636-0.177-1.165
                        c-0.106-0.53,0-0.424,0.388-1.094c0.388-0.671,0.353-0.565,0.812-0.989c0.459-0.423,0.424-0.388,1.094-1.059
                        c0.671-0.671,1.2-0.989,1.695-1.518c0.494-0.53,0.353-0.318,1.165-1.412c0.812-1.095,0.6-0.671,0.706-1.412
                        c0.106-0.742-0.212-0.459-0.353-0.706c-0.141-0.247-0.953-0.388-1.695-0.847c-0.742-0.459-1.942-0.741-1.942-0.741l-0.353,0.176
                        c0,0-0.318,0.141-2.33,1.165c-2.013,1.024-0.459,0.106-0.565-1.236c-0.106-1.342,0.035-0.459,0.212-1.165
                        c0.177-0.706,0.035-0.812,0.035-1.377c0-0.565-0.459-1.377-0.565-2.083c-0.106-0.706-0.141-0.424-0.318-1.059
                        c-0.176-0.636-0.106-0.353-0.424-1.271c-0.318-0.918-0.459-0.6-0.847-1.095c-0.388-0.494-0.353-0.424-0.53-0.918
                        c-0.176-0.494,0-0.247,0.035-0.53c0.035-0.282,1.271-0.636,1.695-0.918c0.424-0.282,0.212-0.318,0.282-0.742
                        c0.071-0.424,0.071-0.318,0.177-0.635c0.106-0.318,0.424-0.459,0.424-0.459s1.801-0.812,2.013-0.989
                        c0.212-0.176,0.071-0.635,0.071-1.13c0-0.494-0.318-0.53-0.53-1.13c-0.212-0.6-0.353-0.423-1.024-1.024
                        c-0.671-0.6-0.706-0.388-0.847-0.565c-0.141-0.177-0.071-0.318-0.212-0.918c-0.141-0.6-0.177-0.353-0.565-0.742
                        c-0.388-0.388-1.236,0.247-1.236,0.247s-1.165-0.53-1.624-0.741c-0.459-0.212-0.424-0.353-0.635-0.635
                        c-0.212-0.283-0.282-0.459-0.353-0.953c-0.071-0.494-0.282-0.565-0.424-1.201c-0.141-0.636-0.388-0.494-0.812-0.883
                        c-0.424-0.389-0.812,0.106-1.201,0.176c-0.388,0.071-1.412,0-2.26,0c-0.847,0-0.318,0.212-1.236,0.671
                        c-0.918,0.459-1.695,0.565-1.695,0.565l-0.247-0.282c0,0-0.706-0.53-1.518-0.777c-0.812-0.247-1.13,0.565-1.165,0.671
                        c-0.035,0.106-0.212,0.495-0.318,1.13c-0.106,0.635-0.6,0.953-0.671,1.094c-0.071,0.141,0,0,0.671,2.825
                        c0.671,2.825-0.706,0.318-1.059,0.459c-0.353,0.141-2.542-0.423-3.107-0.777c-0.565-0.353-0.777,0.176-1.236,0.671
                        c-0.459,0.494-0.565,0.459-1.377,1.13c-0.812,0.671-1.059-0.494-1.554-0.883c-0.494-0.388-0.353-1.024-1.13-2.719
                        c-0.777-1.695-1.483-0.282-3.072-0.953c-1.589-0.671-1.095-0.424-1.871-0.847c-0.777-0.424-1.13,0.212-1.66,0.247
                        c-0.53,0.035-0.035,1.059-0.035,1.059s-0.247,0.565-0.459,1.448c-0.212,0.883-0.071,0.282-0.177,1.201
                        c-0.106,0.918-0.953,2.613-0.953,2.613l-0.459,0.883c0,0-2.048,1.942-2.472,2.118c-0.424,0.177,0.035,1.024,0.177,1.518
                        c0.141,0.494-0.247,1.448-0.318,1.977c-0.071,0.53-0.283,1.165-0.424,0.989c-0.141-0.176-0.953-0.671-0.953-0.671
                        s-0.176,0-0.635-1.73c-0.459-1.73-0.742,0-1.977,0c-1.236,0-1.73-0.388-1.73-0.388s-0.141-0.212-0.494-0.706
                        c-0.353-0.494-0.212-0.318-0.353-0.487c-0.141-0.169-0.141-0.255-1.201-0.714c-1.059-0.459,0,0-0.706,0.494
                        c-0.706,0.494-1.73,0-1.73,0s-3.284-0.283-3.107-0.459c0.177-0.177,0.353-0.247,0.741-0.636c0.388-0.388,0.247-0.494,0.424-1.236
                        c0.177-0.741,0-0.706-0.106-1.624c-0.106-0.918-0.353-1.342-0.353-1.977c0-0.635-0.424-1.059-0.635-1.801
                        c-0.212-0.741-0.035-0.353-0.177-0.953c-0.141-0.6-0.141-0.706-0.424-1.342c-0.283-0.635-0.389,0.212-0.636,0.53
                        c-0.247,0.318-1.165,0-2.154-0.424c-0.989-0.424,0-0.353-0.07-0.777c-0.071-0.424,0.035-0.212-0.035-0.494
                        c-0.071-0.282-0.388-1.095-0.388-1.095s0.035-0.141,1.589-0.53c1.554-0.388,1.13-0.318,1.589-0.706
                        c0.459-0.389,0.706-0.389,1.024-0.6c0.318-0.212,0.318-0.424,0.636-0.847s0.565-0.177,1.342-0.53
                        c0.777-0.353,0.565-0.212,0.847-0.318c0.282-0.106,1.059-0.283,2.224-0.459c1.165-0.177,0.636-0.636,0.565-1.271
                        c-0.071-0.636-0.247-0.318-0.706-1.094c-0.459-0.777-0.388-0.53-0.53-0.989c-0.141-0.459-0.424-0.848-0.494-1.554
                        c-0.07-0.706-0.565-0.883-1.236-1.942c-0.671-1.059-0.247-0.671-0.212-1.024c0.035-0.353,0.247-2.26-0.106-3.601
                        c-0.353-1.342-0.388-0.353-0.494-0.424c-0.106-0.071-0.812-0.071-1.307,0c-0.494,0.071-2.507,0.388-2.86,0
                        c-0.353-0.388,0.353-0.53,0.565-1.095c0.212-0.565,0.141-0.459,0.494-1.412c0.353-0.953,0.353-1.342,0.353-1.342
                        s0.212-0.282,0.53-0.883c0.318-0.6,0.424-0.988,0.6-1.483c0.177-0.494-0.035-0.424-0.247-0.918
                        c-0.212-0.494-0.741-0.035-1.342,0.035c-0.6,0.07-1.024,0.353-1.448,0.353c-0.424,0-0.706-0.388-1.236-0.847
                        c-0.53-0.459-0.212-0.565-0.106-1.095c0.106-0.53,0.247-0.424,0.459-0.883c0.212-0.459,0.071-0.671,0.106-0.777
                        c0.035-0.106,0.565-3.848,0.671-4.555c0.106-0.706,0-0.53,0-1.059c0-0.53,0.212-0.494,0.212-0.6s-1.589-0.706-1.695-0.777
                        c-0.106-0.07-0.388-0.247-0.812-0.53c-0.424-0.282-0.353-0.282-0.388-0.812c-0.035-0.53,0,0,0.106-0.388
                        c0.106-0.389,0.177-0.318,0.177-0.777c0-0.459,0.141-0.035,0.53-0.459c0.388-0.424,0.247-0.212,0.777-0.883
                        c0.53-0.671,0.176-0.318,0.353-0.636c0.177-0.318,1.13-0.565,1.448-0.777c0.318-0.212,1.059-0.388,1.836-1.271
                        c0.777-0.883,0.353-0.494,0.53-0.953c0.176-0.459,0.741-0.53,1.483-0.875c0.741-0.346,0.812-0.078,1.518-0.007
                        c0.706,0.071,2.118-0.388,3.249-0.883c1.13-0.494,0.741-0.212,1.236-0.424c0.494-0.212,0.918-0.247,1.554-0.565
                        c0.636-0.318,0.706-0.388,0.918-0.671c0.212-0.283,0.812,0.141,1.165,0c0.353-0.141,0.671,0.035,0.953,0
                        c0.282-0.035,0.918-0.035,1.448-0.141c0.53-0.106,0.424-0.212,0.953-0.53c0.53-0.318,0.741-0.389,0.989-0.459
                        c0.247-0.07,1.165-0.494,1.342-0.635s0.459-0.106,1.024-0.388c0.565-0.283,0.918-0.283,1.448-0.742
                        c0.53-0.459,0.212-0.353,0.424-1.165c0.212-0.812,0.247-0.741,0.318-0.989c0.071-0.247-0.106-0.706,0-1.13
                        c0.106-0.424,0.671,0.071,1.377-0.141c0.706-0.212,0.388-0.071,0.494-0.071c0.106,0,0.388,0.353,0.459,0.742
                        c0.07,0.388,0.6,0.459,0.741,0.6c0.141,0.141,0.918,0.495,0.918,0.495l1.448,0.177c0,0,0.847-0.035,1.589-0.389
                        c0.741-0.353,0.247-0.177,0.459-0.318c0.212-0.141,0.812,0.989,0.947,1.165c0.135,0.177,0.112,0.706,0.006,0.954
                        c-0.106,0.247,1.2,0.53,1.659,0.53s1.271,0,1.377,0c0.106,0,10.134-0.459,10.346-1.13c0.212-0.671,0.282-0.6,0.706-1.73
                        s0.318-0.812,0.494-1.907c0.176-1.095,0.035-0.671,0.494-1.977c0.459-1.307,0.106-0.706,0.106-1.165c0-0.199,0.024-0.31,0.031-0.42
                        h-1.64c-0.026,0.265-0.059,0.606-0.103,1.073c-0.106,1.112-0.159,0.83-0.388,1.66c-0.229,0.83-1.907,3.76-1.907,3.76
                        s-9.162,0.388-9.657-0.318c-0.495-0.706-0.283-0.424-0.918-2.331c-0.636-1.907-0.636,0.282-0.847,0.565
                        c-0.212,0.282-1.554,0.141-2.048,0.141c-0.494,0-1.271,0.212-1.554,0.283c-0.283,0.071-1.342-2.048-2.048-2.683
                        c0,0,0.247-0.318,0.247-0.424c0-0.106,0.318-0.318,0.459-0.459c0.141-0.141,0.141-0.141,0.247-0.6
                        c0.106-0.459,0.035-0.459,0.035-0.459s0.03-0.062,0.087-0.208h-2.344C575.719,360.041,575.78,360.136,575.637,360.465z"/>
                      </g>
            </svg>
        </div>
        <!--/Map search-->

        <!--Details elements-->
        <div id="test-swipe-4" class="col s12 m12 s12 detail">
            <!--Marque-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Marque</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                      </select>
            </div>
            <!--Fuel-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Fuel Type</option>
                            <option value="1">Diesel</option>
                            <option value="2">Petrol</option>
                            <option value="3">Electric</option>
                      </select>
            </div>
            <!--Modele-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Modèle</option>
                            <option value="1">BMW</option>
                            <option value="2">Mercedes</option>
                            <option value="3">Land Rover</option>
                      </select>
            </div>
            <!--Ville-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Ville</option>
                            <option value="1">Agadir</option>
                            <option value="2">Marrakesh</option>
                            <option value="3">Casablanca</option>
                      </select>
            </div>
            <!--Prix Min-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Prix min</option>
                            <option value="1">10 000 DH</option>
                            <option value="2">30 000 DH</option>
                            <option value="3">60 000 DH</option>
                      </select>
            </div>
            <!--Prix Max-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Prix max</option>
                            <option value="1">100 000 DH</option>
                            <option value="2">300 000 DH</option>
                            <option value="3">600 000 DH</option>
                      </select>
            </div>
            <!--Format-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Format</option>
                            <option value="1">Sedan</option>
                            <option value="2">SUV</option>
                            <option value="3">Coupe</option>
                      </select>
            </div>
            <!--Annee Min-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Annee min</option>
                            <option value="1">2009</option>
                            <option value="2">2010</option>
                            <option value="3">2011</option>
                      </select>
            </div>
            <!--Annee Max-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Annee max</option>
                            <option value="1">2012</option>
                            <option value="2">2014</option>
                            <option value="3">2017</option>
                      </select>
            </div>
            <!--Places-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Places</option>
                            <option value="1">Two Places</option>
                            <option value="2">Five Places</option>
                            <option value="3">Eight Places</option>
                      </select>
            </div>
            <!--KM Min-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Km Mini</option>
                            <option value="1">2009</option>
                            <option value="2">2010</option>
                            <option value="3">2011</option>
                      </select>
            </div>
            <!--KM Max-->
            <div class="input-field col l4 m6 s6">
                <select>
                            <option value="0" selected>Kilométrage Maxi</option>
                            <option value="1">2012</option>
                            <option value="2">2014</option>
                            <option value="3">2017</option>
                      </select>
            </div>
            <div class="col s12 m12 s12 center btnshrchrslt">
                <a class="waves-effect waves-light btn indigo" id="btnshrchrslt"><i class="fa fa-car right" aria-hidden="true"></i>Chercher</a>
            </div>
        </div>
        <!--/Details elements-->

        <!--Content number-->
        <div class="col s12 l12 content_number valign-wrapper">
            <div class="col s6 m6 l6 left">
                <h5 class="indigo-text">1345<i class="tiny material-icons">directions_car</i></h5>
            </div>
            <div class="input-field col s6 m4 l3 offset-l3 right">
                <select>
                           <option value="0" selected>Tirer par :</option>
                           <option value="1">The newest</option>
                           <option value="2">The lowest</option>
                      </select>
            </div>
        </div>
        <!--/Content number-->

        <!--Announcements -->
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/sedan.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Rolls Royce</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">670,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>Ghost</span><span> (2010)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Essence</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/sedan.svg')}}" alt="form"><br><span>Sedan</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>6.0 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 23 )</li>
                    <li><i class="material-icons">location_on</i>Tangier</li>
                    <li><i class="material-icons">access_time</i>il y a 12 hours</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/1.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Mercedes-Benz</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">420,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>E63 AMG Coupe</span><span> (2016)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Essence</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/coupe.svg')}}" alt="form"><br><span>Coupe</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>4.0 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 930 )</li>
                    <li><i class="material-icons">location_on</i>Rabat</li>
                    <li><i class="material-icons">access_time</i>Aujourd'hui</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/4.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Range Rover</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">640,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>Vogue</span><span> (2014)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Diesel</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/suv.svg')}}" alt="form"><br><span>SUV</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>3.0 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 170 )</li>
                    <li><i class="material-icons">location_on</i>Marrakesh</li>
                    <li><i class="material-icons">access_time</i>12 heures</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/pickup.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Toyota</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">1728000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>Hilux</span><span> (2012)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Diesel</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/pickup.svg')}}" alt="form"><br><span>Pickup</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>2.5 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 30 )</li>
                    <li><i class="material-icons">location_on</i>Tangier</li>
                    <li><i class="material-icons">access_time</i>Aujourd'hui</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/10.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Maybach</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">780,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>57S</span><span> (2010)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Essence</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/sedan.svg')}}" alt="form"><br><span>Sedan</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>4.0 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 630 )</li>
                    <li><i class="material-icons">location_on</i>Rabat</li>
                    <li><i class="material-icons">access_time</i>1 semaine</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/3.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Jeep</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">350,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>Cherokee</span><span> (2015)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Diesel</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/suv.svg')}}" alt="form"><br><span>SUV</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>3.0 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 12630 )</li>
                    <li><i class="material-icons">location_on</i>Agadir</li>
                    <li><i class="material-icons">access_time</i>2 jours</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/micro.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Fiat</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">1728000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>C300</span><span> (2012)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Essence</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Manual</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/micro.svg')}}" alt="form"><br><span>Micro</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>1.2 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 12630 )</li>
                    <li><i class="material-icons">location_on</i>Casablanca</li>
                    <li><i class="material-icons">access_time</i>Aujourd'hui</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>04</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/6.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Dacia</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">120,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>Lodgy</span><span> (2012)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Diesel</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Manual</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/minivan.svg')}}" alt="form"><br><span>Minivan</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>1.6 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 12630 )</li>
                    <li><i class="material-icons">location_on</i>Essaouira</li>
                    <li><i class="material-icons">access_time</i>10 heures</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>03</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/van.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Mercedes-Benz</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">1728000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>Viano</span><span> (2012)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Diesel</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Manual</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/van.svg')}}" alt="form"><br><span>Van</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>2.7 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 170 )</li>
                    <li><i class="material-icons">location_on</i>Marrakesh</li>
                    <li><i class="material-icons">access_time</i>12 heures</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>06</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/8.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Mercedes-Benz</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">1728000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>CLS 250 CDI</span><span> (2012)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Diesel</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/sedan.svg')}}" alt="form"><br><span>Sedan</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>2.7 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 170 )</li>
                    <li><i class="material-icons">location_on</i>Agadir</li>
                    <li><i class="material-icons">access_time</i>12 heures</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>05</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/hacaton.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Mazda</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">140,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>Astina</span><span> (2012)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Diesel</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Manual</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/hatchback.svg')}}" alt="form"><br><span>Hatchback</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>1.6 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 170 )</li>
                    <li><i class="material-icons">location_on</i>Agadir</li>
                    <li><i class="material-icons">access_time</i>12 heures</li>
                </ul>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card ad">
                <div class="card-image">
                    <a href="Resulta.html">
                                <span class="white-text spanvidimg"><i class="small material-icons">photo_camera</i><b>06</b></span>
                                <span class="white-text"><i class="small material-icons">play_circle_filled</i></span>
                                <div class="black b"></div>
                                <img src="{{asset('images/cars/super.png')}}" alt="ad">
                                <p class="b"><span class="white-text">Savoir Plus</span></p>
                           </a>
                </div>
                <div class="card-content">
                    <div class="col l7 m7 s7 carsmrqs">
                        <h2 class="left grey-text text-darken-4">Ferrari</h2>
                    </div>
                    <div class="col l5 m5 s5 carsmrqs">
                        <h2 class="right indigo-text">1,058,000<span>DH</span></h2>
                    </div>
                    <div class="col l12 m12 s12 carsmdls">
                        <h3 class="grey-text text-darken-4"><span>458 italia</span><span> (2010)</span></h3>
                    </div>
                    <div class="col l12 m12 s12 features">
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gas1.svg')}}" alt="gas" width="29" height="29"><br><span>Essence</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/gear1.svg')}}" alt="gear" width="29" height="29"><br><span>Auto</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/supercar.svg')}}" alt="form"><br><span>SuperCar</span></p>
                        </div>
                        <div class="col l3 m3 s3 carinfos">
                            <p class="grey lighten-3"><img src="{{asset('images/features/adcard/engine1.svg')}}" alt="engine" width="29" height="29"><br><span>4.0 L</span></p>
                        </div>
                    </div>
                </div>
                <ul class="card-action center">
                    <li><i class="material-icons">remove_red_eye</i>( 170 )</li>
                    <li><i class="material-icons">location_on</i>Rabat</li>
                    <li><i class="material-icons">access_time</i>12 heures</li>
                </ul>
            </div>
        </div>
        <!--/Announcements-->
        <div class="col l12 m12 s12 loading">
            <a class="waves-effect waves-light btn pink accent-2"><i class="material-icons right">view_module</i>Charger encore</a>
        </div>
    </div>
</section>

@endsection
@section('jsFiles')
<script src="{{asset('js/nouislider.min.js')}}"></script>
<script type="text/javascript">
        
        /*Range Script*/
        var marginSlider = document.getElementById('slider-margin');
        var minprice = parseInt($('.minPrice').text()),
            maxprice = parseInt($('.maxPrice').text()),
            moyprice = Math.floor((minprice + maxprice) * 3 / 4);
        testok(minprice, moyprice, maxprice);

        function testok(minp, moyp, maxp) {
            noUiSlider.create(marginSlider, {
                start: [minp, moyp],
                margin: 0,
                behaviour: 'tap',
                connect: true,
                range: {
                    'min': minp,
                    'max': maxp
                }
            });
        }

        var marginMin = document.getElementById('slider-margin-value-min'),
            marginMax = document.getElementById('slider-margin-value-max');

        marginSlider.noUiSlider.on('update', function(values, handle) {
            if (handle) {
                marginMax.innerHTML = Math.floor(values[handle]);
            } else {
                marginMin.innerHTML = Math.floor(values[handle]);
            }
        });

        var sctns = $("#homePageSection");
        var sectionPosition = sctns.position();
        $(window).scroll(function() {
            if ($(window).scrollTop() >= sectionPosition.top) {
                $("#btnToTop").show(1000).css({
                    "opacity": "1",
                    "bottom": "1rem",
                    "width": "3.5rem",
                    "height": "3.5rem"
                });
            } else {
                $("#btnToTop").show(1000).css({
                    "opacity": "0",
                    "bottom": "-10rem",
                    "width": "0rem",
                    "height": "0rem"
                });
            }
        });
    </script>
@endsection