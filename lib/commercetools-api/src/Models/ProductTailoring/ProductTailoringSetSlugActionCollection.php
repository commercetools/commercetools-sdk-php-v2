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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetSlugAction>
 * @method ProductTailoringSetSlugAction current()
 * @method ProductTailoringSetSlugAction end()
 * @method ProductTailoringSetSlugAction at($offset)
 */
class ProductTailoringSetSlugActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetSlugAction $value
     * @psalm-param ProductTailoringSetSlugAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetSlugActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetSlugAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetSlugAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetSlugAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetSlugAction $data */
                $data = ProductTailoringSetSlugActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
