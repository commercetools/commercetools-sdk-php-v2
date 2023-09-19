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
 * @extends MapperSequence<ApproverHierarchyDraft>
 * @method ApproverHierarchyDraft current()
 * @method ApproverHierarchyDraft end()
 * @method ApproverHierarchyDraft at($offset)
 */
class ApproverHierarchyDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ApproverHierarchyDraft $value
     * @psalm-param ApproverHierarchyDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApproverHierarchyDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApproverHierarchyDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApproverHierarchyDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ApproverHierarchyDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApproverHierarchyDraft $data */
                $data = ApproverHierarchyDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
