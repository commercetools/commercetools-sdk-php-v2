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
 * @extends ProductUpdateActionCollection<ProductSetMetaDescriptionAction>
 * @method ProductSetMetaDescriptionAction current()
 * @method ProductSetMetaDescriptionAction at($offset)
 */
class ProductSetMetaDescriptionActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetMetaDescriptionAction $value
     * @psalm-param ProductSetMetaDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetMetaDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetMetaDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetMetaDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetMetaDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetMetaDescriptionAction $data */
                $data = ProductSetMetaDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
