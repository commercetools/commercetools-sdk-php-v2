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
 * @extends ProductUpdateActionCollection<ProductRemoveVariantAction>
 * @method ProductRemoveVariantAction current()
 * @method ProductRemoveVariantAction at($offset)
 */
class ProductRemoveVariantActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductRemoveVariantAction $value
     * @psalm-param ProductRemoveVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRemoveVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemoveVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemoveVariantAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemoveVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRemoveVariantAction $data */
                $data = ProductRemoveVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
