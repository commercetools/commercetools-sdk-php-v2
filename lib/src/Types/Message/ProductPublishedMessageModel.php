<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Product\ProductProjection;

class ProductPublishedMessageModel extends MessageModel implements ProductPublishedMessage
{
    const DISCRIMINATOR_VALUE = 'ProductPublished';

    /**
     * @var array
     */
    protected $removedImageUrls;
    /**
     * @var ProductProjection
     */
    protected $productProjection;
    /**
     * @var string
     */
    protected $scope;

    /**
     * @return array
     */
    public function getRemovedImageUrls()
    {
        if (is_null($this->removedImageUrls)) {
            $value = $this->raw(ProductPublishedMessage::FIELD_REMOVED_IMAGE_URLS);
            $this->removedImageUrls = $value;
        }
        return $this->removedImageUrls;
    }
    /**
     * @return ProductProjection
     */
    public function getProductProjection()
    {
        if (is_null($this->productProjection)) {
            $value = $this->raw(ProductPublishedMessage::FIELD_PRODUCT_PROJECTION);
            if (is_null($value)) {
                return $this->mapData(ProductProjection::class, null);
            }
            $value = $this->mapData(ProductProjection::class, $value);

            $this->productProjection = $value;
        }
        return $this->productProjection;
    }
    /**
     * @return string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            $value = $this->raw(ProductPublishedMessage::FIELD_SCOPE);
            $value = (string)$value;
            $this->scope = $value;
        }
        return $this->scope;
    }

    /**
     * @param $removedImageUrls
     * @return $this
     */
    public function setRemovedImageUrls($removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

        return $this;
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
    /**
     * @param string $scope
     * @return $this
     */
    public function setScope(string $scope)
    {
        $this->scope = (string)$scope;

        return $this;
    }

}
