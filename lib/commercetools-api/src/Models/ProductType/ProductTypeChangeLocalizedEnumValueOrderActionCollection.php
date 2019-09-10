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
 * @extends MapperSequence<ProductTypeChangeLocalizedEnumValueOrderAction>
 *
 * @method ProductTypeChangeLocalizedEnumValueOrderAction current()
 * @method ProductTypeChangeLocalizedEnumValueOrderAction at($offset)
 */
class ProductTypeChangeLocalizedEnumValueOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeChangeLocalizedEnumValueOrderAction $value
     * @psalm-param ProductTypeChangeLocalizedEnumValueOrderAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeLocalizedEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeLocalizedEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeLocalizedEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeLocalizedEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeChangeLocalizedEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
