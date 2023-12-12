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
 * @extends MapperSequence<RuleRequester>
 * @method RuleRequester current()
 * @method RuleRequester end()
 * @method RuleRequester at($offset)
 */
class RuleRequesterCollection extends MapperSequence
{
    /**
     * @psalm-assert RuleRequester $value
     * @psalm-param RuleRequester|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RuleRequesterCollection
     */
    public function add($value)
    {
        if (!$value instanceof RuleRequester) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RuleRequester
     */
    protected function mapper()
    {
        return function (?int $index): ?RuleRequester {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RuleRequester $data */
                $data = RuleRequesterModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
