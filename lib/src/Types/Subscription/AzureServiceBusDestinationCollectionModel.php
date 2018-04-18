<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class AzureServiceBusDestinationCollectionModel extends DestinationCollectionModel implements AzureServiceBusDestinationCollection {

    /**
     * @param AzureServiceBusDestination $value
     * @return AzureServiceBusDestinationCollection
     */
    public function add($value) {
        if (!$value instanceof AzureServiceBusDestination) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AzureServiceBusDestination
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AzureServiceBusDestination) {
            $data = $this->mapData(AzureServiceBusDestination::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
