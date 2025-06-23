<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of DiscountGroupUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method DiscountGroupUpdateAction current()
 * @method DiscountGroupUpdateAction end()
 * @method DiscountGroupUpdateAction at($offset)
 */
class DiscountGroupUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupUpdateAction) {
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
        return function (?int $index): ?DiscountGroupUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = DiscountGroupUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
