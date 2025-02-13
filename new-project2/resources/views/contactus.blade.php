@include('navbar')
@vite('resources/css/welcome.css') <!-- or @asset if not using Vite -->

<section id="Contact" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1>
                    HelLo 
                </h1>
                <p>
                {{ __('message.paragraph') }}
                </p>
            </div>
        </div>
    </div>
</section>