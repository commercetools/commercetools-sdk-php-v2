<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\DiscountTypeCombinationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DiscountTypeCombinationCollection<Stacking>
 * @method Stacking current()
 * @method Stacking end()
 * @method Stacking at($offset)
 */
class StackingCollection extends DiscountTypeCombinationCollection
{
    /**
     * @psalm-assert Stacking $value
     * @psalm-param Stacking|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StackingCollection
     */
    public function add($value)
    {
        if (!$value instanceof Stacking) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Stacking
     */
    protected function mapper()
    {
        return function (?int $index): ?Stacking {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Stacking $data */
                $data = StackingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
