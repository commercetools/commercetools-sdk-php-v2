<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<StoreRefundPolicyUrlSetMessage>
 * @method StoreRefundPolicyUrlSetMessage current()
 * @method StoreRefundPolicyUrlSetMessage end()
 * @method StoreRefundPolicyUrlSetMessage at($offset)
 */
class StoreRefundPolicyUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreRefundPolicyUrlSetMessage $value
     * @psalm-param StoreRefundPolicyUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreRefundPolicyUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreRefundPolicyUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreRefundPolicyUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreRefundPolicyUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreRefundPolicyUrlSetMessage $data */
                $data = StoreRefundPolicyUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
