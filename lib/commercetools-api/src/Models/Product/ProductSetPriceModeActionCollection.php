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
 * @extends ProductUpdateActionCollection<ProductSetPriceModeAction>
 * @method ProductSetPriceModeAction current()
 * @method ProductSetPriceModeAction end()
 * @method ProductSetPriceModeAction at($offset)
 */
class ProductSetPriceModeActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetPriceModeAction $value
     * @psalm-param ProductSetPriceModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetPriceModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetPriceModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetPriceModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSetPriceModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetPriceModeAction $data */
                $data = ProductSetPriceModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
