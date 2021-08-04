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
 * @extends MapperSequence<SubscriptionUpdate>
 * @method SubscriptionUpdate current()
 * @method SubscriptionUpdate end()
 * @method SubscriptionUpdate at($offset)
 */
class SubscriptionUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionUpdate $value
     * @psalm-param SubscriptionUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubscriptionUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?SubscriptionUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SubscriptionUpdate $data */
                $data = SubscriptionUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
