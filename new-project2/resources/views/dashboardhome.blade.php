<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @livewireStyles
    @vite('resources/css/welcome.css') <!-- or @asset if not using Vite -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <section id="Main">
        
<aside>
    <nav>
        <ul>
           <livewire:button  />
        </ul>
    </nav>
</aside>

<section id="main-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12" id="column">
                <div class="div-header">
                <livewire:open-bar />
                <h1>Welcome to the Dashboard!</h1>
                </div>
                <div class="fun" >
                    <livewire:counter />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <h1>Total Users</h1>
                    <div class="card-body">2000+</div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <h1>Total Products</h1>
                    <div class="card-body">
                        <div >
                        2000+
                        </div>
                     </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card">
                    <h1>Total Followers</h1>
                    <div class="card-body">2000+</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <livewire:paragraph />
        </div>
    </div>
</section>
</section>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

@livewireScripts

</body>

</html>
