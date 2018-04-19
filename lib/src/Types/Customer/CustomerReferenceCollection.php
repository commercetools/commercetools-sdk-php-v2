<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Common\ReferenceCollection;


interface CustomerReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return CustomerReference
     */
    public function at($index);

    /**
     * @return CustomerReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerReference
     */
    public function map($data, $index);
}
