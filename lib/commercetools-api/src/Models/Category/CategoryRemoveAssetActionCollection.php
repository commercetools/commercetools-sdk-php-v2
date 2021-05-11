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
 * @extends CategoryUpdateActionCollection<CategoryRemoveAssetAction>
 * @method CategoryRemoveAssetAction current()
 * @method CategoryRemoveAssetAction at($offset)
 */
class CategoryRemoveAssetActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryRemoveAssetAction $value
     * @psalm-param CategoryRemoveAssetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryRemoveAssetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryRemoveAssetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryRemoveAssetAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryRemoveAssetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryRemoveAssetAction $data */
                $data = CategoryRemoveAssetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
