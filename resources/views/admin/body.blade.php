<h2 class="text-center mb-4">Dashboard</h2>
</div>
<section class="no-padding-top no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fa fa-user"></i></div><strong>Total Customer</strong>
            </div>
            <div class="number">{{$user}}</div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fa fa-picture-o"></i></div><strong>Total Artwork</strong>
            </div>
            <div class="number">{{$produk}}</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fa fa-shopping-cart"></i></div><strong>Total Order</strong>
            </div>
            <div class="number">{{$order}}</div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="fa fa-truck"></i></div><strong>Total Delivered</strong>
            </div>
            <div class="number">{{$delivered}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>