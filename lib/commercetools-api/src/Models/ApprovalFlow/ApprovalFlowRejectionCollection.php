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
 * @extends MapperSequence<ApprovalFlowRejection>
 * @method ApprovalFlowRejection current()
 * @method ApprovalFlowRejection end()
 * @method ApprovalFlowRejection at($offset)
 */
class ApprovalFlowRejectionCollection extends MapperSequence
{
    /**
     * @psalm-assert ApprovalFlowRejection $value
     * @psalm-param ApprovalFlowRejection|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowRejectionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowRejection) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowRejection
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowRejection {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowRejection $data */
                $data = ApprovalFlowRejectionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
