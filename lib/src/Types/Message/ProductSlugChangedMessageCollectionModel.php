<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductSlugChangedMessageCollectionModel extends MessageCollectionModel implements ProductSlugChangedMessageCollection
{

    /**
     * @param ProductSlugChangedMessage $value
     * @return ProductSlugChangedMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductSlugChangedMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductSlugChangedMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductSlugChangedMessage) {
            $data = $this->mapData(ProductSlugChangedMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
