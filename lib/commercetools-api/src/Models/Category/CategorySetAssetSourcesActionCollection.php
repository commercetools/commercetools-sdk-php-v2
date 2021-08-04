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
 * @extends CategoryUpdateActionCollection<CategorySetAssetSourcesAction>
 * @method CategorySetAssetSourcesAction current()
 * @method CategorySetAssetSourcesAction end()
 * @method CategorySetAssetSourcesAction at($offset)
 */
class CategorySetAssetSourcesActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetAssetSourcesAction $value
     * @psalm-param CategorySetAssetSourcesAction|stdClass $value
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
        return function (?int $index): ?CategorySetAssetSourcesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetAssetSourcesAction $data */
                $data = CategorySetAssetSourcesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
