<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollection;


interface DiscountCodeSetMaxApplicationsPerCustomerActionCollection extends DiscountCodeUpdateActionCollection {
    /**
     * @param $index
     * @return DiscountCodeSetMaxApplicationsPerCustomerAction
     */
    public function at($index);

    /**
     * @return DiscountCodeSetMaxApplicationsPerCustomerAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeSetMaxApplicationsPerCustomerAction
     */
    public function map($data, $index);
}
