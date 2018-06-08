@extends('public.layouts.templateFullWidth')

@section('content')

<!--Contact-->
<section id="nouvelles_page">
	<div class="container contact">
		<div class="row z-depth-1 white">
			<img width="100%" class="responsive-img" src="images/team_contact.jpg" alt="Tomobilat team contact">
			<div class="col l12 m12 s12 white">
			<div class="cntctpara">
				<h1 class="indigo-text center">Contact Nous</h1>
				<p class="center">Afin d'améliorer la qualité des services sur notre platform, nous restons ouverts à vos avis, critiques, ainsi que des suggestions qui créeraient un changement de la qualité de travail sur notre site web au domain des voitures.</p>
			</div>
				<form>
					<div class="col l6 m6 s12 input-field">
					<i class="material-icons prefix">account_circle</i>
					<input id="icon_prefix" type="text" class="validate">
					<label for="icon_prefix">Nom Complet</label>
					</div>
					<div class="col l6 m6 s12 input-field">
					<i class="material-icons prefix">email</i>
					<input type="email" class="validate">
					<label for="email" data-error="wrong" data-success="right">Adresse E-mail</label>
					</div>
					<div class="col s12 m12 l12 input-field">
					<i class="material-icons prefix">mode_edit</i>
					<textarea id="icon_prefix5" class="materialize-textarea" style="height: 22px;"></textarea>
					<label for="icon_prefix5" class="">Message ...</label>
					</div>
					<div class="col l12 m12 s12">
						<a class="waves-effect waves-light btn right indigo">Envoyer</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section><!--/Contact-->

@endsection
