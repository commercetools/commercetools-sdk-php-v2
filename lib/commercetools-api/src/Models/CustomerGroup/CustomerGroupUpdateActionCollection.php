<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of CustomerGroupUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method CustomerGroupUpdateAction current()
 * @method CustomerGroupUpdateAction end()
 * @method CustomerGroupUpdateAction at($offset)
 */
class CustomerGroupUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerGroupUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerGroupUpdateAction) {
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
        return function (?int $index): ?CustomerGroupUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = CustomerGroupUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
