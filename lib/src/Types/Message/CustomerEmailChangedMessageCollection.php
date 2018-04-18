<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomerEmailChangedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return CustomerEmailChangedMessage
     */
    public function at($index);

    /**
     * @return CustomerEmailChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerEmailChangedMessage
     */
    public function map($data, $index);
}
