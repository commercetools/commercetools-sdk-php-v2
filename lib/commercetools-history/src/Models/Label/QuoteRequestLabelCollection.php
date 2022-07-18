<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\History\Models\Label\LabelCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends LabelCollection<QuoteRequestLabel>
 * @method QuoteRequestLabel current()
 * @method QuoteRequestLabel end()
 * @method QuoteRequestLabel at($offset)
 */
class QuoteRequestLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert QuoteRequestLabel $value
     * @psalm-param QuoteRequestLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestLabel $data */
                $data = QuoteRequestLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
