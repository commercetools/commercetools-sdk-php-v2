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
 * @extends MessageCollection<StoreCookiePolicyUrlSetMessage>
 * @method StoreCookiePolicyUrlSetMessage current()
 * @method StoreCookiePolicyUrlSetMessage end()
 * @method StoreCookiePolicyUrlSetMessage at($offset)
 */
class StoreCookiePolicyUrlSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreCookiePolicyUrlSetMessage $value
     * @psalm-param StoreCookiePolicyUrlSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCookiePolicyUrlSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCookiePolicyUrlSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCookiePolicyUrlSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCookiePolicyUrlSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCookiePolicyUrlSetMessage $data */
                $data = StoreCookiePolicyUrlSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
