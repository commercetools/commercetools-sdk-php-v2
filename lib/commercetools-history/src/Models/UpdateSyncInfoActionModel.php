<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class UpdateSyncInfoActionModel extends JsonObjectModel implements UpdateSyncInfoAction
{
    public const DISCRIMINATOR_VALUE = 'UpdateSyncInfoAction';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?string
     */
    protected $channelId;

    /**
     * @var ?SyncInfo
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?string $channelId = null,
        ?SyncInfo $nextValue = null
    ) {
        $this->change = $change;
        $this->channelId = $channelId;
        $this->nextValue = $nextValue;
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>updateSyncInfo</code></p>
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
            $this->change =  (string) $data;
        }

        return $this->change;
    }

    /**
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
            $this->channelId =  (string) $data;
        }

        return $this->channelId;
    }

    /**
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

            $this->nextValue =  SyncInfoModel::of($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?string $channelId
     */
    public function setChannelId(?string $channelId): void
    {
        $this->channelId = $channelId;
    }

    /**
     * @param ?SyncInfo $nextValue
     */
    public function setNextValue(?SyncInfo $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
