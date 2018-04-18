<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\Collection;

interface ProductTypeDraftCollection extends Collection {
    /**
     * @param $index
     * @return ProductTypeDraft
     */
    public function at($index);

    /**
     * @return ProductTypeDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductTypeDraft
     */
    public function map($data, $index);
}
