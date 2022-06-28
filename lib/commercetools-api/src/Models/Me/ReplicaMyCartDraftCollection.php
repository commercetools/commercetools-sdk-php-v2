<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReplicaMyCartDraft>
 * @method ReplicaMyCartDraft current()
 * @method ReplicaMyCartDraft end()
 * @method ReplicaMyCartDraft at($offset)
 */
class ReplicaMyCartDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ReplicaMyCartDraft $value
     * @psalm-param ReplicaMyCartDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReplicaMyCartDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReplicaMyCartDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReplicaMyCartDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ReplicaMyCartDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReplicaMyCartDraft $data */
                $data = ReplicaMyCartDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
