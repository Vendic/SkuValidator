<?php

namespace Vendic\SkuValidator\Plugin\Product;

class Validate
{
    public function beforeSave(\Magento\Catalog\Model\ResourceModel\Product $product, $object)
    {
        /** @var $object \Magento\Catalog\Model\Product */
        if (preg_match('/[\/ @%$#€^&*]/', $object->getSku()))
        {
            throw new \Exception('Do not use special characters or spaces in SKU\'s!');
        }

    }
}