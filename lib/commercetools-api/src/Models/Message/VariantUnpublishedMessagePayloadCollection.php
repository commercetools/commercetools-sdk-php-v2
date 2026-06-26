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
 * @extends MessagePayloadCollection<VariantUnpublishedMessagePayload>
 * @method VariantUnpublishedMessagePayload current()
 * @method VariantUnpublishedMessagePayload end()
 * @method VariantUnpublishedMessagePayload at($offset)
 */
class VariantUnpublishedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantUnpublishedMessagePayload $value
     * @psalm-param VariantUnpublishedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantUnpublishedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantUnpublishedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantUnpublishedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantUnpublishedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantUnpublishedMessagePayload $data */
                $data = VariantUnpublishedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
