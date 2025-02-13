@include('navbar')
@vite('resources/css/welcome.css')

<section id="About" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1>
                    This is about us Section
                </h1>
                <p>
                {{ __('message.paragraph') }}
                </p>
            </div>
        </div>
    </div>
</section>