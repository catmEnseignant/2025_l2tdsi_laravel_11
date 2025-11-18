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
                      <th scope="col">BINETOU</th>
                      <th scope="col">CATM</th>
                      <th scope="col">FABY</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>John</td>
                      <td>Doe</td>
                      <td>@social</td>
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