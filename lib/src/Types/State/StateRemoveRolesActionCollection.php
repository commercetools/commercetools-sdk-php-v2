<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateRemoveRolesActionCollection extends StateUpdateActionCollection
{
    /**
     * @param $index
     * @return StateRemoveRolesAction
     */
    public function at($index);

    /**
     * @return StateRemoveRolesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateRemoveRolesAction
     */
    public function map($data, $index);
}
