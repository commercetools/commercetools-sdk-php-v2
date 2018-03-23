<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Collection;

interface FieldDefinitionCollection extends Collection {
    /**
     * @param $index
     * @return FieldDefinition
     */
    public function at($index);

    /**
     * @return FieldDefinition
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return FieldDefinition
     */
    public function map($data, $index);
}
