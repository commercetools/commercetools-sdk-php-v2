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
 * @extends MessagePayloadCollection<StoreCheckoutUrlTemplateSetMessagePayload>
 * @method StoreCheckoutUrlTemplateSetMessagePayload current()
 * @method StoreCheckoutUrlTemplateSetMessagePayload end()
 * @method StoreCheckoutUrlTemplateSetMessagePayload at($offset)
 */
class StoreCheckoutUrlTemplateSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreCheckoutUrlTemplateSetMessagePayload $value
     * @psalm-param StoreCheckoutUrlTemplateSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCheckoutUrlTemplateSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCheckoutUrlTemplateSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCheckoutUrlTemplateSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCheckoutUrlTemplateSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCheckoutUrlTemplateSetMessagePayload $data */
                $data = StoreCheckoutUrlTemplateSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
