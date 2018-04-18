<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductUnpublishedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ProductUnpublishedMessage
     */
    public function at($index);

    /**
     * @return ProductUnpublishedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductUnpublishedMessage
     */
    public function map($data, $index);
}
