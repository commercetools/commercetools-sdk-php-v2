<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollection;


interface ProductRevertedStagedChangesMessageCollection extends MessageCollection {
    /**
     * @param $index
     * @return ProductRevertedStagedChangesMessage
     */
    public function at($index);

    /**
     * @return ProductRevertedStagedChangesMessage
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductRevertedStagedChangesMessage
     */
    public function map($data, $index);
}
