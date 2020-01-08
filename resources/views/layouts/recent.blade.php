<div class="section">
  <!-- container -->
  <div class="container">
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
    <?php
      $kampung = \DB::table('kampung as m')->join('kategori as k','k.id','=','m.kategori_id')->select('m.judul','m.isi','m.gambar','m.created_at','k.nama as kategori')->orderby('created_at','desc')->get();
    ?>

    @foreach($kampung as $kp)
    <div class="col-md-12">
     <div class="post post-row">
      <a class="post-img" href="blog-post.html"><img src="{{ asset('uploads/'.$kp->gambar) }}" alt=""></a>
      <div class="post-body">
       <div class="post-meta">
        <a class="post-category cat-2" href="category.html">{{ $kp->kategori }}</a>
        <span class="post-date">{{ date('d M Y',strtotime($kp->created_at)) }}</span>
      </div>
      <h3 class="post-title"><a href="blog-post.html">{{ $kp->judul }}</a></h3>
      <p>{!! substr($kp->isi,0,490) !!}... </p>
    </div>
  </div>
</div>
@endforeach
<!-- /post -->

<!-- post -->

<!-- /post -->

<!-- post -->

<!-- /post -->

<!-- post -->

<!-- /post -->

<div class="col-md-12">
 <div class="section-row">
  <button class="primary-button center-block">Load More</button>
</div>
</div>
</div>
</div>

<div class="col-md-4">
 <!-- ad -->
 <div class="aside-widget text-center">
  <a href="#" style="display: inline-block;margin: auto;">
   <img class="img-responsive" src="{{ asset('webmag/img/ad-1.jpg') }}" alt="">
 </a>
</div>
<!-- /ad -->

<!-- catagories -->
<div class="aside-widget">
  <div class="section-title">
   <h2>Catagories</h2>
 </div>
 <div class="category-widget">
   <ul>
    <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
    <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
    <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
    <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
  </ul>
</div>
</div>
<!-- /catagories -->

<!-- tags -->
<div class="aside-widget">
  <div class="tags-widget">
   <ul>
    <li><a href="#">Chrome</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">Tutorial</a></li>
    <li><a href="#">Backend</a></li>
    <li><a href="#">JQuery</a></li>
    <li><a href="#">Design</a></li>
    <li><a href="#">Development</a></li>
    <li><a href="#">JavaScript</a></li>
    <li><a href="#">Website</a></li>
  </ul>
</div>
</div>
<!-- /tags -->
</div>
</div>
<!-- /row -->
</div>
<!-- /container -->
</div>