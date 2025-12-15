<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeDiscountTypeCombinationChange>
 * @method ChangeDiscountTypeCombinationChange current()
 * @method ChangeDiscountTypeCombinationChange end()
 * @method ChangeDiscountTypeCombinationChange at($offset)
 */
class ChangeDiscountTypeCombinationChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeDiscountTypeCombinationChange $value
     * @psalm-param ChangeDiscountTypeCombinationChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeDiscountTypeCombinationChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeDiscountTypeCombinationChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeDiscountTypeCombinationChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeDiscountTypeCombinationChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeDiscountTypeCombinationChange $data */
                $data = ChangeDiscountTypeCombinationChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
