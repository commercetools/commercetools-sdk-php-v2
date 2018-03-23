<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Product\ProductProjection;

class ProductCreatedMessageModel extends MessageModel implements ProductCreatedMessage {
    const DISCRIMINATOR_VALUE = 'ProductCreated';

    /**
     * @var ProductProjection
     */
    protected $productProjection;

    /**
     * @return ProductProjection
     */
    public function getProductProjection()
    {
        if (is_null($this->productProjection)) {
            $value = $this->raw(ProductCreatedMessage::FIELD_PRODUCT_PROJECTION);
            if (is_null($value)) {
                return $this->mapData(ProductProjection::class, null);
            }
            $value = $this->mapData(ProductProjection::class, $value);

            $this->productProjection = $value;
        }
        return $this->productProjection;
    }

    /**
     * @param ProductProjection $productProjection
     * @return $this
     */
    public function setProductProjection(ProductProjection $productProjection)
    {
        $this->productProjection = $productProjection;

        return $this;
    }

}
