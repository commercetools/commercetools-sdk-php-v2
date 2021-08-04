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
 * @extends ProductTypeUpdateActionCollection<ProductTypeChangeInputHintAction>
 * @method ProductTypeChangeInputHintAction current()
 * @method ProductTypeChangeInputHintAction at($offset)
 */
class ProductTypeChangeInputHintActionCollection extends ProductTypeUpdateActionCollection
{
    /**
     * @psalm-assert ProductTypeChangeInputHintAction $value
     * @psalm-param ProductTypeChangeInputHintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeChangeInputHintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeChangeInputHintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeChangeInputHintAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeChangeInputHintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeChangeInputHintAction $data */
                $data = ProductTypeChangeInputHintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
