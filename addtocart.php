<?php
// check trùng và thêm sản phẩm vào giỏ hàng 
function  HandleAmountProductInCart($addProduct)
{ {
        if (count($_SESSION['Cart']) > 0) {
            # code...
            $countCheck = 0;
            foreach ($_SESSION['Cart'] as $key => $product) {
                if ($product['id'] == $addProduct['id']) {
                    $product['amount'] += 1;
                    $_SESSION['Cart'][$key]['amount'] = $product['amount'];
                    break;
                    # code...
                } else {
                    # code...
                    $countCheck++;
                }

                # code...
            }
            if ($countCheck == count($_SESSION['Cart'])) {
                # code...
                $_SESSION['Cart'][] = $addProduct;
                
            }
        } else {

            # code...
            $_SESSION['Cart'][] = $addProduct;
        }
        
    }
};
?>
