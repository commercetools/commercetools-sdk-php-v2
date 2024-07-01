<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<BusinessUnitApprovalRuleModeChangedMessagePayload>
 * @method BusinessUnitApprovalRuleModeChangedMessagePayload current()
 * @method BusinessUnitApprovalRuleModeChangedMessagePayload end()
 * @method BusinessUnitApprovalRuleModeChangedMessagePayload at($offset)
 */
class BusinessUnitApprovalRuleModeChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert BusinessUnitApprovalRuleModeChangedMessagePayload $value
     * @psalm-param BusinessUnitApprovalRuleModeChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitApprovalRuleModeChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitApprovalRuleModeChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitApprovalRuleModeChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitApprovalRuleModeChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitApprovalRuleModeChangedMessagePayload $data */
                $data = BusinessUnitApprovalRuleModeChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
