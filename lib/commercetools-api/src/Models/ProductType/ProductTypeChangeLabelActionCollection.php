<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Api\Models\ProductType\ProductTypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeLabelAction>
 * @method ProductTypeChangeLabelAction current()
 * @method ProductTypeChangeLabelAction end()
 * @method ProductTypeChangeLabelAction at($offset)
 */
class ProductTypeChangeLabelActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeLabelAction $value
     * @psalm-param ProductTypeChangeLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeLabelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeChangeLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeLabelAction $data */
                $data = ProductTypeChangeLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
