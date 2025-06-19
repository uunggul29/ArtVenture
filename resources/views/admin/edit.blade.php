<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 60px;
    }

    h1 {
      color: white;
    }

    label {
      display: inline-block;
      width: 250px;
      font-size: 18px;
      color: white;
    }

    input[type='text'],
    input[type='number'] {
      width: 350px;
      height: 50px;
    }

    textarea {
      width: 450px;
      height: 80px;
    }
  </style>

  @include('admin.css')
</head>

<body>
  <header class="header">
    @include('admin.header')
  </header>

  @include('admin.sidebar')

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
            
            <a href="{{url('view_produk')}}" class="btn btn-info">
                <i class="bi bi-plus-circle"></i> Back
            </a>

            <h2 class="text-center mb-4">Edit Artwork</h2>

        <div class="div_deg">
          <form action="{{ route('update_produk', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="">
              <label for="">Name Artwork</label>
              <input type="text" name="title" value="{{ $produk->title }}" required>
            </div><br>

            <div class="">
              <label for="">Price</label>
              <input type="number" name="price" value="{{ $produk->price }}" required>
            </div><br>

            <div class="">
              <label for="">Category</label>
              <select name="category" required>
                <option value="">Choose Category</option>
                @foreach ($product as $p)
                <option value="{{ $p->product_name }}" {{ $produk->category == $p->product_name ? 'selected' : '' }}>
                  {{ $p->product_name }}
                </option>
                @endforeach
              </select>
            </div><br>

            <div class="">
              <label for="">Description</label>
              <textarea name="description" required>{{ $produk->description }}</textarea>
            </div><br>

            <div class="">
              <label for="">Quantity</label>
              <input type="number" name="quantity" value="{{ $produk->quantity }}" required>
            </div><br>

            <div class="">
              <label for="">Artwork Image <br>(leave blank if you don't want to change)</label>
              <input type="file" name="image">
              @if ($produk->image)
              <br><img src="{{ asset('produk/' . $produk->image) }}" width="100">
              @endif
            </div><br>

            <div style="display: flex; justify-content: center;">
              <input class="btn btn-info" type="submit" value="Update Artwork">
            </div>

          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- JavaScript files -->
  <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
  <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
  <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>