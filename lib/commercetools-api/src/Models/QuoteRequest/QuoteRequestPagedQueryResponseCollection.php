<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<QuoteRequestPagedQueryResponse>
 * @method QuoteRequestPagedQueryResponse current()
 * @method QuoteRequestPagedQueryResponse end()
 * @method QuoteRequestPagedQueryResponse at($offset)
 */
class QuoteRequestPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert QuoteRequestPagedQueryResponse $value
     * @psalm-param QuoteRequestPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestPagedQueryResponse $data */
                $data = QuoteRequestPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
