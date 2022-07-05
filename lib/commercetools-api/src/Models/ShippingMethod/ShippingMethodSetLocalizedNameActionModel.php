<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

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
final class ShippingMethodSetLocalizedNameActionModel extends JsonObjectModel implements ShippingMethodSetLocalizedNameAction
{
    public const DISCRIMINATOR_VALUE = 'setLocalizedName';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?LocalizedString
     */
    protected $localizedName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $localizedName = null
    ) {
        $this->localizedName = $localizedName;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

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
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|LocalizedString
     */
    public function getLocalizedName()
    {
        if (is_null($this->localizedName)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LOCALIZED_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->localizedName = LocalizedStringModel::of($data);
        }

        return $this->localizedName;
    }


    /**
     * @param ?LocalizedString $localizedName
     */
    public function setLocalizedName(?LocalizedString $localizedName): void
    {
        $this->localizedName = $localizedName;
    }
}
