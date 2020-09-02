@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Create Form</h1></div>
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('subcategories.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<label for="inputname" class="col-sm-2 col-form-label">name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name">
							<span class="text-danger">{{$errors->first('name')}}</span>

						</div>
					</div>

					<div class="form-group row">
						<label for="category" class="col-sm-2 col-form-label">Category</label>
						<div class="col-sm-5">
							<select class="form-control form-control-md" id="inputcategory" name="category">
								<optgroup label="Choose Category">
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</optgroup>
							</select> 
							<span class="text-danger">{{$errors->first('category')}}</span>

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
