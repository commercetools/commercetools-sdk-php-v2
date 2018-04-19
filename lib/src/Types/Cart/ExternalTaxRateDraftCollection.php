<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface ExternalTaxRateDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ExternalTaxRateDraft
     */
    public function at($index);

    /**
     * @return ExternalTaxRateDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExternalTaxRateDraft
     */
    public function map($data, $index);
}
