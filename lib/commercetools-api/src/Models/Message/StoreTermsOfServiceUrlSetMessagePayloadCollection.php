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
 * @extends MessagePayloadCollection<StoreTermsOfServiceUrlSetMessagePayload>
 * @method StoreTermsOfServiceUrlSetMessagePayload current()
 * @method StoreTermsOfServiceUrlSetMessagePayload end()
 * @method StoreTermsOfServiceUrlSetMessagePayload at($offset)
 */
class StoreTermsOfServiceUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StoreTermsOfServiceUrlSetMessagePayload $value
     * @psalm-param StoreTermsOfServiceUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreTermsOfServiceUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreTermsOfServiceUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreTermsOfServiceUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreTermsOfServiceUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreTermsOfServiceUrlSetMessagePayload $data */
                $data = StoreTermsOfServiceUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
