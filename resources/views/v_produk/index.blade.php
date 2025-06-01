@extends('v_layouts/app')
@section('content')
    <!-- STORE -->
    <div id="store">
        <!-- row -->
        <div class="row">
            @foreach ($produk as $row)
                <!-- Product Single -->
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="product product-single">
                        <div class="product-thumb">
                            <div class="product-label">
                                <span>Kategori</span>
                                <span class="sale">{{ $row->kategori->nama_kategori }}</span>
                            </div>
                            <a href="{{ route('produk.detail', $row->id) }}">
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Detail Produk</button>
                            </a>
                            <img src="{{ asset('storage/img-produk/thumb_md_' . $row->foto) }}" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-price">Rp{{ number_format($row->harga, 0, ',', '.') }} <del
                                    class="product-old-price">Rp{{ number_format($row->harga * 1.2, 0, ',', '.') }}</del></h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <h2 class="product-name"><a href="#">{{ $row->nama_produk }}</a></h2>
                            <div class="product-btns">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i>
                                    Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Product Single -->
            @endforeach
            <div class="clearfix visible-md visible-lg visible-sm visible-xs"></div>
        </div>
        <!-- /row -->
    </div>
    <!-- /STORE -->
@endsection

@section('pagination')
    @include('vendor.pagination.template')
@endsection