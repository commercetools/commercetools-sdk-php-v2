<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductDeletedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return ProductDeletedMessage
     */
    public function at($index);

    /**
     * @return ProductDeletedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDeletedMessage
     */
    public function map($data, $index);
}
