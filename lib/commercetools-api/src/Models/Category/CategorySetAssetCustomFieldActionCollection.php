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
 * @extends CategoryUpdateActionCollection<CategorySetAssetCustomFieldAction>
 * @method CategorySetAssetCustomFieldAction current()
 * @method CategorySetAssetCustomFieldAction at($offset)
 */
class CategorySetAssetCustomFieldActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetAssetCustomFieldAction $value
     * @psalm-param CategorySetAssetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetAssetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategorySetAssetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetAssetCustomFieldAction $data */
                $data = CategorySetAssetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
