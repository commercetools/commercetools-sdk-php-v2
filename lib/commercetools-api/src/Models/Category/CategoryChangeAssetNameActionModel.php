<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategoryChangeAssetNameActionModel extends JsonObjectModel implements CategoryChangeAssetNameAction
{
    public const DISCRIMINATOR_VALUE = 'changeAssetName';
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
     * @var ?LocalizedString
     */
    protected $name;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $assetId = null,
        ?string $assetKey = null,
        ?LocalizedString $name = null,
        ?string $action = null
    ) {
        $this->assetId = $assetId;
        $this->assetKey = $assetKey;
        $this->name = $name;
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
     * <p>New value to set. Must not be empty.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
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
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
}
