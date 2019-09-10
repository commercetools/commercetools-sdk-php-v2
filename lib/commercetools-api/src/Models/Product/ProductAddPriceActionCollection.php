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
 * @extends MapperSequence<ProductAddPriceAction>
 * @method ProductAddPriceAction current()
 * @method ProductAddPriceAction at($offset)
 */
class ProductAddPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductAddPriceAction $value
     * @psalm-param ProductAddPriceAction|stdClass $value
     * @return ProductAddPriceActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddPriceAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductAddPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductAddPriceActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}