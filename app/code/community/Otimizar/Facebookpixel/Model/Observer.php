<?php
class Otimizar_Facebookpixel_Model_Observer{

    public function checkoutCartAdd(){
        $AddToCartIsActive = Mage::getStoreConfig("otimizar_facebookpixel/events/add_to_cart");
        if($AddToCartIsActive):
            $product = Mage::getModel('catalog/product')
                ->load(Mage::app()->getRequest()->getParam('product', 0));

            if (!$product->getId()) {
                return;
            }
            $categories = $product->getCategoryIds();
            Mage::getModel('core/session')->setData('ProductToShoppingCart',
                new Varien_Object(array(
                    'id' => $product->getId(),
                    'qty' => Mage::app()->getRequest()->getParam('qty', 1),
                    'name' => $product->getName(),
                    'price' => $product->getPrice(),
                    'category_name' => Mage::getModel('catalog/category')->load($categories[0])->getName(),
                ))
            );
        endif;
    }
}