<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeRemoveFieldDefinitionActionCollection extends TypeUpdateActionCollection {
    /**
     * @param $index
     * @return TypeRemoveFieldDefinitionAction
     */
    public function at($index);

    /**
     * @return TypeRemoveFieldDefinitionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeRemoveFieldDefinitionAction
     */
    public function map($data, $index);
}
