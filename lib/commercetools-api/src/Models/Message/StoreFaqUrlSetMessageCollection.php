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
 * @extends MessageCollection<StoreFaqUrlSetMessage>
 * @method StoreFaqUrlSetMessage current()
 * @method StoreFaqUrlSetMessage end()
 * @method StoreFaqUrlSetMessage at($offset)
 */
class StoreFaqUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreFaqUrlSetMessage $value
     * @psalm-param StoreFaqUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreFaqUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreFaqUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreFaqUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreFaqUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreFaqUrlSetMessage $data */
                $data = StoreFaqUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
