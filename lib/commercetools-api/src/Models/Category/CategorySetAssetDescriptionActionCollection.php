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
 * @extends CategoryUpdateActionCollection<CategorySetAssetDescriptionAction>
 * @method CategorySetAssetDescriptionAction current()
 * @method CategorySetAssetDescriptionAction end()
 * @method CategorySetAssetDescriptionAction at($offset)
 */
class CategorySetAssetDescriptionActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetAssetDescriptionAction $value
     * @psalm-param CategorySetAssetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetAssetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetAssetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetAssetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetAssetDescriptionAction $data */
                $data = CategorySetAssetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
