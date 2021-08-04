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
 * @extends SubscriptionUpdateActionCollection<SubscriptionChangeDestinationAction>
 * @method SubscriptionChangeDestinationAction current()
 * @method SubscriptionChangeDestinationAction at($offset)
 */
class SubscriptionChangeDestinationActionCollection extends SubscriptionUpdateActionCollection
{
    /**
     * @psalm-assert SubscriptionChangeDestinationAction $value
     * @psalm-param SubscriptionChangeDestinationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubscriptionChangeDestinationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionChangeDestinationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionChangeDestinationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?SubscriptionChangeDestinationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SubscriptionChangeDestinationAction $data */
                $data = SubscriptionChangeDestinationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
