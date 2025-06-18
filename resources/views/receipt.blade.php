<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="stylesheet" href="../temp/assets/css/reciept.css">
    
    <style>
        /* Print styles */
        @media print {
            body * {
                display: none; /* Hide everything */
            }
            #receipt-content, #receipt-content * {
                display: block; /* Show only receipt and its children */
            }
            #receipt-content {
                position: static; /* Position normally for printing */
                margin: 0; /* Remove margin */
            }
        }
    </style>
</head>
<body>
@php
$total = 0;
@endphp
<div class="container" id="receipt-content">
    <div class="receipt_header">
        <h1><span>Bill</span></h1>
        <h2>Address: Pet N Vet Clinic 
        Alfareed Market Opposite Suzuki Motors 01Km Hasilpur Road Vehari <span>Tel: 03182614187 -
        03064186585</span></h2>
    </div>

    <div class="items">
        <table>
            <thead>
                <tr>
                    <th>QTY</th>
                    <th>ITEM</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($itemsInBill as $item)
                <tr>
                    <td>{{$item->product_quantity}}</td>
                    <td>{{$item->product_name}}</td>
                    <td>{{$item->product_price}}</td>
                    {{$total += $item->product_quantity * $item->product_price}}
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>{{$total}}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<h3>Thank You!</h3>
<button id="printButton">Print Receipt</button>

</body>
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    function printReceipt() {
        window.print();
    }
    document.getElementById('printButton').addEventListener('click', printReceipt);
});
</script>
</html>
