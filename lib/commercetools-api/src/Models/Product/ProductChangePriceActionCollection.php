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
 * @extends MapperSequence<ProductChangePriceAction>
 * @method ProductChangePriceAction current()
 * @method ProductChangePriceAction at($offset)
 */
class ProductChangePriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductChangePriceAction $value
     * @psalm-param ProductChangePriceAction|stdClass $value
     * @return ProductChangePriceActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductChangePriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductChangePriceAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductChangePriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductChangePriceActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}