<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Type\TypeUpdateActionCollection;


interface TypeSetDescriptionActionCollection extends TypeUpdateActionCollection
{
    /**
     * @param $index
     * @return TypeSetDescriptionAction
     */
    public function at($index);

    /**
     * @return TypeSetDescriptionAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeSetDescriptionAction
     */
    public function map($data, $index);
}
