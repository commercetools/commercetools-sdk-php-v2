<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ParcelItemsUpdatedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return ParcelItemsUpdatedMessage
     */
    public function at($index);

    /**
     * @return ParcelItemsUpdatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ParcelItemsUpdatedMessage
     */
    public function map($data, $index);
}
