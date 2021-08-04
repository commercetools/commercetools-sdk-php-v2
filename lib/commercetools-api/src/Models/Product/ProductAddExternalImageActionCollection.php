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
 * @extends ProductUpdateActionCollection<ProductAddExternalImageAction>
 * @method ProductAddExternalImageAction current()
 * @method ProductAddExternalImageAction at($offset)
 */
class ProductAddExternalImageActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductAddExternalImageAction $value
     * @psalm-param ProductAddExternalImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAddExternalImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddExternalImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddExternalImageAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductAddExternalImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductAddExternalImageAction $data */
                $data = ProductAddExternalImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
