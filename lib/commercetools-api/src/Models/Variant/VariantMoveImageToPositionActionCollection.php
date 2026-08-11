<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Variant\VariantUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends VariantUpdateActionCollection<VariantMoveImageToPositionAction>
 * @method VariantMoveImageToPositionAction current()
 * @method VariantMoveImageToPositionAction end()
 * @method VariantMoveImageToPositionAction at($offset)
 */
class VariantMoveImageToPositionActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantMoveImageToPositionAction $value
     * @psalm-param VariantMoveImageToPositionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantMoveImageToPositionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantMoveImageToPositionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantMoveImageToPositionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantMoveImageToPositionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantMoveImageToPositionAction $data */
                $data = VariantMoveImageToPositionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
