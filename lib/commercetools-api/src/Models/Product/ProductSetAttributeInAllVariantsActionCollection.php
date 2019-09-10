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
 * @extends MapperSequence<ProductSetAttributeInAllVariantsAction>
 * @method ProductSetAttributeInAllVariantsAction current()
 * @method ProductSetAttributeInAllVariantsAction at($offset)
 */
class ProductSetAttributeInAllVariantsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAttributeInAllVariantsAction $value
     * @psalm-param ProductSetAttributeInAllVariantsAction|stdClass $value
     * @return ProductSetAttributeInAllVariantsActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAttributeInAllVariantsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAttributeInAllVariantsAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductSetAttributeInAllVariantsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAttributeInAllVariantsActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}