<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetDraft;
use Commercetools\Api\Models\Common\AssetDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategoryAddAssetActionModel extends JsonObjectModel implements CategoryAddAssetAction
{
    public const DISCRIMINATOR_VALUE = 'addAsset';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?AssetDraft
     */
    protected $asset;

    /**
     *
     * @var ?int
     */
    protected $position;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssetDraft $asset = null,
        ?int $position = null,
        ?string $action = null
    ) {
        $this->asset = $asset;
        $this->position = $position;
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
     * <p>Value to append.</p>
     *
     *
     * @return null|AssetDraft
     */
    public function getAsset()
    {
        if (is_null($this->asset)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSET);
            if (is_null($data)) {
                return null;
            }

            $this->asset = AssetDraftModel::of($data);
        }

        return $this->asset;
    }

    /**
     * <p>Position in the array at which the Asset should be put. When specified, the value must be between <code>0</code> and the total number of Assets minus <code>1</code>.</p>
     *
     *
     * @return null|int
     */
    public function getPosition()
    {
        if (is_null($this->position)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_POSITION);
            if (is_null($data)) {
                return null;
            }
            $this->position = (int) $data;
        }

        return $this->position;
    }


    /**
     * @param ?AssetDraft $asset
     */
    public function setAsset(?AssetDraft $asset): void
    {
        $this->asset = $asset;
    }

    /**
     * @param ?int $position
     */
    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }
}
