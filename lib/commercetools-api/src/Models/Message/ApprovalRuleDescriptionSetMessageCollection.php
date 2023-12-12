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
 * @extends MessageCollection<ApprovalRuleDescriptionSetMessage>
 * @method ApprovalRuleDescriptionSetMessage current()
 * @method ApprovalRuleDescriptionSetMessage end()
 * @method ApprovalRuleDescriptionSetMessage at($offset)
 */
class ApprovalRuleDescriptionSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ApprovalRuleDescriptionSetMessage $value
     * @psalm-param ApprovalRuleDescriptionSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleDescriptionSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleDescriptionSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ApprovalRuleDescriptionSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleDescriptionSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ApprovalRuleDescriptionSetMessage $data */
                $data = ApprovalRuleDescriptionSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
