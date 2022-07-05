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
use stdClass;

/**
 * @implements Builder<StagedQuoteChangeStagedQuoteStateAction>
 */
final class StagedQuoteChangeStagedQuoteStateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $stagedQuoteState;

    /**
     * <p>The new quote staged state to be set for the Quote Staged.</p>
     *

     * @return null|string
     */
    public function getStagedQuoteState()
    {
        return $this->stagedQuoteState;
    }

    /**
     * @param ?string $stagedQuoteState
     * @return $this
     */
    public function withStagedQuoteState(?string $stagedQuoteState)
    {
        $this->stagedQuoteState = $stagedQuoteState;

        return $this;
    }


    public function build(): StagedQuoteChangeStagedQuoteStateAction
    {
        return new StagedQuoteChangeStagedQuoteStateActionModel(
            $this->stagedQuoteState
        );
    }

    public static function of(): StagedQuoteChangeStagedQuoteStateActionBuilder
    {
        return new self();
    }
}
