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
 * @extends MapperSequence<ProductRemoveFromCategoryAction>
 *
 * @method ProductRemoveFromCategoryAction current()
 * @method ProductRemoveFromCategoryAction at($offset)
 */
class ProductRemoveFromCategoryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRemoveFromCategoryAction $value
     * @psalm-param ProductRemoveFromCategoryAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductRemoveFromCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemoveFromCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemoveFromCategoryAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRemoveFromCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRemoveFromCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
