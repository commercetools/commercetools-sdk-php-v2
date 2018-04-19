<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductVariantDeletedMessageCollection extends MessageCollection
{
    /**
     * @param $index
     * @return ProductVariantDeletedMessage
     */
    public function at($index);

    /**
     * @return ProductVariantDeletedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductVariantDeletedMessage
     */
    public function map($data, $index);
}
