<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Customer\CustomerUpdateActionCollection;


interface CustomerSetCompanyNameActionCollection extends CustomerUpdateActionCollection
{
    /**
     * @param $index
     * @return CustomerSetCompanyNameAction
     */
    public function at($index);

    /**
     * @return CustomerSetCompanyNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerSetCompanyNameAction
     */
    public function map($data, $index);
}
