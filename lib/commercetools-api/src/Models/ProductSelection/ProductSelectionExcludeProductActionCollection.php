<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Api\Models\ProductSelection\ProductSelectionUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ProductSelectionUpdateActionCollection<ProductSelectionExcludeProductAction>
 * @method ProductSelectionExcludeProductAction current()
 * @method ProductSelectionExcludeProductAction end()
 * @method ProductSelectionExcludeProductAction at($offset)
 */
class ProductSelectionExcludeProductActionCollection extends ProductSelectionUpdateActionCollection
{
    /**
     * @psalm-assert ProductSelectionExcludeProductAction $value
     * @psalm-param ProductSelectionExcludeProductAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionExcludeProductActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionExcludeProductAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionExcludeProductAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionExcludeProductAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionExcludeProductAction $data */
                $data = ProductSelectionExcludeProductActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
