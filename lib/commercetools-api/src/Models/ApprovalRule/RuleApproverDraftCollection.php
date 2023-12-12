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
 * @extends MapperSequence<RuleApproverDraft>
 * @method RuleApproverDraft current()
 * @method RuleApproverDraft end()
 * @method RuleApproverDraft at($offset)
 */
class RuleApproverDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert RuleApproverDraft $value
     * @psalm-param RuleApproverDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RuleApproverDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RuleApproverDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RuleApproverDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RuleApproverDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RuleApproverDraft $data */
                $data = RuleApproverDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
