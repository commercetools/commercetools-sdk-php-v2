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
 * @extends MapperSequence<ChangeSubscription>
 * @method ChangeSubscription current()
 * @method ChangeSubscription at($offset)
 */
class ChangeSubscriptionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeSubscription $value
     * @psalm-param ChangeSubscription|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeSubscriptionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeSubscription) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeSubscription
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeSubscription {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeSubscription $data */
                $data = ChangeSubscriptionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
