<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecurringOrderPagedQueryResponse>
 * @method RecurringOrderPagedQueryResponse current()
 * @method RecurringOrderPagedQueryResponse end()
 * @method RecurringOrderPagedQueryResponse at($offset)
 */
class RecurringOrderPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert RecurringOrderPagedQueryResponse $value
     * @psalm-param RecurringOrderPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderPagedQueryResponse $data */
                $data = RecurringOrderPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
