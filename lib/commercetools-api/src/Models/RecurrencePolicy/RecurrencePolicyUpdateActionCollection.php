<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of RecurrencePolicyUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method RecurrencePolicyUpdateAction current()
 * @method RecurrencePolicyUpdateAction end()
 * @method RecurrencePolicyUpdateAction at($offset)
 */
class RecurrencePolicyUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicyUpdateAction) {
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
        return function (?int $index): ?RecurrencePolicyUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = RecurrencePolicyUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
