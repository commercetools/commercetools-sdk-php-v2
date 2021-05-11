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
 * @template T of SubscriptionUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method SubscriptionUpdateAction current()
 * @method SubscriptionUpdateAction at($offset)
 */
class SubscriptionUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?SubscriptionUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = SubscriptionUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
