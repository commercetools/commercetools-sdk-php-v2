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
 * @extends MapperSequence<ApproverDisjunctionDraft>
 * @method ApproverDisjunctionDraft current()
 * @method ApproverDisjunctionDraft end()
 * @method ApproverDisjunctionDraft at($offset)
 */
class ApproverDisjunctionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ApproverDisjunctionDraft $value
     * @psalm-param ApproverDisjunctionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApproverDisjunctionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApproverDisjunctionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApproverDisjunctionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ApproverDisjunctionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApproverDisjunctionDraft $data */
                $data = ApproverDisjunctionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
