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
final class VariantChangeAssetOrderActionModel extends JsonObjectModel implements VariantChangeAssetOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeAssetOrder';
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
     * @var ?array
     */
    protected $assetOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $staged = null,
        ?array $assetOrder = null,
        ?string $action = null
    ) {
        $this->staged = $staged;
        $this->assetOrder = $assetOrder;
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
     * <p>If <code>true</code>, only the staged <code>assets</code> is updated. If <code>false</code>, both the current and staged <code>assets</code> are updated.</p>
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
     * <p>All existing Asset <code>id</code>s of the Variant in the desired new order.</p>
     *
     *
     * @return null|array
     */
    public function getAssetOrder()
    {
        if (is_null($this->assetOrder)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ASSET_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->assetOrder = $data;
        }

        return $this->assetOrder;
    }


    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?array $assetOrder
     */
    public function setAssetOrder(?array $assetOrder): void
    {
        $this->assetOrder = $assetOrder;
    }
}
