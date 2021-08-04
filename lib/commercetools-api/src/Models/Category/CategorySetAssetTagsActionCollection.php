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
 * @extends CategoryUpdateActionCollection<CategorySetAssetTagsAction>
 * @method CategorySetAssetTagsAction current()
 * @method CategorySetAssetTagsAction at($offset)
 */
class CategorySetAssetTagsActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetAssetTagsAction $value
     * @psalm-param CategorySetAssetTagsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetAssetTagsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetTagsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetAssetTagsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetAssetTagsAction $data */
                $data = CategorySetAssetTagsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
