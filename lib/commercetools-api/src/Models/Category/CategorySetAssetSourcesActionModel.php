<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetSourceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategorySetAssetSourcesActionModel extends JsonObjectModel implements CategorySetAssetSourcesAction
{
    public const DISCRIMINATOR_VALUE = 'setAssetSources';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $assetId;

    /**
     *
     * @var ?string
     */
    protected $assetKey;

    /**
     *
     * @var ?AssetSourceCollection
     */
    protected $sources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $assetId = null,
        ?string $assetKey = null,
        ?AssetSourceCollection $sources = null,
        ?string $action = null
    ) {
        $this->assetId = $assetId;
        $this->assetKey = $assetKey;
        $this->sources = $sources;
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
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getAssetId()
    {
        if (is_null($this->assetId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ASSET_ID);
            if (is_null($data)) {
                return null;
            }
            $this->assetId = (string) $data;
        }

        return $this->assetId;
    }

    /**
     * <p>New value to set. Either <code>assetId</code> or <code>assetKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ASSET_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->assetKey = (string) $data;
        }

        return $this->assetKey;
    }

    /**
     * <p>Must not be empty. At least one entry is required.</p>
     *
     *
     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        if (is_null($this->sources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->sources = AssetSourceCollection::fromArray($data);
        }

        return $this->sources;
    }


    /**
     * @param ?string $assetId
     */
    public function setAssetId(?string $assetId): void
    {
        $this->assetId = $assetId;
    }

    /**
     * @param ?string $assetKey
     */
    public function setAssetKey(?string $assetKey): void
    {
        $this->assetKey = $assetKey;
    }

    /**
     * @param ?AssetSourceCollection $sources
     */
    public function setSources(?AssetSourceCollection $sources): void
    {
        $this->sources = $sources;
    }
}
