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
 * @extends MapperSequence<SetLineItemProductSlugAction>
 * @method SetLineItemProductSlugAction current()
 * @method SetLineItemProductSlugAction at($offset)
 */
class SetLineItemProductSlugActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemProductSlugAction $value
     * @psalm-param SetLineItemProductSlugAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemProductSlugActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemProductSlugAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemProductSlugAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemProductSlugAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemProductSlugActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
