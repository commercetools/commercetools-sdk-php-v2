<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListPagedQueryResponse>
 * @method ShoppingListPagedQueryResponse current()
 * @method ShoppingListPagedQueryResponse at($offset)
 */
class ShoppingListPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListPagedQueryResponse $value
     * @psalm-param ShoppingListPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ShoppingListPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
