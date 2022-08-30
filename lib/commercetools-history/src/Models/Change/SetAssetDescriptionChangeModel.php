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
use Commercetools\History\Models\ChangeValue\AssetChangeValue;
use Commercetools\History\Models\ChangeValue\AssetChangeValueModel;
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class SetAssetDescriptionChangeModel extends JsonObjectModel implements SetAssetDescriptionChange
{

    public const DISCRIMINATOR_VALUE = 'SetAssetDescriptionChange';
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
     * @var ?AssetChangeValue
     */
    protected $asset;

    /**
     *
     * @var ?LocalizedString
     */
    protected $nextValue;

    /**
     *
     * @var ?LocalizedString
     */
    protected $previousValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?AssetChangeValue $asset = null,
        ?LocalizedString $nextValue = null,
        ?LocalizedString $previousValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->asset = $asset;
        $this->nextValue = $nextValue;
        $this->previousValue = $previousValue;
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Update action for <code>setAssetDescription</code></p>
     *
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
     *
     * @return null|AssetChangeValue
     */
    public function getAsset()
    {
        if (is_null($this->asset)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSET);
            if (is_null($data)) {
                return null;
            }

            $this->asset =  AssetChangeValueModel::of($data);
        }

        return $this->asset;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->nextValue =  LocalizedStringModel::of($data);
        }

        return $this->nextValue;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->previousValue =  LocalizedStringModel::of($data);
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
     * @param ?AssetChangeValue $asset
     */
    public function setAsset(?AssetChangeValue $asset): void
    {
        $this->asset = $asset;
    }

    /**
     * @param ?LocalizedString $nextValue
     */
    public function setNextValue(?LocalizedString $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?LocalizedString $previousValue
     */
    public function setPreviousValue(?LocalizedString $previousValue): void
    {
        $this->previousValue = $previousValue;
    }



}
