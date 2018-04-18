<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollection;


interface IronMqDestinationCollection extends DestinationCollection {
    /**
     * @param $index
     * @return IronMqDestination
     */
    public function at($index);

    /**
     * @return IronMqDestination
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return IronMqDestination
     */
    public function map($data, $index);
}
