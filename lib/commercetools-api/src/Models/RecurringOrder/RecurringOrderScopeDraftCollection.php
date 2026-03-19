<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of RecurringOrderScopeDraft
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method RecurringOrderScopeDraft current()
 * @method RecurringOrderScopeDraft end()
 * @method RecurringOrderScopeDraft at($offset)
 */
class RecurringOrderScopeDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderScopeDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderScopeDraft) {
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
        return function (?int $index): ?RecurringOrderScopeDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = RecurringOrderScopeDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
