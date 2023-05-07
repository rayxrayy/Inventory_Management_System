<!DOCTYPE html>
<html>
<head>
    <title>Invoice Template Design</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('cssfile/style.css') }}">
</head>
<style>
    img.image-card {
        height: 200px;
        padding-left: 20px;
        padding-right: 25%;
    }

    #bill {
        font-family: poppins, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #bill td,
    #bill th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #bill th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0000ff;
        color: white;
    }

    form.form-container-product {
        display: flex;
        padding-left: 25%;
    }

</style>

    {{-- <div class="wrapper" id="printableArea"> --}}
    <div class="invoice_wrapper">
        <div class="header">
        <button onclick="window.print()">Print</button>
            <div class="logo_invoice_wrap">
                <div class="logo_sec">
                    <img src="{{  asset('images/logo1.png') }}" alt="code logo">
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
                        <span># {{ $bill->id ?? '' }}</span>
                    </p>
                    <p class="date">
                        <span class="bold">Date</span>
                        <span>{{  $bill->created_at }}</span>
                    </p>
                </div>
            </div>
            <div class="bill_total_wrap">
                <div class="bill_sec">
                    {{-- <p>Bill To</p> --}}
                    <div class="bold name">Client Name : <span>{{  $bill->client_name ?? '' }}</span></div>
                    <div >Client Address : <span>{{  $bill->client_address ?? '' }}</span></div>
                    <div >Client Phone : <span>{{  $bill->client_phone ?? '' }}</span></div>
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

                    <tr>
                                @if(isset($bill->products))
          @foreach($bill->products as $index => $product)
          <tr class="height1">
            <td>{{$index + 1}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->pivot->quantity}}</td>
            <td>{{ $product->pivot->quantity * $product->price}}</td>
          </tr>
          @endforeach
        @endif
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
                        <span>{{$bill->gross_amount}}</span>
                    </p>
                    <p>
                        <span>Service Charge (13%)</span>
                        <span>{{$bill->s_charge}}</span>
                    </p>
                    <p>
                        <span>VAT Charge (10%)</span>
                        <span>-{{$bill->vat}}</span>
                    </p>
                    <p>
                        <span>Discount</span>
                        <span>-{{$bill->discount}}</span>
                    </p>
                    <p class="bold">
                        <span>Net Amount</span>
                        <span>{{$bill->net_amount}}</span>
                    </p>
                </div>

            </div>
            @if(!$bill->is_paid)
            <div class="total_wrap">
                <h3>Bill Status</h3>
                {{-- <select name="status" required style="width:100%;padding:15px;margin-bottom:20px;border:2px solid #7d8da1;">
                    <option>--Select status--</option>
                    <option value="1">Paid</option>
                    <option value="0">Unpaid</option>
                </select> --}}
                <a href='{{  route('bill.confirmPayment',['order_id' => $bill->id]) }}'><button>Paid</button></a>
            </div>
            @endif;
        </div>
    </div>

