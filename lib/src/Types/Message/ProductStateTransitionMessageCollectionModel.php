<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductStateTransitionMessageCollectionModel extends MessageCollectionModel implements ProductStateTransitionMessageCollection
{

    /**
     * @param ProductStateTransitionMessage $value
     * @return ProductStateTransitionMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductStateTransitionMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductStateTransitionMessage) {
            $data = $this->mapData(ProductStateTransitionMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
