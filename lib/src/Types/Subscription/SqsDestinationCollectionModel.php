<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SqsDestinationCollectionModel extends DestinationCollectionModel implements SqsDestinationCollection {

    /**
     * @param SqsDestination $value
     * @return SqsDestinationCollection
     */
    public function add($value) {
        if (!$value instanceof SqsDestination) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SqsDestination
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SqsDestination) {
            $data = $this->mapData(SqsDestination::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
