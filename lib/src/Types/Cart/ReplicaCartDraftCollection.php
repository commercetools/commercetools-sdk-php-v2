<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\Collection;

interface ReplicaCartDraftCollection extends Collection
{
    /**
     * @param $index
     * @return ReplicaCartDraft
     */
    public function at($index);

    /**
     * @return ReplicaCartDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ReplicaCartDraft
     */
    public function map($data, $index);
}
