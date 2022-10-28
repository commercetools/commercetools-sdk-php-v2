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
 * @extends LabelCollection<QuoteLabel>
 * @method QuoteLabel current()
 * @method QuoteLabel end()
 * @method QuoteLabel at($offset)
 */
class QuoteLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert QuoteLabel $value
     * @psalm-param QuoteLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteLabel $data */
                $data = QuoteLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
