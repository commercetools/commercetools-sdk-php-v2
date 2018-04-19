<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface DeliveryRemovedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return DeliveryRemovedMessage
     */
    public function at($index);

    /**
     * @return DeliveryRemovedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DeliveryRemovedMessage
     */
    public function map($data, $index);
}
