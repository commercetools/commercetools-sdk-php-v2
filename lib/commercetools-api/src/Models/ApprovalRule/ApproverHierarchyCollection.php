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
 * @extends MapperSequence<ApproverHierarchy>
 * @method ApproverHierarchy current()
 * @method ApproverHierarchy end()
 * @method ApproverHierarchy at($offset)
 */
class ApproverHierarchyCollection extends MapperSequence
{
    /**
     * @psalm-assert ApproverHierarchy $value
     * @psalm-param ApproverHierarchy|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApproverHierarchyCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApproverHierarchy) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApproverHierarchy
     */
    protected function mapper()
    {
        return function (?int $index): ?ApproverHierarchy {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApproverHierarchy $data */
                $data = ApproverHierarchyModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
