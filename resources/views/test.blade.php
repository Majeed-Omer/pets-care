<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .product {
  cursor: pointer;
  width: 200px;
  height: 200px;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: white;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

    </style>
</head>
<body>
<div class="product">
  <img src="myImages/lost.jpg" height="50px" width="50px">
  <h3>Product Name</h3>
  <p>Product Description</p>
</div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>Product Name</h3>
    <img src="myImages/lost.jpg" alt="f" width="300px" height="300px">
    <p>Product Description</p>
  </div>
</div>

<script>

  // Get the modal
var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var closeBtn = document.getElementsByClassName("close")[0];

// Get the product element
var product = document.getElementsByClassName("product")[0];

// When the user clicks on the product, open the modal
product.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
closeBtn.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>	

</body>

</html>