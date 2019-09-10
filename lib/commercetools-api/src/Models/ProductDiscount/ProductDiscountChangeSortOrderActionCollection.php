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
 * @extends MapperSequence<ProductDiscountChangeSortOrderAction>
 * @method ProductDiscountChangeSortOrderAction current()
 * @method ProductDiscountChangeSortOrderAction at($offset)
 */
class ProductDiscountChangeSortOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDiscountChangeSortOrderAction $value
     * @psalm-param ProductDiscountChangeSortOrderAction|stdClass $value
     * @return ProductDiscountChangeSortOrderActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountChangeSortOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountChangeSortOrderAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductDiscountChangeSortOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDiscountChangeSortOrderActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}