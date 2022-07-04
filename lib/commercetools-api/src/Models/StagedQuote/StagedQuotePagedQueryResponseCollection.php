<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedQuotePagedQueryResponse>
 * @method StagedQuotePagedQueryResponse current()
 * @method StagedQuotePagedQueryResponse end()
 * @method StagedQuotePagedQueryResponse at($offset)
 */
class StagedQuotePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedQuotePagedQueryResponse $value
     * @psalm-param StagedQuotePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuotePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuotePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuotePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuotePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuotePagedQueryResponse $data */
                $data = StagedQuotePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
