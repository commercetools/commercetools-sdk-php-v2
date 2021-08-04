<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReviewPagedQueryResponse>
 * @method ReviewPagedQueryResponse current()
 * @method ReviewPagedQueryResponse end()
 * @method ReviewPagedQueryResponse at($offset)
 */
class ReviewPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewPagedQueryResponse $value
     * @psalm-param ReviewPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewPagedQueryResponse $data */
                $data = ReviewPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
