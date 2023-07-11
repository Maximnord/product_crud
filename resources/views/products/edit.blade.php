@extends('layouts.app')
@section('content')
    <main class="container">
        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <section>
                <div class="titlebar">
                    <h1>Edit Product</h1>
                    <button>Save</button>
                </div>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="{{ $product->name }}">
                        <label>Description (optional)</label>
                        <textarea cols="10" rows="5" name="description" value="{{ $product->description }}">{{ $product->description }}</textarea>
                        <label>Add Image</label>
                        <img src="{{ asset('images/'.$product->image) }}" alt="" class="img-product" id="filePreview" />
                        <input type="hidden" name="hidden_product_image" value="{{ $product->image }}" />
                        <input type="file" name="image" accept="image/*" onchange="showFile(event)">
                    </div>
                    <div>
                        <label>Category</label>
                        <select name="category" id="">
                            @foreach (json_decode('{"Smartphone": "Smartphone", "Smart TV": "Smart TV", "Computer": "Computer"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($product->sategory)&& $product->sategory== $optionKey) ? 'selected' : '' }}>{{ $optionValue }}</option>
                            @endforeach

                        </select>
                        <hr>
                        <label>Inventory</label>
                        <input type="text" class="input" name="quantity" value="{{ $product->quantity }}">
                        <hr>
                        <label>Price</label>
                        <input type="text" class="input" name="price" value="{{ $product->price }}">
                    </div>
                </div>
                <div class="titlebar">
                    <input type="hidden" name="hidden_id" value="{{ $product->id }}" />
                    <button>Save</button>
                </div>
            </section>
        </form>

    </main>
    <script>
        function showFile(event) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const dataUrl = reader.result;
                const output = document.getElementById('filePreview');
                output.src = dataUrl;
            }
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
