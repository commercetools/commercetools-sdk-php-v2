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
 * @extends MessageCollection<StoreLanguagesChangedMessage>
 * @method StoreLanguagesChangedMessage current()
 * @method StoreLanguagesChangedMessage end()
 * @method StoreLanguagesChangedMessage at($offset)
 */
class StoreLanguagesChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreLanguagesChangedMessage $value
     * @psalm-param StoreLanguagesChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreLanguagesChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreLanguagesChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreLanguagesChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreLanguagesChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreLanguagesChangedMessage $data */
                $data = StoreLanguagesChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
