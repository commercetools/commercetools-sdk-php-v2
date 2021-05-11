<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Category\CategoryUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends CategoryUpdateActionCollection<CategorySetAssetCustomTypeAction>
 * @method CategorySetAssetCustomTypeAction current()
 * @method CategorySetAssetCustomTypeAction at($offset)
 */
class CategorySetAssetCustomTypeActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetAssetCustomTypeAction $value
     * @psalm-param CategorySetAssetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetAssetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategorySetAssetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetAssetCustomTypeAction $data */
                $data = CategorySetAssetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
