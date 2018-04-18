<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ReviewStateTransitionMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ReviewStateTransitionMessage
     */
    public function at($index);

    /**
     * @return ReviewStateTransitionMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReviewStateTransitionMessage
     */
    public function map($data, $index);
}
