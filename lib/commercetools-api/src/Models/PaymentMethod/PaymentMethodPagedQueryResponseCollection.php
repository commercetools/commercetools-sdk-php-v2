<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\PaymentMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PaymentMethodPagedQueryResponse>
 * @method PaymentMethodPagedQueryResponse current()
 * @method PaymentMethodPagedQueryResponse end()
 * @method PaymentMethodPagedQueryResponse at($offset)
 */
class PaymentMethodPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert PaymentMethodPagedQueryResponse $value
     * @psalm-param PaymentMethodPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PaymentMethodPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof PaymentMethodPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PaymentMethodPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?PaymentMethodPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PaymentMethodPagedQueryResponse $data */
                $data = PaymentMethodPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
