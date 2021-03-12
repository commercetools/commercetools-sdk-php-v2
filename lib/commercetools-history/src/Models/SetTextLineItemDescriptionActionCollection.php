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
 * @extends MapperSequence<SetTextLineItemDescriptionAction>
 * @method SetTextLineItemDescriptionAction current()
 * @method SetTextLineItemDescriptionAction at($offset)
 */
class SetTextLineItemDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTextLineItemDescriptionAction $value
     * @psalm-param SetTextLineItemDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextLineItemDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTextLineItemDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
