@extends('master')
@section('content')
	
	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{route('mainpage')}}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th> No </th>
							<th > photo </th>
							<th> Name </th>
							<th> Price </th>
							<th> discount </th>
							<th>total</th>
							<th> qty</th>
							<th> Remove </th>



						</tr>
					</thead>
					<tbody id="tbody">
						

					</tbody>
					<tfoot id="shoppingcart_tfoot">
						
						<tr> 
							<td colspan="5"> 
								<textarea class="form-control notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="3">
								@role('Customer')
								<button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn" type="submit"> 
									Check Out 
								</button>
								@else
								<a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn" type="submit"> 
									Login to Check Out
								</a>
								@endrole
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			<div class="col-12">
				<h5 class="text-center"> There are no items in this cart </h5>
			</div>

			<div class="col-12 mt-5 ">
				<a href="categories" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>

		</div>
		

	</div>
	@endsection