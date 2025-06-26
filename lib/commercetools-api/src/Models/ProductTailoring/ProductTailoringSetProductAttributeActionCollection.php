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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetProductAttributeAction>
 * @method ProductTailoringSetProductAttributeAction current()
 * @method ProductTailoringSetProductAttributeAction end()
 * @method ProductTailoringSetProductAttributeAction at($offset)
 */
class ProductTailoringSetProductAttributeActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetProductAttributeAction $value
     * @psalm-param ProductTailoringSetProductAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetProductAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetProductAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetProductAttributeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetProductAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetProductAttributeAction $data */
                $data = ProductTailoringSetProductAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
