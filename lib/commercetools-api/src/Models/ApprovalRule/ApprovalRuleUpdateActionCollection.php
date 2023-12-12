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
 * @template T of ApprovalRuleUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ApprovalRuleUpdateAction current()
 * @method ApprovalRuleUpdateAction end()
 * @method ApprovalRuleUpdateAction at($offset)
 */
class ApprovalRuleUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalRuleUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalRuleUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?ApprovalRuleUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ApprovalRuleUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
