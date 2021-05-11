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
 * @extends ProductUpdateActionCollection<ProductSetAttributeInAllVariantsAction>
 * @method ProductSetAttributeInAllVariantsAction current()
 * @method ProductSetAttributeInAllVariantsAction at($offset)
 */
class ProductSetAttributeInAllVariantsActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductSetAttributeInAllVariantsAction $value
     * @psalm-param ProductSetAttributeInAllVariantsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSetAttributeInAllVariantsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAttributeInAllVariantsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAttributeInAllVariantsAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetAttributeInAllVariantsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSetAttributeInAllVariantsAction $data */
                $data = ProductSetAttributeInAllVariantsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
