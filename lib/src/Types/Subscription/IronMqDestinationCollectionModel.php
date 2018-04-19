<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class IronMqDestinationCollectionModel extends DestinationCollectionModel implements IronMqDestinationCollection
{

    /**
     * @param IronMqDestination $value
     * @return IronMqDestinationCollection
     */
    public function add($value) {
        if (!$value instanceof IronMqDestination) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return IronMqDestination
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof IronMqDestination) {
            $data = $this->mapData(IronMqDestination::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
