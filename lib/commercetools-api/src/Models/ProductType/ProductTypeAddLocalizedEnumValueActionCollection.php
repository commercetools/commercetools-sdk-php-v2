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
 * @extends ProductTypeUpdateActionCollection<ProductTypeAddLocalizedEnumValueAction>
 * @method ProductTypeAddLocalizedEnumValueAction current()
 * @method ProductTypeAddLocalizedEnumValueAction at($offset)
 */
class ProductTypeAddLocalizedEnumValueActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeAddLocalizedEnumValueAction $value
     * @psalm-param ProductTypeAddLocalizedEnumValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeAddLocalizedEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeAddLocalizedEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeAddLocalizedEnumValueAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeAddLocalizedEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeAddLocalizedEnumValueAction $data */
                $data = ProductTypeAddLocalizedEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
