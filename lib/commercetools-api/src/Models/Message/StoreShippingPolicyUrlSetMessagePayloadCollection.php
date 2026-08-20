<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<StoreShippingPolicyUrlSetMessagePayload>
 * @method StoreShippingPolicyUrlSetMessagePayload current()
 * @method StoreShippingPolicyUrlSetMessagePayload end()
 * @method StoreShippingPolicyUrlSetMessagePayload at($offset)
 */
class StoreShippingPolicyUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreShippingPolicyUrlSetMessagePayload $value
     * @psalm-param StoreShippingPolicyUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreShippingPolicyUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreShippingPolicyUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreShippingPolicyUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreShippingPolicyUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreShippingPolicyUrlSetMessagePayload $data */
                $data = StoreShippingPolicyUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
