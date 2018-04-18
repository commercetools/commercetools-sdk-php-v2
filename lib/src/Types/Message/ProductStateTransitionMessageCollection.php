<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductStateTransitionMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ProductStateTransitionMessage
     */
    public function at($index);

    /**
     * @return ProductStateTransitionMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductStateTransitionMessage
     */
    public function map($data, $index);
}
