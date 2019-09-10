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
 * @extends MapperSequence<ProductSetAttributeAction>
 * @method ProductSetAttributeAction current()
 * @method ProductSetAttributeAction at($offset)
 */
class ProductSetAttributeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAttributeAction $value
     * @psalm-param ProductSetAttributeAction|stdClass $value
     * @return ProductSetAttributeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAttributeAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductSetAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAttributeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}