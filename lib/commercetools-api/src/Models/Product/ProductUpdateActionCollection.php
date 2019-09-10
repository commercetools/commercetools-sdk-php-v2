<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductUpdateAction>
 * @method ProductUpdateAction current()
 * @method ProductUpdateAction at($offset)
 */
class ProductUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductUpdateAction $value
     * @psalm-param ProductUpdateAction|stdClass $value
     * @return ProductUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}