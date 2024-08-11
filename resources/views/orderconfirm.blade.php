<!DOCTYPE html>
<html>
<head>
    <!-- Add your email styles here -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
 </head>
<body>
   
    <p> We're excited to confirm your CFashion order#{{ $orderNumber }} and share the essentials:</p>
   <style>
       body {
  background: #F8F8F8;
}

/* ============================================================
	Responsive Table via Data Label
============================================================ */
table{
    border:0;
    width: 100%;
    margin:0;
    padding:0;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 1px 1px rgba(0,0,0,.3);
	thead{
        background: #F0F0F0;
        height: 60px!important;
		tr{
			th:first-child{
				padding-left:45px;
			}
			th{
				text-transform: uppercase;
				line-height:60px!important;
				text-align: left;
				font-size:11px;
				padding-top:0px!important;
 				padding-bottom:0px!important;
			}
		}
	}
	tbody{
		background: #fff;
		tr{
			border-top:1px solid #e5e5e5;
      height: 60px;
			td:first-child{
				padding-left:45px;
			}
			td{
        height: 60px;
        line-height: 60px!important;
				text-align: left;
				padding:0 10px;
				font-size:14px;
				
				i{
					margin-right:8px;
				}
			}
		}
	}
}
@media screen and (max-width: 800px) {
	table{
		border: 1px solid transparent;
    box-shadow: none;
		thead{
			display: none;
		}
		tbody{
			tr{
				border-bottom: 45px solid #F8F8F8;
				td:first-child{
					padding-left:10px;

				}
				td:before{
					content: attr(data-label);
					float: left;
					font-size:10px;
					text-transform: uppercase;
					font-weight: bold;
				}
				td{
					display: block;
					text-align: right;
					font-size: 14px;
          padding: 0px 10px!important;
          box-shadow: 0 1px 1px rgba(0,0,0,.3);
				}
			}
		}
	}	
}
   </style>
      
  <div class="container" style="max-width: 600px;">
    <h4>Order Summary:</h4>
    <table class="table" style="width: 100%;">
        <thead>
            <tr>
                <th style="text-align: left;">Product Name:</th>
                <th>Price:</th>
                <th>Size:</th>
                <th>Quantity:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productDetails as $item)
            <tr>
                <td data-label="Product Name">{{ $item->name }}</td>
                <td data-label="Price">{{ $item->price }}</td>
                <td data-label="Size">{{ $item->sizes }}</td>
                <td data-label="Quantity">{{ $item->qty }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   <p style="text-align: center;">
    <span style="display: inline-block; text-align: center;">Total Price:</span>
    <span style="display: inline-block; text-align: center">{{ $ordertotalprice }}</span>
    
</p>
</div>

<!--  <h4>Order Summary:</h4>-->
<!-- @foreach ($productDetails as $item)-->
<!--    Product Name: {{ $item->name }}-->
<!--    Price: {{ $item->price }}-->
<!--    Size: {{ $item->sizes }}-->
<!--    Quantity: {{ $item->qty }}-->
<!--@endforeach-->
  <br>
  <h4>Delivery Details:</h4>
  <p>Address:{{$orderaddress}}</p>
  <p>Mobile:{{$ordercontact}}</p>
  <p>Delivery Partner:Delivery</p>
  <!--<p>Estimated Delivery Date:</p>-->
    <br>
    <p>Track your order on our website once it ships. Need assistance? Contact us at {{$orderemail}} or {{$contactid}}.
    <br>
    <p>Thanks for choosing CFashion!</p>
    <br>
    <p>Best regards,</p>
    <p>{{ $firstname }} {{$orderlastname}}</p>
    <p>CFashion</p>
    
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>