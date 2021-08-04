<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditPagedQueryResponse>
 * @method OrderEditPagedQueryResponse current()
 * @method OrderEditPagedQueryResponse end()
 * @method OrderEditPagedQueryResponse at($offset)
 */
class OrderEditPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditPagedQueryResponse $value
     * @psalm-param OrderEditPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderEditPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditPagedQueryResponse $data */
                $data = OrderEditPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
