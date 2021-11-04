
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
    <h1>Paul McBride</h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<table border=1 >
    <th>Date</th>
    <th>Information</th>
    <th>Total</th>
    <th>Running Total</th>
<tr>
    <td>03-25-2021</td>
    <td>Check Deposit</td>
    <td>200</td>
    <td></td>
</tr>

<tr>
    <td>04-09-2021</td>
    <td>Chic Fil A</td>
    <td>-20</td>
    <td></td>
</tr>

<tr>
    <td>06-14-2021</td>
    <td>Cash Deposit</td>
    <td>100</td>
    <td></td>
</tr>

<tr>
    <td>10-12-2021</td>
    <td>Gym Membership</td>
    <td>-50</td>
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