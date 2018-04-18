<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductCreatedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ProductCreatedMessage
     */
    public function at($index);

    /**
     * @return ProductCreatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductCreatedMessage
     */
    public function map($data, $index);
}
