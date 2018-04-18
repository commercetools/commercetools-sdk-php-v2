<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeChangeNameActionCollection extends TypeUpdateActionCollection {
    /**
     * @param $index
     * @return TypeChangeNameAction
     */
    public function at($index);

    /**
     * @return TypeChangeNameAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeChangeNameAction
     */
    public function map($data, $index);
}
