@props(['product'])


 <div class="product">
                 <img alt="img of product"></img>
                <h4> <?php echo $product['title'] ?></h4>
                <p><?php echo $product['description']?></p>
                <h5>price: <?php echo $product['price']?></h5>
                <label for="qty">units:</label>

                    <input type="number" id="qty" name="qty"
                 min="0" max="100">
                <button>add to cart</button>
                <p>#<?php echo $product['tag']?></p>
        </div>