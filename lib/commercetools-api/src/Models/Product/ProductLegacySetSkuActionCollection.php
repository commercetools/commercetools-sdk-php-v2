<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductLegacySetSkuAction>
 * @method ProductLegacySetSkuAction current()
 * @method ProductLegacySetSkuAction at($offset)
 */
class ProductLegacySetSkuActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductLegacySetSkuAction $value
     * @psalm-param ProductLegacySetSkuAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductLegacySetSkuActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductLegacySetSkuAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductLegacySetSkuAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductLegacySetSkuAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductLegacySetSkuActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
