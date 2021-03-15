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
 * @extends MapperSequence<SetCategoryOrderHintAction>
 * @method SetCategoryOrderHintAction current()
 * @method SetCategoryOrderHintAction at($offset)
 */
class SetCategoryOrderHintActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCategoryOrderHintAction $value
     * @psalm-param SetCategoryOrderHintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCategoryOrderHintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCategoryOrderHintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCategoryOrderHintAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCategoryOrderHintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCategoryOrderHintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
