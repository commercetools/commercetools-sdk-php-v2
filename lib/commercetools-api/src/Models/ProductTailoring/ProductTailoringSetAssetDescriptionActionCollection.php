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
 * @extends ProductTailoringUpdateActionCollection<ProductTailoringSetAssetDescriptionAction>
 * @method ProductTailoringSetAssetDescriptionAction current()
 * @method ProductTailoringSetAssetDescriptionAction end()
 * @method ProductTailoringSetAssetDescriptionAction at($offset)
 */
class ProductTailoringSetAssetDescriptionActionCollection extends ProductTailoringUpdateActionCollection
{
    /**
     * @psalm-assert ProductTailoringSetAssetDescriptionAction $value
     * @psalm-param ProductTailoringSetAssetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSetAssetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSetAssetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSetAssetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSetAssetDescriptionAction $data */
                $data = ProductTailoringSetAssetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
