<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\Collection;

interface TaxRateDraftCollection extends Collection
{
    /**
     * @param $index
     * @return TaxRateDraft
     */
    public function at($index);

    /**
     * @return TaxRateDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxRateDraft
     */
    public function map($data, $index);
}
