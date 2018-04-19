<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ParcelRemovedFromDeliveryMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return ParcelRemovedFromDeliveryMessage
     */
    public function at($index);

    /**
     * @return ParcelRemovedFromDeliveryMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ParcelRemovedFromDeliveryMessage
     */
    public function map($data, $index);
}
