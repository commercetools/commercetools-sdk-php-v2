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
 * @extends MessagePayloadCollection<VariantStagedChangesRemovedMessagePayload>
 * @method VariantStagedChangesRemovedMessagePayload current()
 * @method VariantStagedChangesRemovedMessagePayload end()
 * @method VariantStagedChangesRemovedMessagePayload at($offset)
 */
class VariantStagedChangesRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantStagedChangesRemovedMessagePayload $value
     * @psalm-param VariantStagedChangesRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantStagedChangesRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantStagedChangesRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantStagedChangesRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantStagedChangesRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantStagedChangesRemovedMessagePayload $data */
                $data = VariantStagedChangesRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
