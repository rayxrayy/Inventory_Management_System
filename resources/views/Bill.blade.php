<!DOCTYPE html>
<html>
<head>
    <title>Invoice Template Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="/bill" class="form-container-product" method="POST">
<div class="wrapper" id="printableArea">
    <div class="invoice_wrapper">
        <div class="header">
            <div class="logo_invoice_wrap">
                <div class="logo_sec">
                    <img src="./images/logo.png" alt="code logo">
                    <div class="title_wrap">
                        <p class="bold"><h2>Cargo<span class="danger">REX</span></h2></p>
                        <p class="sub_title">Private Limited</p>
                    </div>
                </div>
                <div class="invoice_sec">
                    <p class="invoice bold">INVOICE</p>
                    <p class="invoice_no">
                        <span class="bold">Invoice</span>
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
                    <p>Bill To</p>
                    <p class="bold name">Client Name</p>
                    <span>
                       Client Address<br/>
                       Client Phone
                    </span>
                </div>
                <div class="total_wrap">
                    <p>Bill Status</p>
                    <p class="bold price">UNPAID</p>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="main_table">
                <div class="table_header">
                    <div class="row">
                        <div class="col col_no">NO. </div>
                        <div class="col col_des"> PRODUCT</div>
                        <div class="col col_price">PRICE</div>
                        <div class="col col_qty">QTY</div>
                        <div class="col col_total">Amount</div>
                    </div>
                </div>
                <div class="table_body">
                    <div class="row">
                        <div class="col col_no">
                            <p>01</p>
                        </div>
                        <div class="col col_des">
                            <p class="bold">Web Design</p>
                            <!-- <p>Lorem ipsum dolor sit.</p> -->
                        </div>
                        <div class="col col_price">
                            <p>$350</p>
                        </div>
                        <div class="col col_qty">
                            <p>2</p>
                        </div>
                        <div class="col col_total">
                            <p>$700.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col_no">
                            <p>02</p>
                        </div>
                        <div class="col col_des">
                            <p class="bold">Web Development</p>
                            <!-- <p>Lorem ipsum dolor sit.</p> -->
                        </div>
                        <div class="col col_price">
                            <p>$350</p>
                        </div>
                        <div class="col col_qty">
                            <p>2</p>
                        </div>
                        <div class="col col_total">
                            <p>$700.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col_no">
                            <p>03</p>
                        </div>
                        <div class="col col_des">
                            <p class="bold">GitHub</p>
                            <!-- <p>Lorem ipsum dolor sit.</p> -->
                        </div>
                        <div class="col col_price">
                            <p>$120</p>
                        </div>
                        <div class="col col_qty">
                            <p>1</p>
                        </div>
                        <div class="col col_total">
                            <p>$700.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col_no">
                            <p>04</p>
                        </div>
                        <div class="col col_des">
                            <p class="bold">Backend Design</p>
                            <!-- <p>Lorem ipsum dolor sit.</p> -->
                        </div>
                        <div class="col col_price">
                            <p>$350</p>
                        </div>
                        <div class="col col_qty">
                            <p>2</p>
                        </div>
                        <div class="col col_total">
                            <p>$700.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col_no">
                            <p>05</p>
                        </div>
                        <div class="col col_des">
                            <p class="bold">Backend Development</p>
                            <!-- <p>Lorem ipsum dolor sit.</p> -->
                        </div>
                        <div class="col col_price">
                            <p>$150</p>
                        </div>
                        <div class="col col_qty">
                            <p>1</p>
                        </div>
                        <div class="col col_total">
                            <p>$700.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paymethod_grandtotal_wrap">
                <!-- <div class="paymethod_sec">
                    <p class="bold">Payment Method</p>
                    <p>Visa, master Card and We accept Cheque</p>
                </div> -->
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
        </div>
        <div class="footer">
            <p>Thank you and Best Wishes</p>
            <!-- <div class="terms">
                <p class="tc bold">Terms & Coditions</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non praesentium doloribus. Quaerat vero iure itaque odio numquam, debitis illo quasi consequuntur velit, explicabo esse nesciunt error aliquid quis eius!</p>
            </div> -->
        </div>
    </div>
</div>
</form>

</body>
</html>
