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
                <th style="width:10%"><button class="order-btn"><span class="material-icons-sharp">add</span></button></th>
              </tr>
            </thead>
            <tbody>

              <tr class="height1">

                <td>
                  <select id="product" name="product[]">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select>
              </td>

                <!-- <td><input type="text"  placeholder="Enter Client Phone" name="product" required></td> -->
                <td><input type="number" min="1" placeholder="Enter Qty" name="qty" required></td>
                <td><input type="text"  placeholder="" name="rate" disabled></td>
                <td><input type="text"  placeholder="" name="amount" disabled></td>

                <td >
                  <button class="order-btn"><span class="material-icons-sharp">delete</span></button>
                </td>

              </tr>

              <tr class="height1">
                <td>
                  <select id="product" name="product[]">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="fiat">Fiat</option>
                  <option value="audi">Audi</option>
                </select>
              </td>
                <td><input type="number" min="1" placeholder="Enter Qty" name="qty" required></td>
                <td><input type="text"  placeholder="" name="rate" disabled></td>
                <td><input type="text"  placeholder="" name="amount" disabled></td>

                <td >
                  <button class="order-btn"><span class="material-icons-sharp">delete</span></button>
                </td>


              </tr>

            </tbody>
          </table>
        </div>



          <label for="text"><b>Gross Amount</b></label>
          <input type="text" placeholder="Gross Amount" name="gamount" disabled>

          <label for="text"><b>S Charge 13%</b></label>
          <input type="text" placeholder="Category Name" name="charge" disabled>

          <label for="text"><b>Vat 10%</b></label>
          <input type="text" placeholder="Vat" name="vat" disabled>

          <label for="text"><b>Discount</b></label>
          <input type="text" placeholder="Enter Discount" name="discount" required>

          <label for="text"><b>Net Amount</b></label>
          <input type="text" placeholder="Net Amount" name="namount" disabled>


          <button type="submit" class="btn"><span class="material-icons-sharp">print</span></button>
          <button type="submit" class="btn close">Save Changes</button>
          <button class="close" id="close-btn" onclick="closeForm()">
            <span class="material-icons-sharp">close</span>
          </button>

          <!-- <button type="button" class="btn cancel" onclick="closeForm()"><span class="material-icons-sharp">edit</span></button> -->
        </form>
      </div>
      <button type="button" id="export_button" class="excel">Excel</button>





    </div>

    <div class="recent-orders">
      <h2>Orders</h2>
      <table id="category_data">
        <thead>
          <tr>
            <th>Bill No</th>
            <th>Client</th>
            <th>Contact</th>
            <th>Date Time</th>
            <th>ProduCt Qty</th>
            <th>Amount</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @if(isset($orders))
          @foreach($orders as $index => $order)
          <tr class="height1">
            <td>{{$order->id}}</td>
            <td>{{ $order->client_name}}</td>
            <td>{{ $order->client_phone}}</td>
            <td>{{ $order->created_at}}</td>
            <td>3</td>
            <td>{{ $order->net_amount}}</td>
            <td class="action">
              <button><span class="material-icons-sharp">print</span></button>
              <button><span class="material-icons-sharp">edit</span></button>
              <button><span class="material-icons-sharp">delete</span></button>
            </td>


          </tr>
          @endforeach
          @endif
  
        </tbody>
      </table>
      <!-- <a href="#">Show All</a> -->
    </div>
 @endsection
