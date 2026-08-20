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
 * @extends MessageCollection<StorePrivacyPolicyUrlSetMessage>
 * @method StorePrivacyPolicyUrlSetMessage current()
 * @method StorePrivacyPolicyUrlSetMessage end()
 * @method StorePrivacyPolicyUrlSetMessage at($offset)
 */
class StorePrivacyPolicyUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StorePrivacyPolicyUrlSetMessage $value
     * @psalm-param StorePrivacyPolicyUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StorePrivacyPolicyUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StorePrivacyPolicyUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StorePrivacyPolicyUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StorePrivacyPolicyUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StorePrivacyPolicyUrlSetMessage $data */
                $data = StorePrivacyPolicyUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
