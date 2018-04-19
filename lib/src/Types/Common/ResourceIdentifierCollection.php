<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface ResourceIdentifierCollection extends Collection
{
    /**
     * @param $index
     * @return ResourceIdentifier
     */
    public function at($index);

    /**
     * @return ResourceIdentifier
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ResourceIdentifier
     */
    public function map($data, $index);
}
