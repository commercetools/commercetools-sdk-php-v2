<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeSetMaxApplicationsActionCollection extends DiscountCodeUpdateActionCollection {
    /**
     * @param $index
     * @return DiscountCodeSetMaxApplicationsAction
     */
    public function at($index);

    /**
     * @return DiscountCodeSetMaxApplicationsAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeSetMaxApplicationsAction
     */
    public function map($data, $index);
}
