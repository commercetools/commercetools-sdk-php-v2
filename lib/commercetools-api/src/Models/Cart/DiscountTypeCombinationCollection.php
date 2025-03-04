<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of DiscountTypeCombination
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method DiscountTypeCombination current()
 * @method DiscountTypeCombination end()
 * @method DiscountTypeCombination at($offset)
 */
class DiscountTypeCombinationCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountTypeCombinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountTypeCombination) {
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
        return function (?int $index): ?DiscountTypeCombination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = DiscountTypeCombinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
