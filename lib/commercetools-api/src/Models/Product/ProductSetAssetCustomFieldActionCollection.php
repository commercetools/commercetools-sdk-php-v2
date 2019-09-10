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
 * @extends MapperSequence<ProductSetAssetCustomFieldAction>
 *
 * @method ProductSetAssetCustomFieldAction current()
 * @method ProductSetAssetCustomFieldAction at($offset)
 */
class ProductSetAssetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSetAssetCustomFieldAction $value
     * @psalm-param ProductSetAssetCustomFieldAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductSetAssetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSetAssetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?ProductSetAssetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSetAssetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
