<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface LineItemStateTransitionMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return LineItemStateTransitionMessage
     */
    public function at($index);

    /**
     * @return LineItemStateTransitionMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return LineItemStateTransitionMessage
     */
    public function map($data, $index);
}
