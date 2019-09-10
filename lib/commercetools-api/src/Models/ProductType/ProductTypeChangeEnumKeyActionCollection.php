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
 * @extends MapperSequence<ProductTypeChangeEnumKeyAction>
 * @method ProductTypeChangeEnumKeyAction current()
 * @method ProductTypeChangeEnumKeyAction at($offset)
 */
class ProductTypeChangeEnumKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeEnumKeyAction $value
     * @psalm-param ProductTypeChangeEnumKeyAction|stdClass $value
     * @return ProductTypeChangeEnumKeyActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeEnumKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeEnumKeyAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeChangeEnumKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeEnumKeyActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}