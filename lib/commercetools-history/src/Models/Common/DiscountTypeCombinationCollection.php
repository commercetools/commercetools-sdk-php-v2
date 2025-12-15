<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountTypeCombination>
 * @method DiscountTypeCombination current()
 * @method DiscountTypeCombination end()
 * @method DiscountTypeCombination at($offset)
 */
class DiscountTypeCombinationCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountTypeCombination $value
     * @psalm-param DiscountTypeCombination|stdClass $value
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
     * @psalm-return callable(int):?DiscountTypeCombination
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountTypeCombination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountTypeCombination $data */
                $data = DiscountTypeCombinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
