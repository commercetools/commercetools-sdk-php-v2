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
 * @extends MapperSequence<ApprovalFlowApproval>
 * @method ApprovalFlowApproval current()
 * @method ApprovalFlowApproval end()
 * @method ApprovalFlowApproval at($offset)
 */
class ApprovalFlowApprovalCollection extends MapperSequence
{
    /**
     * @psalm-assert ApprovalFlowApproval $value
     * @psalm-param ApprovalFlowApproval|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowApprovalCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowApproval) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowApproval
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowApproval {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowApproval $data */
                $data = ApprovalFlowApprovalModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
