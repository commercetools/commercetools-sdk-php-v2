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
 * @extends MessagePayloadCollection<StoreFaqUrlSetMessagePayload>
 * @method StoreFaqUrlSetMessagePayload current()
 * @method StoreFaqUrlSetMessagePayload end()
 * @method StoreFaqUrlSetMessagePayload at($offset)
 */
class StoreFaqUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreFaqUrlSetMessagePayload $value
     * @psalm-param StoreFaqUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreFaqUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreFaqUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreFaqUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreFaqUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreFaqUrlSetMessagePayload $data */
                $data = StoreFaqUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
