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
 * @extends MapperSequence<RuleRequesterDraft>
 * @method RuleRequesterDraft current()
 * @method RuleRequesterDraft end()
 * @method RuleRequesterDraft at($offset)
 */
class RuleRequesterDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert RuleRequesterDraft $value
     * @psalm-param RuleRequesterDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RuleRequesterDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RuleRequesterDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RuleRequesterDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RuleRequesterDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RuleRequesterDraft $data */
                $data = RuleRequesterDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
