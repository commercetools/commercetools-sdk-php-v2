<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<QueryPrice>
 * @method QueryPrice current()
 * @method QueryPrice at($offset)
 */
class QueryPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert QueryPrice $value
     * @psalm-param QueryPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QueryPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof QueryPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QueryPrice
     */
    protected function mapper()
    {
        return function (int $index): ?QueryPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = QueryPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
