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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetNameAction>
 * @method ProductTailoringSetNameAction current()
 * @method ProductTailoringSetNameAction end()
 * @method ProductTailoringSetNameAction at($offset)
 */
class ProductTailoringSetNameActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetNameAction $value
     * @psalm-param ProductTailoringSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetNameAction $data */
                $data = ProductTailoringSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
