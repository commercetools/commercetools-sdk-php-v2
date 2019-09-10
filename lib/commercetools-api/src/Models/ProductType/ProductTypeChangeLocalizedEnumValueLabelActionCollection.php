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
 * @extends MapperSequence<ProductTypeChangeLocalizedEnumValueLabelAction>
 * @method ProductTypeChangeLocalizedEnumValueLabelAction current()
 * @method ProductTypeChangeLocalizedEnumValueLabelAction at($offset)
 */
class ProductTypeChangeLocalizedEnumValueLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeLocalizedEnumValueLabelAction $value
     * @psalm-param ProductTypeChangeLocalizedEnumValueLabelAction|stdClass $value
     * @return ProductTypeChangeLocalizedEnumValueLabelActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeLocalizedEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeLocalizedEnumValueLabelAction
     */
    protected function mapper()
    {
        return function(int $index): ?ProductTypeChangeLocalizedEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeLocalizedEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}