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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringAddExternalImageAction>
 * @method ProductTailoringAddExternalImageAction current()
 * @method ProductTailoringAddExternalImageAction end()
 * @method ProductTailoringAddExternalImageAction at($offset)
 */
class ProductTailoringAddExternalImageActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringAddExternalImageAction $value
     * @psalm-param ProductTailoringAddExternalImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringAddExternalImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringAddExternalImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringAddExternalImageAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringAddExternalImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringAddExternalImageAction $data */
                $data = ProductTailoringAddExternalImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
