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
 * @extends ChangeCollection<SetImageLabelChange>
 * @method SetImageLabelChange current()
 * @method SetImageLabelChange end()
 * @method SetImageLabelChange at($offset)
 */
class SetImageLabelChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetImageLabelChange $value
     * @psalm-param SetImageLabelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetImageLabelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetImageLabelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetImageLabelChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetImageLabelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetImageLabelChange $data */
                $data = SetImageLabelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
