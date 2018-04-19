<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\Collection;

interface FieldTypeCollection extends Collection
{
    /**
     * @param $index
     * @return FieldType
     */
    public function at($index);

    /**
     * @return FieldType
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return FieldType
     */
    public function map($data, $index);
}
