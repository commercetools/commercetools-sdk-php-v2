<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<DiscountCodeReference>
 * @method DiscountCodeReference current()
 * @method DiscountCodeReference at($offset)
 */
class DiscountCodeReferenceCollection extends ReferenceCollection
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
                /** @var DiscountCodeReference $data */
                $data = DiscountCodeReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
