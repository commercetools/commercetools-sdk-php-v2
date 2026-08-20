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
 * @extends MessageCollection<StoreTermsOfServiceUrlSetMessage>
 * @method StoreTermsOfServiceUrlSetMessage current()
 * @method StoreTermsOfServiceUrlSetMessage end()
 * @method StoreTermsOfServiceUrlSetMessage at($offset)
 */
class StoreTermsOfServiceUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreTermsOfServiceUrlSetMessage $value
     * @psalm-param StoreTermsOfServiceUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreTermsOfServiceUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreTermsOfServiceUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreTermsOfServiceUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreTermsOfServiceUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreTermsOfServiceUrlSetMessage $data */
                $data = StoreTermsOfServiceUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
