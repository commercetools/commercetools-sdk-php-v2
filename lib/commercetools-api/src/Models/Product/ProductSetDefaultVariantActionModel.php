<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Variant\VariantResourceIdentifier;
use Commercetools\Api\Models\Variant\VariantResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSetDefaultVariantActionModel extends JsonObjectModel implements ProductSetDefaultVariantAction
{
    public const DISCRIMINATOR_VALUE = 'setDefaultVariant';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?VariantResourceIdentifier
     */
    protected $variant;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?VariantResourceIdentifier $variant = null,
        ?bool $staged = null,
        ?string $action = null
    ) {
        $this->variant = $variant;
        $this->staged = $staged;
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
     * <p>The Variant to set as default. If empty, any existing value will be removed.</p>
     *
     *
     * @return null|VariantResourceIdentifier
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->variant = VariantResourceIdentifierModel::of($data);
        }

        return $this->variant;
    }

    /**
     * <p>If <code>true</code>, only the staged <code>defaultVariant</code> is updated. If <code>false</code>, both the current and staged <code>defaultVariant</code> are updated.</p>
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
     * @param ?VariantResourceIdentifier $variant
     */
    public function setVariant(?VariantResourceIdentifier $variant): void
    {
        $this->variant = $variant;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
