<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeChangeKeyActionCollection extends TypeUpdateActionCollection
{
    /**
     * @param $index
     * @return TypeChangeKeyAction
     */
    public function at($index);

    /**
     * @return TypeChangeKeyAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeChangeKeyAction
     */
    public function map($data, $index);
}
