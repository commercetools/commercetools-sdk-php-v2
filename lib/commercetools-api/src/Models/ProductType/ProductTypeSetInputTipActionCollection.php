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
 * @extends ProductTypeUpdateActionCollection<ProductTypeSetInputTipAction>
 * @method ProductTypeSetInputTipAction current()
 * @method ProductTypeSetInputTipAction at($offset)
 */
class ProductTypeSetInputTipActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeSetInputTipAction $value
     * @psalm-param ProductTypeSetInputTipAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeSetInputTipActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeSetInputTipAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeSetInputTipAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeSetInputTipAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeSetInputTipAction $data */
                $data = ProductTypeSetInputTipActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
