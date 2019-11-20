<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CategoryAddAssetActionModel extends JsonObjectModel implements CategoryAddAssetAction
{
    const DISCRIMINATOR_VALUE = 'addAsset';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?int
     */
    protected $position;

    /**
     * @var ?AssetDraft
     */
    protected $asset;

    public function __construct(
        int $position = null,
        AssetDraft $asset = null
    ) {
        $this->position = $position;
        $this->asset = $asset;
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
     * @return null|int
     */
    public function getPosition()
    {
        if (is_null($this->position)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CategoryAddAssetAction::FIELD_POSITION);
            if (is_null($data)) {
                return null;
            }
            $this->position = (int) $data;
        }

        return $this->position;
    }

    /**
     * @return null|AssetDraft
     */
    public function getAsset()
    {
        if (is_null($this->asset)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryAddAssetAction::FIELD_ASSET);
            if (is_null($data)) {
                return null;
            }

            $this->asset = AssetDraftModel::of($data);
        }

        return $this->asset;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function setAsset(?AssetDraft $asset): void
    {
        $this->asset = $asset;
    }
}
