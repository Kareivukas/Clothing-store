<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frost & Form - Payment Information (Simple)</title>
    <style>
        /* Simple and clean styling for the table */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .payment-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #2c3e50; /* Dark blue from your brand */
            margin-bottom: 25px;
            font-size: 1.8em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #2c3e50; /* Dark blue header */
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Light gray for zebra striping */
        }
        tr:last-child td {
            border-bottom: none;
        }
        /* Style for the total row */
        .total-row {
            font-weight: bold;
            background-color: #e8f1f8; /* Light blue from your hero section */
        }
        .total-row td {
            border-top: 2px solid #2c3e50;
            border-bottom: 2px solid #2c3e50;
        }
        .note {
            text-align: center;
            color: #7f8c8d;
            font-size: 0.9em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>🛒 Order Summary & Payment</h2>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example product from Halti's sale -->
                <tr>
                    <td>Alpine Unisex 3L DrymaxX Shell Jacket</td>
                    <td>1</td>
                    <td>€204,00</td>
                    <td>€204,00</td>
                </tr>
                <!-- Another product -->
                <tr>
                    <td>Vuotos Ski Mittens</td>
                    <td>1</td>
                    <td>€42,00</td>
                    <td>€42,00</td>
                </tr>
                <!-- Subtotal row -->
                <tr>
                    <td colspan="3" style="text-align: right;"><strong>Subtotal:</strong></td>
                    <td><strong>€246,00</strong></td>
                </tr>
                <!-- Example discount using code from the site -->
                <tr>
                    <td colspan="3" style="text-align: right;">Discount (FINAL10):</td>
                    <td>-€24,60</td>
                </tr>
                <!-- Shipping (example) -->
                <tr>
                    <td colspan="3" style="text-align: right;">Shipping (UPS Standard):</td>
                    <td>€10,90</td>
                </tr>
                <!-- Grand Total -->
                <tr class="total-row">
                    <td colspan="3" style="text-align: right; font-size: 1.2em;">TOTAL DUE:</td>
                    <td style="font-size: 1.2em;">€232,30</td>
                </tr>
            </tbody>
        </table>
        <div class="note">
            <p>✅ Finnish outdoor brand built in the north since 1976.</p>
            <p>All prices include VAT. Choosing a selection results in a full page refresh.</p>
        </div>
    </div>
</body>
</html>