<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface OrderCreatedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return OrderCreatedMessage
     */
    public function at($index);

    /**
     * @return OrderCreatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderCreatedMessage
     */
    public function map($data, $index);
}
