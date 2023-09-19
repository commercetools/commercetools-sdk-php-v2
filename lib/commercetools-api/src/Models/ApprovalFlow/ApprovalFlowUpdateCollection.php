<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ApprovalFlowUpdate>
 * @method ApprovalFlowUpdate current()
 * @method ApprovalFlowUpdate end()
 * @method ApprovalFlowUpdate at($offset)
 */
class ApprovalFlowUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert ApprovalFlowUpdate $value
     * @psalm-param ApprovalFlowUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowUpdate $data */
                $data = ApprovalFlowUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
