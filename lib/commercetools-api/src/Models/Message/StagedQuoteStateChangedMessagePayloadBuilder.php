<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedQuoteStateChangedMessagePayload>
 */
final class StagedQuoteStateChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $stagedQuoteState;

    /**

     * @var ?string
     */
    private $oldStagedQuoteState;

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *

     * @return null|string
     */
    public function getStagedQuoteState()
    {
        return $this->stagedQuoteState;
    }

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *

     * @return null|string
     */
    public function getOldStagedQuoteState()
    {
        return $this->oldStagedQuoteState;
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

    /**
     * @param ?string $oldStagedQuoteState
     * @return $this
     */
    public function withOldStagedQuoteState(?string $oldStagedQuoteState)
    {
        $this->oldStagedQuoteState = $oldStagedQuoteState;

        return $this;
    }


    public function build(): StagedQuoteStateChangedMessagePayload
    {
        return new StagedQuoteStateChangedMessagePayloadModel(
            $this->stagedQuoteState,
            $this->oldStagedQuoteState
        );
    }

    public static function of(): StagedQuoteStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
