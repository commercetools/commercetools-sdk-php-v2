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
 * @template T of ApprovalFlowUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ApprovalFlowUpdateAction current()
 * @method ApprovalFlowUpdateAction end()
 * @method ApprovalFlowUpdateAction at($offset)
 */
class ApprovalFlowUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ApprovalFlowUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ApprovalFlowUpdateAction) {
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
        return function (?int $index): ?ApprovalFlowUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ApprovalFlowUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
