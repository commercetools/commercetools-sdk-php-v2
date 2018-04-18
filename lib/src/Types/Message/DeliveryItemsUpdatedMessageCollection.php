<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface DeliveryItemsUpdatedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return DeliveryItemsUpdatedMessage
     */
    public function at($index);

    /**
     * @return DeliveryItemsUpdatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DeliveryItemsUpdatedMessage
     */
    public function map($data, $index);
}
