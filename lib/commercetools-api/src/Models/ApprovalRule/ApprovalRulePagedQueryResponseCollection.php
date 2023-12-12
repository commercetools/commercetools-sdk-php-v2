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
 * @extends MapperSequence<ApprovalRulePagedQueryResponse>
 * @method ApprovalRulePagedQueryResponse current()
 * @method ApprovalRulePagedQueryResponse end()
 * @method ApprovalRulePagedQueryResponse at($offset)
 */
class ApprovalRulePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ApprovalRulePagedQueryResponse $value
     * @psalm-param ApprovalRulePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRulePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRulePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRulePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRulePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRulePagedQueryResponse $data */
                $data = ApprovalRulePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
