<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface ProductVariantImportDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ProductVariantImportDraft
     */
    public function at($index);

    /**
     * @return ProductVariantImportDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProductVariantImportDraft
     */
    public function map($data, $index);
}
