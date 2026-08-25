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
 * @extends MessagePayloadCollection<StoreRefundPolicyUrlSetMessagePayload>
 * @method StoreRefundPolicyUrlSetMessagePayload current()
 * @method StoreRefundPolicyUrlSetMessagePayload end()
 * @method StoreRefundPolicyUrlSetMessagePayload at($offset)
 */
class StoreRefundPolicyUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreRefundPolicyUrlSetMessagePayload $value
     * @psalm-param StoreRefundPolicyUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreRefundPolicyUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreRefundPolicyUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreRefundPolicyUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreRefundPolicyUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreRefundPolicyUrlSetMessagePayload $data */
                $data = StoreRefundPolicyUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
