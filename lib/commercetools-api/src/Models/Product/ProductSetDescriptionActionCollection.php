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
 * @extends ProductUpdateActionCollection<ProductSetDescriptionAction>
 * @method ProductSetDescriptionAction current()
 * @method ProductSetDescriptionAction end()
 * @method ProductSetDescriptionAction at($offset)
 */
class ProductSetDescriptionActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetDescriptionAction $value
     * @psalm-param ProductSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetDescriptionAction $data */
                $data = ProductSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
