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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetKeyAction>
 * @method ProductTailoringSetKeyAction current()
 * @method ProductTailoringSetKeyAction end()
 * @method ProductTailoringSetKeyAction at($offset)
 */
class ProductTailoringSetKeyActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetKeyAction $value
     * @psalm-param ProductTailoringSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetKeyAction $data */
                $data = ProductTailoringSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
