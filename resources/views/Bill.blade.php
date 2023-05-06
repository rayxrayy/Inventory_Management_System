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

<body>
    <form action="/bill" class="form-container-product" method="POST">
     @csrf
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

</body>
</html>
