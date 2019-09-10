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
 * @extends MapperSequence<ProductSetTaxCategoryAction>
 *
 * @method ProductSetTaxCategoryAction current()
 * @method ProductSetTaxCategoryAction at($offset)
 */
class ProductSetTaxCategoryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetTaxCategoryAction $value
     * @psalm-param ProductSetTaxCategoryAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetTaxCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetTaxCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetTaxCategoryAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetTaxCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetTaxCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
