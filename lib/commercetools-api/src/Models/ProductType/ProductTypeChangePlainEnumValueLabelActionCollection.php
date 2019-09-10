<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeChangePlainEnumValueLabelAction>
 *
 * @method ProductTypeChangePlainEnumValueLabelAction current()
 * @method ProductTypeChangePlainEnumValueLabelAction at($offset)
 */
class ProductTypeChangePlainEnumValueLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangePlainEnumValueLabelAction $value
     * @psalm-param ProductTypeChangePlainEnumValueLabelAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangePlainEnumValueLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangePlainEnumValueLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangePlainEnumValueLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangePlainEnumValueLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangePlainEnumValueLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
