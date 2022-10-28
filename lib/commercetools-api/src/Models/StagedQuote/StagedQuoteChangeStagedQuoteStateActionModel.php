<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteChangeStagedQuoteStateActionModel extends JsonObjectModel implements StagedQuoteChangeStagedQuoteStateAction
{
    public const DISCRIMINATOR_VALUE = 'changeStagedQuoteState';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $stagedQuoteState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $stagedQuoteState = null,
        ?string $action = null
    ) {
        $this->stagedQuoteState = $stagedQuoteState;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New state to be set for the Staged Quote.</p>
     *
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
     * @param ?string $stagedQuoteState
     */
    public function setStagedQuoteState(?string $stagedQuoteState): void
    {
        $this->stagedQuoteState = $stagedQuoteState;
    }
}
