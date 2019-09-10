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
 * @extends MapperSequence<ProductRemoveVariantAction>
 *
 * @method ProductRemoveVariantAction current()
 * @method ProductRemoveVariantAction at($offset)
 */
class ProductRemoveVariantActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRemoveVariantAction $value
     * @psalm-param ProductRemoveVariantAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductRemoveVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemoveVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemoveVariantAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemoveVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRemoveVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
