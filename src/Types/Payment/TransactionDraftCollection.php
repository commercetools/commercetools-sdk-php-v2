<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Payment;

use Commercetools\Base\Collection;

interface TransactionDraftCollection extends Collection {
    /**
     * @param $index
     * @return TransactionDraft
     */
    public function at($index);

    /**
     * @return TransactionDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return TransactionDraft
     */
    public function map($data, $index);
}
