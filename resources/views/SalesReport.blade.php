<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 2em;
            color: #0056b3;
        }
        .header p {
            margin: 5px 0;
            color: #666;
        }
        .data-section {
            margin-bottom: 20px;
        }
        .data-section h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #0056b3;
        }
        .data-section p {
            margin: 5px 0;
            font-size: 1.1em;
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #0056b3;
            color: #fff;
        }
        .print-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #0056b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .print-button:hover {
            background-color: #004494;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Sales Report</h1>
            <p>{{ $startDate->format('F j, Y') }} - {{ $endDate->format('F j, Y') }}</p>
        </div>
        
        <div class="data-section">
            <h2>Summary</h2>
            <p><strong>Total Sales:</strong> Rs.{{ number_format($salesData->total_sales, 2) }}</p>
            <p><strong>Total Profit:</strong> Rs.{{ number_format($salesData->total_profit, 2) }}</p>
        </div>

        <div class="data-section">
            <h2>Sold Products</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Date Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($soldProducts as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>Rs.{{ number_format($product->product_price, 2) }}</td>
                            <td>{{ $product->product_quantity }}</td>
                            <td>Rs.{{ number_format($product->product_price * $product->product_quantity, 2) }}</td>
                            <td>{{ $product->created_at->format('F j, Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <button class="print-button" onclick="printPage()">Print Report</button>
    </div>

    <script>
        function printPage() {
            window.print();
        }
    </script>
</body>
</html>
