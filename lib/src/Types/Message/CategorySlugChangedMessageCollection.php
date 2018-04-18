<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface CategorySlugChangedMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return CategorySlugChangedMessage
     */
    public function at($index);

    /**
     * @return CategorySlugChangedMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategorySlugChangedMessage
     */
    public function map($data, $index);
}
