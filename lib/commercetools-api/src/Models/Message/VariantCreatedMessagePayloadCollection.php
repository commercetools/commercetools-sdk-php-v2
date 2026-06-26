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
 * @extends MessagePayloadCollection<VariantCreatedMessagePayload>
 * @method VariantCreatedMessagePayload current()
 * @method VariantCreatedMessagePayload end()
 * @method VariantCreatedMessagePayload at($offset)
 */
class VariantCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantCreatedMessagePayload $value
     * @psalm-param VariantCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantCreatedMessagePayload $data */
                $data = VariantCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
