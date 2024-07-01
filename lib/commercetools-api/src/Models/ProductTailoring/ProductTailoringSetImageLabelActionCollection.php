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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetImageLabelAction>
 * @method ProductTailoringSetImageLabelAction current()
 * @method ProductTailoringSetImageLabelAction end()
 * @method ProductTailoringSetImageLabelAction at($offset)
 */
class ProductTailoringSetImageLabelActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetImageLabelAction $value
     * @psalm-param ProductTailoringSetImageLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetImageLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetImageLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetImageLabelAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetImageLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetImageLabelAction $data */
                $data = ProductTailoringSetImageLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
