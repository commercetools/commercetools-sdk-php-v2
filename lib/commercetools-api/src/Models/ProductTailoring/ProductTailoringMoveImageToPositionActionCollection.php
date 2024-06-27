<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\ProductTailoring\ProductTailoringUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringMoveImageToPositionAction>
 * @method ProductTailoringMoveImageToPositionAction current()
 * @method ProductTailoringMoveImageToPositionAction end()
 * @method ProductTailoringMoveImageToPositionAction at($offset)
 */
class ProductTailoringMoveImageToPositionActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringMoveImageToPositionAction $value
     * @psalm-param ProductTailoringMoveImageToPositionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringMoveImageToPositionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringMoveImageToPositionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringMoveImageToPositionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringMoveImageToPositionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringMoveImageToPositionAction $data */
                $data = ProductTailoringMoveImageToPositionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
