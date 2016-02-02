# Facebook_Pixel

Magento module for facebook pixel

## features

- Provides a minimum of three required events must be added to your website:
 - ViewContent
 - AddToCart
 - Purchase

- ViewContent event for product view

## HOW TO USE

- 1. Create file *composer.json* with this sample content:

<pre>

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
</pre>

- 2. run "composer update otimizar/facebook_pixel"

## more about facebook pixel setup

- https://developers.facebook.com/docs/marketing-api/dynamic-product-ads/product-audiences/v2.5#setuppixel


