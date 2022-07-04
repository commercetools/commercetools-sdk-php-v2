<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteStateChangedMessagePayloadModel extends JsonObjectModel implements StagedQuoteStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StagedQuoteStateChanged';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $stagedQuoteState;

    /**
     * @var ?string
     */
    protected $oldStagedQuoteState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $stagedQuoteState = null,
        ?string $oldStagedQuoteState = null
    ) {
        $this->stagedQuoteState = $stagedQuoteState;
        $this->oldStagedQuoteState = $oldStagedQuoteState;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *
     * @return null|string
     */
    public function getStagedQuoteState()
    {
        if (is_null($this->stagedQuoteState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->stagedQuoteState = (string) $data;
        }

        return $this->stagedQuoteState;
    }

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *
     * @return null|string
     */
    public function getOldStagedQuoteState()
    {
        if (is_null($this->oldStagedQuoteState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_STAGED_QUOTE_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldStagedQuoteState = (string) $data;
        }

        return $this->oldStagedQuoteState;
    }


    /**
     * @param ?string $stagedQuoteState
     */
    public function setStagedQuoteState(?string $stagedQuoteState): void
    {
        $this->stagedQuoteState = $stagedQuoteState;
    }

    /**
     * @param ?string $oldStagedQuoteState
     */
    public function setOldStagedQuoteState(?string $oldStagedQuoteState): void
    {
        $this->oldStagedQuoteState = $oldStagedQuoteState;
    }
}
