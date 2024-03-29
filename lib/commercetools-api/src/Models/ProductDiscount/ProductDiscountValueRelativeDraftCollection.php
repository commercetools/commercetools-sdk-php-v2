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
 * @extends ProductDiscountValueDraftCollection<ProductDiscountValueRelativeDraft>
 * @method ProductDiscountValueRelativeDraft current()
 * @method ProductDiscountValueRelativeDraft end()
 * @method ProductDiscountValueRelativeDraft at($offset)
 */
class ProductDiscountValueRelativeDraftCollection extends ProductDiscountValueDraftCollection
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
        return function (?int $index): ?ProductDiscountValueRelativeDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountValueRelativeDraft $data */
                $data = ProductDiscountValueRelativeDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
