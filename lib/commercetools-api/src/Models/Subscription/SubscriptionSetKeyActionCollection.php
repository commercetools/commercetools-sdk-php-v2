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
 * @extends MapperSequence<SubscriptionSetKeyAction>
 * @method SubscriptionSetKeyAction current()
 * @method SubscriptionSetKeyAction at($offset)
 */
class SubscriptionSetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionSetKeyAction $value
     * @psalm-param SubscriptionSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubscriptionSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionSetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?SubscriptionSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubscriptionSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
