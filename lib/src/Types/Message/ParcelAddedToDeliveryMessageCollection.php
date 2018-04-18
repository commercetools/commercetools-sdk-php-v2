<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ParcelAddedToDeliveryMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ParcelAddedToDeliveryMessage
     */
    public function at($index);

    /**
     * @return ParcelAddedToDeliveryMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ParcelAddedToDeliveryMessage
     */
    public function map($data, $index);
}
