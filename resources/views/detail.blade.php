@extends('layouts.master')

@section('content')

<div class="section">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8">
				<div class="section-row sticky-container">
					<div class="main-post">
						<h3>{{ $kampung->judul }}</h3>
						<p>
							<center>
								<img style="width: 70%" src="{{ asset('uploads/'.$kampung->gambar) }}">	
							</center>
						</p>

						<p>
							{!! $kampung->isi !!}
						</p>
						<p>
							<b>Alamat :</b>{!! $kampung->alamat !!}
						</p>
						<p>
							<b>Fasilitas Umum :</b>{!! $kampung->fasilitas_umum !!}
						</p>
						<p>
							<b>Fasilitas Wisata :</b>{!! $kampung->fasilitas_wisata !!}
						</p>
						<!--bagikan facebook-->

						<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a>
						</div>

						<!--bagikan facebook-->
					</div>
				</div>
				<!-- ad -->
				<div class="section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- ad -->

				<!-- author -->
				<div class="section-row">
					<div class="post-author">
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="./img/author.png" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h3>{{ $kampung->name }}</h3>
								</div>
								<ul class="author-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /author -->

				<!-- comments facebook box -->

				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>

				<!-- comments facebook box -->

			</div>	
			<!-- plugins facebook -->

			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v5.0"></script>
			
			<!-- plugins facebook -->
		</div>
	</div>
</div>

@endsection