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
                    @foreach ($orders as $item)
                      <tr>
                        <td>{{ $item->invoice_no }}</td>
                        <td>{{ $item->payment_type }}</td>
                        <td>{{ $item->subtotal }} zl</td>
                        <td>{{ $item->total }} zl</td>
                        <td>
                            <a href="{{ url('user/order-view/'.$item->id) }}" class="btn btn-danger btn-sm">Zobacz</a>
                        </td>
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
