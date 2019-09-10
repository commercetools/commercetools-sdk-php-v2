<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductDiscountValueAbsolute>
 * @method ProductDiscountValueAbsolute current()
 * @method ProductDiscountValueAbsolute at($offset)
 */
class ProductDiscountValueAbsoluteCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountValueAbsolute $value
     * @psalm-param ProductDiscountValueAbsolute|stdClass $value
     * @return ProductDiscountValueAbsoluteCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountValueAbsolute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountValueAbsolute
     */
    protected function mapper()
    {
        return function(int $index): ?ProductDiscountValueAbsolute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountValueAbsoluteModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}