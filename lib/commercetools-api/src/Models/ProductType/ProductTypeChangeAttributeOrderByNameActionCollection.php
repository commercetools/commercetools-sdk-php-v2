<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeChangeAttributeOrderByNameAction>
 * @method ProductTypeChangeAttributeOrderByNameAction current()
 * @method ProductTypeChangeAttributeOrderByNameAction at($offset)
 */
class ProductTypeChangeAttributeOrderByNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeAttributeOrderByNameAction $value
     * @psalm-param ProductTypeChangeAttributeOrderByNameAction|stdClass $value
     * @return ProductTypeChangeAttributeOrderByNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeAttributeOrderByNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeAttributeOrderByNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeChangeAttributeOrderByNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeAttributeOrderByNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}