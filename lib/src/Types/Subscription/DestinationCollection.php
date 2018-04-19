<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\Collection;

interface DestinationCollection extends Collection
{
    /**
     * @param $index
     * @return Destination
     */
    public function at($index);

    /**
     * @return Destination
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Destination
     */
    public function map($data, $index);
}
