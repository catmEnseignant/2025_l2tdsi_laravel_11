@extends("layout/admin/master")
@section("content")
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Services</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ngoné</td>
      <td>Diop</td>
      <td>Mbao VilleNeuve</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Khady</td>
      <td>Mbacké</td>
      <td>Malika</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Cheikh</td>
      <td>Ndiaye</td>
      <td>Keur Mbaye Fall</td>
    </tr>
  </tbody>
</table>
            <!--end::Row-->
            <!--begin::Row-->

            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
        
      </main>
@endsection