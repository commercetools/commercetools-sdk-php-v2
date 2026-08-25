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
 * @extends MessageCollection<StoreShippingPolicyUrlSetMessage>
 * @method StoreShippingPolicyUrlSetMessage current()
 * @method StoreShippingPolicyUrlSetMessage end()
 * @method StoreShippingPolicyUrlSetMessage at($offset)
 */
class StoreShippingPolicyUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreShippingPolicyUrlSetMessage $value
     * @psalm-param StoreShippingPolicyUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreShippingPolicyUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreShippingPolicyUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreShippingPolicyUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreShippingPolicyUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreShippingPolicyUrlSetMessage $data */
                $data = StoreShippingPolicyUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
