<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RealSource.co.za - Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom fonts for this template -->
  <link href="{{ URL::asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('assets/css/clean-blog.min.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href=""><img id="logo"  height="42" width="auto" src="{{ URL::asset('assets/img/logo.jpg') }}"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!--li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li-->
          <!--li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li-->
          <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li-->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://source.unsplash.com/random')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
          
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 style="font-size: 40px;">Welcome to realsource.co.za.</h1>
            <span class="subheading">Simplify the learning experience by providing models for academic papers and providing mental health support plan to neutralize the crippling effects of a demanding academic programme.</span>
          </div>
        </div>
          
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @if(count($posts) > 0)
          @foreach($posts as $post)
          <div class="post-preview">
          <a href="{{ route('blog-post', ['post' => $post->id]) }}">
              <h2 class="post-title">
                  {{$post->title}}
              </h2>
              <h3 class="post-subtitle">
                  {{$post->headline}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{$post->user->name}}</a>
              on {{(new DateTime($post->updated_at))->format('F d, Y')}}</p>
          </div>
          <hr>
        @endforeach
        {{$posts->links()}}
        @else
          <p>No posts found</p>  
        @endif
        
        <!-- Pager -->
        <!--div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div-->
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; RealSource.co.za 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ URL::asset('assets/js/clean-blog.min.js') }}"></script>
<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5c8956e5101df77a8be27261/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137233507-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137233507-1');
</script>

</body>

</html>
