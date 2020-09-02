

$(document).ready(function() {
	 showdata();
	 shownoticount();
	 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	$('.btn_add_to_cart').click(function(){
		var id=$(this).data('id');
		var name=$(this).data('name');
		var photo=$(this).data('photo');
		var price=$(this).data('price');
		var discount=$(this).data('discount');

		// console.log(id);
		// console.log(name);
		// console.log(photo);
		// console.log(price);
		// console.log(discount);
	


data = {
				id:id,
				name:name,
				photo:photo,
				price:price,
				discount:discount,
				qty:1
			};
		// console.log(typeof(item));
		// typeof = get data tyep eg(array||object||string)


		var mycart = localStorage.getItem('item');
		// if we do not have localstorage create new array


		if(!mycart){
			var myitem = new Array();
		}else{
			var myitem = JSON.parse(mycart);
		}



		var hasid = false;
		$.each(myitem,function(i,v){
			if(v.id == id){
				hasid = true;
				v.qty++;
			}
		})
		if(!hasid){
			myitem.push(data);
		}
		// console.log(data);

		localStorage.setItem('item', JSON.stringify(myitem));
		showdata();
		shownoticount();


	});


	function showdata(){
		var mycart = localStorage.getItem('item');
		if(mycart){
			var mycart_obj = JSON.parse(mycart);
			var html='';
			var showtable = "";
			var j = 1;
				var total=0;
			// loop obj
			$.each(mycart_obj,function(i,v){
				var subtotal = v.qty*v.price;
				total+=subtotal;
				showtable += `<tr>
								<td>${j++}</td>
								<td><img src="${v.photo}" width = '120px' height = '100px'></td>
								<td>${v.name}</td>
								<td>${v.price}</td>
								<td>${v.discount}</td>

								<td class="text-dark font-weight-bold">${v.price*v.qty}</td>

								<td>
									<button class="btn btn-outline-secondary plus_btn" data-id="${i}"> 
									+ 
								</button>
									<span class="qty">${v.qty}</span>
									
                                   <button class="btn btn-outline-secondary minus_btn" data-id="${i}"> 
									-
								</button>
								</td>
								<td>
                              <button class="btn btn-outline-danger remove btn-sm" style="border-radius: 50%" data-id="${i}"> 
									x
								</button> 		
										</td>
							</tr>`;

			});
             showtable+=`<tr><td colspan=5>Total</td>
             <td>${total}</td></tr>`;
             $('#tbody').html(showtable);

		}
	}



	//qty plus
	$('#tbody').on('click','.plus_btn',function(){
		var id = $(this).data('id');
		var mycart = localStorage.getItem('item');
		if(mycart)
		{
			var mycart_obj = JSON.parse(mycart);
			$.each(mycart_obj,function(i,v){
				if (i == id) {
					v.qty++;
				}
			});
			localStorage.setItem('item',JSON.stringify(mycart_obj));
			showdata();
			shownoticount();
		}

	})


	// qty minus

	$('#tbody').on('click','.minus_btn',function(){
		var id = $(this).data('id');
		var mycart = localStorage.getItem('item');
		if(mycart)
		{
			var mycart_obj = JSON.parse(mycart);
			$.each(mycart_obj,function(i,v){
				if (i == id) {
					v.qty--;

					if(v.qty==0)
					{
						var ans = confirm("Are you sure to reduce?");
						if(ans){
							mycart_obj.splice(i,1);
						}else{
							v.qty=1;
						}
					}

				}

			});
			localStorage.setItem('item',JSON.stringify(mycart_obj));
			showdata();
			shownoticount();
		}
	})
//delete data
		$('#tbody').on('click','.delete',function(){
		var id = $(this).data('id');
		var mycart = localStorage.getItem('item');
		if(mycart)
		{
			var mycart_obj = JSON.parse(mycart);
			$.each(mycart_obj,function(i,v){
				if (i == id) {
					var ans = confirm("Are you sure to reduce?");
					if(ans){
						mycart_obj.splice(i,1);
					}else{
						v.qty=1;
					}
				}

			});
			localStorage.setItem('item',JSON.stringify(mycart_obj));
			showdata();
			shownoticount();
		}
	})

	function shownoticount(){
		var mycart = localStorage.getItem('item');
		if(mycart){
			var noti = 0;
			var mycart_obj = JSON.parse(mycart);
			$.each(mycart_obj,function(i,v){
				noti+=v.qty;
			});
			$('.cartnoti').html(noti);
		}
	}



$('.checkoutbtn').on('click',function(){

 	var notes=$('.notes').val();
 	var shopString=localStorage.getItem('item');
 	if(shopString){
 		$.post('orders',{shop_data:shopString,notes:notes},function(response){
 			if(response){
 				alert(response);
 				localStorage.clear();
 				getData();
 				location.href="/";
 			}
 		})
 	}
 })



})
