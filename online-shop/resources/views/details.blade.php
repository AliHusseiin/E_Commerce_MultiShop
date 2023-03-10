    @extends('main')
    @section('content')
        <!-- Breadcrumb Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light mb-30">
                        <a class="breadcrumb-item text-dark" href="#">Home</a>
                        <a class="breadcrumb-item text-dark" href="#">Shop</a>
                        <span class="breadcrumb-item active">Shop Detail</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Shop Detail Start -->
        <div class="container-fluid pb-5">
            <div class="row px-xl-5">
                <div class="col-lg-5 mb-30">
                    <div id="product-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner bg-light">
                            <div class="carousel-item active">
                                <img class="w-100 h-100" src="{{ asset('storage/' . $product['image']) }}" alt="Image">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                            <i class="fa fa-2x fa-angle-left text-dark"></i>
                        </a>
                        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                            <i class="fa fa-2x fa-angle-right text-dark"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 h-auto mb-30">
                    <div class="h-100 bg-light p-30">
                        <h3>{{ $product['name'] }}</h3>
                        <div class="d-flex mb-3">
                            <div class="text-primary mr-2">
                                @include('stars')
                            </div>
                            <small class="pt-1">({{ count($reviews) }} Reviews)</small>
                        </div>
                        <h3 class="font-weight-semi-bold mb-4">${{ $product['price'] }}</h3>
                        <p class="mb-4">{{ $product['description'] }}</p>
                        <div class="d-flex mb-3">
                            <strong class="text-dark mr-3">Sizes:</strong>
                            <form>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-1" name="size">
                                    <label class="custom-control-label" for="size-1">XS</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-2" name="size">
                                    <label class="custom-control-label" for="size-2">S</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-3" name="size">
                                    <label class="custom-control-label" for="size-3">M</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-4" name="size">
                                    <label class="custom-control-label" for="size-4">L</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="size-5" name="size">
                                    <label class="custom-control-label" for="size-5">XL</label>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex mb-4">
                            <strong class="text-dark mr-3">Colors:</strong>
                            <form>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-1" name="color">
                                    <label class="custom-control-label" for="color-1">Black</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-2" name="color">
                                    <label class="custom-control-label" for="color-2">White</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-3" name="color">
                                    <label class="custom-control-label" for="color-3">Red</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-4" name="color">
                                    <label class="custom-control-label" for="color-4">Blue</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="color-5" name="color">
                                    <label class="custom-control-label" for="color-5">Green</label>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex align-items-center mb-4 pt-2">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control bg-secondary border-0 text-center"
                                    value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"
                                    onclick="addProductToSession({{ $product['id'] }})"></i> Add To
                                Cart</button>
                        </div>
                        <div class="d-flex pt-2">
                            <strong class="text-dark mr-2">Share on:</strong>
                            <div class="d-inline-flex">
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a class="text-dark px-2" href="">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="bg-light p-30">
                        <div class="nav nav-tabs mb-4">
                            <a class="nav-item nav-link text-dark active" data-toggle="tab"
                                href="#tab-pane-1">Description</a>
                            <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                            <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Reviews
                                ({{ count($reviews) }})</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <h4 class="mb-3">Product Description</h4>
                                <p>{{ $product['description'] }}
                                </p>
                                <p>{{ $product['description'] }}
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-2">
                                <h4 class="mb-3">Additional Information</h4>
                                <p>{{ $product['description'] }}
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                            <li class="list-group-item px-0">
                                                {{ $product['description'] }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-3">
                                <div class="row">
                                    <div class="col-md-6">

                                        <h4 class="mb-4">{{ count($reviews) }} review for
                                            "{{ $product['name'] }}"</h4>
                                        @foreach ($reviews as $review)
                                            <div class="media mb-4">

                                                <div class="media-body">
                                                    <h6>{{ $review->user->name }}<small> -
                                                            <i>{{ $review->created_at }}</i></small></h6>
                                                    <div class="text-primary mb-2">
                                                        @php
                                                            $product['rating'] = $review['rating'];
                                                        @endphp
                                                        @include('stars')

                                                    </div>
                                                    <p>{{ $review['review'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="col-md-6">
                                        <form method="POST" action="{{ url('/details/' . ($id = $product->id)) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @if ($message = Session::get('done'))
                                                <div class="alert alert-success alert-block">
                                                    <button type="button" class="close" data-dismiss="alert">??</button>
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @else
                                                <h4 class="mb-4">Leave a review</h4>
                                                <small>Your email address will not be published. Required fields are marked
                                                    *</small>
                                                <div class="d-flex my-3">
                                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                                    <div id="rateYo">

                                                    </div>
                                                    {{-- <div class="text-primary">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div> --}}
                                                </div>

                                                <div class="form-group">


                                                    <label for="message">Your Review *</label>
                                                    <textarea name="review" id="message" cols="30" rows="5" class="form-control"></textarea>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="name">Your Name *</label>
                                                    <input type="text" class="form-control" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Your Email *</label>
                                                    <input type="email" class="form-control" id="email">
                                                </div> --}}
                                                <div class="form-group mb-0">
                                                    <input type="submit" value="Leave Your Review"
                                                        class="btn btn-primary px-3">
                                                </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Detail End -->


        <!-- Products Start -->
        <div class="container-fluid py-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You
                    May Also Like</span></h2>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel related-carousel">
                        @foreach ($products as $product)
                            <div class="product-item bg-light">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('storage/' . $product['image']) }}"
                                        alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href="">${{ $product['name'] }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>{{ $product->getPriceWithDiscount() }}</h5>
                                        <h6 class="text-muted ml-2"><del>${{ $product['price'] }}
                                            </del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        @include('stars')
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->
    @endsection
    @section('scripts')
        <script>
            $(function() {

                $("#rateYo").rateYo({
                    rating: 1.5,
                    halfStar: true
                });
            });
            // Getter
            let normalFill = $("#rateYo").rateYo("option", "halfStar"); //returns true

            // Setter
            $("#rateYo").rateYo("option", "halfStar", true); //returns a jQuery Element
        </script>
    @endsection
