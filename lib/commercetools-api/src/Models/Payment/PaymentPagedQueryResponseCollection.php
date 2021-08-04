<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentPagedQueryResponse>
 * @method PaymentPagedQueryResponse current()
 * @method PaymentPagedQueryResponse at($offset)
 */
class PaymentPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentPagedQueryResponse $value
     * @psalm-param PaymentPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentPagedQueryResponse $data */
                $data = PaymentPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
