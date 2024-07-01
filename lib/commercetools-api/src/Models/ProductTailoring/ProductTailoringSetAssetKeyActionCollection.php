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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAssetKeyAction>
 * @method ProductTailoringSetAssetKeyAction current()
 * @method ProductTailoringSetAssetKeyAction end()
 * @method ProductTailoringSetAssetKeyAction at($offset)
 */
class ProductTailoringSetAssetKeyActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAssetKeyAction $value
     * @psalm-param ProductTailoringSetAssetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAssetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAssetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAssetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAssetKeyAction $data */
                $data = ProductTailoringSetAssetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
