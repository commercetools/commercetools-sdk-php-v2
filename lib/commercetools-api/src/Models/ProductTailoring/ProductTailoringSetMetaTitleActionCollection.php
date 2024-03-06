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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetMetaTitleAction>
 * @method ProductTailoringSetMetaTitleAction current()
 * @method ProductTailoringSetMetaTitleAction end()
 * @method ProductTailoringSetMetaTitleAction at($offset)
 */
class ProductTailoringSetMetaTitleActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetMetaTitleAction $value
     * @psalm-param ProductTailoringSetMetaTitleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetMetaTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetMetaTitleAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetMetaTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetMetaTitleAction $data */
                $data = ProductTailoringSetMetaTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
