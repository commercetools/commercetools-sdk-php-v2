<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomerEmailVerifiedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return CustomerEmailVerifiedMessage
     */
    public function at($index);

    /**
     * @return CustomerEmailVerifiedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerEmailVerifiedMessage
     */
    public function map($data, $index);
}
