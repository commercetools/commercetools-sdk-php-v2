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
 * @extends CategoryUpdateActionCollection<CategorySetAssetKeyAction>
 * @method CategorySetAssetKeyAction current()
 * @method CategorySetAssetKeyAction at($offset)
 */
class CategorySetAssetKeyActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetAssetKeyAction $value
     * @psalm-param CategorySetAssetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetAssetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetAssetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetAssetKeyAction $data */
                $data = CategorySetAssetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
