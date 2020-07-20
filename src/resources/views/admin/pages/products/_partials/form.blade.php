@include('admin.includes.alerts')
@csrf
<div class="form-group"><input type="text" class="form-control" name="name" placeholder="Name" value="{{$product->name ?? old('name')}}"></div>
<div class="form-group"><input type="text" class="form-control" name="description" placeholder="Description" value="{{$product->description ?? old('description')}}"></div>
<div class="form-group"><input type="number" class="form-control" name="price" placeholder="Price" step="0.01" value="{{$product->price ?? old('price')}}"></div>
<div class="form-group"><input type="file" name="image"></div>