<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderStateChangedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return OrderStateChangedMessage
     */
    public function at($index);

    /**
     * @return OrderStateChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderStateChangedMessage
     */
    public function map($data, $index);
}
