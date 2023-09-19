<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalFlow;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<ApprovalFlow>
 * @method ApprovalFlow current()
 * @method ApprovalFlow end()
 * @method ApprovalFlow at($offset)
 */
class ApprovalFlowCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert ApprovalFlow $value
     * @psalm-param ApprovalFlow|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlow) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalFlow
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalFlow {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalFlow $data */
                $data = ApprovalFlowModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
