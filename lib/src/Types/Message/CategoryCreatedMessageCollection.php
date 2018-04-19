<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CategoryCreatedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return CategoryCreatedMessage
     */
    public function at($index);

    /**
     * @return CategoryCreatedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryCreatedMessage
     */
    public function map($data, $index);
}
