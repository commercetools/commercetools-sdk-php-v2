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
 * @extends MapperSequence<ProductDiscountValueRelativeDraft>
 * @method ProductDiscountValueRelativeDraft current()
 * @method ProductDiscountValueRelativeDraft at($offset)
 */
class ProductDiscountValueRelativeDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValueRelativeDraft $value
     * @psalm-param ProductDiscountValueRelativeDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueRelativeDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueRelativeDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueRelativeDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountValueRelativeDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueRelativeDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
