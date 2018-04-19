<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\Collection;

interface ProductVariantDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ProductVariantDraft
     */
    public function at($index);

    /**
     * @return ProductVariantDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductVariantDraft
     */
    public function map($data, $index);
}
