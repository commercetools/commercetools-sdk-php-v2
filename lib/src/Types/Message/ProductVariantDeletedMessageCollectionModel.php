<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductVariantDeletedMessageCollectionModel extends MessageCollectionModel implements ProductVariantDeletedMessageCollection {

    /**
     * @param ProductVariantDeletedMessage $value
     * @return ProductVariantDeletedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductVariantDeletedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductVariantDeletedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductVariantDeletedMessage) {
            $data = $this->mapData(ProductVariantDeletedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
