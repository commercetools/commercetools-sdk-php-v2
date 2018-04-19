<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ShippingRateInputTypeCollection;


interface CartScoreTypeCollection extends ShippingRateInputTypeCollection
{
    /**
     * @param $index
     * @return CartScoreType
     */
    public function at($index);

    /**
     * @return CartScoreType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartScoreType
     */
    public function map($data, $index);
}
