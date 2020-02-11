<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RangeFacetResult>
 * @method RangeFacetResult current()
 * @method RangeFacetResult at($offset)
 */
class RangeFacetResultCollection extends MapperSequence
{
    /**
     * @psalm-assert RangeFacetResult $value
     * @psalm-param RangeFacetResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RangeFacetResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof RangeFacetResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RangeFacetResult
     */
    protected function mapper()
    {
        return function (int $index): ?RangeFacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RangeFacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
