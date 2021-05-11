<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Product\ProductUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductUpdateActionCollection<ProductPublishAction>
 * @method ProductPublishAction current()
 * @method ProductPublishAction at($offset)
 */
class ProductPublishActionCollection extends ProductUpdateActionCollection
{
    /**
     * @psalm-assert ProductPublishAction $value
     * @psalm-param ProductPublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPublishAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductPublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductPublishAction $data */
                $data = ProductPublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
