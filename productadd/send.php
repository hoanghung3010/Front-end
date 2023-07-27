<?php
include "header.php";
include "leftside.php";
?>
 <div class="admin-content-right">
            <div class="product-add-content">
              
                <form action="productadd.php" method="POST" enctype="multipart/form-data">
                    <label for="">Product's name<span style="color: red;">*</span></label> <br>
                    <input required type="text" name="sanpham_tieude"> <br>
                    <label for="">Product code<span style="color: red;">*</span></label> <br>
                    <input required type="text" name="sanpham_ma"> <br>               
                    <label for="">Select a category<span style="color: red;">*</span></label> <br>
                    <select required="required" name="danhmuc_id" id="danhmuc_id">
                        <option value="">--Choose--</option>  
                        <option value=""></option>                  
                    </select>
                    <label for="">Select Product Type<span style="color: red;">*</span></label> <br>
                    <select required="required" name="loaisanpham_id" id="loaisanpham_id">
                        <option value="">--Choose--</option>
                      
                    </select>
                    <label for="">Select Product Color<span style="color: red;">*</span></label> <br>
                    <select required="required" name="color_id" id="">
                        <option value="">--Choose--</option>            
                        <option value=""></option>                    
                    </select>
                    <label for="">Choose Product Size<span style="color: red;">*</span></label> <br>
                    <div class="sanpham-size">
                    <p>S</p>    <input type="checkbox" name="sanpham-size[]" value="S"> 
                    <p>M</p>    <input type="checkbox" name="sanpham-size[]" value="M"> 
                    <p>L</p>    <input type="checkbox" name="sanpham-size[]" value="L">
                    <p>XL</p>   <input type="checkbox" name="sanpham-size[]" value="XL">  
                    <p>XXL</p>  <input type="checkbox" name="sanpham-size[]" value="XXL">  
                    </div>
                    <label for="">Product price<span style="color: red;">*</span></label> <br>
                    <input required type="text" name="sanpham_gia"> <br>  
                    <label for="">Detail<span style="color: red;">*</span></label> <br>
                    <textarea class="ckeditor"  required name="sanpham_chitiet" cols="60" rows="5"></textarea><br>  
                    <label  for="">Preserve<span style="color: red;">*</span></label> <br>
                    <textarea class="ckeditor" required name="sanpham_baoquan" cols="60" rows="5"></textarea><br> 
                    <label for="">Avatar<span style="color: red;">*</span></label> <br>
                    <input required type="file" name="sanpham_anh"> <br>   
                    <label for="">Image product<span style="color: red;">*</span></label> <br>
                    <input required type="file" multiple  name="sanpham_anhs[]"> <br>   
                    <button class="admin-btn" name="submit" type="submit">To send</button>  
                </form>
            </div>           
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>  