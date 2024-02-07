<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manajemen Siswa</h1>
        <nav>
            <div class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Siswa</li>
                </ol>
                @if (auth()->user()->hasRole('admin'))
                    <button type="submit" class="btn btn-primary">+ Tambah Siswa</button>
                @endif
            </div>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-15">
                <div class="row">


                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Default Table</h5>

                                <!-- Default Table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Age</th>
                                            <th scope="col">Start Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Brandon Jacob</td>
                                            <td>Designer</td>
                                            <td>28</td>
                                            <td>
                                                <form action="" method="">
                                                    @csrf
                                                    <a class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                                    @if (auth()->user()->hasRole('admin'))
                                                        <button class="btn btn-danger"><i
                                                                class="bi bi-trash"></i></button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Default Table Example -->
                            </div>
                        </div>

                    </div><!-- End Customers Card -->
                </div>
    </section>

</main>
