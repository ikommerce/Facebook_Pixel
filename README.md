# Facebook_Pixel - Magento 1.x Module

Magento module for facebook pixel.

Render facebook code on header and track **PageView**.

Other events can be enable from admin

## Features

- Provides a minimum of three required events must be added to your website:
 - **ViewContent**
   - specifque code for product view track
 - **AddToCart**
   - rendered just one time after magento event "controller_action_predispatch_checkout_cart_add"
 - **Purchase**
   - rendered on "checkout_onepage_success"


## HOW TO USE

- 1. Create file *composer.json* with this sample content:

```javascript

{
    "name": "magento/store",
    "require": {
        "magento-hackathon/magento-composer-installer": "*",
        "otimizar/facebook_pixel": "@dev"
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:otimizar/Facebook_Pixel.git"
        }
    ],
    "extra": {
        "magento-root-dir": ".",
        "magento-deploystrategy": "copy",
        "magento-force": true
    }
}
```

- 2. run 
```bash
$ composer update "otimizar/facebook_pixel"
```

## More about facebook pixel setup

- https://developers.facebook.com/docs/marketing-api/dynamic-product-ads/product-audiences/v2.5#setuppixel


