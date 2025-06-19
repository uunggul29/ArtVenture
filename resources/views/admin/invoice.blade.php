<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .invoice {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            color: #333;
            font-size: 24px;
        }

        .invoice-details {
            margin-bottom: 20px;
        }

        .invoice-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-details table th,
        .invoice-details table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .invoice-details table th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .invoice-items {
            margin-bottom: 20px;
        }

        .invoice-items table {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-items table th,
        .invoice-items table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .invoice-items table th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .invoice-total {
            margin-top: 20px;
            text-align: right;
        }

        .invoice-total p {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="invoice">
        <div class="invoice-header">
            <h1>Invoice</h1>
        </div>
        <div class="invoice-details">
            <table>
                <tr>
                    <th>Nama</th>
                    <td>{{$data->name}}</td>
                </tr>
                <tr>
                    <th>Alamat:</th>
                    <td>{{$data->rec_address}}</td>
                </tr>
                <tr>
                    <th>No HP:</th>
                    <td>{{$data->phone}}</td>
                </tr>
            </table>
        </div>
        <div class="invoice-items">
            <table>
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$data->produk->title}}</td>
                        <td>{{$data->produk->price}}</td>
                        <td>
                            <img width="150" src="produk/{{$data->produk->image}}" alt="">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="invoice-total">
            <p><strong>Total Harga: {{$data->produk->price}}</strong></p>
        </div>
    </div>
</body>

</html>