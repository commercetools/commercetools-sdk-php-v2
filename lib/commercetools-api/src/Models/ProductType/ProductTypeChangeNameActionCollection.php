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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeNameAction>
 * @method ProductTypeChangeNameAction current()
 * @method ProductTypeChangeNameAction end()
 * @method ProductTypeChangeNameAction at($offset)
 */
class ProductTypeChangeNameActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeNameAction $value
     * @psalm-param ProductTypeChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeNameAction $data */
                $data = ProductTypeChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
