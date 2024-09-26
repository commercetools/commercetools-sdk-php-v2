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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAttributeAction>
 * @method ProductTailoringSetAttributeAction current()
 * @method ProductTailoringSetAttributeAction end()
 * @method ProductTailoringSetAttributeAction at($offset)
 */
class ProductTailoringSetAttributeActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAttributeAction $value
     * @psalm-param ProductTailoringSetAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAttributeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAttributeAction $data */
                $data = ProductTailoringSetAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
