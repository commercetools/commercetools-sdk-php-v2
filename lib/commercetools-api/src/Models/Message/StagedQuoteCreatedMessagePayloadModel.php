<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StagedQuote\StagedQuote;
use Commercetools\Api\Models\StagedQuote\StagedQuoteModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedQuoteCreatedMessagePayloadModel extends JsonObjectModel implements StagedQuoteCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StagedQuoteCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?StagedQuote
     */
    protected $stagedQuote;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StagedQuote $stagedQuote = null,
        ?string $type = null
    ) {
        $this->stagedQuote = $stagedQuote;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p><a href="/../api/projects/staged-quotes">Staged Quote</a> that was created.</p>
     *
     *
     * @return null|StagedQuote
     */
    public function getStagedQuote()
    {
        if (is_null($this->stagedQuote)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED_QUOTE);
            if (is_null($data)) {
                return null;
            }

            $this->stagedQuote = StagedQuoteModel::of($data);
        }

        return $this->stagedQuote;
    }


    /**
     * @param ?StagedQuote $stagedQuote
     */
    public function setStagedQuote(?StagedQuote $stagedQuote): void
    {
        $this->stagedQuote = $stagedQuote;
    }
}
