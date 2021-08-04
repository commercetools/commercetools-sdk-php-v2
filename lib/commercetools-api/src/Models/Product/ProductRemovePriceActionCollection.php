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
 * @extends ProductUpdateActionCollection<ProductRemovePriceAction>
 * @method ProductRemovePriceAction current()
 * @method ProductRemovePriceAction end()
 * @method ProductRemovePriceAction at($offset)
 */
class ProductRemovePriceActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductRemovePriceAction $value
     * @psalm-param ProductRemovePriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRemovePriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemovePriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemovePriceAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductRemovePriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRemovePriceAction $data */
                $data = ProductRemovePriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
