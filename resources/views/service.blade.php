@extends("layouts/admin/master")
@section("content")
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Services</h3>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <!--begin::Col-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">n°</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Spécialités</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Moussa</td>
                                <td>Gueye</td>
                                <td>mousse04gueye@gmail.com</td>
                                <td>CARDIO</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ndeye Ngoné</td>
                                <td>Mbodje</td>
                                <td>ndeyengonembodje0@gmail.com</td>
                                <td>PNEUMO</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Awa Cheikh</td>
                                <td>Diagne</td>
                                <td>awacheikh111diagne@gmail.com</td>
                                <td>GENICO</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Pape Guilé</td>
                                <td>Diagne</td>
                                <td>papidiagne05@gmail.com</td>
                                <td>NEURO</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->

                <!-- /.row (main row) -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
@endsection