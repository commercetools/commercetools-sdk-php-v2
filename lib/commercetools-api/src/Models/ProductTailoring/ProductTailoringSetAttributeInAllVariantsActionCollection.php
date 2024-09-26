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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAttributeInAllVariantsAction>
 * @method ProductTailoringSetAttributeInAllVariantsAction current()
 * @method ProductTailoringSetAttributeInAllVariantsAction end()
 * @method ProductTailoringSetAttributeInAllVariantsAction at($offset)
 */
class ProductTailoringSetAttributeInAllVariantsActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAttributeInAllVariantsAction $value
     * @psalm-param ProductTailoringSetAttributeInAllVariantsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAttributeInAllVariantsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAttributeInAllVariantsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAttributeInAllVariantsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAttributeInAllVariantsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAttributeInAllVariantsAction $data */
                $data = ProductTailoringSetAttributeInAllVariantsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
