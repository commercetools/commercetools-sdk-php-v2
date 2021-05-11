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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeIsSearchableAction>
 * @method ProductTypeChangeIsSearchableAction current()
 * @method ProductTypeChangeIsSearchableAction at($offset)
 */
class ProductTypeChangeIsSearchableActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeIsSearchableAction $value
     * @psalm-param ProductTypeChangeIsSearchableAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeIsSearchableActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeIsSearchableAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeIsSearchableAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeChangeIsSearchableAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeIsSearchableAction $data */
                $data = ProductTypeChangeIsSearchableActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
