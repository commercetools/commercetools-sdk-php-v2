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
 * @extends MapperSequence<ProductSetPricesAction>
 * @method ProductSetPricesAction current()
 * @method ProductSetPricesAction at($offset)
 */
class ProductSetPricesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetPricesAction $value
     * @psalm-param ProductSetPricesAction|stdClass $value
     * @return ProductSetPricesActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetPricesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetPricesAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductSetPricesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetPricesActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}