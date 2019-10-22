<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductDiscountValueAbsoluteDraft>
 *
 * @method ProductDiscountValueAbsoluteDraft current()
 * @method ProductDiscountValueAbsoluteDraft at($offset)
 */
class ProductDiscountValueAbsoluteDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValueAbsoluteDraft $value
     * @psalm-param ProductDiscountValueAbsoluteDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueAbsoluteDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueAbsoluteDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueAbsoluteDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountValueAbsoluteDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueAbsoluteDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
