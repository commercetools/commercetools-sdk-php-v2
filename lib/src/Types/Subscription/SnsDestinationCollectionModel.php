<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class SnsDestinationCollectionModel extends DestinationCollectionModel implements SnsDestinationCollection
{

    /**
     * @param SnsDestination $value
     * @return SnsDestinationCollection
     */
    public function add($value) {
        if (!$value instanceof SnsDestination) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SnsDestination
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SnsDestination) {
            $data = $this->mapData(SnsDestination::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
