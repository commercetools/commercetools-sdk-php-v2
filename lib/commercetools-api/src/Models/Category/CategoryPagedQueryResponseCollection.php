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
 * @extends MapperSequence<CategoryPagedQueryResponse>
 * @method CategoryPagedQueryResponse current()
 * @method CategoryPagedQueryResponse at($offset)
 */
class CategoryPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryPagedQueryResponse $value
     * @psalm-param CategoryPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryPagedQueryResponse $data */
                $data = CategoryPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
