<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<QuotePagedQueryResponse>
 * @method QuotePagedQueryResponse current()
 * @method QuotePagedQueryResponse end()
 * @method QuotePagedQueryResponse at($offset)
 */
class QuotePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert QuotePagedQueryResponse $value
     * @psalm-param QuotePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuotePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuotePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuotePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?QuotePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuotePagedQueryResponse $data */
                $data = QuotePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
