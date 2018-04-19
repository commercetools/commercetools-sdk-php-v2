<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomObject;

use Commercetools\Types\Common\ReferenceCollection;


interface CustomObjectReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return CustomObjectReference
     */
    public function at($index);

    /**
     * @return CustomObjectReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return CustomObjectReference
     */
    public function map($data, $index);
}
