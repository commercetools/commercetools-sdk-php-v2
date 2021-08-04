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
 * @extends ProductDiscountValueDraftCollection<ProductDiscountValueExternalDraft>
 * @method ProductDiscountValueExternalDraft current()
 * @method ProductDiscountValueExternalDraft at($offset)
 */
class ProductDiscountValueExternalDraftCollection extends ProductDiscountValueDraftCollection
{
    /**
     * @psalm-assert ProductDiscountValueExternalDraft $value
     * @psalm-param ProductDiscountValueExternalDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueExternalDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueExternalDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueExternalDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductDiscountValueExternalDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountValueExternalDraft $data */
                $data = ProductDiscountValueExternalDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
