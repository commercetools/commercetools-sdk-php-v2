<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<StagedQuoteResourceIdentifier>
 * @method StagedQuoteResourceIdentifier current()
 * @method StagedQuoteResourceIdentifier end()
 * @method StagedQuoteResourceIdentifier at($offset)
 */
class StagedQuoteResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert StagedQuoteResourceIdentifier $value
     * @psalm-param StagedQuoteResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteResourceIdentifier $data */
                $data = StagedQuoteResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
