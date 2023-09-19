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
 * @extends MapperSequence<ApprovalRuleDraft>
 * @method ApprovalRuleDraft current()
 * @method ApprovalRuleDraft end()
 * @method ApprovalRuleDraft at($offset)
 */
class ApprovalRuleDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ApprovalRuleDraft $value
     * @psalm-param ApprovalRuleDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleDraft $data */
                $data = ApprovalRuleDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
