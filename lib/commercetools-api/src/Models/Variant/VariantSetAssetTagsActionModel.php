<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantSetAssetTagsActionModel extends JsonObjectModel implements VariantSetAssetTagsAction
{
    public const DISCRIMINATOR_VALUE = 'setAssetTags';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $staged;

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
     * @var ?array
     */
    protected $tags;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $staged = null,
        ?string $assetId = null,
        ?string $assetKey = null,
        ?array $tags = null,
        ?string $action = null
    ) {
        $this->staged = $staged;
        $this->assetId = $assetId;
        $this->assetKey = $assetKey;
        $this->tags = $tags;
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
     * <p>Whether only the staged Asset is updated. If <code>false</code>, both the current and staged Asset is updated.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>The <code>id</code> of the Asset to update.</p>
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
     * <p>The <code>key</code> of the Asset to update.</p>
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
     * <p>Keywords for categorizing and organizing Assets.</p>
     *
     *
     * @return null|array
     */
    public function getTags()
    {
        if (is_null($this->tags)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_TAGS);
            if (is_null($data)) {
                return null;
            }
            $this->tags = $data;
        }

        return $this->tags;
    }


    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
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
     * @param ?array $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }
}
