<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface DeliveryAddressSetMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return DeliveryAddressSetMessage
     */
    public function at($index);

    /**
     * @return DeliveryAddressSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DeliveryAddressSetMessage
     */
    public function map($data, $index);
}
