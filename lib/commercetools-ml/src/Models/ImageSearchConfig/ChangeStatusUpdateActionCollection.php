<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Ml\Models\ImageSearchConfig\ImageSearchConfigUpdateActionCollection;
use stdClass;

/**
 * @extends ImageSearchConfigUpdateActionCollection<ChangeStatusUpdateAction>
 * @method ChangeStatusUpdateAction current()
 * @method ChangeStatusUpdateAction at($offset)
 */
class ChangeStatusUpdateActionCollection extends ImageSearchConfigUpdateActionCollection
{
    /**
     * @psalm-assert ChangeStatusUpdateAction $value
     * @psalm-param ChangeStatusUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStatusUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStatusUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStatusUpdateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeStatusUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeStatusUpdateAction $data */
                $data = ChangeStatusUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
