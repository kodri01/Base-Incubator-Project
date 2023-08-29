@extends('layouts.admin')

@section('content')
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- name --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">Author</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="hidden" name="user_id" value=" {{ auth()->user()->id }}">

                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Input Author Name" aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2" name="doner_name" />
                            @error('doner_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- phone_number --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">phone number</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-phone"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="+628123xxxxx" aria-label="phone_number"
                                aria-describedby="basic-icon-default-fullname2" name="phone_number" />
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- city --}}
                    <div class="mb-3 ">
                        <label class="form-label" for="basic-icon-default-city">city</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-city" class="input-group-text"><i
                                    class="bx bx-buildings"></i></span>
                            <select name="city_id" id="city"
                                style="border-radius: 0 0.375rem 0.375rem 0; border-color:#d9dee3;" class="col-sm-2">
                                <option selected disabled>Select a City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    {{-- category --}}
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-category">category</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-category" class="input-group-text"><i
                                    class="bx bx-category"></i></span>
                            <select name="category_id" id="category"
                                style="border-radius: 0 0.375rem 0.375rem 0;  border-color:#d9dee3;" class="col-sm-2">
                                <option selected disabled>Select a Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- condition --}}
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-city">condition</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-city" class="input-group-text"><i class='bx bx-id-card'></i></span>
                            <select name="condition" id="condition"
                                style="border-radius: 0 0.375rem 0.375rem 0;  border-color:#d9dee3;" class="col-sm-2">
                                <option selected disabled>Select the Condition</option>
                                <option value="Poor">Poor</option>
                                <option value="Good">Good</option>
                                <option value="Excellent">Excellent</option>
                            </select>
                            @error('condition')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- title --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-email">Product Name</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-title"></i></span>
                            <input type="text" id="basic-icon-default-email" class="form-control"
                                placeholder="Enter your product name" aria-label="title"
                                aria-describedby="basic-icon-default-email2" name="title" />
                        </div>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- image --}}

                    <div class="row">
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="basic-icon-default-image">Image</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-image" class="input-group-text"><i
                                        class="bx bx-image"></i></span>
                                <input type="file" id="basic-icon-default-image" class="form-control phone-mask"
                                    aria-describedby="basic-icon-default-image" name="image" />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label text-white" for="basic-icon-default-image">Image</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-image" class="input-group-text"><i
                                        class="bx bx-image"></i></span>
                                <input type="file" id="basic-icon-default-image" class="form-control phone-mask"
                                    aria-describedby="basic-icon-default-image" name="image2" />
                                @error('image2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label text-white" for="basic-icon-default-image">Image</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-image" class="input-group-text"><i
                                        class="bx bx-image"></i></span>
                                <input type="file" id="basic-icon-default-image" class="form-control phone-mask"
                                    aria-describedby="basic-icon-default-image" name="image3" />
                                @error('image3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- description --}}
                    <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-phone">description</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bx-description"></i></span>
                            <textarea type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                placeholder="Description of product" aria-label="description" aria-describedby="basic-icon-default-phone2"
                                name="description" cols="30" rows="3"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{-- products_number --}}
                    {{-- <div class="mb-3 col-sm-7">
                        <label class="form-label" for="basic-icon-default-fullname">products number</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bx-products"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="products number" aria-label="products_number"
                                aria-describedby="basic-icon-default-fullname2" name="products_number" />
                            @error('products_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}


                    <button type="submit" class="btn btn-success">Add Product</button>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
