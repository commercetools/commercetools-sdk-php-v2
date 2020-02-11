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
 * @extends MapperSequence<ProductRevertStagedChangesAction>
 * @method ProductRevertStagedChangesAction current()
 * @method ProductRevertStagedChangesAction at($offset)
 */
class ProductRevertStagedChangesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRevertStagedChangesAction $value
     * @psalm-param ProductRevertStagedChangesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRevertStagedChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRevertStagedChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRevertStagedChangesAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductRevertStagedChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRevertStagedChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
