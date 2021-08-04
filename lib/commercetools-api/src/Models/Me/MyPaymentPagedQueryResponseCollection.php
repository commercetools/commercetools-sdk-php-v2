<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyPaymentPagedQueryResponse>
 * @method MyPaymentPagedQueryResponse current()
 * @method MyPaymentPagedQueryResponse end()
 * @method MyPaymentPagedQueryResponse at($offset)
 */
class MyPaymentPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentPagedQueryResponse $value
     * @psalm-param MyPaymentPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentPagedQueryResponse $data */
                $data = MyPaymentPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
