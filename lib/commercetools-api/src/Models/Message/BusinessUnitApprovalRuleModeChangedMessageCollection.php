<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<BusinessUnitApprovalRuleModeChangedMessage>
 * @method BusinessUnitApprovalRuleModeChangedMessage current()
 * @method BusinessUnitApprovalRuleModeChangedMessage end()
 * @method BusinessUnitApprovalRuleModeChangedMessage at($offset)
 */
class BusinessUnitApprovalRuleModeChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert BusinessUnitApprovalRuleModeChangedMessage $value
     * @psalm-param BusinessUnitApprovalRuleModeChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BusinessUnitApprovalRuleModeChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof BusinessUnitApprovalRuleModeChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BusinessUnitApprovalRuleModeChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?BusinessUnitApprovalRuleModeChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BusinessUnitApprovalRuleModeChangedMessage $data */
                $data = BusinessUnitApprovalRuleModeChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
