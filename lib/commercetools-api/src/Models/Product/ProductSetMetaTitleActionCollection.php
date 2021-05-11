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
 * @extends ProductUpdateActionCollection<ProductSetMetaTitleAction>
 * @method ProductSetMetaTitleAction current()
 * @method ProductSetMetaTitleAction at($offset)
 */
class ProductSetMetaTitleActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetMetaTitleAction $value
     * @psalm-param ProductSetMetaTitleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetMetaTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetMetaTitleAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetMetaTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetMetaTitleAction $data */
                $data = ProductSetMetaTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
