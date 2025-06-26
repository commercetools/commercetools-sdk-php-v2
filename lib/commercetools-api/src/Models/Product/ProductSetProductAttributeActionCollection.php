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
 * @extends ProductUpdateActionCollection<ProductSetProductAttributeAction>
 * @method ProductSetProductAttributeAction current()
 * @method ProductSetProductAttributeAction end()
 * @method ProductSetProductAttributeAction at($offset)
 */
class ProductSetProductAttributeActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetProductAttributeAction $value
     * @psalm-param ProductSetProductAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetProductAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetProductAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetProductAttributeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetProductAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetProductAttributeAction $data */
                $data = ProductSetProductAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
