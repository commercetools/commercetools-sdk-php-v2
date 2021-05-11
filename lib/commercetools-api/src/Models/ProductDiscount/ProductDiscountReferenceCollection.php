<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ProductDiscountReference>
 * @method ProductDiscountReference current()
 * @method ProductDiscountReference at($offset)
 */
class ProductDiscountReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ProductDiscountReference $value
     * @psalm-param ProductDiscountReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountReference
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountReference $data */
                $data = ProductDiscountReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
