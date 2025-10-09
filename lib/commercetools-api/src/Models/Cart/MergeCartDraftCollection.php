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
 * @extends MapperSequence<MergeCartDraft>
 * @method MergeCartDraft current()
 * @method MergeCartDraft end()
 * @method MergeCartDraft at($offset)
 */
class MergeCartDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MergeCartDraft $value
     * @psalm-param MergeCartDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MergeCartDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MergeCartDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MergeCartDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?MergeCartDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MergeCartDraft $data */
                $data = MergeCartDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
