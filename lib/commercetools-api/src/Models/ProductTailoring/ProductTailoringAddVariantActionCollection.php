<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\ProductTailoring\ProductTailoringUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringAddVariantAction>
 * @method ProductTailoringAddVariantAction current()
 * @method ProductTailoringAddVariantAction end()
 * @method ProductTailoringAddVariantAction at($offset)
 */
class ProductTailoringAddVariantActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringAddVariantAction $value
     * @psalm-param ProductTailoringAddVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringAddVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringAddVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringAddVariantAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringAddVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringAddVariantAction $data */
                $data = ProductTailoringAddVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
