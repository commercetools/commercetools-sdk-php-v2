<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class LineItemStateTransitionMessageCollectionModel extends MessageCollectionModel implements LineItemStateTransitionMessageCollection {

    /**
     * @param LineItemStateTransitionMessage $value
     * @return LineItemStateTransitionMessageCollection
     */
    public function add($value) {
        if (!$value instanceof LineItemStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return LineItemStateTransitionMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof LineItemStateTransitionMessage) {
            $data = $this->mapData(LineItemStateTransitionMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
