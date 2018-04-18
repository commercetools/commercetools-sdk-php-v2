<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\Collection;

interface TaxCategoryDraftCollection extends Collection {
    /**
     * @param $index
     * @return TaxCategoryDraft
     */
    public function at($index);

    /**
     * @return TaxCategoryDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategoryDraft
     */
    public function map($data, $index);
}
