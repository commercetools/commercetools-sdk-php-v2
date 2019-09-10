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
 * @extends MapperSequence<ProductTypeChangeNameAction>
 * @method ProductTypeChangeNameAction current()
 * @method ProductTypeChangeNameAction at($offset)
 */
class ProductTypeChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeNameAction $value
     * @psalm-param ProductTypeChangeNameAction|stdClass $value
     * @return ProductTypeChangeNameActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeNameAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeNameActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}