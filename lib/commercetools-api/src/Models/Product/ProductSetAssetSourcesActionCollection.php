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
 * @extends MapperSequence<ProductSetAssetSourcesAction>
 *
 * @method ProductSetAssetSourcesAction current()
 * @method ProductSetAssetSourcesAction at($offset)
 */
class ProductSetAssetSourcesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAssetSourcesAction $value
     * @psalm-param ProductSetAssetSourcesAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetSourcesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetSourcesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetSourcesAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetAssetSourcesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAssetSourcesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
