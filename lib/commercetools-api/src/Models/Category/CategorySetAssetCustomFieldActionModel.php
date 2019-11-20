<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CategorySetAssetCustomFieldActionModel extends JsonObjectModel implements CategorySetAssetCustomFieldAction
{
    const DISCRIMINATOR_VALUE = 'setAssetCustomField';

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
    protected $name;

    /**
     * @var ?JsonObject
     */
    protected $value;

    /**
     * @var ?string
     */
    protected $assetKey;

    public function __construct(
        string $assetId = null,
        string $name = null,
        JsonObject $value = null,
        string $assetKey = null
    ) {
        $this->assetId = $assetId;
        $this->name = $name;
        $this->value = $value;
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
            $data = $this->raw(CategorySetAssetCustomFieldAction::FIELD_ASSET_ID);
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
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategorySetAssetCustomFieldAction::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|JsonObject
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(CategorySetAssetCustomFieldAction::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = JsonObjectModel::of($data);
        }

        return $this->value;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategorySetAssetCustomFieldAction::FIELD_ASSET_KEY);
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

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }

    public function setAssetKey(?string $assetKey): void
    {
        $this->assetKey = $assetKey;
    }
}
