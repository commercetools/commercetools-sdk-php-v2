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
 * @extends MessagePayloadCollection<StoreCookiePolicyUrlSetMessagePayload>
 * @method StoreCookiePolicyUrlSetMessagePayload current()
 * @method StoreCookiePolicyUrlSetMessagePayload end()
 * @method StoreCookiePolicyUrlSetMessagePayload at($offset)
 */
class StoreCookiePolicyUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreCookiePolicyUrlSetMessagePayload $value
     * @psalm-param StoreCookiePolicyUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCookiePolicyUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCookiePolicyUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCookiePolicyUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCookiePolicyUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCookiePolicyUrlSetMessagePayload $data */
                $data = StoreCookiePolicyUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
