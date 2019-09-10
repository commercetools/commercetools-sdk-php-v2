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
 * @extends MapperSequence<ProductTypeChangeAttributeNameAction>
 * @method ProductTypeChangeAttributeNameAction current()
 * @method ProductTypeChangeAttributeNameAction at($offset)
 */
class ProductTypeChangeAttributeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeAttributeNameAction $value
     * @psalm-param ProductTypeChangeAttributeNameAction|stdClass $value
     * @return ProductTypeChangeAttributeNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeAttributeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeAttributeNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeChangeAttributeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeAttributeNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}