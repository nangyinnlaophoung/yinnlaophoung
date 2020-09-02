@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brands Edit Form</h1></div>
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<div class="form-group row">
						<label for="inputname" class="col-sm-2 col-form-label">name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}">
						</div>
					</div>

					<div class="form-group row">
						<label for="file" class="col-sm-2 col-form-label">Photo</label>
						<div class="col-sm-10">
							<input type="file" class="form-control-file" id="file" name="photo" >

							<img src="{{ asset($brand->photo)}}" class="img-fluid w-5">
							<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
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
