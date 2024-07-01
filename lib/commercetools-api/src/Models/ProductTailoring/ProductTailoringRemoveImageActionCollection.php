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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringRemoveImageAction>
 * @method ProductTailoringRemoveImageAction current()
 * @method ProductTailoringRemoveImageAction end()
 * @method ProductTailoringRemoveImageAction at($offset)
 */
class ProductTailoringRemoveImageActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringRemoveImageAction $value
     * @psalm-param ProductTailoringRemoveImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringRemoveImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringRemoveImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringRemoveImageAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringRemoveImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringRemoveImageAction $data */
                $data = ProductTailoringRemoveImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
