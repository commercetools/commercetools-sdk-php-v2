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
 * @extends LabelCollection<StagedQuoteLabel>
 * @method StagedQuoteLabel current()
 * @method StagedQuoteLabel end()
 * @method StagedQuoteLabel at($offset)
 */
class StagedQuoteLabelCollection extends LabelCollection
{
    /**
     * @psalm-assert StagedQuoteLabel $value
     * @psalm-param StagedQuoteLabel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteLabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteLabel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteLabel
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteLabel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteLabel $data */
                $data = StagedQuoteLabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
