<div class="hero__categories">
    <div class="hero__categories__all">
        <i class="fa fa-bars"></i>
        <span>Category</span>
    </div>
    @php
       $categoriess = App\Category::where('status',1)->latest()->get();
    @endphp
    <ul>
        @foreach ($categoriess as $row)
        <li><a href="{{ url('category/product-show/'.$row->id) }}">{{ $row->category_name }}</a></li>
        @endforeach
    </ul>
</div>
