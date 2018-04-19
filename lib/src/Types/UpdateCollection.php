<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\Collection;

interface UpdateCollection extends Collection
{
    /**
     * @param $index
     * @return Update
     */
    public function at($index);

    /**
     * @return Update
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return Update
     */
    public function map($data, $index);
}
