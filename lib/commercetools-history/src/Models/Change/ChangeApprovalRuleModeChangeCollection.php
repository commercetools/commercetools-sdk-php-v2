<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeApprovalRuleModeChange>
 * @method ChangeApprovalRuleModeChange current()
 * @method ChangeApprovalRuleModeChange end()
 * @method ChangeApprovalRuleModeChange at($offset)
 */
class ChangeApprovalRuleModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeApprovalRuleModeChange $value
     * @psalm-param ChangeApprovalRuleModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeApprovalRuleModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeApprovalRuleModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeApprovalRuleModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeApprovalRuleModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeApprovalRuleModeChange $data */
                $data = ChangeApprovalRuleModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
