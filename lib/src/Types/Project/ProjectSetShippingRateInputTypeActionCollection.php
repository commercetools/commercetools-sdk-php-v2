<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionCollection;


interface ProjectSetShippingRateInputTypeActionCollection extends ProjectUpdateActionCollection {
    /**
     * @param $index
     * @return ProjectSetShippingRateInputTypeAction
     */
    public function at($index);

    /**
     * @return ProjectSetShippingRateInputTypeAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ProjectSetShippingRateInputTypeAction
     */
    public function map($data, $index);
}
