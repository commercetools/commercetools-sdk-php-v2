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
 * @extends MessagePayloadCollection<StoreOrderUrlTemplateSetMessagePayload>
 * @method StoreOrderUrlTemplateSetMessagePayload current()
 * @method StoreOrderUrlTemplateSetMessagePayload end()
 * @method StoreOrderUrlTemplateSetMessagePayload at($offset)
 */
class StoreOrderUrlTemplateSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreOrderUrlTemplateSetMessagePayload $value
     * @psalm-param StoreOrderUrlTemplateSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreOrderUrlTemplateSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreOrderUrlTemplateSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreOrderUrlTemplateSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreOrderUrlTemplateSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreOrderUrlTemplateSetMessagePayload $data */
                $data = StoreOrderUrlTemplateSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
