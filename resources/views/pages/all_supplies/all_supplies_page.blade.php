<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/all_supply.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>پێداویستی ئاژەڵان</title>
    @include('header')

</head>
<body>

<div class="rowStuff">

<div class="columnNames" > 

@include('pages.all_supplies.medicinesGroup.medicines')

@include('pages.all_supplies.productsGroup.products')

</div>
<div class="columnNames">
     @include('pages.all_supplies.group_list')
</div>


</div>
<script src="js/all_supply.js"></script>	

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@include('footer')
</html>
