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
 * @extends MapperSequence<ProductDiscountResourceIdentifier>
 * @method ProductDiscountResourceIdentifier current()
 * @method ProductDiscountResourceIdentifier at($offset)
 */
class ProductDiscountResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountResourceIdentifier $value
     * @psalm-param ProductDiscountResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDiscountResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
