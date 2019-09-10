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
 * @extends MapperSequence<ProductTypeUpdateAction>
 * @method ProductTypeUpdateAction current()
 * @method ProductTypeUpdateAction at($offset)
 */
class ProductTypeUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeUpdateAction $value
     * @psalm-param ProductTypeUpdateAction|stdClass $value
     * @return ProductTypeUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}