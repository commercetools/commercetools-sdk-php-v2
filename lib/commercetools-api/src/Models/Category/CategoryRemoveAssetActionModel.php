<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObjectModel;

final class CategoryRemoveAssetActionModel extends JsonObjectModel implements CategoryRemoveAssetAction
{
    const DISCRIMINATOR_VALUE = 'removeAsset';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $assetId;

    /**
     * @var ?string
     */
    protected $assetKey;

    public function __construct(
        string $assetId = null,
        string $assetKey = null
    ) {
        $this->assetId = $assetId;
        $this->assetKey = $assetKey;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getAssetId()
    {
        if (is_null($this->assetId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategoryRemoveAssetAction::FIELD_ASSET_ID);
            if (is_null($data)) {
                return null;
            }
            $this->assetId = (string) $data;
        }

        return $this->assetId;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategoryRemoveAssetAction::FIELD_ASSET_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->assetKey = (string) $data;
        }

        return $this->assetKey;
    }

    public function setAssetId(?string $assetId): void
    {
        $this->assetId = $assetId;
    }

    public function setAssetKey(?string $assetKey): void
    {
        $this->assetKey = $assetKey;
    }
}
