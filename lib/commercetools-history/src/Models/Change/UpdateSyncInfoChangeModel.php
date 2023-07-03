<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\SyncInfo;
use Commercetools\History\Models\Common\SyncInfoModel;

/**
 * @internal
 */
final class UpdateSyncInfoChangeModel extends JsonObjectModel implements UpdateSyncInfoChange
{

    public const DISCRIMINATOR_VALUE = 'UpdateSyncInfoChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?SyncInfo
     */
    protected $nextValue;

    /**
     *
     * @var ?string
     */
    protected $channelId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?SyncInfo $nextValue = null,
        ?string $channelId = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->nextValue = $nextValue;
        $this->channelId = $channelId;
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
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|SyncInfo
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue = SyncInfoModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     * <p><code>id</code> of the updated <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     *
     * @return null|string
     */
    public function getChannelId()
    {
        if (is_null($this->channelId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANNEL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->channelId = (string) $data;
        }

        return $this->channelId;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?SyncInfo $nextValue
     */
    public function setNextValue(?SyncInfo $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?string $channelId
     */
    public function setChannelId(?string $channelId): void
    {
        $this->channelId = $channelId;
    }



}
