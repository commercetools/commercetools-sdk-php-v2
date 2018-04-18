<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductDraftCollection extends Collection {
    /**
     * @param $index
     * @return ProductDraft
     */
    public function at($index);

    /**
     * @return ProductDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductDraft
     */
    public function map($data, $index);
}
