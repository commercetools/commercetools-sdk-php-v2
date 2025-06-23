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
 * @extends MapperSequence<DiscountGroupUpdate>
 * @method DiscountGroupUpdate current()
 * @method DiscountGroupUpdate end()
 * @method DiscountGroupUpdate at($offset)
 */
class DiscountGroupUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountGroupUpdate $value
     * @psalm-param DiscountGroupUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupUpdate $data */
                $data = DiscountGroupUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
