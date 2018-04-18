<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Types\Subscription\DestinationCollection;


interface SqsDestinationCollection extends DestinationCollection {
    /**
     * @param $index
     * @return SqsDestination
     */
    public function at($index);

    /**
     * @return SqsDestination
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SqsDestination
     */
    public function map($data, $index);
}
