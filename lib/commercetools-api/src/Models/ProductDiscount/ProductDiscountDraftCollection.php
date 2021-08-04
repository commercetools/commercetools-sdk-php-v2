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
 * @extends MapperSequence<ProductDiscountDraft>
 * @method ProductDiscountDraft current()
 * @method ProductDiscountDraft end()
 * @method ProductDiscountDraft at($offset)
 */
class ProductDiscountDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountDraft $value
     * @psalm-param ProductDiscountDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductDiscountDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountDraft $data */
                $data = ProductDiscountDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
