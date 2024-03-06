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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringPublishAction>
 * @method ProductTailoringPublishAction current()
 * @method ProductTailoringPublishAction end()
 * @method ProductTailoringPublishAction at($offset)
 */
class ProductTailoringPublishActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringPublishAction $value
     * @psalm-param ProductTailoringPublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringPublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringPublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringPublishAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringPublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringPublishAction $data */
                $data = ProductTailoringPublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
