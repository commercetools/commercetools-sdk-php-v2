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
 * @extends MessagePayloadCollection<VariantKeySetMessagePayload>
 * @method VariantKeySetMessagePayload current()
 * @method VariantKeySetMessagePayload end()
 * @method VariantKeySetMessagePayload at($offset)
 */
class VariantKeySetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantKeySetMessagePayload $value
     * @psalm-param VariantKeySetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantKeySetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantKeySetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantKeySetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantKeySetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantKeySetMessagePayload $data */
                $data = VariantKeySetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
