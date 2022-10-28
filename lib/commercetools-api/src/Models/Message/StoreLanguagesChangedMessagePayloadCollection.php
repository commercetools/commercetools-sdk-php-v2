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
 * @extends MessagePayloadCollection<StoreLanguagesChangedMessagePayload>
 * @method StoreLanguagesChangedMessagePayload current()
 * @method StoreLanguagesChangedMessagePayload end()
 * @method StoreLanguagesChangedMessagePayload at($offset)
 */
class StoreLanguagesChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreLanguagesChangedMessagePayload $value
     * @psalm-param StoreLanguagesChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreLanguagesChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreLanguagesChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreLanguagesChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreLanguagesChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreLanguagesChangedMessagePayload $data */
                $data = StoreLanguagesChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
