<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\DeliveryFormatCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DeliveryFormatCollection<PlatformFormat>
 * @method PlatformFormat current()
 * @method PlatformFormat end()
 * @method PlatformFormat at($offset)
 */
class PlatformFormatCollection extends DeliveryFormatCollection
{
    /**
     * @psalm-assert PlatformFormat $value
     * @psalm-param PlatformFormat|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PlatformFormatCollection
     */
    public function add($value)
    {
        if (!$value instanceof PlatformFormat) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PlatformFormat
     */
    protected function mapper()
    {
        return function (?int $index): ?PlatformFormat {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PlatformFormat $data */
                $data = PlatformFormatModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
