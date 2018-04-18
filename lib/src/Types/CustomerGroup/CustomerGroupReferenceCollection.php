<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\Common\ReferenceCollection;


interface CustomerGroupReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return CustomerGroupReference
     */
    public function at($index);

    /**
     * @return CustomerGroupReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomerGroupReference
     */
    public function map($data, $index);
}
