@extends('layouts.front_end')

@section('content')
<!-- Header -->
<header id="home" class="header text-white h-fullscreen text-center text-lg-left" style="background-color: #24292e">
    <canvas class="constellation" data-color="rgba(255,255,255,0.3)" width="1920" height="1103"></canvas>
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-lg-6">
                <h1>How developers work</h1>
                <p class="lead mt-5 mb-8">Support your workflow with lightweight tools and features. Then work how you work best—we'll follow your lead.</p>
                <p class="gap-xy">
                    <a class="btn btn-round btn-outline-light mw-150" href="#">Learn more</a>
                    <a class="btn btn-round btn-light mw-150" href="#">Sign up</a>
                </p>
            </div>

            <div class="col-lg-5 ml-auto">
                <img class="mt-5" src="images/laptop-1.png" alt="img">
            </div>

        </div>
    </div>
</header><!-- /.header -->


<!-- Main Content -->
<main class="main-content">

</main>
@endsection