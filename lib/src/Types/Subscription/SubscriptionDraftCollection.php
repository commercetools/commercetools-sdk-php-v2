<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\Collection;

interface SubscriptionDraftCollection extends Collection
{
    /**
     * @param $index
     * @return SubscriptionDraft
     */
    public function at($index);

    /**
     * @return SubscriptionDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return SubscriptionDraft
     */
    public function map($data, $index);
}
