@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1></div>
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<div class="form-group row">
						<label for="inputcode" class="col-sm-2 col-form-label">Code No</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputcode" name="codeno" value="{{$item->codeno}}" readonly="readonly">

						</div>
					</div>
					<div class="form-group row">
						<label for="inputname" class="col-sm-2 col-form-label">name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" value="{{$item->name}}">
						</div>
					</div>

					<div class="form-group row">
						<label for="file" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" class="form-control-file" id="file" name="photo" >

							<img src="{{ asset($item->photo)}}" class="img-fluid w-5">
							<input type="hidden" name="oldphoto" value="{{$item->photo}}">
						</div>
					</div>
					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-10">
							<input type="number" name="price" class="form-control"  value="{{$item->price}}">
						</div>
					</div>

					<div class="form-group row">
						<label for="discount"  class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="discount"  value="{{$item->discount}}" name="discount" >
						</div>
					</div>
					  <div class="form-group row" >
						<label for="description" class="col-sm-2 col-form-label" >Description</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="description" rows="3" name="description"  >
								{{$item->description}}
							</textarea>
						</div>
					</div>

					<div class="form-group row">
						<label for="brand" class="col-sm-2 col-form-label">Brand</label>
						<div class="col-sm-5">

							<select class="form-control form-control-md" id="inputBrand" name="brand"  value="{{$item->brand}}">
								<optgroup label="Choose Brand">
									@foreach($brands as $brand)
									<option value="{{$brand->id}}">{{$brand->name}}</option>
									@endforeach
								</optgroup>
							</select> 
						</div>
					</div>
					<div class="form-group row">
						<label for="subcategory" class="col-sm-2 col-form-label">Subcategory</label>
						<div class="col-sm-5">
							<select class="form-control form-control-md" id="inputcategory" name="subcategory"  value="{{$item->subcategory}}">
								<optgroup label="Choose Category">
									@foreach($subcategories as $subcategory)
									<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
									@endforeach
								</optgroup>
							</select> 
						</div>
					</div>


					<div class="form-group row">
						<label class="col-sm-2 col-form-label"></label>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-success mr-5">Update</button>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>


	@endsection
