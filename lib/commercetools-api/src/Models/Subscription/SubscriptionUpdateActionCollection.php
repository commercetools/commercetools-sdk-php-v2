<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SubscriptionUpdateAction>
 *
 * @method SubscriptionUpdateAction current()
 * @method SubscriptionUpdateAction at($offset)
 */
class SubscriptionUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionUpdateAction $value
     * @psalm-param SubscriptionUpdateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return SubscriptionUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?SubscriptionUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubscriptionUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
