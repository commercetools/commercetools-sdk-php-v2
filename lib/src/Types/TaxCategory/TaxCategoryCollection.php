<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\Collection;

interface TaxCategoryCollection extends Collection {
    /**
     * @param $index
     * @return TaxCategory
     */
    public function at($index);

    /**
     * @return TaxCategory
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TaxCategory
     */
    public function map($data, $index);

    /**
     * @param string $id
     * @return TaxCategory
     */
    public function byId($id);
}
