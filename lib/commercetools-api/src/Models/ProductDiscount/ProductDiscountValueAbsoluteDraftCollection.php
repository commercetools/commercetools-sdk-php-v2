<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\ProductDiscount\ProductDiscountValueDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductDiscountValueDraftCollection<ProductDiscountValueAbsoluteDraft>
 * @method ProductDiscountValueAbsoluteDraft current()
 * @method ProductDiscountValueAbsoluteDraft end()
 * @method ProductDiscountValueAbsoluteDraft at($offset)
 */
class ProductDiscountValueAbsoluteDraftCollection extends ProductDiscountValueDraftCollection
{
    /**
     * @psalm-assert ProductDiscountValueAbsoluteDraft $value
     * @psalm-param ProductDiscountValueAbsoluteDraft|stdClass $value
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
        return function (?int $index): ?ProductDiscountValueAbsoluteDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountValueAbsoluteDraft $data */
                $data = ProductDiscountValueAbsoluteDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
