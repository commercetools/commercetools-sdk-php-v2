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

class ProductDeletedMessageModel extends MessageModel implements ProductDeletedMessage
{
    const DISCRIMINATOR_VALUE = 'ProductDeleted';

    /**
     * @var array
     */
    protected $removedImageUrls;
    /**
     * @var ProductProjection
     */
    protected $currentProjection;

    /**
     * @return array
     */
    public function getRemovedImageUrls()
    {
        if (is_null($this->removedImageUrls)) {
            $value = $this->raw(ProductDeletedMessage::FIELD_REMOVED_IMAGE_URLS);
            $this->removedImageUrls = $value;
        }
        return $this->removedImageUrls;
    }
    /**
     * @return ProductProjection
     */
    public function getCurrentProjection()
    {
        if (is_null($this->currentProjection)) {
            $value = $this->raw(ProductDeletedMessage::FIELD_CURRENT_PROJECTION);
            if (is_null($value)) {
                return $this->mapData(ProductProjection::class, null);
            }
            $value = $this->mapData(ProductProjection::class, $value);

            $this->currentProjection = $value;
        }
        return $this->currentProjection;
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
     * @param ProductProjection $currentProjection
     * @return $this
     */
    public function setCurrentProjection(ProductProjection $currentProjection)
    {
        $this->currentProjection = $currentProjection;

        return $this;
    }

}
