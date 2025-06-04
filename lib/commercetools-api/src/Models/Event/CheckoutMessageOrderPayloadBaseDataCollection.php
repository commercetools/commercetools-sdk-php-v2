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
 * @extends MapperSequence<CheckoutMessageOrderPayloadBaseData>
 * @method CheckoutMessageOrderPayloadBaseData current()
 * @method CheckoutMessageOrderPayloadBaseData end()
 * @method CheckoutMessageOrderPayloadBaseData at($offset)
 */
class CheckoutMessageOrderPayloadBaseDataCollection extends MapperSequence
{
    /**
     * @psalm-assert CheckoutMessageOrderPayloadBaseData $value
     * @psalm-param CheckoutMessageOrderPayloadBaseData|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CheckoutMessageOrderPayloadBaseDataCollection
     */
    public function add($value)
    {
        if (!$value instanceof CheckoutMessageOrderPayloadBaseData) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CheckoutMessageOrderPayloadBaseData
     */
    protected function mapper()
    {
        return function (?int $index): ?CheckoutMessageOrderPayloadBaseData {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CheckoutMessageOrderPayloadBaseData $data */
                $data = CheckoutMessageOrderPayloadBaseDataModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
