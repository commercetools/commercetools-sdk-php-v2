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
 * @extends ProductUpdateActionCollection<ProductMoveImageToPositionAction>
 * @method ProductMoveImageToPositionAction current()
 * @method ProductMoveImageToPositionAction at($offset)
 */
class ProductMoveImageToPositionActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductMoveImageToPositionAction $value
     * @psalm-param ProductMoveImageToPositionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductMoveImageToPositionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductMoveImageToPositionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductMoveImageToPositionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductMoveImageToPositionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductMoveImageToPositionAction $data */
                $data = ProductMoveImageToPositionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
