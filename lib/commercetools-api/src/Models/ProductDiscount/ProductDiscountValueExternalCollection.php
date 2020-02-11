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
 * @extends MapperSequence<ProductDiscountValueExternal>
 * @method ProductDiscountValueExternal current()
 * @method ProductDiscountValueExternal at($offset)
 */
class ProductDiscountValueExternalCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValueExternal $value
     * @psalm-param ProductDiscountValueExternal|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountValueExternalCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueExternal) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueExternal
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountValueExternal {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueExternalModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
