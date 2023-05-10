<!DOCTYPE html>
<html>
<head>
    <title>Invoice Template Design</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('cssfile/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('cssfile/styles.css') }}"> --}}
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
        <div class="logo_invoice_wrap">
            <div class="logo_sec">
                <img src="{{  asset('images/logo.png') }}" alt="code logo">
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
                    <span>{{ $bill->created_at }}</span>
                </p>
            </div>
        </div>
        <div class="bill_total_wrap">
            <div class="bill_sec">
                {{-- <p>Bill To</p> --}}
                <div class="bold name">Client Name : <span>{{ $bill->client_name ?? '' }}</span></div>
                <div>Client Address : <span>{{ $bill->client_address ?? '' }}</span></div>
                <div>Client Phone : <span>{{ $bill->client_phone ?? '' }}</span></div>
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
            <img src="{{  asset('images/qrcode.png') }}" class="image-card" alt="workers">
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
            <div id="paidbutton">
                <h4>Bill Status</h4>
                <a onclick = "confirmPayment()"><button style="background: #7380ec;    color: #363949;    font-size: 15px;    font-weight: 800;border: 1px solid #7380ec;padding: 15px 20px;border-radius: 1rem;">Paid</button> </a>
            </div>
            <div class="printbutton" style="display: flex; justify-content: flex-start; align-items: center; margin-top: 20px;">
                <button style="background: #7380ec; color: #363949; font-size: 15px; font-weight: 800; border: 1px solid #7380ec; padding: 15px 20px; border-radius: 1rem; " onclick="window.print()">Print</button>
            </div>

        </div>
        @endif
        <script>
        function confirmPayment(bill_id) {
    if (confirm("Are you sure you want to mark this bill as paid?")) {
        // Redirect the user to the payment confirmation page
        window.location.href = '{{  route('bill.confirmPayment',['order_id' => $bill->id]) }}';
    }
}
</script>
    </div>
</div>
