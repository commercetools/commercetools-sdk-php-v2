<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeChangeFieldDefinitionOrderActionCollection extends TypeUpdateActionCollection {
    /**
     * @param $index
     * @return TypeChangeFieldDefinitionOrderAction
     */
    public function at($index);

    /**
     * @return TypeChangeFieldDefinitionOrderAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeChangeFieldDefinitionOrderAction
     */
    public function map($data, $index);
}
