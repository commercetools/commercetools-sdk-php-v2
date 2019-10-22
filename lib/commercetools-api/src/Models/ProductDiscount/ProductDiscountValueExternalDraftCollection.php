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
 * @extends MapperSequence<ProductDiscountValueExternalDraft>
 *
 * @method ProductDiscountValueExternalDraft current()
 * @method ProductDiscountValueExternalDraft at($offset)
 */
class ProductDiscountValueExternalDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValueExternalDraft $value
     * @psalm-param ProductDiscountValueExternalDraft|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ProductDiscountValueExternalDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueExternalDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
