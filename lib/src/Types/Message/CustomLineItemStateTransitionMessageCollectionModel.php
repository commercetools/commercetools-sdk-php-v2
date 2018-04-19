<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomLineItemStateTransitionMessageCollectionModel extends MessageCollectionModel implements CustomLineItemStateTransitionMessageCollection
{

    /**
     * @param CustomLineItemStateTransitionMessage $value
     * @return CustomLineItemStateTransitionMessageCollection
     */
    public function add($value) {
        if (!$value instanceof CustomLineItemStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomLineItemStateTransitionMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomLineItemStateTransitionMessage) {
            $data = $this->mapData(CustomLineItemStateTransitionMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
