@extends('layouts.home')

@section('content')
    <h1>Manage Order</h1>

    <div class="category">
      <button type="button" id="add_category" onclick="openForm()">Add Order</button>

      <!-- Add Category Form -->
      <div class="form-popup-product" id="myForm">
        <form action="/order" class="form-container-product" method="POST">
          <h1>Add Order</h1>

          @csrf
          <div class="theme-product">
            <span><b>Date: </b> 2023-11-06</span>
             <span><b>Time: </b> 05:47 pm</span>

          </div>




          <label class="col-sm-5 control-label" for="text"><b>Client Name</b></label>
          <input type="text" placeholder="Enter Client Name" name="name" required>

          <label for="text"><b>Client Address</b></label>
          <input type="text" placeholder="Enter Client Address" name="address" required>

          <label for="status"><b style="width:50%">Phone</b></label>
          <input type="text"  placeholder="Enter Client Phone" name="phone" required>
          <!-- <input type="password" placeholder="Enter Password" name="status" required> -->


          <div class="recent-orders belowtable">
          <table id="category_data">
            <thead>
              <tr>

                <th style="width:50%"><label for="product"><b>Product</b></label></th>
                <th style="width:10%">Qty</th>
                <th style="width:10%">Rate</th>
                <th style="width:20%">Amount</th>
                <th style="width:10%"><button onclick="addProductRow()" type="button" class="order-btn"><span class="material-icons-sharp">add</span></button></th>
              </tr>
            </thead>
            <tbody id = "product-table-body">



            </tbody>
          </table>
        </div>



          <label for="text"><b>Gross Amount</b></label>
          <input type="text" placeholder="Gross Amount" name="gamount" required readonly>

          <label for="text"><b>Shipping Charge</b></label>
          <input id="shipping_charge" type="number" placeholder="Category Name" name="charge" value="0" required>

          <label for="text"><b>Vat 13%</b></label>
          <input type="text" placeholder="Vat" name="vat" value="13" readonly>

          <label for="text"><b>Discount</b></label>
          <input id="discount" type="text" placeholder="Enter Discount" name="discount" value="0" required>

          <label for="text"><b>Net Amount</b></label>
          <input type="text" placeholder="Net Amount" name="namount" readonly>


          {{-- <button type="submit" class="btn"><span class="material-icons-sharp">print</span></button> --}}
        <a href="/bill"><button><span class="material-icons-sharp">print</span></button></a>
          <button type="submit" class="btn close">Save</button>
          <button class="close" id="close-btn" onclick="closeForm()">
            <span class="material-icons-sharp">close</span>
          </button>

          <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
      </div>

          <!--bill form-->
    <div class="form-popup category-form" id="edit-category-form">
           <form action="/bill" class="form-container-product" method="POST">
     @csrf
     @method('PATCH')
        {{-- <div class="wrapper" id="printableArea"> --}}
            <div class="invoice_wrapper">
                <div class="header">
                    <div class="logo_invoice_wrap">
                        <div class="logo_sec">
                            <img src="./images/logo.png" alt="code logo">
                            <div class="title_wrap">
                                <p class="bold">
                                    <h2>Cargo<span class="danger">REX</span></h2>
                                </p>
                                <h1 class="sub_title">Private Limited</h1>
                            </div>
                        </div>
                        <div class="invoice_sec">
                            <p class="invoice bold">INVOICE</p>
                            <p class="invoice_no">
                                <span class="bold">Invoice</span>
                                {{-- <input class="form-control" name="name" value="{{ $bills->name }}"> --}}
                                <span>Bill No</span>
                            </p>
                            <p class="date">
                                <span class="bold">Date</span>
                                <span>08/Jan/2022</span>
                            </p>
                        </div>
                    </div>
                    <div class="bill_total_wrap">
                        <div class="bill_sec">
                            {{-- <p>Bill To</p> --}}
                            <p class="bold name">Client Name</p>
                            <span>
                                Client Address<br />
                                Client Phone
                            </span>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <table id="bill">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Products</th>
                            <th>Rate</th>
                            <th>QTY</th>
                            <th>Amount</th>
                        </tr>
                    </thead>

                    <tbody>
          {{-- @if(isset($orders))
          @foreach($orders as $index => $order) --}}
                        <tr>
                            <td>1</td>
                            <td>Box</td>
                            <td>10</td>
                            <td>12</td>
                            <td>120</td>
                        </tr>
                                  {{-- @endforeach
          @endif --}}
                    </tbody>
                    </table>

                    <div class="paymethod_grandtotal_wrap">
                        <img src="./images/qrcode.png" class="image-card" alt="workers">
                        <div class="grandtotal_sec">
                            <p class="bold">
                                <span>Gross Amount</span>
                                <span>$7500</span>
                            </p>
                            <p>
                                <span>Service Charge (13%)</span>
                                <span>$200</span>
                            </p>
                            <p>
                                <span>VAT Charge (10%)</span>
                                <span>-$700</span>
                            </p>
                            <p>
                                <span>Discount</span>
                                <span>-$700</span>
                            </p>
                            <p class="bold">
                                <span>Net Amount</span>
                                <span>$7000.0</span>
                            </p>
                        </div>

                    </div>
                    <div class="total_wrap">
                        <h3>Bill Status</h3>
                        <select name="status" required style="width:100%;padding:15px;margin-bottom:20px;border:2px solid #7d8da1;">
                            <option>--Select status--</option>
                            <option value="1">Paid</option>
                            <option value="0">Unpaid</option>
                        </select>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </form>
    </div>

      <button type="button" id="export_button" class="excel">Excel</button>





    </div>

    <div class="recent-orders">
      <h2>Orders</h2>
      @if(isset($orders) && count($orders) > 0)
    <p>Total number of orders: {{ count($orders) }}</p>
