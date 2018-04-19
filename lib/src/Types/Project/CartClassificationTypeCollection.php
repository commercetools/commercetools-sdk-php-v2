<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ShippingRateInputTypeCollection;


interface CartClassificationTypeCollection extends ShippingRateInputTypeCollection
{
    /**
     * @param $index
     * @return CartClassificationType
     */
    public function at($index);

    /**
     * @return CartClassificationType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CartClassificationType
     */
    public function map($data, $index);
}
