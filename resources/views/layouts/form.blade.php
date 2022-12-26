<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            
            <div class="text-center text-white">
                <div class="mb-5">
                <a href="https://trakteer.id/agri.kridanto/tip" target="_blank">
                    <img id="wse-buttons-preview" src="https://cdn.trakteer.id/images/embed/trbtn-green-5.png" style="border:0px;height:40px;" alt="Trakteer Saya" height="40"></a>
                </div>

                <h1 class="mb-5">Let us shorten your favorite links!!</h1>

            </div>

            

            <div class="col-md-12">
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
                     
                     <div class="col-md-12 alert alert-success">
                         <label id="lblShortUrl">{{Session::get('success')}}</label> 
                         <button class="btn btn-primary ms-2" id="btnCopy" onclick="copyText()">
                            <i class="fa-solid fa-copy"></i>
                         </button>        
                      </div>  
 
                 @endif

                <div class = "row mb-5">  
                    {!! NoCaptcha::renderJs() !!}  
                    <form class="form-subscribe" action="{!! route('shortlink.store') !!}" method="post">
                            @csrf            
                            <div class="row mb-3">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="urlAddress" name="urlAddress"  placeholder="Paste your long url here"  />
                                </div>
                            </div>           
                            
                            <div class="row mb-3">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="shortUrl" name="shortUrl"  placeholder="Your custom shortlink. example : myblog"  />
                                </div>
                            </div>           

                            <div class="row mb-5 justify-content-center">
                                <div class="col-auto">
                                    {!! app('captcha')->display() !!}
                                </div>

                            </div>

                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Get Short !!</button>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
               
            </div>
        </div> 
    </div>
</header>
