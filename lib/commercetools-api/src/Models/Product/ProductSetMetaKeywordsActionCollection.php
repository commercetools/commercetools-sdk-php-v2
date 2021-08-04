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
 * @extends ProductUpdateActionCollection<ProductSetMetaKeywordsAction>
 * @method ProductSetMetaKeywordsAction current()
 * @method ProductSetMetaKeywordsAction end()
 * @method ProductSetMetaKeywordsAction at($offset)
 */
class ProductSetMetaKeywordsActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetMetaKeywordsAction $value
     * @psalm-param ProductSetMetaKeywordsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetMetaKeywordsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetMetaKeywordsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetMetaKeywordsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetMetaKeywordsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetMetaKeywordsAction $data */
                $data = ProductSetMetaKeywordsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
