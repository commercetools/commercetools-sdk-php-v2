<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeChangeFieldDefinitionLabelActionCollection extends TypeUpdateActionCollection
{
    /**
     * @param $index
     * @return TypeChangeFieldDefinitionLabelAction
     */
    public function at($index);

    /**
     * @return TypeChangeFieldDefinitionLabelAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeChangeFieldDefinitionLabelAction
     */
    public function map($data, $index);
}
