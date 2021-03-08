<style>
   #myform{
    display:none;
    top:120px; 
    left:30%; 
    width:450px; 
    padding: 8px 30px;
    position:absolute;
    border: 1px solid black;
    outline-style: solid;
    outline-color: #47535E;
    outline-width: 4px;
    background-color: #758AA2;
    z-index: 10; 
    box-shadow: 0 0 0 9999px rgba(0,0,0,0.5);
    
}
.btn{
    font-size: 15px;
    padding: 8px 18px;
    cursor: pointer;
    text-align: center;
    color: white;
    background-color: #7535E4;
    border-radius: 15px;
}
 </style>   

<?php include_layout_template('admin_header.php', ["pageName" => "Dashboard"]); ?>
        <li><a href="<?php echo HOME; ?>all-products">All Products</a></li>
        <li class="active"><a href="<?php echo HOME; ?>dashboard">Dashboard</a></li>
        <li><a href="<?php echo HOME; ?>new-product">Post An Ad</a></li>
       <li><a onclick="document.getElementById('myform').style.display='block'"> Feedback</a> </li>
        <li><a href="<?php echo HOME; ?>">View Categories</a></li>
      </ul>
   
  </nav>     
</div>

<div id = "myform">
<form action="feedback_control.php" method="post" name="feedback">


                <label>How do you rate your overall experience?</label>
                <p>
                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="bad" >
                    Bad
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="average" >
                    Average
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="experience" id="radio_experience" value="good" >
                    Good
                    </label>
                </p>

                   <label for="name">
                        Your Name:</label>
                    <input type="text" name="name" required>

                    <label>
                        Your Email:</label>
                    <input type="text" name="email" required>


 
                    <label>
                        Write Your Comment:</label>
                    <input type="text" name="comment" required>



<div>
Submit: <input type="submit" value="Submit">
</div>
</form>

    </div>  
<div class="row">
  <div class="col-lg-12 col-sm-12">
    <h2>My AD's</h2>

    <?php echo output_message($message); ?>
    <div class="table-responsive">
      <table class="table table-hover">
        <tr>
          <th>Product</th>
          <th>Category</th>
          <th>Name of Product</th>
          <th>Price (Rs.)</th>
          <th>Description</th>
          <th>&nbsp;</th>
        </tr>
        <?php foreach($products as $product) { ?>
        <?php $cat_name = category_details($product->category_id, NULL); ?>
        <tr>
          <td><img src="<?php echo ASSETS.$product->image_path(); ?>" width="120" /></td>
          <td><?php echo $cat_name; ?></td>
          <td><?php echo $product->name; ?></td>
          <td><?php echo $product->price; ?></td>
          <td><?php echo $product->description; ?></td>
          <td><a href="<?php echo HOME; ?>delete-product?id=<?php echo $product->id; ?>" onclick="return confirm('Are you sure?')">Remove</a>
        </tr>
      <?php } ?>
      </table>
    </div><!-- End div for Table -->

    <!-- Display pagination links -->
    <div id="pagination" style="clear: both;">
      <?php echo pagination_links($pagination, "dashboard", $page);    ?>
    </div>
    
  </div>
</div><!-- End content Row -->
<?php include_layout_template('admin_footer.php'); ?>
      
