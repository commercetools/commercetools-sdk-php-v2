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
 * @extends ProductUpdateActionCollection<ProductRemoveImageAction>
 * @method ProductRemoveImageAction current()
 * @method ProductRemoveImageAction at($offset)
 */
class ProductRemoveImageActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductRemoveImageAction $value
     * @psalm-param ProductRemoveImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRemoveImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemoveImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemoveImageAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemoveImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRemoveImageAction $data */
                $data = ProductRemoveImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
