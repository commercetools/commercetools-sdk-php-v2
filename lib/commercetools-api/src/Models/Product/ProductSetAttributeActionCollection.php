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
 * @extends ProductUpdateActionCollection<ProductSetAttributeAction>
 * @method ProductSetAttributeAction current()
 * @method ProductSetAttributeAction at($offset)
 */
class ProductSetAttributeActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetAttributeAction $value
     * @psalm-param ProductSetAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAttributeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetAttributeAction $data */
                $data = ProductSetAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
