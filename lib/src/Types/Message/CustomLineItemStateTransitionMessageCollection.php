<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CustomLineItemStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return CustomLineItemStateTransitionMessage
     */
    public function at($index);

    /**
     * @return CustomLineItemStateTransitionMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomLineItemStateTransitionMessage
     */
    public function map($data, $index);
}
