<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface ExternalTaxAmountDraftCollection extends Collection {
    /**
     * @param $index
     * @return ExternalTaxAmountDraft
     */
    public function at($index);

    /**
     * @return ExternalTaxAmountDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ExternalTaxAmountDraft
     */
    public function map($data, $index);
}
