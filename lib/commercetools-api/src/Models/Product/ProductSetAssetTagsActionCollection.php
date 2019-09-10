<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSetAssetTagsAction>
 *
 * @method ProductSetAssetTagsAction current()
 * @method ProductSetAssetTagsAction at($offset)
 */
class ProductSetAssetTagsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAssetTagsAction $value
     * @psalm-param ProductSetAssetTagsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetTagsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetTagsAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetAssetTagsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAssetTagsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
