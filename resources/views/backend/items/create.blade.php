@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1></div>
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('items.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<label for="inputcode" class="col-sm-2 col-form-label">Code No</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputcode" name="codeno">
							<span class="text-danger">{{$errors->first('codeno')}}</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputname" class="col-sm-2 col-form-label">name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name">
							<span class="text-danger">{{$errors->first('name')}}</span>

						</div>
					</div>

					<div class="form-group row">
						<label for="file" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" class="form-control-file" id="file" name="photo">
							<span class="text-danger">{{$errors->first('photo')}}</span>

						</div>
					</div>
					<div class="form-group row">
						<label for="price" class="col-sm-2 col-form-label">Price</label>
						<div class="col-sm-10">
							<input type="number" name="price" class="form-control">
							<span class="text-danger">{{$errors->first('price')}}</span>

						</div>
					</div>

					<div class="form-group row">
						<label for="discount"  class="col-sm-2 col-form-label">Discount</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" id="discount" value="0" name="discount" >
							<span class="text-danger">{{$errors->first('discount')}}</span>

						</div>
					</div>
					  <div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="description" rows="3" name="description"></textarea>
							<span class="text-danger">{{$errors->first('description')}}</span>

						</div>
					</div>

					<div class="form-group row">
						<label for="brand" class="col-sm-2 col-form-label">Brand</label>
						<div class="col-sm-5">

							<select class="form-control form-control-md" id="inputBrand" name="brand">
								<optgroup label="Choose Brand">
									@foreach($brands as $brand)
									<option value="{{$brand->id}}">{{$brand->name}}</option>
									@endforeach
								</optgroup>
							</select> 
							<span class="text-danger">{{$errors->first('brand')}}</span>

						</div>
					</div>
					<div class="form-group row">
						<label for="subcategory" class="col-sm-2 col-form-label">Subcategory</label>
						<div class="col-sm-5">
							<select class="form-control form-control-md" id="inputcategory" name="subcategory">
								<optgroup label="Choose Category">
									@foreach($subcategories as $subcategory)
									<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
									@endforeach
								</optgroup>
							</select> 
							<span class="text-danger">{{$errors->first('subcategory')}}</span>

						</div>
					</div>


					<div class="form-group row">
						<label class="col-sm-2 col-form-label"></label>
						<div class="col-sm-10">
							<button type="submit" class="btn btn-success mr-5">Create</button>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>


	@endsection
