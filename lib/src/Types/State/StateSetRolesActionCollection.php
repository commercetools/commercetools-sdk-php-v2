<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\State\StateUpdateActionCollection;


interface StateSetRolesActionCollection extends StateUpdateActionCollection {
    /**
     * @param $index
     * @return StateSetRolesAction
     */
    public function at($index);

    /**
     * @return StateSetRolesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return StateSetRolesAction
     */
    public function map($data, $index);
}
