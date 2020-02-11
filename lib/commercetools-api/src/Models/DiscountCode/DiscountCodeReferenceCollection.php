<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeReference>
 * @method DiscountCodeReference current()
 * @method DiscountCodeReference at($offset)
 */
class DiscountCodeReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeReference $value
     * @psalm-param DiscountCodeReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeReference
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
