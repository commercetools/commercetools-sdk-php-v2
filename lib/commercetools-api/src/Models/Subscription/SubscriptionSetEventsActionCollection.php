<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\SubscriptionUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SubscriptionUpdateActionCollection<SubscriptionSetEventsAction>
 * @method SubscriptionSetEventsAction current()
 * @method SubscriptionSetEventsAction end()
 * @method SubscriptionSetEventsAction at($offset)
 */
class SubscriptionSetEventsActionCollection extends SubscriptionUpdateActionCollection
{
    /**
     * @psalm-assert SubscriptionSetEventsAction $value
     * @psalm-param SubscriptionSetEventsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubscriptionSetEventsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionSetEventsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionSetEventsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?SubscriptionSetEventsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SubscriptionSetEventsAction $data */
                $data = SubscriptionSetEventsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
