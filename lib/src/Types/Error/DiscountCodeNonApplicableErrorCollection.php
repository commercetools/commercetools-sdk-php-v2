<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollection;


interface DiscountCodeNonApplicableErrorCollection extends ErrorObjectCollection
{
    /**
     * @param $index
     * @return DiscountCodeNonApplicableError
     */
    public function at($index);

    /**
     * @return DiscountCodeNonApplicableError
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return DiscountCodeNonApplicableError
     */
    public function map($data, $index);
}
