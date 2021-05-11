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
 * @extends CategoryUpdateActionCollection<CategoryChangeAssetOrderAction>
 * @method CategoryChangeAssetOrderAction current()
 * @method CategoryChangeAssetOrderAction at($offset)
 */
class CategoryChangeAssetOrderActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategoryChangeAssetOrderAction $value
     * @psalm-param CategoryChangeAssetOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryChangeAssetOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryChangeAssetOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryChangeAssetOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryChangeAssetOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryChangeAssetOrderAction $data */
                $data = CategoryChangeAssetOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
