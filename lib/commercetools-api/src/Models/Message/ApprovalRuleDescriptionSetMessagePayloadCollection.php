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
 * @extends MessagePayloadCollection<ApprovalRuleDescriptionSetMessagePayload>
 * @method ApprovalRuleDescriptionSetMessagePayload current()
 * @method ApprovalRuleDescriptionSetMessagePayload end()
 * @method ApprovalRuleDescriptionSetMessagePayload at($offset)
 */
class ApprovalRuleDescriptionSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ApprovalRuleDescriptionSetMessagePayload $value
     * @psalm-param ApprovalRuleDescriptionSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleDescriptionSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleDescriptionSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleDescriptionSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleDescriptionSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleDescriptionSetMessagePayload $data */
                $data = ApprovalRuleDescriptionSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
