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
final class SetAssetSourcesActionModel extends JsonObjectModel implements SetAssetSourcesAction
{
    public const DISCRIMINATOR_VALUE = 'SetAssetSourcesAction';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $change;

    /**
     * @var ?AssetActionValue
     */
    protected $asset;

    /**
     * @var ?AssetSourceCollection
     */
    protected $nextValue;

    /**
     * @var ?AssetSourceCollection
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?AssetActionValue $asset = null,
        ?AssetSourceCollection $nextValue = null,
        ?AssetSourceCollection $previousValue = null
    ) {
        $this->change = $change;
        $this->asset = $asset;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
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
     * <p>Update action for <code>setAssetSources</code></p>
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
     * @return null|AssetActionValue
     */
    public function getAsset()
    {
        if (is_null($this->asset)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSET);
            if (is_null($data)) {
                return null;
            }

            $this->asset =  AssetActionValueModel::of($data);
        }

        return $this->asset;
    }

    /**
     * @return null|AssetSourceCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue =  AssetSourceCollection::fromArray($data);
        }

        return $this->nextValue;
    }

    /**
     * @return null|AssetSourceCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue =  AssetSourceCollection::fromArray($data);
        }

        return $this->previousValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?AssetActionValue $asset
     */
    public function setAsset(?AssetActionValue $asset): void
    {
        $this->asset = $asset;
    }

    /**
     * @param ?AssetSourceCollection $nextValue
     */
    public function setNextValue(?AssetSourceCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?AssetSourceCollection $previousValue
     */
    public function setPreviousValue(?AssetSourceCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
