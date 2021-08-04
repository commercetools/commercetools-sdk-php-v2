<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\State\StateUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends StateUpdateActionCollection<StateSetDescriptionAction>
 * @method StateSetDescriptionAction current()
 * @method StateSetDescriptionAction end()
 * @method StateSetDescriptionAction at($offset)
 */
class StateSetDescriptionActionCollection extends StateUpdateActionCollection
{
    /**
     * @psalm-assert StateSetDescriptionAction $value
     * @psalm-param StateSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StateSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StateSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?StateSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StateSetDescriptionAction $data */
                $data = StateSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
