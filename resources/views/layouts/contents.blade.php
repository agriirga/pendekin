<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            
            <div class="text-center text-white">
                <h1 class="mb-5">Let us shorten your favourites links !!</h1>
            </div>

            <div class="col-md-12">
                <div class = "row mb-5">    
                    <form class="form-subscribe" action="{!! route('shortlink.store') !!}" method="post">
                            @csrf            
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="urlAddress" name="urlAddress"  placeholder="Paste your url here"  />
                                    </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg " id="submitButton" type="submit">Get Short !!</button></div>
                            </div>            
                    </form>
                </div>
                
                <!-- Menampilkan pesan errror dari ShortlinkController  -->
                @if ($errors->any())
                    <div class="row">
                        <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>
                @endif

                <!-- Menampilkan pesan sukses dari ShortlinkController  -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif

            </div>
        </div> 
    </div>
</header>

<!-- Icons !-->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="bi-window m-auto text-primary"></i>
                    </div>
                    <h1>{{$shortlink_count}}</h1>
                    <p class="lead mb-0">URLs Shorted</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="bi-layers m-auto text-primary"></i>
                    </div>
                    <h1>{{$visitor_count}}</h1>
                    <p class="lead mb-0">Shortlink visited</p>
                </div>
            </div>
            
        </div>
    </div>
</section>


<!-- Image Showcases-->
<section class="showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Easy To Remember</h2>
                <p class="lead mb-0">Your url are easy to Remember, with shorten url</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Forever Free</h2>
                <p class="lead mb-0">Just put up your link, we'll make shorter for you. <b>No Fee required <b> </p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Always accessible</h2>
                <p class="lead mb-0">Your link always accessible, It will automatically deactivate in 60 days after last hit. </p>
            </div>
        </div>
    </div>
</section>
