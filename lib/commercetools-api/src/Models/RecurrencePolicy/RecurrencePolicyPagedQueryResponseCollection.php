<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecurrencePolicyPagedQueryResponse>
 * @method RecurrencePolicyPagedQueryResponse current()
 * @method RecurrencePolicyPagedQueryResponse end()
 * @method RecurrencePolicyPagedQueryResponse at($offset)
 */
class RecurrencePolicyPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurrencePolicyPagedQueryResponse $value
     * @psalm-param RecurrencePolicyPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurrencePolicyPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurrencePolicyPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurrencePolicyPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurrencePolicyPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurrencePolicyPagedQueryResponse $data */
                $data = RecurrencePolicyPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
