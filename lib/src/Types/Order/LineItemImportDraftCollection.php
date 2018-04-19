<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface LineItemImportDraftCollection extends Collection
{
    /**
     * @param $index
     * @return LineItemImportDraft
     */
    public function at($index);

    /**
     * @return LineItemImportDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return LineItemImportDraft
     */
    public function map($data, $index);
}
