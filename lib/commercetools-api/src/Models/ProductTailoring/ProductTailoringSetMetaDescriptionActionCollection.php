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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetMetaDescriptionAction>
 * @method ProductTailoringSetMetaDescriptionAction current()
 * @method ProductTailoringSetMetaDescriptionAction end()
 * @method ProductTailoringSetMetaDescriptionAction at($offset)
 */
class ProductTailoringSetMetaDescriptionActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetMetaDescriptionAction $value
     * @psalm-param ProductTailoringSetMetaDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetMetaDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetMetaDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetMetaDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetMetaDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetMetaDescriptionAction $data */
                $data = ProductTailoringSetMetaDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
