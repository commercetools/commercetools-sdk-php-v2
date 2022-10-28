<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<StagedQuoteSetValidToAction>
 */
final class StagedQuoteSetValidToActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validTo;

    /**
     * <p>If <code>validTo</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @param ?DateTimeImmutable $validTo
     * @return $this
     */
    public function withValidTo(?DateTimeImmutable $validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }


    public function build(): StagedQuoteSetValidToAction
    {
        return new StagedQuoteSetValidToActionModel(
            $this->validTo
        );
    }

    public static function of(): StagedQuoteSetValidToActionBuilder
    {
        return new self();
    }
}
