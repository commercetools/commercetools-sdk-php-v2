<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StagedQuote\StagedQuote;
use Commercetools\Api\Models\StagedQuote\StagedQuoteBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedQuoteCreatedMessagePayload>
 */
final class StagedQuoteCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|StagedQuote|StagedQuoteBuilder
     */
    private $stagedQuote;

    /**
     * <p><a href="/../api/projects/staged-quotes">Staged Quote</a> that was created.</p>
     *

     * @return null|StagedQuote
     */
    public function getStagedQuote()
    {
        return $this->stagedQuote instanceof StagedQuoteBuilder ? $this->stagedQuote->build() : $this->stagedQuote;
    }

    /**
     * @param ?StagedQuote $stagedQuote
     * @return $this
     */
    public function withStagedQuote(?StagedQuote $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

        return $this;
    }

    /**
     * @deprecated use withStagedQuote() instead
     * @return $this
     */
    public function withStagedQuoteBuilder(?StagedQuoteBuilder $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

        return $this;
    }

    public function build(): StagedQuoteCreatedMessagePayload
    {
        return new StagedQuoteCreatedMessagePayloadModel(
            $this->stagedQuote instanceof StagedQuoteBuilder ? $this->stagedQuote->build() : $this->stagedQuote
        );
    }

    public static function of(): StagedQuoteCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
