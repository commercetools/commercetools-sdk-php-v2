<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types\Common\ResourceIdentifierCollection;


interface ReferenceCollection extends ResourceIdentifierCollection
{
    /**
     * @param $index
     * @return Reference
     */
    public function at($index);

    /**
     * @return Reference
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Reference
     */
    public function map($data, $index);
}
