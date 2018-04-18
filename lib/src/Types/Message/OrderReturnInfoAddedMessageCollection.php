<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderReturnInfoAddedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return OrderReturnInfoAddedMessage
     */
    public function at($index);

    /**
     * @return OrderReturnInfoAddedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderReturnInfoAddedMessage
     */
    public function map($data, $index);
}
