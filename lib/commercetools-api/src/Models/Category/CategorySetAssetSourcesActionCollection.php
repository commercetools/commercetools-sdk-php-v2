<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategorySetAssetSourcesAction>
 *
 * @method CategorySetAssetSourcesAction current()
 * @method CategorySetAssetSourcesAction at($offset)
 */
class CategorySetAssetSourcesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySetAssetSourcesAction $value
     * @psalm-param CategorySetAssetSourcesAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CategorySetAssetSourcesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetSourcesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetSourcesAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategorySetAssetSourcesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySetAssetSourcesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
