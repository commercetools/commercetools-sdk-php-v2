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
 * @extends MapperSequence<SubscriptionSetChangesAction>
 *
 * @method SubscriptionSetChangesAction current()
 * @method SubscriptionSetChangesAction at($offset)
 */
class SubscriptionSetChangesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionSetChangesAction $value
     * @psalm-param SubscriptionSetChangesAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return SubscriptionSetChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionSetChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionSetChangesAction
     */
    protected function mapper()
    {
        return function (int $index): ?SubscriptionSetChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubscriptionSetChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
