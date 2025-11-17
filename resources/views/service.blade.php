@extends("layouts/admin/master")
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
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Sokhna</td>
                      <td>TOP</td>
                      <td>topsokhna577@gmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Salimata</td>
                      <td>Fall</td>
                      <td>sali123@gmail.com</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Binetou Rassoul</td>
                      <td>Seye</td>
                      <td>seye456@gmail.com</td>
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