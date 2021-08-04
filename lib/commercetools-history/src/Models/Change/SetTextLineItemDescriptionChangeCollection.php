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
 * @extends ChangeCollection<SetTextLineItemDescriptionChange>
 * @method SetTextLineItemDescriptionChange current()
 * @method SetTextLineItemDescriptionChange end()
 * @method SetTextLineItemDescriptionChange at($offset)
 */
class SetTextLineItemDescriptionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTextLineItemDescriptionChange $value
     * @psalm-param SetTextLineItemDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemDescriptionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetTextLineItemDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTextLineItemDescriptionChange $data */
                $data = SetTextLineItemDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
