<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StandalonePrice\StagedStandalonePrice;
use Commercetools\Api\Models\StandalonePrice\StagedStandalonePriceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StandalonePriceStagedChangesAppliedMessagePayloadModel extends JsonObjectModel implements StandalonePriceStagedChangesAppliedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StandalonePriceStagedChangesApplied';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?StagedStandalonePrice
     */
    protected $stagedChanges;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StagedStandalonePrice $stagedChanges = null,
        ?string $type = null
    ) {
        $this->stagedChanges = $stagedChanges;
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
     * <p>Applied changes of the <a href="/../api/projects/standalone-prices">StandalonePrice</a> after the <a href="ctp:api:types:StandalonePriceApplyStagedChangesAction">Apply Staged Changes</a> update action.</p>
     *
     *
     * @return null|StagedStandalonePrice
     */
    public function getStagedChanges()
    {
        if (is_null($this->stagedChanges)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED_CHANGES);
            if (is_null($data)) {
                return null;
            }

            $this->stagedChanges = StagedStandalonePriceModel::of($data);
        }

        return $this->stagedChanges;
    }


    /**
     * @param ?StagedStandalonePrice $stagedChanges
     */
    public function setStagedChanges(?StagedStandalonePrice $stagedChanges): void
    {
        $this->stagedChanges = $stagedChanges;
    }
}
