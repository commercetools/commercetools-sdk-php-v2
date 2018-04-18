<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ReviewCreatedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ReviewCreatedMessage
     */
    public function at($index);

    /**
     * @return ReviewCreatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewCreatedMessage
     */
    public function map($data, $index);
}
