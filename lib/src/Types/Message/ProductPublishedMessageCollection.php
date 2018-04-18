<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductPublishedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ProductPublishedMessage
     */
    public function at($index);

    /**
     * @return ProductPublishedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductPublishedMessage
     */
    public function map($data, $index);
}
