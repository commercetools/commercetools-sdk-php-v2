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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringUnpublishAction>
 * @method ProductTailoringUnpublishAction current()
 * @method ProductTailoringUnpublishAction end()
 * @method ProductTailoringUnpublishAction at($offset)
 */
class ProductTailoringUnpublishActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringUnpublishAction $value
     * @psalm-param ProductTailoringUnpublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringUnpublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringUnpublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringUnpublishAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringUnpublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringUnpublishAction $data */
                $data = ProductTailoringUnpublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
