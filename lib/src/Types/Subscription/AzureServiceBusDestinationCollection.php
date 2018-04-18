<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollection;


interface AzureServiceBusDestinationCollection extends DestinationCollection {
    /**
     * @param $index
     * @return AzureServiceBusDestination
     */
    public function at($index);

    /**
     * @return AzureServiceBusDestination
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return AzureServiceBusDestination
     */
    public function map($data, $index);
}
