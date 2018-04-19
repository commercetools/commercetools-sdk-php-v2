<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\Collection;

interface MyCartDraftCollection extends Collection
{
    /**
     * @param $index
     * @return MyCartDraft
     */
    public function at($index);

    /**
     * @return MyCartDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return MyCartDraft
     */
    public function map($data, $index);
}
