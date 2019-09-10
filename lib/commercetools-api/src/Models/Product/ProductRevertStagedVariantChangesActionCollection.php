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
 * @extends MapperSequence<ProductRevertStagedVariantChangesAction>
 *
 * @method ProductRevertStagedVariantChangesAction current()
 * @method ProductRevertStagedVariantChangesAction at($offset)
 */
class ProductRevertStagedVariantChangesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRevertStagedVariantChangesAction $value
     * @psalm-param ProductRevertStagedVariantChangesAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductRevertStagedVariantChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRevertStagedVariantChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRevertStagedVariantChangesAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRevertStagedVariantChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRevertStagedVariantChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
