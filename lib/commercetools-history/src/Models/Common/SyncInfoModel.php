<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SyncInfoModel extends JsonObjectModel implements SyncInfo
{


    /**
     * @var ?Reference
     */
    protected $channel;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?string
     */
    protected $syncedAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Reference $channel = null,
        ?string $externalId = null,
        ?string $syncedAt = null
    ) {
        $this->channel = $channel;
        $this->externalId = $externalId;
        $this->syncedAt = $syncedAt;

    }

    /**
     * @return null|Reference
     */
    public function getChannel()
    {
        if (is_null($this->channel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->channel =  ReferenceModel::of($data);
        }

        return $this->channel;
    }

    /**
     * <p>Can be used to reference an external order instance, file etc.</p>
     *
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId =  (string) $data;
        }

        return $this->externalId;
    }

    /**
     * @return null|string
     */
    public function getSyncedAt()
    {
        if (is_null($this->syncedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SYNCED_AT);
            if (is_null($data)) {
                return null;
            }
            $this->syncedAt =  (string) $data;
        }

        return $this->syncedAt;
    }


    /**
     * @param ?Reference $channel
     */
    public function setChannel(?Reference $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @param ?string $syncedAt
     */
    public function setSyncedAt(?string $syncedAt): void
    {
        $this->syncedAt = $syncedAt;
    }



}
