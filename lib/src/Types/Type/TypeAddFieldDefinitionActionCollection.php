<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeAddFieldDefinitionActionCollection extends TypeUpdateActionCollection
{
    /**
     * @param $index
     * @return TypeAddFieldDefinitionAction
     */
    public function at($index);

    /**
     * @return TypeAddFieldDefinitionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeAddFieldDefinitionAction
     */
    public function map($data, $index);
}
