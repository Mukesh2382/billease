<?php
wp_head();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="shortcut icon" type="image/png" href="http://localhost:10034/wp-content/uploads/2023/03/images1.png">
    <title>BillEase</title>
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <div class = "logoimg">
      <img src="http://localhost:10034/wp-content/uploads/2023/03/billease.png" height="80" width="360">
    </div>
    <div class="container-fluid">
      <div class="container">
        <fieldset>
          <legend>Business Information</legend>
          Name : <input type="text" id="bname" required/> <br />
          Address : <input type="text" id="address" required/><br />
          Website : <input type="text" id="website" required/><br />
          Contact : <input type="text" id="contact" required/><br />
        </fieldset>
      </div>
      <div class="container">
        <fieldset>
          <legend>Customer Information</legend>
          Full Name: <input type="text" id="name" required/> <br />
          Your Email: <input type="text" id="email" required/><br />
          Your Mobile: <input type="text" id="mobile" required/><br />
        </fieldset>
      </div>
      <div class="container">
        <fieldset>
          <legend>Add Items</legend>
          Item Name :     <input type="text" id="iname" required /> <br />
          Item Quantity : <input type="text" id="iquantity" required /><br />
          Item Rate :     <input type="text" id="irate" required /><br />
          <button id="add-button">Add Item</button>
        </fieldset>
      </div>
    </div>
    <div class="bill-box">
      <div class="container-bill">
        <div class="border">
          <div class="header">
            <div class ="logo">
              <img src="http://localhost:10034/wp-content/uploads/2023/03/invoice.png" height="100" width="100">
            </div>
            <div class = "text">
              <h2>Invoice</h2>
            </div>
          </div>
        <h3><span id="bname2"></span></h3>
        <h3><span id="address2"></span></h3>
        <h3><span id="website2"></span></h3>
        <h3><span id="contact2"></span></h3>
        <br>
        <h3>To,</h3>
        <h3>Name :   <span class="details" id="name2"></span></h3>
        <h3>Email :  <span class="details" id="email2"></span></h3>
        <h3>Mobile : <span class="details"id="mobile2"></span></h3>
        <table border="1" id="table">
          <thead>
            <tr>
              <th>Item Name</th>
              <th>Quantity</th>
              <th>Rate</th>
              <th>Amout</th>
            </tr>
          </thead>
          <tbody id="bill">
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      <h2 id="head2">Total Amout: Rs. <span id="amount">0</span></h2>
        </div>
    </div>
    </div>
    
    <div class="print-section">
      <button id="prnt-button">Save Invoice</button>
  
    </div>
      
<?php
get_footer();