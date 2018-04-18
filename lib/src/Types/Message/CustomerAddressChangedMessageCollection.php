<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomerAddressChangedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return CustomerAddressChangedMessage
     */
    public function at($index);

    /**
     * @return CustomerAddressChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerAddressChangedMessage
     */
    public function map($data, $index);
}
