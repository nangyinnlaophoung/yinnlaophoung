@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1></div>
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					
					<div class="form-group row">
						<label for="inputname" class="col-sm-2 col-form-label">name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" value="{{$subcategory->name}}">
						</div>
					</div>

					
					<div class="form-group row">
						<label for="category" class="col-sm-2 col-form-label">Category</label>
						<div class="col-sm-5">
							<select class="form-control form-control-md" id="inputcategory" name="category"  value="{{$subcategory->category}}">
								<optgroup label="Choose Category">
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
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
