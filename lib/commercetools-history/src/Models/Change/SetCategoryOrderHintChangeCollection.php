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
 * @extends ChangeCollection<SetCategoryOrderHintChange>
 * @method SetCategoryOrderHintChange current()
 * @method SetCategoryOrderHintChange end()
 * @method SetCategoryOrderHintChange at($offset)
 */
class SetCategoryOrderHintChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCategoryOrderHintChange $value
     * @psalm-param SetCategoryOrderHintChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCategoryOrderHintChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCategoryOrderHintChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCategoryOrderHintChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCategoryOrderHintChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCategoryOrderHintChange $data */
                $data = SetCategoryOrderHintChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
