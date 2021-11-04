
<!DOCTYPE html>
<html>
<head>
    <style>
        table{
            text-align: center;
            }
td{
    width: 100px;
    background-color: white;
}
th{
    background-color: white;
}
    </style>
    <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
</head>
<body>
    <h1>Adam Williams</h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table border=1 >
    <th>Date</th>
    <th>Information</th>
    <th>Total</th>
    <th>Running Total</th>
<tr>
    <td>02-05-2021</td>
    <td>Check Deposit</td>
    <td>200</td>
    <td></td>
</tr>

<tr>
    <td>04-01-2021</td>
    <td>Car Payment</td>
    <td>-150</td>
    <td></td>
</tr>

<tr>
    <td>07-19-2021</td>
    <td>Cash Deposit</td>
    <td>1000</td>
    <td></td>
</tr>

<tr>
    <td>07-29-2021</td>
    <td>Rent</td>
    <td>-550</td>
    <td></td>
</tr>

</table>
    <script type="text/javascript">
        var total = 0;
$("td:nth-child(3)").each(function( index ) {
  total = parseInt($(this).text()) + parseInt(total);
  $(this).next('td').text(total);
});
    </script>
</body>
</html>