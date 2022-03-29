@extends('layouts.fontend-master')
@section('content')

  <!-- Hero Section Begin -->
  <section class="hero hero-normal">
    @include('pages.inc.hero')
  </section>
<!-- Hero Section End -->
<section class="shoping-cart spad">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            @include('pages.profile.inc.sidebar')
        </div>
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Order number</th>
                        <th scope="col">Payment type</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $order->invoice_no }}</td>
                        <td>{{ $order->payment_type }}</td>
                        <td>{{ $order->subtotal }} zl</td>
                        <td>{{ $order->total }} zl</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>


</div>

<div class="row mt-5">
    <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">First name</th>
                          <th scope="col">Last name</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">Country</th>
                          <th scope="col">Post code</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{ $shipping->shipping_first_name }}</td>
                          <td>{{ $shipping->shipping_last_name }}</td>
                          <td>{{ $shipping->shipping_email }}</td>
                          <td>{{ $shipping->shipping_phone }}</td>
                          <td>{{ $shipping->address }}</td>
                          <td>{{ $shipping->state }}</td>
                          <td>{{ $shipping->post_code }}</td>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>
      </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Image </th>
                          <th scope="col">Product name</th>
                          <th scope="col">Product code</th>
                          <th scope="col">Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($orderitems as $item)
                        <tr>
                          <td>
                              <img src="{{ asset($item->product->image_one) }}" height="60px;" width="60px;" alt="">
                          </td>
                          <td>{{ $item->product->product_name }}</td>
                          <td>{{ $item->product->product_code }}</td>
                          <td>{{ $item->product_qty }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
              </div>
            </div>
      </div>
    </div>
</div>
</section>
<section class="from-blog spad">
    </section>
@endsection
