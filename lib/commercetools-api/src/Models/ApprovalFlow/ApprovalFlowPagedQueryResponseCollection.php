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
 * @extends MapperSequence<ApprovalFlowPagedQueryResponse>
 * @method ApprovalFlowPagedQueryResponse current()
 * @method ApprovalFlowPagedQueryResponse end()
 * @method ApprovalFlowPagedQueryResponse at($offset)
 */
class ApprovalFlowPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ApprovalFlowPagedQueryResponse $value
     * @psalm-param ApprovalFlowPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlowPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlowPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlowPagedQueryResponse $data */
                $data = ApprovalFlowPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
