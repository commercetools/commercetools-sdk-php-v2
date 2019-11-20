<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CategorySetAssetCustomTypeActionModel extends JsonObjectModel implements CategorySetAssetCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setAssetCustomType';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $assetId;

    /**
     * @var ?JsonObject
     */
    protected $fields;

    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $assetKey;

    public function __construct(
        string $assetId = null,
        JsonObject $fields = null,
        TypeResourceIdentifier $type = null,
        string $assetKey = null
    ) {
        $this->assetId = $assetId;
        $this->fields = $fields;
        $this->type = $type;
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
            $data = $this->raw(CategorySetAssetCustomTypeAction::FIELD_ASSET_ID);
            if (is_null($data)) {
                return null;
            }
            $this->assetId = (string) $data;
        }

        return $this->assetId;
    }

    /**
     * @return null|JsonObject
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategorySetAssetCustomTypeAction::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }
            $this->fields = JsonObjectModel::of($data);
        }

        return $this->fields;
    }

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategorySetAssetCustomTypeAction::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeResourceIdentifierModel::of($data);
        }

        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getAssetKey()
    {
        if (is_null($this->assetKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategorySetAssetCustomTypeAction::FIELD_ASSET_KEY);
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

    public function setFields(?JsonObject $fields): void
    {
        $this->fields = $fields;
    }

    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }

    public function setAssetKey(?string $assetKey): void
    {
        $this->assetKey = $assetKey;
    }
}
