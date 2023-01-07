
@include('layouts.form')
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
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/remember.jpg')"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Easy To Remember</h2>
                <p class="lead mb-0">Your url are easy to Remember, with shorten url</p>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/free.jpg')"></div>
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

<script>
  function copyText() {

    // Get the text to be copied
    var link = document.getElementById("lblShortUrl").innerText;

    // Create a temporary element to hold the text
    var tempInput = document.createElement("input");
    tempInput.value = link;

    // Add the element to the document and select the text
    document.body.appendChild(tempInput);
    tempInput.select();

    // Copy the text
    document.execCommand("copy");
    
    // Remove the element from the document
    document.body.removeChild(tempInput);

    alert('Shortlink Copied to Clipboard: ' + link);
    
  }

  function shareOnWhatsApp() {

    // Get the text to be copied
    var link = document.getElementById("lblShortUrl").innerText;

    // Open a new window to the WhatsApp share URL
    window.open("https://wa.me/?text=" + link);
  }

  function shareOnTelegram() {
    // Get the text to be copied
    var link = document.getElementById("lblShortUrl").innerText;
 
    // Open a new window to the Telegram share URL
    window.open("https://t.me/share/url?url=" + link  );
  }
</script>
