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
 * @extends MapperSequence<CategoryDraft>
 * @method CategoryDraft current()
 * @method CategoryDraft end()
 * @method CategoryDraft at($offset)
 */
class CategoryDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryDraft $value
     * @psalm-param CategoryDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryDraft $data */
                $data = CategoryDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
