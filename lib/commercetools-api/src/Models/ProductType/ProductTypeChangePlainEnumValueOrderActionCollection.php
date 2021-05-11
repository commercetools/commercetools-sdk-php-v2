<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\ProductType\ProductTypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangePlainEnumValueOrderAction>
 * @method ProductTypeChangePlainEnumValueOrderAction current()
 * @method ProductTypeChangePlainEnumValueOrderAction at($offset)
 */
class ProductTypeChangePlainEnumValueOrderActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangePlainEnumValueOrderAction $value
     * @psalm-param ProductTypeChangePlainEnumValueOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangePlainEnumValueOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangePlainEnumValueOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangePlainEnumValueOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangePlainEnumValueOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangePlainEnumValueOrderAction $data */
                $data = ProductTypeChangePlainEnumValueOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