@endif
      <table id="category_data">
        <thead>
          <tr>
            <th>Bill No</th>
            <th>Client</th>
            <th>Contact</th>
            <th>Date Time</th>
            <th>ProduCt Qty</th>
            <th>Amount</th>
            <th>Bill Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($orders))
          @foreach($orders as $index => $order)
          <tr class="height1">
            <td>{{$order['id']}}</td>
            <td>{{ $order['client_name'] }}</td>
            <td>{{ $order['client_phone'] }}</td>
            <td>{{ $order['created_at'] }}</td>
            <td>{{ count($order['products'])}}</td>
            <td>{{ $order['net_amount']}}</td>
            <td> {{  $order['is_paid'] ? 'Paid' : 'Not Paid' }} </td>
            <td class="action">
              <a href="/bill/{{ $order['id'] }}"><button><span class="material-icons-sharp">print</span></button></a>
              <a href="/order/delete/{{$order->id}}" onclick="return confirm('Are your sure?')"><button><span  class="material-icons-sharp">delete</span></button></a>
            </td>


          </tr>
          @endforeach
          @endif

        </tbody>
      </table>
    </div>
 @endsection

 @section('script')
 <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
 <script>
  var products = [];
  var current_product = [];
  var totalAmount = 0;

  var row_count = 0;

  $(document).ready(function(){
    fetchProducts();
      $(document).on('input', '.product-quantity', function() {
          // Find the closest row element
          var row = $(this).closest('tr');

          // Find the row index
          var rowIndex = row.index();
          updateProductRate(rowIndex)
      });

      $(document).on('input', '#shipping_charge', function() {
          let charge = $(this).val();
          calculateTotal()
      });

      $(document).on('input', '#discount', function() {
          let charge = $(this).val();
          calculateTotal()
      });
  });

  function addProductRow(){
    let productOptions = "";

    products.forEach(function(value, index){
      productOptions += `<option value="${value.id}">${value.name}</option>`
    });


    let row =  `<tr class="height1" id="row-${row_count}">

                <td>
                  <select id="product-${ row_count}" name="product[]" onchange="updateProductRate(${row_count})" required>
                    <option value="">Select the product</option>
                    ${productOptions}
                  </select>
                </td>
                <td><input class="product-quantity" id="product-quantity-${row_count}" type="number" min="1" value="1" placeholder="Enter Qty" name="qty[]" required></td>
                <td><input type="text"  placeholder="" id="product-rate-${row_count}" name="rate" readonly></td>
                <td><input id="product-amount-${row_count}" type="text"  placeholder="" name="amount" readonly></td>
                <td >
                  <button class="order-btn"><span class="material-icons-sharp">delete</span></button>
                </td>

                </tr>`;

      row_count++;

    $('#product-table-body').append(row);
  }


  function fetchProducts(){
    $.get("/getAllProducts", function(data, status){
      if(status === "success"){
        products = data.products;
        addProductRow();//Default 1 row
      }
    });
  }

  function updateProductRate(index){
    let product_id = $('#product-' + index).val()

    let p = products.filter(function(value){
        return value.id == product_id;
    });

    current_product = p;

    $('#product-rate-' + index).val(p[0].price)

    let quantity = $('#product-quantity-' + index).val();
    let amount = quantity * p[0].price;
    totalAmount += amount;
    $('#product-amount-' + index).val(amount);

    calculateTotal();

  }

  function calculateTotal(){
      let grossTotal = 0;
        console.log( typeof $("input[name='discount']").val());

      $('input[name="amount"]').map(function() {
          grossTotal += parseFloat($(this).val());
      });
      let shipping_charge = $("input[name='charge']").val();
      shipping_charge = (shipping_charge === '') ?  0 : shipping_charge;

      let discount = $("input[name='discount']").val();
      discount = (discount ==='') ?  0 : discount;

      let vat = 0.13 * grossTotal;
      let net_amount = grossTotal + vat + parseFloat(shipping_charge) - parseFloat(discount);
      $("input[name='gamount']").val(grossTotal)
      $("input[name='namount']").val(net_amount)
  }

  function updatePrice(row){
    let quantity = $('#product-quantity-' + row).val();
    let price = $('#product-rate-' + row).val();
    let amount = price * quantity;
    $('#product-amount-' + row).val(amount);
  }

  </script>

 @endsection
