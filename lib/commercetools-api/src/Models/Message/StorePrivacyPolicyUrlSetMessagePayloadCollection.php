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
 * @extends MessagePayloadCollection<StorePrivacyPolicyUrlSetMessagePayload>
 * @method StorePrivacyPolicyUrlSetMessagePayload current()
 * @method StorePrivacyPolicyUrlSetMessagePayload end()
 * @method StorePrivacyPolicyUrlSetMessagePayload at($offset)
 */
class StorePrivacyPolicyUrlSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StorePrivacyPolicyUrlSetMessagePayload $value
     * @psalm-param StorePrivacyPolicyUrlSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StorePrivacyPolicyUrlSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StorePrivacyPolicyUrlSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StorePrivacyPolicyUrlSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StorePrivacyPolicyUrlSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StorePrivacyPolicyUrlSetMessagePayload $data */
                $data = StorePrivacyPolicyUrlSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
