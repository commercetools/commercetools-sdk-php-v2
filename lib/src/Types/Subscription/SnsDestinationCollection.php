<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollection;


interface SnsDestinationCollection extends DestinationCollection {
    /**
     * @param $index
     * @return SnsDestination
     */
    public function at($index);

    /**
     * @return SnsDestination
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SnsDestination
     */
    public function map($data, $index);
}
