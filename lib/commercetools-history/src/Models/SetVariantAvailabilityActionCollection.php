<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetVariantAvailabilityAction>
 * @method SetVariantAvailabilityAction current()
 * @method SetVariantAvailabilityAction at($offset)
 */
class SetVariantAvailabilityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetVariantAvailabilityAction $value
     * @psalm-param SetVariantAvailabilityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetVariantAvailabilityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetVariantAvailabilityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetVariantAvailabilityAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetVariantAvailabilityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetVariantAvailabilityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
