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
 * @extends CategoryUpdateActionCollection<CategorySetMetaKeywordsAction>
 * @method CategorySetMetaKeywordsAction current()
 * @method CategorySetMetaKeywordsAction at($offset)
 */
class CategorySetMetaKeywordsActionCollection extends CategoryUpdateActionCollection
{
    /**
     * @psalm-assert CategorySetMetaKeywordsAction $value
     * @psalm-param CategorySetMetaKeywordsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySetMetaKeywordsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySetMetaKeywordsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySetMetaKeywordsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySetMetaKeywordsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySetMetaKeywordsAction $data */
                $data = CategorySetMetaKeywordsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
