<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Product\FacetResultCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends FacetResultCollection<RangeFacetResult>
 * @method RangeFacetResult current()
 * @method RangeFacetResult end()
 * @method RangeFacetResult at($offset)
 */
class RangeFacetResultCollection extends FacetResultCollection
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
        return function (?int $index): ?RangeFacetResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RangeFacetResult $data */
                $data = RangeFacetResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
