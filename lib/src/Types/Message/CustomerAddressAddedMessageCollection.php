<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomerAddressAddedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return CustomerAddressAddedMessage
     */
    public function at($index);

    /**
     * @return CustomerAddressAddedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerAddressAddedMessage
     */
    public function map($data, $index);
}
