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
 * @extends MapperSequence<ProductChangeMasterVariantAction>
 * @method ProductChangeMasterVariantAction current()
 * @method ProductChangeMasterVariantAction at($offset)
 */
class ProductChangeMasterVariantActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductChangeMasterVariantAction $value
     * @psalm-param ProductChangeMasterVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductChangeMasterVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductChangeMasterVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductChangeMasterVariantAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductChangeMasterVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductChangeMasterVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
