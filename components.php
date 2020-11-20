<?php
    function components1($productname, $productprice, $productimg, $productid) {
        $elements1 = '<div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="indexcart.php" method="POST">
            <div class="card shadow">
                <div>
                    <img src="'.$productimg.'" alt="Image 1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5>'.$productname.'</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <div class="card-text">
                        Some quick example text to build on the Site.
                    </div>
                    <h5>
                        <small><s class="text-secondary">$999.99</s></small>
                        <span class="price">$'.$productprice.'</span>
                    </h5>
                    <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    <input type="hidden" name="product_id" value="'.$productid.'">
                </div>
            </div>
        </form>
    </div> ';
        echo $elements1;
    };

    function eachcartElement($productimg, $productname, $productprice, $productid) {
        $cartElement = '
        <form action="eachcart.php?action=remove&id='.$productid.'" method="POST" class="cart-items">
        <div class="border rounded">
            <div class="row bg-white">
                <div class="col-md-3">
                <img src="'.$productimg.'" alt="Image 1" class="img-fluid pl-0"> 
                </div>
                <div class="col-md-6">
                    <h5 class="pt-2">'.$productname.'</h5>
                    <small class="text-secondary">Seller: daily Tuition</small>
                    <h5 class="pt-2">$'.$productprice.'</h5>
                    <button type="submit" class="btn btn-warning">Save for Later</button>
                    <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                </div>
                <div class="col-md-3 py-5">
                    <div>
                        <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus decrease"></i></button>
                        <input type="text" value="1" class="form-control w-25 d-inline number">
                        <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus increase"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        ';
        echo $cartElement;
    }






    /*
    function components2() {
        $elements2 = '
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form>
            <div class="card shadow">
                <div>
                    <img src="upload/proud.jpg" alt="Image 1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5>Product 2</h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <div class="card-text">
                        Some quick example text to build on the Site.
                    </div>
                    <h5>
                        <small><s class="text-secondary">$499.99</s></small>
                        <span class="price">$199.99</span>
                    </h5>
                    <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                </div>
            </div>
        </form>
    </div>
        ';
        echo $elements2;
    }

    function components3() {
        $elements3 = '
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form>
                <div class="card shadow">
                    <div>
                        <img src="upload/jumat.jpg" alt="Image 1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5>Product 3</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <div class="card-text">
                            Some quick example text to build on the Site.
                        </div>
                        <h5>
                            <small><s class="text-secondary">$399.99</s></small>
                            <span class="price">$119.99</span>
                        </h5>
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
        ';
        echo $elements3;
    }

    function components4() {
        $elements4 = '
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form>
                <div class="card shadow">
                    <div>
                        <img src="upload/quran.jpg" alt="Image 1" class="img-fluid card-img-top">
                    </div>
                    <div class="card-body">
                        <h5>Product 4</h5>
                        <h6>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </h6>
                        <div class="card-text">
                            Some quick example text to build on the Site.
                        </div>
                        <h5>
                            <small><s class="text-secondary">$1499.99</s></small>
                            <span class="price">$999.99</span>
                        </h5>
                        <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </form>
        </div>
        ';
        echo $elements4;
    }
    */