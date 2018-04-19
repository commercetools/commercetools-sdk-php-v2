<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderShippingAddressSetMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return OrderShippingAddressSetMessage
     */
    public function at($index);

    /**
     * @return OrderShippingAddressSetMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderShippingAddressSetMessage
     */
    public function map($data, $index);
}
