<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Vite or Asset CSS link -->
    @vite('resources/css/welcome.css')

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css">

</head>

<body>
    <section id="Main">
        <aside>
            <nav>
                <ul>
                    <livewire:button />
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
                        <div class="fun">
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
                                <div>2000+</div>
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

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.all.min.js"></script>


    <!-- Livewire Scripts -->
    @livewireScripts
</body>

</html>
