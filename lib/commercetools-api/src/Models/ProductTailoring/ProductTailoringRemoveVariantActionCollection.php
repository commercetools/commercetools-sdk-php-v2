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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringRemoveVariantAction>
 * @method ProductTailoringRemoveVariantAction current()
 * @method ProductTailoringRemoveVariantAction end()
 * @method ProductTailoringRemoveVariantAction at($offset)
 */
class ProductTailoringRemoveVariantActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringRemoveVariantAction $value
     * @psalm-param ProductTailoringRemoveVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringRemoveVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringRemoveVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringRemoveVariantAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringRemoveVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringRemoveVariantAction $data */
                $data = ProductTailoringRemoveVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
