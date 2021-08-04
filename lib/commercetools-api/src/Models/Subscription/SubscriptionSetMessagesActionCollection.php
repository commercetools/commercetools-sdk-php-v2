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
 * @extends SubscriptionUpdateActionCollection<SubscriptionSetMessagesAction>
 * @method SubscriptionSetMessagesAction current()
 * @method SubscriptionSetMessagesAction at($offset)
 */
class SubscriptionSetMessagesActionCollection extends SubscriptionUpdateActionCollection
{
    /**
     * @psalm-assert SubscriptionSetMessagesAction $value
     * @psalm-param SubscriptionSetMessagesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubscriptionSetMessagesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionSetMessagesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionSetMessagesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?SubscriptionSetMessagesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SubscriptionSetMessagesAction $data */
                $data = SubscriptionSetMessagesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
