<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReplicaCartDraft>
 * @method ReplicaCartDraft current()
 * @method ReplicaCartDraft end()
 * @method ReplicaCartDraft at($offset)
 */
class ReplicaCartDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ReplicaCartDraft $value
     * @psalm-param ReplicaCartDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReplicaCartDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReplicaCartDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReplicaCartDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ReplicaCartDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReplicaCartDraft $data */
                $data = ReplicaCartDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
