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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetMetaKeywordsAction>
 * @method ProductTailoringSetMetaKeywordsAction current()
 * @method ProductTailoringSetMetaKeywordsAction end()
 * @method ProductTailoringSetMetaKeywordsAction at($offset)
 */
class ProductTailoringSetMetaKeywordsActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetMetaKeywordsAction $value
     * @psalm-param ProductTailoringSetMetaKeywordsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetMetaKeywordsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetMetaKeywordsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetMetaKeywordsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetMetaKeywordsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetMetaKeywordsAction $data */
                $data = ProductTailoringSetMetaKeywordsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
