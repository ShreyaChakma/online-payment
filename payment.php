<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <style>
        .col {
            width: 40%;
            display: inline-block;
        }
    </style>
</head>

<body>
<!-- Payment form  -->
    <div class="col">
    </div>
    <div class="col">
        <h2>Online Payment</h2>
        <form action="result.php" method="post">
            <label>Name</label> <br>
            <input type="text" name="name">
            <br><br>

            <label for="colFormLabelLg">Email</label><br>
            <input type="email" name="mail">
            <br><br>

            <label for="colFormLabelLg">Amount</label><br>
            <input type="number" name='number'>
            <br><br>

            <label for="colFormLabelLg">Card Type</label>
            <select name="cardType">
                <option disabled selected>Choose...</option>
                <option value="Master">Master</option>
                <option value="Visa">Visa</option>
                <option value="Credit">Credit</option>
                <option value="Debit">Debit</option>
            </select>
            <br><br>
            <label for="colFormLabelLg">Card Number</label><br>
            <input type="text" name="cardNumber">
            <br><br>

            <button type="submit">Confirm Payment</button>

        </form>
    </div>
    <div class="col">
    </div>
</body>

</html>