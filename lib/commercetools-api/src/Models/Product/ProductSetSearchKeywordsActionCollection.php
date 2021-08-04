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
 * @extends ProductUpdateActionCollection<ProductSetSearchKeywordsAction>
 * @method ProductSetSearchKeywordsAction current()
 * @method ProductSetSearchKeywordsAction at($offset)
 */
class ProductSetSearchKeywordsActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetSearchKeywordsAction $value
     * @psalm-param ProductSetSearchKeywordsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetSearchKeywordsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetSearchKeywordsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetSearchKeywordsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetSearchKeywordsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetSearchKeywordsAction $data */
                $data = ProductSetSearchKeywordsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
