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
 * @extends MapperSequence<ProductDiscountChangeNameAction>
 * @method ProductDiscountChangeNameAction current()
 * @method ProductDiscountChangeNameAction at($offset)
 */
class ProductDiscountChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountChangeNameAction $value
     * @psalm-param ProductDiscountChangeNameAction|stdClass $value
     * @return ProductDiscountChangeNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountChangeNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductDiscountChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountChangeNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}