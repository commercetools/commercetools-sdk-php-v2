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
 * @extends MapperSequence<SetAttributeAction>
 * @method SetAttributeAction current()
 * @method SetAttributeAction at($offset)
 */
class SetAttributeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAttributeAction $value
     * @psalm-param SetAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAttributeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
