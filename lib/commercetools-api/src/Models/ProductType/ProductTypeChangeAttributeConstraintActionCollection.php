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
 * @extends MapperSequence<ProductTypeChangeAttributeConstraintAction>
 * @method ProductTypeChangeAttributeConstraintAction current()
 * @method ProductTypeChangeAttributeConstraintAction at($offset)
 */
class ProductTypeChangeAttributeConstraintActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeAttributeConstraintAction $value
     * @psalm-param ProductTypeChangeAttributeConstraintAction|stdClass $value
     * @return ProductTypeChangeAttributeConstraintActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeAttributeConstraintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeAttributeConstraintAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeChangeAttributeConstraintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeAttributeConstraintActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}