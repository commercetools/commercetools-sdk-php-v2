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
 * @extends MessagePayloadCollection<BusinessUnitParentUnitChangedMessagePayload>
 * @method BusinessUnitParentUnitChangedMessagePayload current()
 * @method BusinessUnitParentUnitChangedMessagePayload end()
 * @method BusinessUnitParentUnitChangedMessagePayload at($offset)
 */
class BusinessUnitParentUnitChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitParentUnitChangedMessagePayload $value
     * @psalm-param BusinessUnitParentUnitChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitParentUnitChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitParentUnitChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitParentUnitChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitParentUnitChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitParentUnitChangedMessagePayload $data */
                $data = BusinessUnitParentUnitChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
