<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\Collection;

interface OrderImportDraftCollection extends Collection {
    /**
     * @param $index
     * @return OrderImportDraft
     */
    public function at($index);

    /**
     * @return OrderImportDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return OrderImportDraft
     */
    public function map($data, $index);
}
