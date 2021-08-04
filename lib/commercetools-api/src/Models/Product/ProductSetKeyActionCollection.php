<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Product\ProductUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductUpdateActionCollection<ProductSetKeyAction>
 * @method ProductSetKeyAction current()
 * @method ProductSetKeyAction end()
 * @method ProductSetKeyAction at($offset)
 */
class ProductSetKeyActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetKeyAction $value
     * @psalm-param ProductSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetKeyAction $data */
                $data = ProductSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
