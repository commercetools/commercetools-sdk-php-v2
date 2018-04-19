<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\Collection;

interface AddressCollection extends Collection
{
    /**
     * @param $index
     * @return Address
     */
    public function at($index);

    /**
     * @return Address
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Address
     */
    public function map($data, $index);
}
