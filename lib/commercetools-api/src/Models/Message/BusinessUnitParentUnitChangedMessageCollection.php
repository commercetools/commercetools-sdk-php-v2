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
 * @extends MessageCollection<BusinessUnitParentUnitChangedMessage>
 * @method BusinessUnitParentUnitChangedMessage current()
 * @method BusinessUnitParentUnitChangedMessage end()
 * @method BusinessUnitParentUnitChangedMessage at($offset)
 */
class BusinessUnitParentUnitChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitParentUnitChangedMessage $value
     * @psalm-param BusinessUnitParentUnitChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitParentUnitChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitParentUnitChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitParentUnitChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitParentUnitChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitParentUnitChangedMessage $data */
                $data = BusinessUnitParentUnitChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
