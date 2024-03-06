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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetMetaAttributesAction>
 * @method ProductTailoringSetMetaAttributesAction current()
 * @method ProductTailoringSetMetaAttributesAction end()
 * @method ProductTailoringSetMetaAttributesAction at($offset)
 */
class ProductTailoringSetMetaAttributesActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetMetaAttributesAction $value
     * @psalm-param ProductTailoringSetMetaAttributesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetMetaAttributesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetMetaAttributesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetMetaAttributesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetMetaAttributesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetMetaAttributesAction $data */
                $data = ProductTailoringSetMetaAttributesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
