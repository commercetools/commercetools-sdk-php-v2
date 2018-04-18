<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\Common\ReferenceCollection;


interface StateReferenceCollection extends ReferenceCollection {
    /**
     * @param $index
     * @return StateReference
     */
    public function at($index);

    /**
     * @return StateReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateReference
     */
    public function map($data, $index);
}
