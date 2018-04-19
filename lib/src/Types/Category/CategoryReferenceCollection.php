<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Types\Common\ReferenceCollection;


interface CategoryReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return CategoryReference
     */
    public function at($index);

    /**
     * @return CategoryReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CategoryReference
     */
    public function map($data, $index);
}
