<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Common\ReferenceCollection;


interface TypeReferenceCollection extends ReferenceCollection
{
    /**
     * @param $index
     * @return TypeReference
     */
    public function at($index);

    /**
     * @return TypeReference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TypeReference
     */
    public function map($data, $index);
}
