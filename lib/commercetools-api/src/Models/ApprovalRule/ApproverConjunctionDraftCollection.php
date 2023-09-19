<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ApproverConjunctionDraft>
 * @method ApproverConjunctionDraft current()
 * @method ApproverConjunctionDraft end()
 * @method ApproverConjunctionDraft at($offset)
 */
class ApproverConjunctionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ApproverConjunctionDraft $value
     * @psalm-param ApproverConjunctionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApproverConjunctionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApproverConjunctionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApproverConjunctionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ApproverConjunctionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApproverConjunctionDraft $data */
                $data = ApproverConjunctionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
