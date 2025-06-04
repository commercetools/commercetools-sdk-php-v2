<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CheckoutMessagePaymentsPayloadBaseData>
 * @method CheckoutMessagePaymentsPayloadBaseData current()
 * @method CheckoutMessagePaymentsPayloadBaseData end()
 * @method CheckoutMessagePaymentsPayloadBaseData at($offset)
 */
class CheckoutMessagePaymentsPayloadBaseDataCollection extends MapperSequence
{
    /**
     * @psalm-assert CheckoutMessagePaymentsPayloadBaseData $value
     * @psalm-param CheckoutMessagePaymentsPayloadBaseData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutMessagePaymentsPayloadBaseDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutMessagePaymentsPayloadBaseData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutMessagePaymentsPayloadBaseData
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutMessagePaymentsPayloadBaseData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutMessagePaymentsPayloadBaseData $data */
                $data = CheckoutMessagePaymentsPayloadBaseDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
