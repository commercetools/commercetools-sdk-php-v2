<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Base\Collection;

interface UpdateActionCollection extends Collection
{
    /**
     * @param $index
     * @return UpdateAction
     */
    public function at($index);

    /**
     * @return UpdateAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return UpdateAction
     */
    public function map($data, $index);
}
