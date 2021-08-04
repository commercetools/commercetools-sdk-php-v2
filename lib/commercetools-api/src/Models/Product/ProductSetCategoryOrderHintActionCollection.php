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
 * @extends ProductUpdateActionCollection<ProductSetCategoryOrderHintAction>
 * @method ProductSetCategoryOrderHintAction current()
 * @method ProductSetCategoryOrderHintAction at($offset)
 */
class ProductSetCategoryOrderHintActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetCategoryOrderHintAction $value
     * @psalm-param ProductSetCategoryOrderHintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetCategoryOrderHintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetCategoryOrderHintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetCategoryOrderHintAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetCategoryOrderHintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetCategoryOrderHintAction $data */
                $data = ProductSetCategoryOrderHintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
