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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetDescriptionAction>
 * @method ProductTailoringSetDescriptionAction current()
 * @method ProductTailoringSetDescriptionAction end()
 * @method ProductTailoringSetDescriptionAction at($offset)
 */
class ProductTailoringSetDescriptionActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetDescriptionAction $value
     * @psalm-param ProductTailoringSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetDescriptionAction $data */
                $data = ProductTailoringSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
