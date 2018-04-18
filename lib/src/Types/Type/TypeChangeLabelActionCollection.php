<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeChangeLabelActionCollection extends TypeUpdateActionCollection {
    /**
     * @param $index
     * @return TypeChangeLabelAction
     */
    public function at($index);

    /**
     * @return TypeChangeLabelAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeChangeLabelAction
     */
    public function map($data, $index);
}
