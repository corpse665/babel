@extends('layouts.master')

@section('content')

<div class="section">
  <!-- container -->
  <div class="container">
  	<div class="row">	
  		<!-- post -->
  		@foreach($slides as $sl)
  		<div class="col-md-6">
  			<div class="post post-thumb">
  				<a class="post-img" href="{{ url('detail/'.$sl->kampung_id) }}"><img style="height: 400px" src="{{ asset('uploads/'.$sl->gambar) }}" alt=""></a>
  				<div class="post-body">
  					<div class="post-meta">
  						<a class="post-category cat-2" href="{{ url('kampung/kategori/'.$sl->id) }}">{{ $sl->kategori }}</a>
  						<span class="post-date">{{ date('d M Y',strtotime($sl->created_at)) }}</span>
  					</div>
  					<h3 class="post-title"><a href="{{ url('detail/'.$sl->kampung_id) }}">{{ $sl->judul }}</a></h3>
  				</div>
  			</div>
  		</div>
  		@endforeach
  		<!-- /post -->
  	</div>
   <!-- row -->
   <div class="row">
    <div class="col-md-8">
     <div class="row">
      <div class="col-md-12">
       <div class="section-title">
        <h2>Recent Posts</h2>
      </div>
    </div>
    <!-- post -->

    @foreach($kampung as $kp)
    <div class="col-md-12">
     <div class="post post-row">
      <a class="post-img" href="{{ url('detail/'.$kp->kampung_id) }}"><img src="{{ asset('uploads/'.$kp->gambar) }}" alt=""></a>
      <div class="post-body">
       <div class="post-meta">
        <a class="post-category cat-2" href="{{ url('kampung/kategori/'.$kp->id) }}">{{ $kp->kategori }}</a>
        <span class="post-date">{{ date('d M Y',strtotime($kp->created_at)) }}</span>
      </div>
      <h3 class="post-title"><a href="{{ url('detail/'.$kp->kampung_id) }}">{{ $kp->judul }}</a></h3>
      <p>{!! substr($kp->isi,0,490) !!}... </p>
    </div>
  </div>
</div>
@endforeach
{{ $kampung->links() }}
<!-- /post -->

<!-- post -->

<!-- /post -->

<!-- post -->

<!-- /post -->

<!-- post -->

<!-- /post -->

</div>
</div>

<div class="col-md-4">


<!-- catagories -->
<div class="aside-widget">
  <div class="section-title">
   <h2>Catagories</h2>
 </div>
 <div class="category-widget">
   <ul>
   	<?php
   		$kategoris = \DB::table('kategori')->get();
   	?>
   	@foreach($kategoris as $kt)
   	<?php
   		$total = \DB::table('kampung')->where('kategori_id',$kt->id)->count();
   	?>
    <li><a href="{{ url('kampung/kategori/'.$kt->id) }}" class="cat-1">{{ $kt->nama }}<span>{{ $total }}</span></a></li>
    @endforeach
  </ul>
</div>
</div>
<!-- /catagories -->

<!-- tags -->

<!-- /tags -->
</div>
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>

@endsection